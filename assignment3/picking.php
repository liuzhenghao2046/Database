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
    //get the game information
    $gameid = $_POST['gameid'];

    if($gameid == null){
      die("get data failed");
    }
    $query = "SELECT * FROM game ";
    $result = pg_query($connection, $query);
    if(!$result){
      echo pg_last_error($connection);
      echo "Error!";
    }else{
      $i = 0;
      while($row = pg_fetch_row($result)){
			if($gameid == $row[0]){
				$game[0] = $row[0];
				$game[1] = $row[1];
				$game[2] = $row[2];
				$game[3] = $row[3];
				$i++;
    }
  }
  if($i == 0){
    echo "don't exist the gameid[$gameid]";
  }
}
for($i = 0; $i < count($game); $i++)
  echo "<td>$game[$i]</td>";
  echo "<tr>"

    //list the array of team
    $query = "SELECT gameid,teamid FROM playing ";
    $result = pg_query($connection, $query);
    if(!$result){
      echo pg_last_error($connection);
      echo "Error!";
    }else{
      $i = 0;
      while($row = pg_fetch_row($result)){
        if($gameid == $row[0]){
          $teamid[$i] = $row[1];
  				$i++;
        }
      }
      if($i == 0){
        die ("does not exist the gameid[$gameid]");
      }
    }
      //put playing into arrayteam, then record it.
      $query = "SELECT * FROM playing ";
      $result = pg_query($connection, $query);
      if(!$result){
        echo pg_last_error($connection);
        echo "Error!";
      }else{
        $i = 0;
        while($row = pg_fetch_row($result)){
          if($gameid == $row[0]){
            $score[$i][0] = $row[1];
            $score[$i][1] = $row[2];
            $i++;
          }
        }
        if($i == 0){
          die ("doesn't exist the gameid[$gameid]");
        }
      }

    //recording..
    ?>
    <?php>
    pg_close($connection);
    ?>
    </ol>
    </body>
    </html>
