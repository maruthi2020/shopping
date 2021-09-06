<?php
 session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <style>
        body {
               font-family: Arial, Helvetica, sans-serif;
                background-color:#C5D9D9;}
       h1{ text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: black;
        }
        .name td{ background-color:#C5D9D9; }
       td{ background-color: white; }
       .order{height:50px;
           background-color:aqua;}
       .table{
           margin-top:1%;
           margin-left:15%;}
       .signbtn
       { color:aqua;}
       span{
  position: absolute;
   position: sticky;
   left:95%;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #291ebe;}
.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;}
    </style>
</head>
<body>
<span><a class="close" href="index.php">&times;</a></span>
   <table class="table" cellspacing="30px" >
   <form action="" method="post">  
       <tr class="name" ><td colspan=3 align="left"><h1>Electronics</h1></td><tr>
       <tr><td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/71y+lIHVdAL._SL1500_.jpg"></td></tr>          
       <tr><td height="50px" >price: 200000</td></tr>        
                     <tr><td class="order" align="center">
        <button type="submit" class="signupbtn" align="center" name="laptop">Add to cart</button>
    </td></tr>
           </table></td>
             <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/51WxJ+WQgrL._AC_UY327_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 59999</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="phone">Add to cart</td></tr>
           </table></td>
            <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/61uu4j6oP-S._AC_UY327_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 159999</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="tab">Add to cart</td></tr>
           </table></td>
      </tr>
      <tr class="name" ><td colspan=3 align="left"><h1>Home Appliances</h1></td><tr>
       <tr><td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/21XKBrhzu8L._AC_UY327_QL65_.jpg"></td></tr>          
       <tr><td height="50px" >price: 111999</td></tr>        
                     <tr><td class="order" align="center">
        <button type="submit" class="signupbtn" align="center" name="fan">Add to cart</button>
    </td></tr>
           </table></td>
             <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/51RUQLjO+YL._AC_UY327_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 99998</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="Ac">Add to cart</td></tr>
           </table></td>
            <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/61XJlA9z9kL._AC_UY327_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 12999</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="cooler">Add to cart</td></tr>
           </table></td>
      </tr>
      <tr class="name" ><td colspan=3 align="left"><h1>Masks</h1></td><tr>
       <tr><td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/71smGnISveL._AC_UL480_FMwebp_QL65_.jpg"></td></tr>          
       <tr><td height="50px" >price: 399</td></tr>        
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="mask1">Add to cart</button>
    </td></tr>
           </table></td>
             <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/81cV5ItDdsS._AC_UL480_FMwebp_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 499</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="mask2">Add to cart</td></tr>
           </table></td>
            <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/51S8TbKfY4L._AC_UL480_FMwebp_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 599</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="mask3">Add to cart</td></tr>
           </table></td>
      </tr>
      <tr class="name" ><td colspan=3 align="left"><h1>Men fashion</h1></td><tr>
       <tr><td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/71qDU7ZIahL._AC_UL480_FMwebp_QL65_.jpg"></td></tr>          
       <tr><td height="50px" >price: 399</td></tr>        
                     <tr><td class="order" align="center">
        <button type="submit" class="signupbtn" align="center" name="shirt">Add to cart</button>
    </td></tr>
           </table></td>
             <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/61o+uaJipIL._AC_UL480_FMwebp_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 899</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name=short">Add to cart</td></tr>
           </table></td>
            <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/81opGKIBKbL._AC_UL480_FMwebp_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 999</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="shoe">Add to cart</td></tr>
           </table></td>
      </tr>
      <tr class="name" ><td colspan=3 align="left"><h1>Women fashion</h1></td><tr>
       <tr><td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/81BTjnbeCpS._AC_UL480_FMwebp_QL65_.jpg"></td></tr>          
       <tr><td height="50px" >price: 299</td></tr>        
                     <tr><td class="order" align="center">
        <button type="submit" class="signupbtn" align="center" name="dress">Add to cart</button>
    </td></tr>
           </table></td>
             <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/71wx6oocQ0L._AC_UL480_FMwebp_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 449</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="sandle">Add to cart</td></tr>
           </table></td>
            <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/71qsZwPnzOL._AC_UL480_FMwebp_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 668</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="jew">Add to cart</td></tr>
           </table></td></tr>
      <tr class="name" ><td colspan=3 align="left"><h1>Children dress</h1></td><tr>
       <tr><td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/51clt0tECHS._AC_UL480_FMwebp_QL65_.jpg"></td></tr>          
       <tr><td height="50px" >price: 650</td></tr>        
                     <tr><td class="order" align="center">
        <button type="submit" class="signupbtn" align="center" name="child1">Add to cart</button>
    </td></tr>
           </table></td>
             <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/71diK7x6j+L._AC_UL480_FMwebp_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 870</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="child2">Add to cart</td></tr>
           </table></td>
            <td><table width="350px" height="300px"><tr><td><img  width="300px" height="300px" src="https://m.media-amazon.com/images/I/61gy9lZ4dfL._AC_UL480_FMwebp_QL65_.jpg"></td></tr>
                     <tr><td height="50px">price: 799</td></tr>
                     <tr><td class="order" align="center"><button type="submit" class="signupbtn" align="center" name="child3">Add to cart</td></tr>
           </table></td>
      </tr> </form> </table>
   <?php 
           $t=0;
        if(isset($_POST['laptop']))
        {   $prod="lapotop"; $price=200000;$t=1;}
        if(isset($_POST['phone']))
        {   $prod="phone"; $price=59999;$t=1;}
        if(isset($_POST['tab']))
        {   $prod="tab"; $price=159999;$t=1;}
        if(isset($_POST['fan']))
        {   $prod="fan"; $price=11999;$t=1;}
        if(isset($_POST['Ac']))
        {   $prod="Ac"; $price=99998;$t=1;}
        if(isset($_POST['cooler']))
        {   $prod="cooler"; $price=12999;$t=1;}
        if(isset($_POST['mask1']))
        {   $prod="mask1"; $price=399;$t=1;}
        if(isset($_POST['mask2']))
        {   $prod="mask2"; $price=499;$t=1;}
        if(isset($_POST['mask3']))
        {   $prod="mask3"; $price=599;$t=1;}
        if(isset($_POST['shirt']))
        {   $prod="shirt"; $price=399;$t=1;}
        if(isset($_POST['short']))
        {   $prod="short"; $price=899;$t=1;}
        if(isset($_POST['shoe']))
        {   $prod="shoe"; $price=999;$t=1;}
        if(isset($_POST['dress']))
        {   $prod="dress"; $price=299;$t=1;}
        if(isset($_POST['jew']))
        {   $prod="jew"; $price=499;$t=1;}
        if(isset($_POST['tab']))
        {   $prod="tab"; $price=668;$t=1;}
        if(isset($_POST['child1']))
        {   $prod="child1"; $price=650;$t=1;}
        if(isset($_POST['child2']))
        {   $prod="child2"; $price=870;$t=1;}
        if(isset($_POST['child3']))
        {   $prod="child3"; $price=799;$t=1;
        }
         if($t>0){
            $con =new mysqli("localhost","root","","assignment2");
            if($con->errno)
            echo "error in server";
            $user= $_SESSION['username'];
            echo "hello";
            $sql ="INSERT INTO `order` (`username`, `product`, `price`) VALUES ('$user', '$prod', '$price');";
            $res =$con->query($sql);
            if($res == true){
                echo '<script type ="text/JavaScript">';  
                echo 'alert("your product have been successfully added")';  
                echo '</script>';; }$t=0;}
   ?></body></html>
   
