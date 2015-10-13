<?php
//connect
$mysqli = NEW MySQLi('127.0.0.1', 'root', 'root', 'pictures');
//query database
$mysqli->query("INSERT * INTO location ('$target_file', '$_POST["imageloc"]', NULL");
//count the rows

?>