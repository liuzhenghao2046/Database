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
<h1>Here are your game details:</h1>
<ol>
<?php
   $gameid=(string)$_POST["gameid"];
   $query = "SELECT * from team,game,official,playing where game.gameid = '$gameid'AND team.teamid = playing.teamid AND game.gameid = playing.gameid ";
   $result = pg_query($query);
   if (!$result) {
         die("database query2 failed.");
   }
   while ($row = pg_fetch_array($result)) {
        echo '<li>';
        echo  $row["gameid"] . " " . $row["teamcity"] . " " . $row["teamname"] . " " . $row["score"] . " " . $row["gamecity"] . " " . $row["gamedate"] . " " . $row["officialid"] . " " . $row["headoff"] ;
     }
     pg_free_result($result);
?>
</ol>
<?php
   pg_close($connection);
?>
</body>
</html>

