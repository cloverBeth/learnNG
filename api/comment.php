<?php
header("Access-Control-Allow-Origin: *");  
header("Content-Type: application/json; charset=UTF-8");
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


// Create database
if (mysql_query("CREATE DATABASE comments",$con))
  {
  	echo "Database created";
  }
else
  {
  	echo "Error creating database: " . mysql_error();
  }

// Create table in my_db database
mysql_select_db("comments", $con);
$sql = "CREATE TABLE comment(
				content varchar(255),
				rtime datetime(yyyy-mm-dd hh:mm:ss),
				acc int,
				ref int
		)";
mysql_query($sql,$con);

mysql_close($con);

?>