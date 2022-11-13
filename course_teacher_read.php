<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM course_teacher" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo    "<th>Course ID</th>
            <th>Teacher ID</th>
            <th>Delete</th>
            <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
        echo "<td> $ct_id </td>";
		echo "<td> $c_id </td>";
		echo "<td> $t_id </td>";
		echo "<td> <a href = 'course_teacher_delete.php?ct_id=$ct_id'> Delete </a> </td>";
		echo "<td> <a href = 'course_teacher_update_input.php?ct_id=$ct_id&c_id=$c_id&t_id=$t_id
        '> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=course_teacher_create_input.php>CREATE a new record</a>";
?>

hello kisu bolo ... na thak