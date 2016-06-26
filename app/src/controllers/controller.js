
app.controller("accueilController", 
	function($scope) {
	console.log("accueilController");
});

app.controller("auteursController", 
	function($scope, $http) {
	console.log("auteursController");
	$http.get('app/resources/serveur.php', 
	{
		params: {method: 'getAuteurs'}
	}).then(function(result) {
		console.log(result.data);
		$scope.auteurs = result.data;
	})
});

app.controller("auteurController", 
	function($scope, $routeParams, $http) {
	console.log("auteurController", $routeParams.id_auteur);
	$http.get('app/resources/serveur.php', 
	{
		params: {method: 'getAuteurById', id_auteur:$routeParams.id_auteur}
	}).then(function(result) {
		console.log(result.data);
		$scope.auteur = result.data[0];
	})
});
/**
app.controller("editAuteurController", 
	function($scope, $routeParams, $http) {
	console.log("editAuteurController", $routeParams.id_auteur);
	$http.get('app/resources/serveur.php', 
	{
		params: {method: 'editAuteur', nom:$routeParams.nom,prenom:$routeParams.prenom,fonction:$routeParams.fonction}
	}).then(function(result) {
		console.log(result.data);
		$scope.auteur = result.data[0];
		$scope.newNom = result.data[0].nom;
		$scope.newPrenom = result.data[0].prenom;
		$scope.newFonction = result.data[0].fonction;
})
});**/