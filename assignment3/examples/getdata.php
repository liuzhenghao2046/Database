<?php
  $query='SELECT * FROM owner';
  $result = pg_query($query);
  if (!$result) {
     die ("Database query failed!");
  }
  echo "Whose pets are you looking for? </br>";
  while ($row = pg_fetch_array($result)) {
     echo '<input type="radio" name="petowners" value="';
     echo $row["ownerid"];
     echo '">' . $row["fname"] . " " . $row["lname"] . "<br>";
   }
  pg_free_result($result);
?>
