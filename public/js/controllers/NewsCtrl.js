angular.module('myApp.controllers')
	.controller('NewsCtrl', function($scope, NewsSvc) {

		$scope.News = NewsSvc.News()
		//console.log($scope.News)
	})