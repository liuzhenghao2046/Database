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

<h1>Welcome to the Western Hocky database</h1>
<h2>showing the teams information</h2>
<form action="showalllist.php" method="post">
<?php
include 'getdata.php';
?>
<br/>
<input type = "radio" name = "select" value = "team_name" checked = "checked"/>Team Name
<input type = "radio" name = "select" value = "team'city_name"/>Team City
<br/>
<input type="submit" value="Show the variables">
</form>

<p>
<hr>
<p>
<h3> ADD new values:</h3>
<form action="addnew.php" method="post">
Team id: <input type="text" name="teamid"><br>
Team city: <input type="text" name="teamcity"><br>
Team name: <input type="text" name="teamname"><br>
<input type="submit" value="Add new values">
</form>

<p>
<hr>
<p>
<h3> Delete new values:</h3>
<from action ="delete.php" method ="post">
Team id: <input type="text" name="teamid"><br>
<input type="submit" value="Delete">
</from>

<p>
<hr>
<p>
<h3> Update variables:</h3>
<label><span class = "title">*Updata the name of the city</span></label>
<tr>
			<th style = "text-align: left">gameid</th>
			<th style = "text-align: left">gamedate</th>
			<th style = "text-align: left">gamecity</th>
			<th style = "text-align: left">headoff</th>
		</tr>
<?php
  $query='SELECT * FROM game';
  $result = pg_query($query);
  if (!$result) {
     die ("Database query failed!");
  }
  echo "list the games: </br>";
  while ($row = pg_fetch_array($result)) {
     echo '<input type="radio" name="games" value="';
     echo '">' . $row["gameid"] . " " . $row["gamecity"] . " " . $row["gamedate"] . "" . $row["headoff"] . "<br>";
   }
  pg_free_result($result);
?>
<from action ="update.php" method ="post">
Game id: <input type="text" name="gameid"><br>
Game city: <input type="text" name="gamecity"><br>
<input type="submit" value="Update">
</from>

<p>
<hr>
<p>
<h3> Picking:</h3>
<from action ="picking.php" method ="post">
	gameid:<input type = "text" name = "gameid" ><br>
<input type = "submit" value = "Picking">
</from>

<p>
<hr>
<p>
<h3> Listing the order of lastname:</h3>
<from action ="listname.php" method ="post">
	official:<input type = "text" name = "offcialid" ><br>
<input type = "submit" value = "select">
</from>

<p>
<hr>
<p>
<h3> Maple leafs:</h3>
<from action ="mapleleaf.php" method ="post">
<br>
<input type = "radio" name = "select_item" value = "score" checked = "checked"/>score
<input type = "radio" name = "select_item" value = "game"/>game
<input type = "radio" name = "select_item" value = "lose"/>lose
<input type = "radio" name = "select_item" value = "win"/>win
</br>
<input type = "submit" value = "select">
</from>

<?php
pg_close($connection);
?>
</body>
</html>
