angular.module('myApp.services')
.service('ContactSvc',function($http)
	{ 
	this.addContact= function(data){
        console.log('asdasdasd')
		      $http({
            method: 'POST',
            url: 'contactapppost',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            data: $.param(data)
        })
		}
}

	
	)



