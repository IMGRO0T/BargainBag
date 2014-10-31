<?php
# mysql_connect.php

// This file contains the database access information. This file also establishes a connection to MySQL and selects the database.

// Set the database access information as constants.


$con=mysql_connect("localhost","root","root","bargainbag");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysql_select_db("bargainbag") or die(mysql_error()); 

 ?>