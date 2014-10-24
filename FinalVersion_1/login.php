<?php

   ob_start();
   session_start();
   
include 'mysql_connect.php'; 
  
if (isset($_POST['button']))
{ 
$user = $_POST['custid'];
$pass = md5($_POST['password']);

$result = mysql_query("select * from members where email = '$user' and password = '$pass'");

if (mysql_num_rows($result) == 1)
{
  $row = mysql_fetch_array($result);
  $_SESSION['u'] = $user;
  $_SESSION['p'] = $pass;
  
  header('Location: /~iegbor/bargainbag/gridster_test/products.html');
}
else 
{
  header('Location: login.php');
}
}
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Compare prices and buy products at low prices Page</title>
    <!-- CSS internal script -->
    <style>
    
    nav ul {
  margin:0;
  padding:0 1em 0 0;
  text-align:center
  
}

nav li {
  display:inline;
  padding: 20px;
  width: 550px;
    height: 35px;
    font-size: 16px;
    font-family: Tahoma, Geneva, sans-serif;
    font-weight: bold;
    text-align: center;
    text-shadow: 3px 2px 3px #333333;
    background-color: green;
        border-radius: 8px;

}

a:link {
    color: white;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    padding: 8px 8px 8px 8px;
}

a:visited {
    color: red;
}

a:hover {
    color: orange;
}

.demo a{
    color: blue;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    padding: 8px 8px 8px 8px;
}
form{
  width:1000px;
  margin:left;
}
.search { 
  padding:10px 600px 10px 30px;
  margin:3px; 
  background:8px 6px; 

}

.rounded { 
  border-radius:15px; 
  -moz-border-radius:15px; 
  -webkit-border-radius:15px; 
}

input[type=text]{
  color:grey;
}


input[type=button], input[type=button]:hover {
  position:relative; 
  left:-6px;
  border:1px solid #adc5cf;
  background: #e4f1f9; /* Old browsers */
  background: -moz-linear-gradient(top, #e4f1f9 0%, #d5e7f3 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e4f1f9), color-stop(100%,#d5e7f3)); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #e4f1f9 0%,#d5e7f3 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #e4f1f9 0%,#d5e7f3 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #e4f1f9 0%,#d5e7f3 100%); /* IE10+ */
  background: linear-gradient(top, #e4f1f9 0%,#d5e7f3 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e4f1f9', endColorstr='#d5e7f3',GradientType=0 ); /* IE6-9 */
  color:#7da2aa;
  cursor: pointer;
}

.lighter {
  width:95%;
  height:50px;
  padding:40px 25px;
}

.lighter input[type=text]{
  border:1px solid red;
  background-color:white;
}
.row{display: inline;}


  </style>

  <!--Script for loading google map-->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>

    </head>
     
    <body>
       <img id="10"src= "/~iegbor/bargainbag/images/BargainBagBanner.png" width="600" height="200"/><br><br><br>
     <nav>

                <ul>
                    <li><a href="index.html"> Home</a></li>
                    <li><a href="aboutUs.html"> About Us</a></li>
                    <li><a href="signUp.html"> Register</a></li>
                    <li><a href="contactUs.html"> Contact</a></li>
                </ul>
            </nav>
       <div class="lighter">
    <section class="demo">
    <div align="center">
  <!-- Insert text here -->
   <form id="form1" name="login" method="post" action="login.php">
    <table width="510" border="0" align="center">
    <tr>
    <td colspan="2">Login Form</td>
    </tr>
    <tr>
    <td>User email:</td>
    <td><input type="text" name="custid" id="custid" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>
    </table>
    </form>
        
    </div>
    
</section>
   





    </body>
    </html>