<?php
  $query='SELECT * FROM game';
  $result = pg_query($query);
  if (!$result) {
     die ("Database query failed!");
  }
  echo "Which game are you looking for? </br>";
  while ($row = pg_fetch_array($result)) {
     echo '<input type="radio" name="gameid" value="';
     echo $row["gameid"];
     echo '">' . $row["gameid"] . " " . $row["gamecity"] . "<br>";
   }
  pg_free_result($result);
?>
