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
<h1>Here are your favourite Teams:</h1>
<ol>
<?php
   $whichOwner= $_POST["teamname"];
   $query = 'SELECT * FROM team order by team.teamname';
   $result = pg_query($query);
   if (!$result) {
         die("database query2 failed.");
   }
   while ($row = pg_fetch_array($result)) {
        echo '<li>';
        echo $row["teamname"] . " " . $row["teamcity"] . " " . $row["teamid"];
     }
     pg_free_result($result);
?>

</ol>
<?php
   pg_close($connection);
?>
</body>
</html>
