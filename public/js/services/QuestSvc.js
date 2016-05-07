angular.module('myApp.services')
    .service('QuestSvc', function($http, $q) {
            var QuestList = [];

            var Quests = function(id) {
                //var q = $q.defer();
                $http.get('questapp/' + id)
                    .then(function(response) {
                        console.log(response.data)
                        if (response.data.length > 0) {
                            setQuests(response.data)
                        } else {
                            generateQuests(id);
                            //location.reload();
                        } //q.resolve('response.data');

                    }, function() {
                        //q.reject();
                        console.log('error')
                    })



            };

            function rand(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            var champList = ['Thresh', 'Draven', 'Zyra', 'Nautilus', 'Darius', 'Jayce',
                'Azir', 'Karma', 'Diana', 'Lux', 'Cho-Gath', 'Quinn', 'Lulu', 'Wukong',
                'Galio', 'Gangplank', 'Pantheon', 'Karthus', 'Ziggs', 'Ryze', 'Corki',
                'Vladimir', 'Xerath', 'Heimerdinger', 'Lissandra', 'Viktor', 'Kennen',
                'Leblanc', 'Kassadin', 'Swain', 'Syndra', 'Orianna', 'Cassiopeia'
            ];
            var heroList = ['Paladin', 'Warlock', 'Hunter', 'Mage', 'Shaman', 'Priest', 'Druid', 'Rogue', 'Warrior'];
            var generateQuests = function(id) {
                for (var i = 0; i < 5; i++) {

                    var datalol = {
                        'game': 'LOL',
                        'desc': 'Win ' + rand(3, 7) + ' games with ' + champList[rand(0, 33)],
                        'pct': rand(3, 7) * 10,
                        'user_id': id
                    };

                    var datacsgo = {
                        'game': 'CSGO',
                        'desc': 'Placeholder_'+rand(0,100),
                        'pct': rand(3, 7) * 10,
                        'user_id': id
                    };

                    var datahs = {
                        'game': 'HS',
                        'desc': 'Win ' + rand(3, 6) + ' matches with ' + heroList[rand(0, 8)],
                        'pct': rand(3, 7) * 10,
                        'user_id': id
                    };

                    //console.log(data)

                    addQuest(datahs)
                    addQuest(datacsgo)
                    addQuest(datalol)
                }
                console.log('zxczxcid');
                Quests(id)
            }
            var setQuests = function(data) {


                for (var i = 0; i < data.length; i++) {
                    QuestList.push(data[i]);
                }

            }

            var addQuest = function(data) {
                console.log('image sent to server')
                $http({
                    method: 'POST',
                    url: 'questapppost1',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    data: $.param(data)
                }).then(function(response) {
                    console.log(response)
                }, function() {
                    console.log('error')
                })
            };
            var getAll=function(){
                  return $http.get('questapp')
                    .then(function(response) {
                        return response.data
                    }, function() {
                        //q.reject();
                        console.log('error')
                    })



            };
            var addSs = function(data) {
                console.log('image sent to server')
                $http({
                    method: 'POST',
                    url: 'questapppost',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    data: $.param(data)
                }).then(function(response) {
                    console.log(response)
                }, function() {
                    console.log('error')
                })
            };
            return {
                getAll: getAll,
                Quests: Quests,
                addSs: addSs,
                getQuests: QuestList
            }

        }


)