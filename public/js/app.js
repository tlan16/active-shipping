/**
 * the app registration
 */

angular.module('mpApp', [
  'mpApp.services',
  'mpApp.controllers',
  'ngRoute'
])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider
	.when("/group", {templateUrl: "/tpl/groups.html", controller: "groupController"})
//	.when("/group/:id", {templateUrl: "partials/driver.html", controller: "groupController"})
	.otherwise({redirectTo: '/group'});
}]);