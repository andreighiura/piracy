angular.module('myApp.controllers')
	.controller('QuestCtrl', function($timeout, $rootScope,$scope, QuestSvc, imgurSvc) {
		var imageList = [];

 
		$scope.imageUpload = function(element, index) {
			var reader = new FileReader();
			$scope.ssList = [];

			reader.readAsDataURL(element.files[0]);
			//console.log('1')
			//console.log(element)
			//console.log(index)
			reader.onload = function(e) {

				imageList.push(index);
				console.log("Lista imagini",imageList)
				//console.log($scope.ssList)
				$scope.image = imgurSvc.upload(e.target.result)
				//console.log($scope.image)
				$scope.ssList.push({
					'url': $scope.image,
					'id': index
				})
				//console.log($scope.ssList)
				//console.log('image=' + $scope.image)

			}

		}


		$scope.uploaded = function(index) {

			if (imageList.indexOf(index) !== -1) {
				return true;
			} else {
				return false;
			}
		}
		$scope.image;

		$scope.addSs = function(index) {

			var i = $scope.ssList.map(function(item) {
				return item.id;
			}).indexOf(index);

			var data = {
				'id': index,
				'url': $scope.ssList[i].url.$$v
			};
			console.log(data)
			QuestSvc.addSs(data)
			//document.location.reload();


		}

		$scope.QuestListAll = QuestSvc.getAll();
		$scope.QuestList = QuestSvc.getQuests; //QuestSvc.Quests(955469181168026);
		console.log(QuestSvc.getQuests)

	})