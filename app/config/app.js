var app = angular.module("MonApplication", ["ngRoute"]);

app.config(function($routeProvider) {
	$routeProvider.when('/', {
		templateUrl : 'app/views/accueil.html',
		controller : 'accueilController'
		})
	.when('/auteurs', {
		templateUrl : 'app/views/auteurs.html',
		controller : 'auteursController'
		})
	.when('/auteur/:id_auteur', {
		templateUrl : 'app/views/auteur.html',
		controller : 'auteurController'
		})
	.when('/edit/:id_auteur', {
		templateUrl : 'app/views/edit.html',
		controller : 'editAuteurController'
		})
	.when('/auteur/:delete_auteur', {
		templateUrl : 'app/views/delete.html',
		controller : 'deleteAuteurController'
		})
	.when('/404',{
		templateUrl : 'app/views/404.html'
		})
	.otherwise({
		redirectTo	: '/404'})
})