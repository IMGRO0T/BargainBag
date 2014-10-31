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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</style>

<!--Script for loading google map-->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">



</head>

<body>

    <div class="brand"><img id="10"src= "img/BargainBagBanner.png" width="600px" height="200px"/></div>
    <div class="address-bar">123 Bargain Way| Chicago, Illnois 60611 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="aboutUs.html">About</a>
                    </li>
                    <li>
                        <a href="signUp.html">Register</a>
                    </li>
                    <li>
                        <a href="contactUs.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Members
                        <strong>Only</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    
                    <h2>Login
                        <br>
                        
                    </h2>
                    <p></p>
                    
                    <hr>
                    <form id="form1" name="login" method="post" action="login.php">
    <table width="510" border="0" align="center">
    <tr>
    <td colspan="2"></td>
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

                </div>
                
                
                
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Bargain Bag 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
