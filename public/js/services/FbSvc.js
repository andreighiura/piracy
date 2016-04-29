angular.module('myApp.services')
.service('FbSvc',function($http,$rootScope){


this.setUser=function(res){
  $rootScope.$apply(function() { 
      console.log(res)
      $rootScope.user =  res; 

    });
}


this.getUserInfo = function() {

  var _self = this;

  FB.api('/me?fields=id,email,name,picture', function(res) {
  _self.setUser(res)
    

  });

}

this.watchLoginChange = function() {

  var _self = this;
console.log('nici macar')
  FB.Event.subscribe('auth.authResponseChange', function(res) {

    if (res.status === 'connected') {
      console.log('signed')
      /* 
       The user is already logged, 
       is possible retrieve his personal info
      */
      _self.getUserInfo();

      /*
       This is also the point where you should create a 
       session for the current user.
       For this purpose you can use the data inside the 
       res.authResponse object.
      */

    } 
    else {
console.log('not signed')
      /*
       The user is not logged to the app, or into Facebook:
       destroy the session on the server.
      */
       
    }

  });

}})