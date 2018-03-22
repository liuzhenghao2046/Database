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
$select_radio = $_POST['select_item'];
if($select_radio == "score"){
  die(echo "chooseing finished");
  $query = "SELECT * FROM playing";
  if(!$result){
    echo pg_last_error($connection);
    echo "Error!";
  }else{
    $i = 0;
    while($row = pg_fetch_row($result)){
    if($sorce == $row[0]){
      $score[$i][0] = $row[0];
      $sorce[$i][1] = $row[1];
      $score[$i][2] = $row[2];
      $i++;
    }
  }
}

  // get op name city;
  $query = "SELECT * FROM team";
  if(!$result){
    echo pg_last_error($connection);
    echo "Error!";
  }else{
    $i = 0;
    while($row = pg_fetch_row($result)){
      for($j = 0;$j < count($tcityname); $j++){
        if($row[0] == $tcityname[$j][0]){
          $tcityname[$j][1] = $row[1];
          $tcityname[$j][2] = $row[2];
        }
    }
  }
}

?>
<?php>
pg_close($connection);
?>
</ol>
</body>
</html>
