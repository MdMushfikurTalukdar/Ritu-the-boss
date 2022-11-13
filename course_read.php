<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM course" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo    "<th>Course ID</th>
            <th>Depertment</th>
            <th>Course Name</th>
            <th>Cridit</th>
            <th>Syllabus</th>
            <th>Delete</th>
            <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $c_id </td>";
		echo "<td> $c_dept </td>";
        echo "<td> $c_title </td>";
        echo "<td> $c_credit </td>";
        echo "<td> $c_syllabus </td>";
		echo "<td> <a href = 'course_delete.php?c_id=$c_id'> Delete </a> </td>";
		echo "<td> <a href = 'course_update_input.php?c_id=$c_id&c_dept=$c_dept&c_title=$c_title
        &c_credit=$c_credit&c_syllabus=$c_syllabus'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=course_create_input.php>CREATE a new record</a>";
?>