angular.module('myApp.services')
.service('NewsSvc',function($http)
	{ this.News=function(){
		return $http.get('newsapp').then(function(response) {
           // console.log(response.data[0])
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



