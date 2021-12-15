<?php
include("../includes/session.php");
$sql = "SELECT model FROM vin WHERE auto_vin = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($m);
$stmt->fetch();
$stmt->close();
if ($m != null){
$_SESSION['model'] = $m;
echo "Model: ". $m;
} else {
    echo "Brak VIN w bazie";
}
?>