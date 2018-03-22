<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your pets:</h1>
<ol>
<?php
   $whichOwner= $_POST["petowners"];
   $query = 'SELECT * FROM owner, pet WHERE pet.ownerid=owner.ownerid AND pet.ownerid=\'' . $whichOwner . '\'';
   $result = pg_query($query);
   if (!$result) {
         die("database query2 failed.");
   }
   while ($row = pg_fetch_array($result)) {
        echo '<li>';
        echo $row["petname"];
        echo ":   <img src='" . $row["petpicture"]  . "' height='60' width='60'>";
     }
     pg_free_result($result);
?>
</ol>
<?php
   pg_close($connection);
?>
</body>
</html>
