/**
 * the app registration
 */

var app = angular.module('mpApp', [
  'mpApp.directives',
  'mpApp.services',
  'mpApp.controllers',
  'ui.bootstrap',
  'ngRoute'
])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider
	.when("/group", {templateUrl: "/tpl/groups.html", controller: "groupsController"})
	.when("/group/:id", {templateUrl: "/tpl/group.html", controller: "groupController"})
	.when("/me", {templateUrl: "/tpl/me.html", controller: "userController"})
	.otherwise({redirectTo: '/group'});
}])
;