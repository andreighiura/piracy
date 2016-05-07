angular.module('myApp.controllers', ['myApp.services'])
    .controller('UserCtrl', function($scope, $http, $rootScope, FbSvc, UserSvc, QuestSvc) {
        function checkUser(id) {
            console.log($rootScope.user.id)
            console.log(id)
            storeImg();
            
           
            $scope.userCurent = $http.get('userapp/' + id).then(function(response) {
                
                QuestSvc.Quests(id);
                //console.log('XXX')
                if (response.data == '') {
                    console.log("newUser")
                    $('#firstLogin').modal('show');
                }
                $rootScope.logged=true;
                return response.data
            })
        }

        $scope.fbLogin = function() {
            FB.login(function(response) {

                if (response.authResponse) {
                    FbSvc.watchLoginChange();
                  
                    checkUser(response.authResponse.userID)
                } else {
                    console.log('User cancelled login or did not fully authorize.')
                }

            }, {
                scope: 'email'
            })


        }


        $scope.fbLogout = function() {
            FB.logout(function() {
                document.location.reload();
            });
        }

        $scope.user = {};


        $scope.Users = UserSvc.Users();

        $scope.update = function(user) {

            var data = {
                'idFL': $rootScope.user.id,
                'nameFL': $scope.user.name,
                'emailFL': $scope.user.email,
                'lolFL': $scope.user.lol,
                'csgoFL': $scope.user.steam,
                'hsFL': $scope.user.hs,
                'username': $scope.user.username,
                'password': $scope.user.password
            };
            //console.log(data)

            UserSvc.addUser(data)


            //document.location.reload();
        }

        function storeImg() {
            $scope.img = $rootScope.user.picture.data.url;
            //console.log($rootScope.user);
            document.getElementById("profilePic1").style.display = "block";
        }
    })