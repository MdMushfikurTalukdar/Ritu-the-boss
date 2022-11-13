<?php

	$id = $_GET["c_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM course WHERE c_id=$id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=course_read.php>READ all records</a>";

?>