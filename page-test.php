<!DOCTYPE html>
<html lang="en" ng-app="scoutApp">
<head>
    <link rel="stylesheet" href="/wp-content/themes/scout/css/bootstrap.min.css">
    <script src="//use.typekit.net/pff0tqo.js"></script>
    <script>try {
        Typekit.load();
    } catch (e) {
    }</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scout Poetry</title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.11/angular.min.js"></script>

</head>

<body>
<div class="container-fluid" ng-controller='scoutController'>
    <div id="header" class="row">
        <div class="col-lg-12">
        <span class="header-container">
            <span class="left-motto">Poetry In Review</span>
            <a href="/"><img class="logo-image" src="http://scoutpoetry.com/wp-content/uploads/2015/01/scout-logo.png"></a>
            <span class="right-menu"><a href="/about">About</a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                    href="/archive">Archive</a></span>
        </span>
        </div>
    </div>
    <div id="main">
        <div id="content">
            <div id="featured-content" class="row">
                <div class="col-sm-12">
                    <a href ng-click="rotateLeft()"><img class="left-arrow pull-left"
                                                         src="/wp-content/themes/scout/assets/left-arrow.png"></a>

                    <div class="featured-container">

                        <img class="featured-book-cover" src="{{featuredReview.featured_image.guid}}">
                        <span class="featured-title">{{featuredReview.title}}</span>
                        <span class="featured-book-author">{{featuredReview['book-metadata'].book_author}}</span>

                        <div class='featured-book-publisher'>{{featuredReview['book-metadata'].book_publisher}}</div>
                        <div class="featured-book-body" ng-bind-html="trustedHtml">
                        </div>
                        <br>

                        <a href='{{featuredReview.link}}'>
                            <button class="read-more-button">
            <span class="read-more">
              Read More
            </span>
                            </button>
                        </a>
                        </a>
                    </div>
                    <a href ng-click="rotateRight()"><img class="right-arrow pull-right"
                                                          src="/wp-content/themes/scout/assets/right-arrow.png"></a>
                </div>
            </div>

            <div class="row">
                <div id="separator" class="col-xs-12">
                </div>
            </div>

            <div id="main-content-header" class="row">
                <div class="col-sm-3">
                    <h3 class="reviewers-heading">Reviewers</h3>
                </div>
                <div class="col-sm-9">
                    <h3 class="recent">Recent Reviews</h3>
                </div>
            </div>

            <div id="main-content" class="row">
                <div class="col-sm-3 reviewers-list">
                    <?php wp_list_authors('show_fullname=1&optioncount=0&orderby=email&order=ASC&hide_empty=0&exclude=1'); ?>

                </div>

                <div id="" class="col-sm-9">
                    <div id="grid">
                        <div deckgrid source="reviews"
                             cardTemplate="/wp-content/themes/scout/a-card.html" class="deckgrid"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div id="footer">

        <!--<div class="social-icons">-->
        <!--<a href="https://www.facebook.com/scoutpoetry"><img class="pull-left social-icon"-->
        <!--src="http://scoutpoetry.com/wp-content/uploads/2015/01/facebook.png"></a>-->
        <!--<a href="https://twitter.com/scoutpoetry"><img class="pull-left social-icon"-->
        <!--src="http://scoutpoetry.com/wp-content/uploads/2015/01/twitter.png"></a>-->
        <!--</div>-->
        <!--<div class="pull-right footer-text">2014 Scout LLC. All rights reserved.Tagline credit: James Merrill,-->
        <!--"Syrinx"-->
        <!--</div>-->
    </div>

</div>
<script src="/wp-content/themes/scout/salvattore.min.js"></script>
<script src="/wp-content/themes/scout/scoutApp.js"></script>
<script src="/wp-content/themes/scout/angular-deckgrid.js"></script>

<script>
    window.onload = function () {
        console.log("loaded page");
//    var container = document.querySelector('#coverContainer');
//    console.log(container);
//    var msnry = new Masonry( container, {
//      // options
//      columnWidth: 270,
//      itemSelector: '.pin',
//      gutter: 10
//    });
    };

    var scoutController = function ($scope, $http) {
        console.log("inside scout controller");
    };

</script>
</body>
</html>