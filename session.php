<?php
   include('config.php');
   session_start();
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($db,"select EmployeeID, FirstName from EMPLOYEE where EmployeeID = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['EmployeeID'];
   $first_name = $row['FirstName'];
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>