<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3 database</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Showing the Adding variables:</h1>
<ol>
<?php
   $teamid = $_POST['teamid'];
   $teamcity = $_POST['teamcity'];
   $teamname = $_POST['teamname'];
   $query1= 'SELECT MAX(teamid) AS maxid FROM team';
   $result = pg_query($query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=pg_fetch_array($result);
   $newkey = intval($row["maxid"]) + 1;
   $teamid = (string)$newkey;
   $query = "INSERT INTO team VALUES('" . $teamid . "','" . $teamname . "','" . $teamcity . "');";
   if (!pg_query($query)) {
        die("Error: insert failed-->" . pg_last_error($connection));
    }
   echo "Your value was added!";
   pg_close($connection);
?>
</ol>
</body>
</html>
