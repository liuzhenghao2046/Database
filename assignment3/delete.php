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
<?php
  $teamid = $_POST['teamid'];

  if($teamid == null){
    echo "delete data failed";
    exit;
  }

  $query = "DELETE FROM team WHERE teamid = '$teamid'";

  $result = pg_query($connection, $query);
  if(!$result){
		die("Error: delete failed-->" . pg_last_error($connection));
		exit;
	}else{
		echo "delete data successfully!";
	}
  ?>
  <?php>
  pg_close($connection);
  ?>
  </ol>
  </body>
  </html>
