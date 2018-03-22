<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Listing all valuables</title>
</head>
<body>
  <?php
  include 'connectdb.php';
  ?>
  <h1>Listing all the variables in this table:</h1>
  <ol>
    <?php
       $select_radio = $_POST['select'];
       $result = pg_query($connection, $query);
	      if(!$result){
		     echo pg_last_error($connection);
		     echo "Error!";
	      }else{
		$i = 0;
		while ($row = pg_fetch_row($result)){
			$arr_row[$i]['teamid'] = $row[0];
			$arr_row[$i]['teamcity'] = $row[1];
			$arr_row[$i]['teamname'] = $row[2];
			$i++;
		}
		echo "Done";
	}

    //write a function for sorting teamname
    function name($x, $y){
		if($x['teamname'] == $y['teamname']){
			return 0;
		}else if($x['teamname'] < $y['teamname']){
			return -1;
		}else{
			return 1;
		}
	}

   //write a function for sorting teamCity
    function city($x, $y){
		  if($x['teamcity'] == $y['teamcity']){
			 return 0;
		  }else if($x['teamcity'] < $y['teamcity']){
			 return -1;
		  }else{
			return 1;
		}
  }
  //showing the list of sorting
for($i = 0;$i < count($arr_row);$i++){
  $id[$i] = $arr_row[$i]['teamid'];
  $city[$i] = $arr_row[$i]['teamcity'];
  $name[$i] = $arr_row[$i]['teamname'];

  echo "<tr>".$id[$i]."</tr>";
  echo "<tr>".$city[$i]."</tr>";
  echo "<tr>".$name[$i]."</tr>";
}
   ?>
 </ol>
<?php
   pg_close($connection);
?>
</body>
</html>
