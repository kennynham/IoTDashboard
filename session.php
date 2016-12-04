<?php
   include('config.php');
   session_start();
   $user_check = $_SESSION['login_user'];
    $ses_sql = mysqli_query($db,"select EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber from EMPLOYEE where EmployeeID = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['EmployeeID'];
   $first_name = $row['FirstName'];
   $last_name = $row['LastName'];
   $street_address = $row['StreetAddress'];
   $city = $row['City'];
   $state = $row['ShortState'];
   $zip = $row['Zip'];
   $phone_number = $row['PhoneNumber'];
 
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>