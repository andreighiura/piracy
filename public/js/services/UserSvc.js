angular.module('myApp.services',[])
.service('UserSvc',function($http)
	{ this.Users=function(){
		return $http.get('userapp').then(function(response) {
        return response.data
    })
	},
	this.addUser= function(data){
		      $http({
            method: 'POST',
            url: 'userapppost',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            data: $.param(data)
        })
		}
} 

	
	)



