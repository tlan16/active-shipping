var app = angular.module('mpApp.directives', [])
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
		template: '<button class="btn btn-success btn-xs" title="New Member"><i class="fa fa-plus"></i><span class="hidden-xs">New Member</span></button>'
	};
})
.directive('newTransToGroup', function ($compile){
	return {
		restrict: 'AE',
		scope: {
			myDirModel: '='
		},
		template: '<button class="btn btn-info btn-xs" title="New Transaction" href="javascript: void(0);" uib-popover-template="' + "'" + '/tpl/newTransToGroupForm.html' + "'" + '"  popover-placement="bottom" popover-animation="true"><i class="fa fa-plus"></i> <span class="">New Transaction</button>'
	};
})
.directive('editMePanel', function ($compile){
	return {
		restrict: 'AE',
		scope: {
			userModel: '='
		},
		templateUrl: '/tpl/editMe.html'
	};
})
.directive('userAvatar', function ($compile) {
	return {
		restrict: 'AE',
		scope: {
			ngModel: '='
		},
		templateUrl: '/tpl/userAvatar.html'
	};
});