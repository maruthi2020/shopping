<html>
<head>
<style>
table
{
border-style:solid;
border-width:2px;
border-color:pink;
background-color: white;
}
table{
    margin-top: 10%;
    margin-left: auto;
  margin-right: auto;
}
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}
a{
    text-decoration:none;
    font-size:larger;
}
.text{
    font-size:30px;
}
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
div{
  background-color:red;
  color:blue;
  width:20%;
  text-align:center;
  font-size:25px;
  margin-left:40%;
}
</style>
</head>
<body bgcolor=#474e5d>
<span><a class="close" href="index.php">&times;</a></span>
<div><a class="pass" href="changepass.php">Change password</a></div>
<?php
session_start();
$con =new mysqli("localhost","root","","assignment2");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $user= $_SESSION['username'];
  $sqls="select * from signup where username=('$user');";
  $ress=$con->query($sqls);
echo "<table border='1' cellpadding='20px'>";
if($row=$ress->fetch_assoc())
  { 
  echo "<tr>";
  echo "<td colspan=2>"."<h1>User profile</h1></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>name</th>"."<td>" . $row['name'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>username</th>".".<td>" . $row['username'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>phone number</th>"."<td>" . $row['phno'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>gender</th>"."<td>" . $row['gender'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Address</th>"."<td>" . $row['address'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
$con =new mysqli("localhost","root","","assignment2");
$sqlso="select * from `order` where username=('$user');";
  $result = $con->query($sqlso) or die(error);
 echo "<table border='1' cellpadding='20px'>";
echo "<tr>";
  echo "<td colspan=2>"."<h1>orders</h1></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>"."Product"."</th>"."<th>"."Price"."</th>";
  echo "</tr>";
while($row2=$result->fetch_assoc())
{
  echo "<tr>";
  echo "<td>".$row2['product'] ."</th>"."<td>" . $row2['price'] . "</td>";
  echo "</tr>";
}
?>
</body>
</html>
