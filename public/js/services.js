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

    return mpAPI;
  });