<?php

	$s_dept = $_GET["c_dept"];

	$s_name = $_GET["c_title"];

	$s_nid = $_GET["c_credit"];

	$s_address = $_GET["c_syllabus"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO course VALUES 
            ( '', '$s_dept', '$s_name', '$s_nid' ,'$s_address' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Depertment = $s_dept <br> Name = $s_name
            <br> Credit = $s_nid <br> Syllabus = $s_address";



	echo "<p><a href=course_read.php>READ all records</a>";

?>