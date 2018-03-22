<?php
  $query='SELECT * FROM official order by lastname';
  $result = pg_query($query);
  if (!$result) {
     die ("Database query failed!");
  }
  echo "You are looking for these officials (order by LastName) </br>";
  while ($row = pg_fetch_array($result)) {
     echo $row["officialid"] . " " . $row["firstname"] . " " . $row["lastname"] . " " . $row["offcity"] . "<br>";
   }
  pg_free_result($result);
?>
