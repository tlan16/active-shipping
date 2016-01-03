/**
 * all angular controllers are here
 */
angular.module('mpApp.controllers', [])
	  .controller('groupsController', function($scope, mpAPIservice) {
		$scope.groupList = {};
		$scope.getData = function (pageNo) {
		mpAPIservice.getGroups({'page': (pageNo || 1)}).success(function (response) {
	    //Dig into the responde to get the relevant data
		if (response.data && response.data.length > 0) {
			if(!$scope.groupList.data) {
				$scope.groupList = {'totalPages': response.last_page, 'total': response.total, 'pageSize': response.per_page, 'data': response.data};
	        		} else {
	        			$scope.groupList.data = $scope.groupList.data.concat(response.data);
	        		}
	        		$scope.groupList.pageNo = response.current_page;
	        	}
	        });
	    };
	    $scope.getData(1);
	  })
	.controller('groupController', function($scope, $routeParams, mpAPIservice) {
		$scope.id = $routeParams.id;
		$scope.group = null;
		
		mpAPIservice.getGroup($scope.id).success(function (response) {
			$scope.group = response;
			$scope.group.members = [{'firstname': 'test', 'lastname': 'he'}, {'firstname': 'test', 'lastname': 'he'}];
		});
	});