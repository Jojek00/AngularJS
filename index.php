<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="css.css">
    <script src="script/angApp.js"></script>
    <script src="script/angCtrl.js"></script>
</head>
<body>
    <div ng-app="mainApp" ng-controller="mainCtrl">
        <label for="login">Login</label><br>
        <input type="text" id="login" name="login" ng-model="login">
        <p>{{login}}</p>
    </div>
</body>
</html>