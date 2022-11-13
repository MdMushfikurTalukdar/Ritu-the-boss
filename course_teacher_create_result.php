<?php

	$c_id= $_GET["c_id"];

	$t_id = $_GET["t_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO course_teacher VALUES 
            ( '', '$c_id', '$t_id' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Course ID = $c_id <br> Teacher ID = $t_id";



	echo "<p><a href=course_teacher_read.php>READ all records</a>";

?>