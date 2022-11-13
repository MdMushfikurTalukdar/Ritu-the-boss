<?php

	$c_id= $_GET["c_id"];

	$s_id = $_GET["s_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO course_semester VALUES 
            ( '', '$c_id', '$s_id' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Course ID = $c_id <br> semester = $s_id";



	echo "<p><a href=course_semester_read.php>READ all records</a>";

?>