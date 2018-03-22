<?php
  $query='SELECT * FROM team';
  $result = pg_query($query);
  if (!$result) {
     die ("Database query failed!");
  }
  echo "showing team name and teamcity </br>";
  while ($row = pg_fetch_array($result)) {
     echo '<input type="radio" name="teams" value="';
     echo $row["teamid"];
     echo '">' . $row['teamname'] ." ". $row['teamcity'] . "<br>";
}
  pg_free_result($result);
?>
