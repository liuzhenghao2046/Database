<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>The Maple Leafs' curese is ture or not???</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>These are the name of the official</h1>
<ol>
<?php
   $whichOne= $_POST["headoff"];
   
   $query = "SELECT firstname, lastname FROM official WHERE officialid = '$whichOne' ";
   $result = pg_query($query);
   if (!$result) {
         die("database query2 failed.");
   }
   while ($row = pg_fetch_array($result)) {
        echo '<li>';
        echo $row["firstname"] . " " . $row["lastname"];
     }
     pg_free_result($result);
?>
</ol>
<?php
   pg_close($connection);
?>
</body>
</html>


