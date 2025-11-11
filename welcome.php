<?php
echo ' <div   style=" text-align:left; width:350px ; height:150px ; border:4px solid black ; padding:15px ; margin:auto">';
session_start();
if(isset($_SESSION['s_username'])){
   echo "<h3 style=' color:#5B722D'>";
   echo "Welcome"." ".$_SESSION['s_username']."<br><br>";
   echo "</h3>";
   echo "<a href='dashboard.php'> dashboard page </a><br>";
   echo "<a href='logout.php'> logout page </a><br>";
   echo "<a href='login.php'> login page </a><br>";
}
else{
echo "Access Denied";
header('refresh:3; url=login.php');
}
echo "</div>";
?>