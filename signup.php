<?php
session_start();
 $name=$_POST['name'];
 $username=$_POST['username'];
 $pass=$_POST['password'];
 $phno=$_POST['phone'];
 $address=$_POST['address'];
 $date=$_POST['date'];
 $month=$_POST['month'];
 $year=$_POST['year'];
 $gender=$_POST['gender'];
 $con =new mysqli("localhost","root","","assignment2");
 if($con->errno)
 echo "error in server";
 $_SESSION['username']="$usernamel";
 $sql ="insert into signup values('$name','$username','$pass','$date','$month','$year','$gender','$phno','$address');";
$res =$con->query($sql);
header("Location: home.php");
?>