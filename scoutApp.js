var app = angular.module("scoutApp", ['akoenig.deckgrid']);

app.filter('slice', function() {
    return function(arr, start, end) {
        return (arr || []).slice(start, end);
    };
});

app.directive('postRepeatDirective', function () {
    return function (scope, element, attrs) {
        if (scope.$last) {
            // iteration is complete, do whatever post-processing
            // is necessary
            //console.log("end of repeat");
            scope.afterRepeat();
        }
    };
});

app.controller("scoutController", function($scope, $http, $window, $sce) {

    //console.log("scout controller");
    $scope.trustedHtml = '';

    $http.get("http://scoutpoetry.com/wp-json/posts")
    .success(function(data, status, headers, config) {

        console.log(data);
        $scope.reviews = data;

        $scope.featuredReview = $scope.reviews[0];
        console.log($scope.reviews[0]['book-metadata']);
        console.log("scout controller 4");
        $scope.createSummary($scope.featuredReview.content, $scope.featuredReview.link);
        $scope.reviews = $scope.reviews.slice(1,$scope.reviews.length);
    })

    .error(function(data, status, headers, config) {

        console.log(data);

    });
    console.log("scout controller 2");

    $scope.rotateRight = function(){
        //console.log("rorate right")
        $scope.reviews.push($scope.featuredReview);
        $scope.featuredReview = $scope.reviews[0];
        $scope.reviews = $scope.reviews.slice(1,$scope.reviews.length);
        $scope.createSummary($scope.featuredReview.content, $scope.featuredReview.link);
    }

    $scope.rotateLeft = function(){
        //console.log("rotating left");
        $scope.reviews.unshift($scope.featuredReview);
        $scope.featuredReview = $scope.reviews[$scope.reviews.length - 1];
        $scope.reviews = $scope.reviews.slice(0, $scope.reviews.length-1);
        $scope.createSummary($scope.featuredReview.content, $scope.featuredReview.link);
    }

    $scope.createSummary = function(content, link){

        var s = content.substring(0, content.indexOf('<!--more-->'));

        s = s + ' <a class="white-link" href="' + link + '">[...]</a>'

        $scope.trustedHtml = $sce.trustAsHtml(s);
    }

    $scope.getExcerpt = function(content){

        var s = content.substring(0, content.indexOf('<!--more-->'));
        return s;
    }

    $scope.afterRepeat = function(){
        console.log("after repeat");

    }
    console.log("scout controller 3");
    //$('.reviewers-list').find('li').title.replace('Posts by','')

});