<?php
//define constants for connection info
define("MYSQLUSER","team05nov16");
define("MYSQLPASS","inderbabita");
define("HOSTNAME","localhost");
define("MYSQLDB","team05nov16");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>

