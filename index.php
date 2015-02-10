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
    <title>Polly</title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>

<body>
<div class="container-fluid" ng-controller='scoutController'>
    <div id="header" class="row">
        <div class="col-lg-12">
        <span class="header-container">
            <span class="left-motto">Politics is broken.</span>
            <span class="right-menu">Let’s do something about it.</span>
        </span>
        </div>
    </div>
    <div id="main">
        <div id="content">

            <div id="main-content-header" class="row">

                <div class="col-sm-2">
                </div>
                <div class="col-sm-4">
					<img class="size-full" src="http://polly.fm/wp-content/uploads/iphone1.png" alt="iphone" width="435" height="553">
				</div>
				<div class="col-sm-4">
                    <h3 class="recent">Imagine you knew exactly how your representatives were voting, bill by bill. Imagine you could talk to them directly and support a cause you care about.
 </h3>
                    <h3 class="recent">Imagine if politics were reinvented for the 21st century you.</h3>
                    <h3 class="recent">Polly is a mobile app launching soon to put the power in your hands.</h3>
                </div>
				<div class="col-sm-2">
                </div>
            </div>
        </div>
    </div>


    <div id="delimiter">
    </div>
    <div id="footer">

    <!--
		<div class="social-icons">
            <a href="https://www.facebook.com/scoutpoetry"><img class="pull-left social-icon"src="http://scoutpoetry.com/wp-content/uploads/2015/01/facebook.png"></a>
            <a href="https://twitter.com/scoutpoetry"><img class="pull-left social-icon" src="http://scoutpoetry.com/wp-content/uploads/2015/01/twitter.png"></a>
        </div>
	-->
        <div class="pull-right footer-text">&#0169; 2015 Polly.com. All rights reserved.</div>
    </div>


</div>
<script src="/wp-content/themes/scout/salvattore.min.js"></script>
<script src="/wp-content/themes/scout/scoutApp.js"></script>
<script src="/wp-content/themes/scout/angular-deckgrid.js"></script>

<script>
    window.onload = function () {
        console.log("loaded page");
    };

    var scoutController = function ($scope, $http) {
        console.log("inside scout controller");
    };

</script>
</body>
</html>