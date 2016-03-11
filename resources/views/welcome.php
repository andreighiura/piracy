<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="img/ico" href="favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="andreighiura@outlook.com">
        <title>PIRACY-Ahoy League</title>
        
        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/freelancer.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        
        <!--ajax-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>

        <script src="//connect.facebook.net/en_US/all.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>
       
        <script src="/laravel/piracy/public/js/controllers/UserCtrl.js"></script>
         <script src="/laravel/piracy/public/js/controllers/NewsCtrl.js"></script>
         <script src="/laravel/piracy/public/js/controllers/ContactCtrl.js"></script>
        <script src="/laravel/piracy/public/js/services/UserSvc.js"></script>
        <script src="/laravel/piracy/public/js/services/NewsSvc.js"></script>
<script src="/laravel/piracy/public/js/services/ContactSvc.js"></script>
        <script src="/laravel/piracy/public/js/myApp.js"></script>
        <script src="/laravel/piracy/public/js/services/FbSvc.js"></script>

    </head>
    <body id="page-top" class="index" ng-app="myApp" ng-controller="UserCtrl">
    <div id="fb-root"></div>
        
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" ng-include="'partials/navbar.html'" scope="" onload="">    </nav>
        <header class="success" ng-include="'partials/carousel.html'" scope="" onload="" ng-controller="NewsCtrl">       </header>
        <section class="success"id="login" ng-include="'partials/login.html'"></section>
        <section id="portfolio" ng-include="'partials/portfolio.html'"></section>
        <section class="success" id="about" ng-include="'partials/about.html'" ></section>
        <section id="contact" ng-include="'partials/contact.html'" ng-controller="ContactCtrl"></section>
        <!-- Footer -->
        <footer class="text-center" ng-include="'partials/footer.html'" scope="" onload=""></footer>
        <!-- Portfolio Modals -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" ng-include="'partials/modalHS.html'" scope="" onload=""></div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true" ng-include="'partials/modalLOL.html'" scope="" onload=""></div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true" ng-include="'partials/modalCSGO.html'" scope="" onload=""></div>
        <div class="portfolio-modal modal fade" data-keyboard="false" data-backdrop="static" id="firstLogin" tabindex="-1" role="dialog" aria-hidden="true" ng-include="'partials/formFL.html'" scope="" onload=""></div>
        <div class="portfolio-modal modal fade" id="leaderboard" tabindex="-1" role="dialog" aria-hidden="true" ng-include="'partials/leaderboard.html'" scope="" onload=""></div>
        
        <div class="scroll-top page-scroll visible-xs visible-sm">
            <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
            </a>
        </div>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/cbpAnimatedHeader.js"></script>
        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/freelancer.js"></script>
 
    </body>

</html>