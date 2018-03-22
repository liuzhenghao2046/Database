<?php
$dbhost = "dbserver";
$dbuser= "zliu393";
$dbpass = "PawfWSKUjH";
$dbname = "zliu393assign3db";
$connection = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");
echo "<p>attempting to connect</p>";
if (!$connection) {
     echo "Database Connection Failed" ;
   }
?>
