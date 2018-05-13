const appName="InnerKen";

let app = angular.module("Strings", []);

app.controller('setStrings',function ($scope) {
   $scope.appName=appName;
});