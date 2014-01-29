angular.module('myApp.admin.discounts', [
	'myApp.services',
	'ui.bootstrap'
]).

config(['$routeProvider', 'securityAuthorizationProvider', function ($routeProvider, securityAuthorizationProvider) {
	$routeProvider.when('/admin/discounts', {
		title: 'Manage Discounts',
		templateUrl: 'js/admin/discounts/list.tpl.html',
		controller: 'DiscountListCtrl',
		resolve: {
			user: securityAuthorizationProvider.requireAdminUser,
			discounts: ['DiscountService', function (DiscountService) {
				return DiscountService.initList();
			}]
		}
	}).when('/admin/discounts/:discountID', {
		title: 'Edit discount',
		templateUrl: 'js/admin/discounts/edit.tpl.html',
		controller: 'DiscountEditCtrl',
		resolve: {
			user: securityAuthorizationProvider.requireAdminUser,
			discount: ['DiscountService', '$route', function (DiscountService, $route) {
				return DiscountService.getDiscount($route.current.params.discountID);
			}]
		}
	});
}]).

controller('DiscountListCtrl', ['$scope', 'discounts', '$modal', '$location', 'DiscountService', function ($scope, discounts, $modal, $location, DiscountService){
	$scope.discounts = discounts;
	$scope.clickCatch = function ($event) { $event.stopPropagation(); };
	$scope.edit = function (discount) { $location.path('/admin/discounts/' + discount.discountID); };
	$scope.change = function (discount) {
		DiscountService.setActive(discount).then(function(res) {
			discount = res;
		});
	};
	$scope.rem = function ($event, discount) {
		$event.stopPropagation();
		var modalInstance = $modal.open({
			templateUrl: 'discountConfirmDelete.tpl.html',
			controller: ['$scope', '$modalInstance', 'discount', function($scope, $modalInstance, discount) {
				$scope.discount = discount;
				$scope.yes = function() { $modalInstance.close(); };
				$scope.no = function() { $modalInstance.dismiss(); };
			}],
			resolve: {
				discount: function() { return discount; }
			}
		});
		modalInstance.result.then(function () {
			DiscountService.rem(discount).then(function () {
				$scope.discounts.splice($scope.discounts.indexOf(discount), 1);
			});
		});
	};
}]).

controller('DiscountEditCtrl', ['$scope', 'discount', 'DiscountService', function ($scope, discount, DiscountService) {
	$scope.discount = discount;
}]).

factory('DiscountService', ['interface', function (interface) {
	var casheDiscounts = {};
	var service = {
		initList: function () {
			return interface.admin('getDiscounts').then(function (discounts) {
				angular.forEach(discounts, function(discount) {
					casheDiscounts[discount.discountID] = discount;
				});
				return discounts;
			});
		},
		getDiscount: function (discountID) {
			return casheDiscounts[discountID] || interface.admin('getDiscount', {discountID: discountID}).then(function (res) {
				casheDiscounts[res.discountID] = res;
				return res;
			});
		},
		setActive: function (discount) {
			return interface.admin('setDiscountActive', discount).then(function (res) {
				casheDiscounts[res.discountID] = res;
				return res;
			});
		},
		rem: function (discount) {
			return interface.admin('remDiscount', discount);
		},

	};
	return service;
}]);