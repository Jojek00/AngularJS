<?php 
if ($_SESSION['rights'] < 9) {
    header("location: ../main.php");
}
?>