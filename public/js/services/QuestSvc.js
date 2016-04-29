angular.module('myApp.services')
    .service('QuestSvc', function($http) {   

            this.Quests = function(id) {
                return $http.get('questapp/'+id)
                .then(function(response){
                    //console.log(response.data)
                    return response.data
                })
            },
            this.addQuest= function(data){
        console.log('image sent to server')
		      $http({
            method: 'POST',
            url: 'questapppost',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            data: $.param(data)
        }).then(function(response){
        	console.log(response)
        },function(){
        	console.log('error')
        })
		}
        }


)