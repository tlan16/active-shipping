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
.directive('editableGroupName', function ($compile){
	return {
		restrict: 'AE',
		scope: {
			myDirModel: '='
		},
		template: '<a href="#"><strong class="editable-group-name">{{myDirModel.details.name}}</strong></span>'
	};
})
.directive('newUserToGroup', function ($compile){
	return {
		restrict: 'AE',
		scope: {
			myDirModel: '='
		},
		template: '<button class="btn btn-success btn-xs" title="New Member"><i class="fa fa-plus"></i></button>'
	};
})
.directive('newTransToGroup', function ($compile){
	return {
		restrict: 'AE',
		scope: {
			myDirModel: '='
		},
		template: '<button class="btn btn-info btn-xs" title="New Transaction" href="javascript: void(0);" uib-popover-template="' + "'" + '/tpl/newTransToGroupForm.html' + "'" + '"  popover-placement="bottom" popover-animation="true"><i class="fa fa-plus"></i> <span class="hidden-xs">New Transaction to {{myDirModel.details.name}}</button>'
	};
})
;