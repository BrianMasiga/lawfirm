<?php
	$sql = "SELECT * from tb_doc_upload Where visibility='Public' ORDER BY id DESC limit 5";
	foreach ($dbh->query($sql) as $result){
	echo "<div style='margin-top: 16px;'></div>";
	echo "<table cellspacing='12' width='610px' border='0' id='style-activity'>";
	echo "<tr>";
	echo "<td>";
	echo "<table border='0' style='margin-top: 8px; margin-left: 8px;'>";
	echo "<tr>";
	echo "<td>"."<img src='uploads/$profile_pic' width='40px' id='pic-activity'>"."</td>";
	if($result['status'] == "Add") {
		$status="<img src='icons/activity/activity_document_added.png'>";
	}
	if($result['status']== "Add" && $result['category']=="Document") {
		$status_desc = "was uploaded new document";
	}
	echo "<td><div id='style-name-activity' style='margin-top: -8px;'>".
		$result['first_name']." ".
		$result['last_name']." ".
		$status_desc.
		"</div>
		<div style='margin-left: 10px;'>";
		foreach($dbh->query("select date_format(now(), '%H:%i:%S') as current_datetime") as $result_currtime) {
			$current_datetime = $result_currtime['current_datetime'];
		}
		$date1 = $result['datetime'];
		$date2 = $current_datetime;
		
		$diff = abs(strtotime($date2) - strtotime($date1)); 

		$years   = floor($diff / (365*60*60*24)); 
		$months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
		$days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		$hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 

		$minutes  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 

		$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 
		
		if($years == 0 && $months == 0 && $days == 0 && $hours == 0 && $minutes == 0) {
			echo $seconds." seconds ago.";
		}elseif($years == 0 && $months == 0 && $days == 0 && $hours == 0) {
			if($minutes == 1) {
				if($seconds==0) {
					echo $minutes." minute ago.";
				}else{
					if($seconds==1) {
						echo $minutes." minute and ".$seconds." second ago.";
					}else{
						echo $minutes." minute and ".$seconds." seconds ago.";
					}
				}
				
			} else {
				if($seconds==0) {
					echo $minutes." minutes ago.";
				}else{
					if($seconds==1) {
						echo $minutes." minutes and ".$seconds." second ago.";
					}else{
						echo $minutes." minutes and ".$seconds." seconds ago.";
					}
				}
				
			}
			
		}elseif($years == 0 && $months == 0 && $days == 0) {
			if($hours == 1) {
				if($minutes==0){
					echo $hours." hour ago.";
				}else{	
					if($minutes==1) {
						echo $hours." hour and ".$minutes." minute ago.";
					} else {
						echo $hours." hour and ".$minutes." minutes ago.";
					}
				}
			}else{
				if($minutes==0){
					echo $hours." hours ago.";
				}else{	
					if($minutes==1) {
						echo $hours." hours and ".$minutes." minute ago.";
					} else {
						echo $hours." hours and ".$minutes." minutes ago.";
					}
				}
			}
			
		}elseif($years == 0 && $months == 0) {
			if($days==1) {
				if($hours==0) {
					echo $days." day ago.";
				}else{
					if($hours==1) {
						echo $days." day and ".$hours." hour ago.";
					}else{
						echo $days." day and ".$hours." hours ago.";
					}
				}
			}else{
				if($hours==0) {
					echo $days." days ago.";
				}else{
					if($hours==1) {
						echo $days." days and ".$hours." hour ago.";
					}else{
						echo $days." days and ".$hours." hours ago.";
					}
				}
				
			}
			
		}elseif($years == 0) {
			if($months==1){
				if($days==0){
					echo $months." month ago.";
				}else{
					if($days==1) {	
						echo $months." month and ".$days." day ago.";
					}else{
						echo $months." month and ".$days." days ago.";
					}
				}
			}else{
				if($days==0){
					echo $months." months ago.";
				}else{
					if($days==1) {	
						echo $months." months and ".$days." day ago.";
					}else{
						echo $months." months and ".$days." days ago.";
					}
				}
			}
			
		}else{
			if($years==1) {
				if($months==0) {
					echo $years." year ago.";
				}else{
					if($months==1) {
						echo $years." year and ".$months." month ago.";
					}else{
						echo $years." year and ".$months." months ago.";
					}
				}
				
			}else{
				if($months==0) {
					echo $years." years ago.";
				}else{
					if($months==1) {
						echo $years." years and ".$months." month ago.";
					}else{
						echo $years." years and ".$months." months ago.";
					}
				}
			}
		}
		
	echo "</div></td>";
	echo "</tr>";
	echo "</table>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	$string = $result['description'];
										
	$count_words = str_word_count($string);
										
	$lim_words = 11;
	$limit_words = $lim_words-1;
	$x=0;
	echo "<tr><td><div id='style-description-activity'>";
	if(strlen($string) > 80) {
		echo $textdisplaylist = '<div>'.substr($string,0,80).'<br><a href="#">Read More</a></div>';
	}else{
		echo $textdisplaylist = '<div>'.$string.'<br><a href="#">View</a></div>';
	}
										
	echo " </div></td></tr>";
	echo "</tr>";
	echo "</table>";
	}	
?>