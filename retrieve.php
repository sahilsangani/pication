<?php
//connect
$mysqli = NEW MySQLi('127.0.0.1', 'root', 'root', 'pictures');
//query database
$resultSet = $mysqli->query("SELECT * FROM location");
//count the rows
if ($resultSet->num_rows != 0){
//convert query to array
	while ($rows = $resultSet->fetch_assoc())
	{
		$directory = $rows['directory'];
		$place = $rows['place'];
		$picture_id = $rows['picture_id'];

		echo "<p>Directory: $directory <br/> 
		Place: $place <br/>
		Picture_ID: $picture_id</p>";
	}
//display results
}else{
	echo "No results.";
}
?>