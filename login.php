<?php
session_start();
echo "hello";
  $usernamel=$_POST['username1'];
  $passl=$_POST['passw'];
  $con =new mysqli("localhost","root","","assignment2");
  $sqls="select pass from signup where username='$usernamel';";
  $ress=$con->query($sqls);
  $row=$ress->fetch_assoc();
  $pass=$row['pass'];
  if($pass);
  else
  echo "enter correct username";
  echo "<br>";
  if($pass==$passl)
 {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("succefully login")';  
    echo '</script>'; 
    
    $_SESSION['username']="$usernamel";
    echo $_SESSION['username'];
    header("Location: index.php");
 }
  else
  {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Error in login please check your details")';  
    echo '</script>'; 
    echo "please check ur details";
  }
?>
