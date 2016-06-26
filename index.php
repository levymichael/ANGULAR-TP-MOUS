<!DOCTYPE html>
<html ng-app="MonApplication">

<head>
    <meta charset="utf-8">
    <title>AngularJS</title>
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
      
</head>

<body>
   
<nav class="navbar navbar-red">
   <div ><h1> MY SHOPPING LIST</h1></div> 
</nav>
    <div> 
        <a type="button" href="#/" class="btn btn-success btn-lg btn-block btn-lg active"> RETOUR ACCUEIL </a>
    </div>

    <ng-view></ng-view>
    
    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/angular-route/angular-route.min.js"></script>
    <script type="text/javascript" src="app/config/app.js"></script>
    <script type="text/javascript" src="app/src/controllers/controller.js"></script>
</body>

</html>