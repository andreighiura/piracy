
angular.module('myApp.controllers')
.controller('NewsCtrl', function($scope, $http,$rootScope,FbSvc,NewsSvc) {

$scope.News = NewsSvc.News()
console.log($scope.News);
//$scope.news1.title=$scope.News[0].title;
})