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
   $teamName = $_POST["teamname"];
   $teamcity =$_POST["teamcity"];
   $query1= 'SELECT MIN(teamid) AS maxid FROM team';
   $result = pg_query($query1);
   if (!$result) {
          die("database min query failed.");
   }
   $row=pg_fetch_array($result);
   $newkey = intval($row["maxid"]) + 1;
   $teamid = (string)$newkey;
   $query = "INSERT INTO team VALUES('" . $teamid . "','" . $teamName . "','" . $teamcity . "');";
   if (!pg_query($query)) {
        die("Error: insert failed-->" . pg_last_error($connection));
    }
   echo "Your team was added!";
   pg_close($connection);
?>
</ol>
</body>
</html>
