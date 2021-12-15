<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Kwarantanna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        if (!window.jQuery) document.write('<script src="script/jquery-3.6.0.min.js"><\/script>');
    </script>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="../css/style_etapy.css">
    <script src="../script/script.js"></script>
    <script src="../script/html5-qrcode_2.min.js"></script>
    <script src="script/angApp.js"></script>
    <script src="script/angCtrl.js"></script>
</head>
<body>
    <div id="checklist_zaladunek" ng-app="mainApp" ng-controller="mainCtrl">
        <div hidden id="nieprawidlowosci">
            <div id="qr-reader" style="width: 99%"></div>
        </div>
        <input type="button" id="flip1" onclick="scannerOn()" value="Skaner">
        <input type="button" id="flip" value="Skaner" hidden>

        <ul>
            <li>
                <input type="button" id="flip" value="Kwarantanna">
                <input type="button" id="flip" value="Nie ładować">
            </li>
            <li>
                <label for="vin">VIN</label><br>
                <input type="text" id="vins" name="vin" ng-model="vin">
                <div id="model"></div>
            </li>
            <li>
               <label for="uwagi2">Powód</label><br>
                <textarea id="uwagi2" name="uwagi2" rows="4"></textarea>
            </li>
            <br><br><h3>Podgląd maila</h3>
            <p>Dzień dobry,<br><br>{{vin}}</p>
            <li>
                <a href="index.php" id="back">Cofnij</a>
            </li>
        </ul>
    </div>
</body>
</html>