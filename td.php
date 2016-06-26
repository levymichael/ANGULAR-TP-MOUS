<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TD - recap</title>
	<link rel="stylesheet" href="">
</head>
<body ng-app="TdApp">
	<div ng-controller="TdController">
		<input type="" name="" ng-model="champ">
		{{champ}}
		<button ng-click="affiche()">affiche</button>
		<button ng-click="cacher()">cacher</button>
		<ul ng-show="voir">
			<li ng-repeat="auteur in auteurs">
				{{auteur.nom}} {{auteur.prenom}} : {{auteur.fonction}}
			</li>
		</ul>
	</div>
	<script type="text/javascript" src="bower_components/angular/angular.js"></script>
	<script type="text/javascript">
		
		var app = angular.module("TdApp", []);
		app.controller("TdController", function($scope) {
			$scope.champ = "De mars";
			
			$scope.affiche = function() {
				$scope.voir = true;
			}

			$scope.cacher = function() {
				$scope.voir = false;
			}

			$scope.auteurs= [
			{"id_auteur":"1","nom":"Almasy","prenom":"Paul","fonction":"Photographe"},
			{"id_auteur":"2","nom":"Goupy","prenom":"Didier","fonction":"Photographe"},
			{"id_auteur":"3","nom":"Le Danvic","prenom":"Daniel","fonction":"Photographe"}]
		});

	</script>
</body>
</html>