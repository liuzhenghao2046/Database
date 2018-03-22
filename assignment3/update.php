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
    $gameid = $_POST['gameid'];
    $gamecity = $_POST['gamecity'];

    if($gameid == null || $gamecity == null){
      die ("Update failed!");
    }

    $query = "UPDATE game SET gamecity='$gamecity' WHERE gasmeid='$gameid'";

    $result = pg_query($connection, $query);
    if(!$result){
  		echo pg_last_error($connection);
  		echo "Error!";
  		exit;
    }else{
      echo "updata city [$gameid] to [$gamecity] successfully";
    }
    ?>
    <?php>
    pg_close($connection);
    ?>
    </ol>
    </body>
    </html>
