<?php
$dbhost = "dbserver";
$dbuser= "hchen389";
$dbpass = "JNtBnYqAPD";
$dbname = "hchen3892db";
$connection = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");
echo "<p>attempting to connect</p>";
if (!$connection) {
     echo "Database Connection Failed" ;
   }
?>
