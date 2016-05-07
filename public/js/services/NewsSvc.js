angular.module('myApp.services')
    .service('NewsSvc', function($http) {
            this.News = function() {
                return $http.get('newsapp')
                .then(function(response){
  				 	//console.log(response.data)
                    return response.data
                })
            }
        }


)