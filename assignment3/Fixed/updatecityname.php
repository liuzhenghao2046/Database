<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hockey Rock World</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your teams:</h1>
<ol>
<?php
   $gamecity= $_POST["gamecity"];
   $gameid=(string)$_POST["gameid"];
   $query = "UPDATE game SET gamecity= '$gamecity' WHERE gameid = '$gameid'";
   if (!pg_query($query)) {
        die("Error: update failed-->" . pg_last_error($connection));
    }
   echo "Your team was updated!";
   pg_close($connection);
?>
</ol>
</body>
</html>

