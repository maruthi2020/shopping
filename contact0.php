<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 body{
    background-color:#C5D9D9;
  }
.contact
{
    margin-left: 25%;
    margin-right: 25%;
    background-color: gray;
}
.icons{
    transition: 0.3s;
    margin-top: 60%;
    margin-left: 9%;
}
.icons:hover{
    transform: scale(1.25);
}
.text{
    vertical-align: middle;
    font-size: x-large;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: 100;
    padding-top: 25%;
}
h2
{
    text-align: center;
}
table{
    margin-left: auto;
  margin-right: auto;
}
a{
    text-decoration: none;
    color: black;
}
span{
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #291ebe;
}
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
    </style>
</head>
<body> 
<?php
 session_start();
?>  
    <span><a class="close" href="index.php">&times;</a></span>
    <div class="contact">
        <h2 >Contact us</h2>
        <table>
            <tr><td> <a href="https://www.instagram.com/maruthi_phanendra/"><img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png" alt="" height="85px" class="icons"></a></td><td class="text"><a href="https://www.instagram.com/maruthi_phanendra/">Instagram</a></td></tr>
            <tr><td> <a href="https://twitter.com/maruthiphanend1?s=08"><img src="http://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c53e.png" alt="" height="85px" class="icons"></a></td><td class="text"><a href="https://twitter.com/maruthiphanend1?s=08">twitter</a></td></tr>
            <tr><td> <a href="https://www.linkedin.com/in/maruthi-phanendra-3ba18b203/"><img src="https://pngimg.com/uploads/linkedIn/linkedIn_PNG38.png" alt="" height="85px" class="icons"></a></td><td class="text"><a href="https://www.linkedin.com/in/maruthi-phanendra-3ba18b203/">linkedin</a></td></tr>
            <tr><td> <a href="https://www.facebook.com/profile.php?id=100009535666269"><img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png" alt="" height="85px" class="icons"></a></td><td class="text"> <a href="https://www.facebook.com/profile.php?id=100009535666269">facebook</a></td></tr>
        </table>
</div>
</body>
</html>
