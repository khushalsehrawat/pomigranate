var mymodule = angular.module("ht", []);
mymodule.controller("mycontroller", function($scope, $interval){
	$interval(function(){
		$scope.time = new Date().toLocaleTimeString();
	}, 1000);
});