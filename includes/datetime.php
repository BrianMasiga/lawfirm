<?php
	foreach($dbh->query("select date_format(now(), '%Y-%c-%d %H:%i:%S') as current_datetime") as $result_currtime) {
		$current_datetime = $result_currtime['current_datetime'];
	}
?>