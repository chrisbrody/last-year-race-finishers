<?php 

	mysql_connect('localhost', 'root') OR die('Could not connect to database.');
	mysql_select_db('hfjq_race_info') or die(mysql_error());

	$query_string = "SELECT first_name, last_name, gender, finish_time FROM runners order by finish_time ASC";
	$query = mysql_query($query_string) or die(mysql_error());

	while ( $row = mysql_fetch_assoc($query) ) {
		print_r($row);
	}

?>