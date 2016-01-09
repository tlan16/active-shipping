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
			ngModel: '='
		},
		template: '<button class="btn btn-success btn-xs" title="New Member" href="#" uib-popover-template="' + "'" + '/tpl/newUser.html' + "'" + '"  popover-placement="bottom" popover-animation="true"><i class="fa fa-plus"></i><span class="hidden-xs"> New Member</span></button>'
	};
})
.directive('newTransToGroup', function ($compile){
	return {
		restrict: 'AE',
		scope: {
			myDirModel: '='
		},
		template: '<button class="btn btn-info btn-xs" title="New Transaction" href="#" uib-popover-template="' + "'" + '/tpl/newTransToGroupForm.html' + "'" + '"  popover-placement="bottom" popover-animation="true"><i class="fa fa-plus"></i> <span class="">New Transaction</button>'
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
})
.directive('resetPassword', function ($compile) {
	return {
		restrict: 'AE',
		scope: {
			needToComfirm: '=',
			ngUser: '='
		},
		templateUrl: '/tpl/resetUserPassword.html'
	};
})
.directive('passwordMatch', function ($compile) {
	return {
		require: 'ngModel',
		link: function (scope, confirmElement, attrs, controller) {
			var firstPassword = '#' + attrs.passwordMatch;
			confirmElement.add(firstPassword).on('keyup', function () {
				scope.$apply(function () {
					controller.$setValidity('password-matched', confirmElement.val() === $(firstPassword).val());
				});
			});
		}
	};
});