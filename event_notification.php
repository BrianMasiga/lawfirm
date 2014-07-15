<?php
	$sql = "SELECT * from tb_events Where visibility='Public' Or (visibility='Private' And username='$username_log')  ORDER BY event_id DESC limit 5";
	foreach ($dbh->query($sql) as $result){
	echo "<div style='margin-top: 16px;'></div>";
	echo "<table cellspacing='12' width='610px' border='0' id='style-activity'>";
	echo "<tr>";
	echo "<td>";
	echo "<table border='0' style='margin-top: 8px; margin-left: 8px;'>";
	echo "<tr>";
	
	foreach($dbh->query("Select * From tb_users Where username='$result[username]' ") as $res_profilePicUpload) {
		$profileUploadFilename = $res_profilePicUpload['photoupload'];
	}
	
	
	echo "<td>"."<img src='uploads/$profileUploadFilename' width='40px' id='pic-activity'>"."</td>";
	if($result['status'] == "Add") {
		$status="<img src='icons/activity/activity_document_added.png'>";
	}
	if($result['status']== "Add" && $result['category']=="Document") {
		$status_desc = "<b>was uploaded new document</b>";
	}elseif($result['status']== "Add" && $result['category']=="Event") {
		$status_desc = "<b>was create new event</b>";
	}
	echo "<td><div id='style-name-activity' style='margin-top: -8px;'>".
		$result['firstname']." ".
		$result['lastname']." ".
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
					echo "<tt>".$minutes." minute ago.</tt>";
				}else{
					if($seconds==1) {
						echo "<tt>".$minutes." minute and ".$seconds." second ago.</tt>";
					}else{
						echo "<tt>".$minutes." minute and ".$seconds." seconds ago.</tt>";
					}
				}
				
			} else {
				if($seconds==0) {
					echo "<tt>".$minutes." minutes ago.</tt>";
				}else{
					if($seconds==1) {
						echo "<tt>".$minutes." minutes and ".$seconds." second ago.</tt>";
					}else{
						echo "<tt>".$minutes." minutes and ".$seconds." seconds ago.</tt>";
					}
				}
				
			}
			
		}elseif($years == 0 && $months == 0 && $days == 0) {
			if($hours == 1) {
				if($minutes==0){
					echo "<tt>".$hours." hour ago.</tt>";
				}else{	
					if($minutes==1) {
						echo "<tt>".$hours." hour and ".$minutes." minute ago.</tt>";
					} else {
						echo "<tt>".$hours." hour and ".$minutes." minutes ago.</tt>";
					}
				}
			}else{
				if($minutes==0){
					echo "<tt>".$hours." hours ago.</tt>";
				}else{	
					if($minutes==1) {
						echo "<tt>".$hours." hours and ".$minutes." minute ago.</tt>";
					} else {
						echo "<tt>".$hours." hours and ".$minutes." minutes ago.</tt>";
					}
				}
			}
			
		}elseif($years == 0 && $months == 0) {
			if($days==1) {
				if($hours==0) {
					echo "<tt>".$days." day ago.</tt>";
				}else{
					if($hours==1) {
						echo "<tt>".$days." day and ".$hours." hour ago.</tt>";
					}else{
						echo "<tt>".$days." day and ".$hours." hours ago.</tt>";
					}
				}
			}else{
				if($hours==0) {
					echo "<tt>".$days." days ago.";
				}else{
					if($hours==1) {
						echo "<tt>".$days." days and ".$hours." hour ago.</tt>";
					}else{
						echo "<tt>".$days." days and ".$hours." hours ago.</tt>";
					}
				}
				
			}
			
		}elseif($years == 0) {
			if($months==1){
				if($days==0){
					echo "<tt>".$months." month ago.</tt>";
				}else{
					if($days==1) {	
						echo "<tt>".$months." month and ".$days." day ago.</tt>";
					}else{
						echo "<tt>".$months." month and ".$days." days ago.</tt>";
					}
				}
			}else{
				if($days==0){
					echo "<tt>".$months." months ago.</tt>";
				}else{
					if($days==1) {	
						echo "<tt>".$months." months and ".$days." day ago.</tt>";
					}else{
						echo "<tt>".$months." months and ".$days." days ago.</tt>";
					}
				}
			}
			
		}else{
			if($years==1) {
				if($months==0) {
					echo "<tt>".$years." year ago.</tt>";
				}else{
					if($months==1) {
						echo "<tt>".$years." year and ".$months." month ago.</tt>";
					}else{
						echo "<tt>".$years." year and ".$months." months ago.</tt>";
					}
				}
				
			}else{
				if($months==0) {
					echo "<tt>".$years." years ago.</tt>";
				}else{
					if($months==1) {
						echo "<tt>".$years." years and ".$months." month ago.</tt>";
					}else{
						echo "<tt>".$years." years and ".$months." months ago.</tt>";
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
	$string = $result['details'];
										
	$count_words = str_word_count($string);
										
	$lim_words = 11;
	$limit_words = $lim_words-1;
	$x=0;
	echo "<tr><td><div id='style-description-activity'>";
	if(strlen($string) > 80) {
		echo $textdisplaylist = '<div>'.substr($string,0,80).'...<br><pre id=skip><a href=view-event.php?eventid='.$result['event_id'].'&&cat='.$result['category'].'>Read More</a> | Visibility: '.$result['visibility'].'</pre></div>';
	}else{
		echo $textdisplaylist = '<div>'.$string.'<br><pre id=skip><a href=view-event.php?eventid='.$result['event_id'].'&&cat='.$result['category'].'>View</a> | Visibility: '.$result['visibility'].'</pre></div>';
	}
										
	echo " </div></td></tr>";
	echo "</tr>";
	echo "</table>";
	}	
?>