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
   $teamid = $_POST["teamid"];
   $query = "DELETE FROM team WHERE team.teamid = '$teamid' ";
   if (!pg_query($query)) {
        die("Error: delete failed-->" . pg_last_error($connection));
    }
   echo "Your team has been deleted!";
   pg_close($connection);
?>
</ol>
</body>
</html>
