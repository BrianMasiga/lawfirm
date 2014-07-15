<?php
	require_once('config/connection.php');
	echo "<div id='mypage-activity-body'>";
	
	require_once('doc_upload_notification.php');	

?>	
	</div>
	<div id="mypage-activity-footer">
	<?php 
		foreach($dbh->query("select count(*) as countRow From tb_doc_upload") as $count_row) {
			$num_rows = $count_row['countRow'];
		}
		if($num_rows>=5) {
			echo "<a href='documents.php'>Show more</a>";
		}
	?>
	</div>