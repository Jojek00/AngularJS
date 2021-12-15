<?php
   include('db.php');
   session_start();
   mysqli_set_charset($con, 'utf8');
   date_default_timezone_set("Europe/Warsaw");
   $user_check = $_SESSION['login'];

   $u_name = mysqli_query($con, "SELECT imie, nazwisko FROM Uzytkownicy WHERE login = '$user_check'");
   $row = mysqli_fetch_assoc($u_name);
   $_SESSION['user'] = $row["imie"] . "  " . $row["nazwisko"];

   $u_rights = mysqli_query($con, "SELECT prawa FROM Uzytkownicy WHERE login = '$user_check'");
   $row1 = mysqli_fetch_assoc($u_rights);
   $_SESSION['rights'] = $row1['prawa'];
   
   if(!isset($_SESSION['login'])){
      header("location: index.php");
      die();
   }
?>