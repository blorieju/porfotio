// create the module and name it scotchApp
var bazApp = angular.module('bazPortfolio', ['ngRoute']);
//var bazApp = angular.module('bazPortfolio', ['ngRoute', 'ngAnimate']);

bazApp.config(function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'pages/home.html',
            controller: 'mainController'
        })

        .when('/projects',{
            templateUrl: 'pages/projects.html',
            controller: 'aboutController'
        })

        .when('/skills',{
            templateUrl: 'pages/skills.html',
            controller: 'aboutController'
        })

        .when('/contact',{
            templateUrl: 'pages/contact.html',
            controller: 'contactController'
        });
});

// create the controller and inject Angular's $scope
bazApp.controller('mainController', function($scope) {

    $scope.message = 'Everyone come and see how good I look!';
});

bazApp.controller('aboutController', function($scope){
    $scope.message = 'This is about page!';
});

bazApp.controller('contactController', function($scope){
    $scope.message = 'This is contact page!';
});