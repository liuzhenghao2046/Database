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
   $petName = $_POST["petname"];
   $species =$_POST["species"];
   $query1= 'SELECT MAX(petid) AS maxid FROM pet';
   $result = pg_query($query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=pg_fetch_array($result);
   $newkey = intval($row["maxid"]) + 1;
   $petid = (string)$newkey;
   $query = "INSERT INTO pet VALUES('" . $petid . "','" . $petName . "','" . $species . "','" . $whichOwner . "','".$petpic. "');";
   if (!pg_query($query)) {
        die("Error: insert failed-->" . pg_last_error($connection));
    }
   echo "Your pet was added!";
   pg_close($connection);
?>
</ol>
</body>
</html>
