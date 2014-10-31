<?php
session_start();
 //MySQL Database Connect
//include 'mysql_connect.php';
$con=mysqli_connect("localhost","root","root","bargainbag");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //mysql_select_db("iegbor_bargainbag") or die(mysql_error()); 
  mysqli_select_db($con, "bargainbag") or die(mysqli_connect_error()); 

?>

</br>
</br>





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
                    <li><a href="/~iegbor/bargainbag/index.html"> Home</a></li>
                     <li><a href="/~iegbor/bargainbag/aboutUs.html"> About</a></li>
                    <li><a href="products.html"> Product</a></li>
                    <li><a href="/~iegbor/bargainbag/contactUs.html"> Contact</a></li>
                </ul>
            </nav>
       <div class="lighter">
    <section class="demo">
    <div align="center">
      <table width="70%" border="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> 
            <h1>Products for less</h1>
            <p>
              <?php
                 if (isset($_POST['submit']))
                  {
                        $product = $_POST['pno'];
                        
                        $query = mysqli_query($con, "select product_num, product_name, description, price, link from amazon where product_name = '$product'");
                        $query2 = mysqli_query($con, "select product_num, product_name, description, price, link from bestbuy where product_name = '$product'");
                        

                      
                        
                          echo "The Product is available for comparison";
                          echo "<table border='1' style='border-collapse: collapse'>
                              <tr>
                              <th>Product Number</th>
                              <th>Product Name</th>
                              <th>Description</th>
                              <th>Price ($)</th>
                              <th>Website Link</th>
                              </tr>";
                              
                              while($row = mysqli_fetch_array($query))
                              {
                                  
                                  echo "<tr>";
                                  echo "<td>" . $row['product_num'] . "</td>";
                                  echo "<td>" . $row['product_name'] . "</td>";
                                  echo "<td>" . $row['description'] . "</td>";
                                  echo "<td>" . $row['price'] . "</td>";
                                  echo "<td><a href = \"" . $row['link'] . "\" target=\"_blank\"> Weblink</a></td>";
                                  echo "</tr>";
                             }
                      while($row = mysqli_fetch_array($query2))
                              {
                                  
                                  echo "<tr>";
                                  echo "<td>" . $row['product_num'] . "</td>";
                                  echo "<td>" . $row['product_name'] . "</td>";
                                  echo "<td>" . $row['description'] . "</td>";
                                  echo "<td>" . $row['price'] . "</td>";
                                  echo "<td><a href = \"" . $row['link'] . "\"  target=\"_blank\"> Weblink</a></td>";
                                  echo "</tr>";
                             }
                        echo "</table>";
                        
                  }
              ?>
          <!-- insert code here -->
   
  </p>
  </td>
        </tr>
        
        <tr><td><a href="/~iegbor/bargainbag/index.html">logout</a></td></tr>
</table>
  </form>
        
    </div>
    <div id="gmap_canvas" style="height:250px;width:250px;"></div>
 <script>var map;var infowindow;function initialize() {// Try HTML5 geolocation
                if(navigator.geolocation) {navigator.geolocation.getCurrentPosition(function(position) {var location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);map = new google.maps.Map(document.getElementById('gmap_canvas'), {center: location,zoom: 11});var request = {location: location,radius: 5000,types: ['electronics_store'],keyword: ['best buy']};infowindow = new google.maps.InfoWindow();var service = new google.maps.places.PlacesService(map);service.nearbySearch(request, callback);map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);var infowindow = new google.maps.InfoWindow({map: map,position: location,content: 'Location found using HTML5.'});map.setCenter(location);}, function() {handleNoGeolocation(true);});} else {// Browser doesn't support Geolocation
                handleNoGeolocation(false);}}function handleNoGeolocation(errorFlag) {if (errorFlag) {var content = 'Error: The Geolocation service failed.';} else {var content = 'Error: Your browser doesn\'t support geolocation.';}var options = {map: map,position: new google.maps.LatLng(60, 105),content: content};var infowindow = new google.maps.InfoWindow(options);map.setCenter(options.position);}function callback(results, status) {if (status == google.maps.places.PlacesServiceStatus.OK) {for (var i = 0; i < results.length; i++) {createMarker(results[i]);}}}function createMarker(place) {var placeLoc = place.geometry.location;var marker = new google.maps.Marker({map: map,position: place.geometry.location});google.maps.event.addListener(marker, 'click', function() {infowindow.setContent(place.name);infowindow.open(map, this);});}google.maps.event.addDomListener(window, 'load', initialize);
</script>
</section>
   





    </body>
    </html>