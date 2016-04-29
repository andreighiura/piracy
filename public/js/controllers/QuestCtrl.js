angular.module('myApp.controllers')
	.controller('QuestCtrl', function($timeout, $scope, QuestSvc, imgurSvc) {

		$scope.imageUpload = function(element, index) {
			var reader = new FileReader();
			$scope.ssList = [];

			reader.readAsDataURL(element.files[0]);
			console.log('1')
			console.log(element)
			console.log(index)
			reader.onload = function(e) {
				//console.log(e);
				$scope.image = imgurSvc.upload(e.target.result)
				$scope.ssList.push({
					'url': $scope.image,
					'id': index
				})
				console.log('image=' + $scope.image)

			}

		}

		$scope.image = 'asas'

		$scope.addSs = function(index) {
			//console.log($scope.ssList[index].url.$$v)
			//var urlData=($scope.ssList,{id: index})
			//console.log($scope.ssList,{id: index})
			var i = $scope.ssList.map(function (item) {
            return item.id;
        }).indexOf(index);
			var data = {
				'id': index,
				'url': $scope.ssList[i].url.$$v
			};
			console.log(data)
			QuestSvc.addQuest(data)
			//document.location.reload();


		}
		
		$scope.QuestList = QuestSvc.Quests(955469181168026);


	})