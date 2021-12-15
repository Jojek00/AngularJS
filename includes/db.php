<?php
$sname="localhost";
$uname="root";
$pas="";
$db="daily";
$con = mysqli_connect($sname, $uname, $pas, $db);
if (mysqli_connect_errno())
   {echo "Wystąpił błąd połączenia z bazą";}
?>