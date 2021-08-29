<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:#C5D9D9;
}
.top{
  background-color: rgb(114, 162, 233);
}
.head1
{
  font-size: 30px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  text-align: center;
  background-color: rgb(43, 144, 226);
}
.topnav {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  top: 0;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}
.topleft
{
    width: 10%;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav-right {
  float: right;
}
section{
  background-color: aqua;
}
*{
  margin:0%;
  padding: 0%;
}
input[type=text], input[type=password] {
  width: 95%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
button:hover {
  opacity:1;
}
 .signupbtn {
  float: left;
  width: 50%;
}
.container {
  padding: 16px;
  width: 50%;
  margin: auto;
}
.modal {
  display: none;
  position: fixed; 
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 50px;
}
.modall{
  display: none;
  position: fixed; 
  z-index: 1;
  left: 0;
  top: 0%;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 50px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%;
}
.modall-content {
  background-color: #fefefe;
  margin: 20% auto 15% auto; 
  border: 1px solid #888;
  width: 80%;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 300px) {
 .signupbtn {
     width: 50%;
  }}
.signupdiv
{
  width: 50%;
  margin: auto;
}
.loginpdiv
{
  width: 50%;
  margin: auto;
}
.prod
{
  margin-left:auto;
  margin-right:auto;
}
.probimg{
  width:300px;
  height:300px;
}
.probtext
{
  font-size:20px;
}
marquee
{
  color:red;
}
.tag{background-color: rgb(43, 144, 226);}
</style>
</head>
<body >
<?php
 session_start();
?>
  <div>
  <h1 class="head1">Pacific</h1>
  <div class="tag">
  <p  align="center">The pacific ocean of online shopping websites</p>
  <marquee behavior="alternate">welcome to Pacific shopping website</marquee>
</div></div>
<div class="topnav">
  <a class="topleft" href="#home">Home</a>
  <a class="topleft"  href="product.php">Products</a>
  <a  class="topleft" href="contact0.php">Contact us</a>
  <div class="topnav-right">
    <a href="#" onclick="document.getElementById('signup').style.display='block'" style="width:auto;">Signup</a>
    <a href="#" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</a>
    <a href="profile.php" >Profile</a>
    </div></div>
<nav>
        <table cellpadding="50px" cellspacing="100px" class="prod">
            <tr><td><img class="prodimg" width="300px" height="300px" src="https://securityintelligence.com/wp-content/uploads/2019/04/external_mobile-security-versus-desktop-and-laptop-security-is-there-even-a-difference-anymore.jpg"></td><td><img class="prodimg" width="300px" height="300px"  src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Home/LA/LASA/2018/ACs._CB502902454_.jpg"></td><td><img class="prodimg" width="300px" height="300px" src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRP3OOlNS87iyxhlLvEtnW_Dh-uLvE52wH8jZKkf1D9BO21vyNoRLIGlzCU45lHHLjfxnXx9l2gYdwu3RWrAm1Oc577orbq_MadomnVsrpDRZhLZMIaJa8p&usqp=CAE"></td></tr>
            <tr><th><h1>Electronics</h1></th><th><h1>Home Appliances</h1></th><th><h1>Masks</h1></th></tr>
            <tr><td><img class="prodimg" width="300px" height="300px"  src="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/000/738/250/original/final_cover.jpg?1551417521"></td><td><img class="prodimg" width="300px" height="300px"  src="https://cdn.shopify.com/s/files/1/0574/5406/7876/products/SpecialDiscountedDealOfWomen_sDresses_720x.jpg?v=1626882674"></td><td><img class="prodimg" width="300px" height="300px" src="https://m.media-amazon.com/images/I/71Wmxp9Vy-L._AC_UL480_FMwebp_QL65_.jpg"></td></tr>
            <tr><th><h1>Men fashion</h1></th><th><h1>women fashion</h1></th><th><h1>Children dress</h1></th></tr>
          </table></nav>
<div id="signup" class="modal">
  <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
  <div class="signupdiv">
  <form class="modal-content" method="post" action="signup.php">
    <div class="container"></div>
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p><hr>
      <table>
        <tr><td><b>Name</b></td><td><input type="text" size="35" maxsize="35" name="name" placeholder="Enter  name"></td></tr>
        <tr><td><b>Choose Your Username*</b></td><td><input type="text" size="25" name="username"maxsize="35" placeholder="Enter  Username" autofocus></td></tr>
        <tr><td><b>Create a Password*</b></td><td><input type="password" size="25" maxsize="35" name="password" placeholder="Enter password"></td></tr>
        <tr><td><b>Comfirm Your Passsword </b></td><td><input type="text" size="25" maxsize="35" name="comfirm password" placeholder="Comfirm  your Password"></td></tr>
        <tr><td><b>DOB</b></td><td>Date
         <select name="date">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>	
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
          </select>
        Month<select name="month">
         <option value="1">january</option>
         <option value="2">febuary</option>
         <option value="3">march</option>
         <option value="4">april</option>
         <option value="5">may</option>
         <option value="6">june</option>
         <option value="7">july</option>
         <option value="8">augest</option>
         <option value="9">september</option>
         <option value="10">october</option>
         <option value="11">november</option>
         <option value="12">december</option>
          </select>
        Year<select name="year">
         <option value="2001">2001</option>
         <option value="2002">2002</option>
         <option value="2003">2003</option>
         <option value="2004">2004</option>
         <option value="2005">2005</option>
         <option value="2006">2006</option>
         <option value="2007">2007</option>
         <option value="2008">2008</option>
         <option value="2009">2009</option>
         <option value="2010">2010</option>
         <option value="2011">2011</option>
          </select>
        </td></tr>
        <tr><td><br><td></td></tr>
        <tr><td><b>Gender</b></td><td><input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="female">Female</td></tr>
          <tr><td><br><td></td></tr>
          <tr><td><b>Mobile Phone</b></td><td><input type="text" size"10" name="phone" maxsize="10" placeholder="Enter  mobile number"></td></tr>
                        <tr><td><b>Address</b></td><td><input type="text" size"25" maxsize="35" name="address" placeholder="Address"></td></tr>
</table>
      <br><label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      <p>By creating an account you agree to our Terms & Privacy</p>
      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
      </div></div></form></div></div>
<div id="login" class="modall">
  <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
  <div class="container">
  <form action="login.php" method="post" style="border:1px solid #ccc">  
      <h1>login</h1>
      <p>Please fill in this form to login in your account.</p>
      <hr>
      <label for="username"><b>username</b></label>
      <input size="50" type="text" placeholder="Enter username" name="username1" required> 
      <label for="psw"><b>Password</b></label>
      <input size="50" type="password" placeholder="Enter Password" name="passw" required>
      <div class="clearfix">
        <button type="submit" class="signupbtn">login</button>
      </div></div></form></body></html>