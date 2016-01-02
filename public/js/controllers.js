/**
 * all angular controllers are here
 */
angular.module('mpApp.controllers', []).
  controller('groupController', function($scope, mpAPIservice) {
    $scope.groupList = {};

    mpAPIservice.getGroups().success(function (response) {
        //Dig into the responde to get the relevant data
    	if (response.data && response.data.length > 0) {
    		if(!$scope.groupList.data) {
    			$scope.groupList = {'totalPages': response.last_page, 'total': response.total, 'pageSize': response.per_page, 'data': response.data};
    		} else {
    			$scope.groupList.data = $scope.groupList.data.concat(response.data);
    		}
    	}
    });
  });