/**
 * all the data services are here
 */
angular.module('mpApp.services', []).
  factory('mpAPIservice', function($http) {
    var mpAPI = {};
    mpAPI.getGroups = function(parameters) {
      return $http({
        method: 'GET', 
        url: '/api/group',
        params: parameters
      });
    };
    mpAPI.getGroup = function(id, parameters) {
	  return $http({
        method: 'GET', 
        url: '/api/group/' + id,
        params: parameters
      });
	};
	mpAPI.getGroupMembers = function(id, parameters) {
		return $http({
			method: 'GET', 
			url: '/api/group/' + id + '/user/all',
			params: parameters
		});
	};

    return mpAPI;
  });