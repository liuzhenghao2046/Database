<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>The Hockey Base</title>
</head>
<body>
<?php
 include 'connectdb.php';
?>
<h1>Enjoy Your Favourite Hockey Team</h1>
<h2>Choose one way to list Your Favourite Team</h2>
<form action="getdataByName.php" method="post">
<?php
 include 'getdata.php';
?>
<input type="submit" value="List Team By Your Choice">
</form>

<p>
<hr>
<p>
<h2> ADD A NEW Team:</h2>
<form action="addnewteam.php" method="post">
New Team's Name: <input type="text" name="teamname"><br>
New Team's City: <input type="text" name="teamcity"><br>
<input type="submit" value="Add New Team">
</form>

<p>
<hr>
<p>
<h2> Delete A Exisiting Team:</h2>
<form action="deleteteam.php" method="post">
Team's ID: <input type="text" name="teamid"><br>
<input type="submit" value="Delete Team">
</form>

<p>
<hr>
<p>
<h2> Update A Game:</h2>
<form action="updatecityname.php" method="post">
<?php
   include 'getGameID.php';
?>
New City's Name: <input type="text" name="gamecity"><br>
<input type="submit" value="Update Game">
</form>

<p>
<hr>
<p>
<h2> Show Details About Games:</h2>
<form action="showgames.php" method="post">
<?php
   include 'getGameID12.php';
?>
<input type="submit" value="Show Games">
</form>

<p>
<hr>
<p>
<h2>The List Of Officials</h2>
<?php
 include 'getofficeByName.php';
?>

<p>
<hr>
<p>
<h2> The Curese Of Maple Leafs ! ! !</h2>
<form action="getcureseML.php" method="post">
<?php
   include 'showlistoffice.php';
?>
<input type="submit" value="Show">
</form>

<p>
<hr>
<p>
<h2> Add a photo for the officials</h2>
<form action="updateofficial.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file"><br>

<input type="submit" value="Add New Photo for Officials">
</form>



<?php
   pg_close($connection);
?> 
</body>
</html>
