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
    $query = "SELECT * FROM official";
    $result = pg_query($connection, $query);
    if(!$result){
      echo pg_last_error($connection);
      echo "Error!";
    }else{
      $i = 0;
      while($row = pg_fetch_row($result)){
			if($gameid == $row[0]){
        $off[$i]['officialid'] = $row[0];
  			$off[$i]['firstname'] = $row[1];
  			$off[$i]['lastname'] = $row[2];
  			$off[$i]['officialcity'] = $row[3];
  			$i++;
      }
        echo "successfully!";
    	}
    	pg_close($connection);

      //listing the lastname
      function offlastname($x, $y){
      if($x['lastname'] == $y['lastname']){
        return 0;
      }else if($x['lastname'] < $y['lastname']){
        return -1;
      }else{
        return 1;
      }
    }

    //showing the list
    for($i = 0;$i < count($off);$i++){
      $off_id[$i] = $off[$i]['officialid'];
  		$off_first[$i] = $off[$i]['officialfirstname'];
  		$off_last[$i] = $off[$i]['officiallastname'];
  		$off_city[$i] = $off[$i]['officialcity'];

      echo "<tr>".$arr_id[$i]."</tr>";
  		echo "<tr>".$arr_first[$i]."</tr>";
  		echo "<tr>".$arr_last[$i]."</tr>";
  		echo "<tr>".$arr_city[$i]."</tr>";
    }
?>
<?php>
pg_close($connection);
?>
</ol>
</body>
</html>
