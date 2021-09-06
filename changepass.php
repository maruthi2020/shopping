<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <table><tr><td> Enter Username</td><td><input type="text" name="un"></td></tr>
      <tr><td>  Enter newpassword</td><td><input type="text" name="newpass"></td></tr></table>
    <button name="pass">submit</button></form>
</body>
</html>
<?php
 session_start();
 if(isset($_POST['pass'])){
  $con =new mysqli("localhost","root","","assignment2");
  $sqld="delete from signup where month='1'; ";
  $con->query($sqld); 
 if (!$con)
   {
   echo('Could not connect: ' . mysql_error());
   }
   $un= $_POST['un'];
   $sqls="select * from signup where username=('$un');";
   $ress=$con->query($sqls);
   $_row=$ress->fetch_assoc();
   $name=$_row['name'];
   echo $name;
   $username=$_row['username'];
   $date=$_row['date'];
   $month=$_row['month'];
   $year=$_row['year'];
   $gender=$_row['gender'];
   $phno=$_row['phno'];
   $address=$_row['address'];
   $sqld="delete from signup where username=('$un'); ";
    $con->query($sqld); 
    $pass=$_POST['newpass'];
    $sql ="insert into signup values('$name','$un','$pass','$date','$month','$year','$gender','$phno','$address');";
    $res =$con->query($sql);
header("Location: index.php");
}
?>
