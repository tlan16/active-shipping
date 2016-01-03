/**
 * the app registration
 */

angular.module('mpApp', [
  'mpApp.services',
  'mpApp.controllers',
  'ui.bootstrap',
  'ngRoute'
])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider
	.when("/group", {templateUrl: "/tpl/groups.html", controller: "groupsController"})
	.when("/group/:id", {templateUrl: "/tpl/group.html", controller: "groupController"})
	.otherwise({redirectTo: '/group'});
}])
;