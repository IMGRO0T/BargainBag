<?php
// Fill up array with names
$a[]="hp laptop";
$a[]="iPhone 6";
$a[]="macbookpro";
$a[]="samsung galaxy s5";
$a[]="sony playstation";
$a[]="Brittany";
$a[]="Hiber";
$a[]="Ituano";
$a[]="Julius";
$a[]="Robert";


// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q=strtolower($q); $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name,0,$len))) {
      if ($hint==="") {
        $hint=$name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found
// or output the correct values
echo $hint==="" ? "no suggestion" : $hint;
?> 