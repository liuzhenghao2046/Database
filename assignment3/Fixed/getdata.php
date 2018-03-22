<?php
  $query='SELECT * FROM team';
  $result = pg_query($query);
  if (!$result) {
     die ("Database query failed!");
  }

     echo '<input type="radio" name="teamname" value="teamname">'; 
     echo "Order By Team Name</br>";
     echo '<input type="radio" name="teamname" value="teamcity">';
     echo "Order By Team City</br>";   
     pg_free_result($result);
?>
