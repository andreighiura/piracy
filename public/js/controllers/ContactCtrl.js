
angular.module('myApp.controllers')
.controller('ContactCtrl', function($scope, $http,ContactSvc) {




$scope.contact={};
 $scope.update = function(user) {

        var data = {
            'nameC': $scope.contact.name,
            'emailC': $scope.contact.email,
            'phoneC': $scope.contact.phone,
            'msgC': $scope.contact.msg
        };
        console.log('1111111')
        ContactSvc.addContact(data)
  		document.location.reload();


    }
})