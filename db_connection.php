<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "salhusinc";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db,3308) or die("Connect failed: %s\n". $conn -> error);
 
function CloseCon($conn)
 {
 $conn -> close();
 } 
 
 ?>
