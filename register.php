

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
                     <li><a href="aboutus.html"> About Us</a></li>
                    <li><a href="login.php"> Login</a></li>
                    <li><a href="ContactUs.html"> Contact</a></li>
                </ul>
            </nav>
       <div class="lighter">
    <section class="demo">
    <div align="center">
  <!-- Insert text here -->
   <?php
include "mysql_connect.php";


if(isset($_POST['register']))
{
 
 $fn=mysql_real_escape_string($_POST['fname']);
 $ln=mysql_real_escape_string($_POST['lname']);
  $ps=md5(mysql_real_escape_string($_POST['fpass']));
 $gen=mysql_real_escape_string($_POST['fgender']);
 $em=mysql_real_escape_string($_POST['femail']);
 $elect = isset($_POST['elect']) ? 'yes' : 'no';
 $app = isset($_POST['app']) ? 'yes' : 'no';
 $shoe = isset($_POST['shoe']) ? 'yes' : 'no';
  $jew = isset($_POST['jew']) ? 'yes' : 'no';
 $kit = isset($_POST['kit']) ? 'yes' : 'no';
 $home = isset($_POST['home']) ? 'yes' : 'no';
 $sport = isset($_POST['sport']) ? 'yes' : 'no';
 $other = isset($_POST['other']) ? 'yes' : 'no';

 


  


	if(empty($fn) || empty($ln))
	{
		echo "The name fields are mandatory --- PHP!";
		
	}
	else if (!filter_var($em, FILTER_VALIDATE_EMAIL))
	{
		echo "Please specify a valid email address --php";
	}
	else if (strlen($ps) < 8)
	{
		echo "Please enter a password. Passwords must contain at least 5 characters. --php";
	}
	else 
	{
		$date = date("Y-m-d H:i:s");
		 $chk = "SELECT * FROM members WHERE email = '$em'";
		 $result=mysql_query($chk);
		 $count=mysql_num_rows($result);
		 if($count==0)
		 {
				$sql="INSERT INTO members (firstname, lastname, gender, email, password, electronics, apparel, shoes, jewelry, kitchenware, homegoods, sports, other, last_access  ) VALUES 
				('$fn', '$ln', '$gen', '$em', '$ps', '$elect','$app','$shoe','$jew','$kit','$home','$sport','$other','$date')";
				mysql_query($sql);
				$cnum = mysql_insert_id();
				echo "Your Account was created successful.";
				 
				
				echo "Your customer ID is: " . $cnum;
				echo "<br><a href=login.php>Click here to login</a>";
				
		 
		}else
		{
		  echo "A customer with this email already exist";
		  
		}
	}
	
	
	 
}

?>     
    </div>

</section>
   





    </body>
    </html>

