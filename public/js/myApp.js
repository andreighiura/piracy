var myApp=angular.module('myApp', ['myApp.controllers','myApp.services'])

myApp.run(['$rootScope', '$window','FbSvc',
  function($rootScope, $window,FbSvc) {

 
  
  $rootScope.user = {};

  $window.fbAsyncInit = function() {
    // Executed when the SDK is loaded

    FB.init({ 

      /* 
       The app id of the web app;
       To register a new app visit Facebook App Dashboard
       ( https://developers.facebook.com/apps/ ) 
      */

      appId: '230339683974394', 

      /* 
       Set if you want to check the authentication status
       at the start up of the app 
      */

      status: true, 

      /* 
       Enable cookies to allow the server to access 
       the session 
      */

      cookie: true, 

      /* Parse XFBML */

      xfbml: true 
    });

  FbSvc.watchLoginChange();

  };

  // Are you familiar to IIFE ( http://bit.ly/iifewdb ) ?

  (function(d){
    // load the Facebook javascript SDK

    var js, 
    id = 'facebook-jssdk', 
    ref = d.getElementsByTagName('script')[0];

    if (d.getElementById(id)) {
      return;
    }

    js = d.createElement('script'); 
    js.id = id; 
    js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";

    ref.parentNode.insertBefore(js, ref);

  }(document));

}]);