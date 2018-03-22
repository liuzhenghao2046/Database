<?php
  $query="SELECT max(headoff) FROM game, playing, team, reffing WHERE teamname='Maple Leafs' AND team.teamid=playing.teamid and playing.gameid=game.gameid";
  $result = pg_query($query);
  if (!$result) {
     die ("Database query failed!");
  }
     echo "What do you want to know? </br>";
    
     echo '<input type="radio" name="headoff" value="$row["headoff"]>';
     echo  "show the scores for all the games that the leafs played in and their oppents name and city<br>";
    
     echo '<input type="radio" name="headoff" value="$row["headoff"]>';
     echo  "Show the name of the official who has officiated the most leafs games<br>";
    
     echo '<input type="radio" name="headoff" value="$row["headoff"]>';
     echo  "Show the name of the official who has officiated the most leafs looses<br>";
    
     echo '<input type="radio" name="headoff" value="$row["headoff"]>';
     echo  "Show the name of the official who has officiate the most leafs wins<br>";

   
  pg_free_result($result);
?>
