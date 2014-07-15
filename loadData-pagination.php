<?php
require_once('config/connection.php');
$connection = mysqli_connect('localhost','root','','lawfirm') or die(mysqli_error($connection));
echo "<div id='mypage-activity-body'>";
$query="select notify_id from tb_notifications order by notify_id desc";
$res    = mysqli_query($connection,$query);
$count  = mysqli_num_rows($res);
$page = (int) (!isset($_REQUEST['pageId']) ? 1 :$_REQUEST['pageId']);
$page = ($page == 0 ? 1 : $page);
$recordsPerPage = 5;
$start = ($page-1) * $recordsPerPage;
$adjacents = "2";
    
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($count/$recordsPerPage);
$lpm1 = $lastpage - 1;   
$pagination = "";
if($lastpage > 1)
    {   
        $pagination .= "<div class='pagination'>";
        if ($page > 1)
            $pagination.= "<a href=\"#Page=".($prev)."\" onClick='changePagination(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a>";
        else
            $pagination.= "<span class='disabled'>&laquo; Previous&nbsp;&nbsp;</span>";   
        if ($lastpage < 7 + ($adjacents * 2))
        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<span class='current'>$counter</span>";
                else
                    $pagination.= "<a href=\"#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a>";     
                         
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))
        {
            if($page < 1 + ($adjacents * 2))
            {
                for($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if($counter == $page)
                        $pagination.= "<span class='current'>$counter</span>";
                    else
                        $pagination.= "<a href=\"#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a>";     
                }
                $pagination.= "...";
                $pagination.= "<a href=\"#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a>";
                $pagination.= "<a href=\"#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a>";   
           
           }
           elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<a href=\"#Page=\"1\"\" onClick='changePagination(1);'>1</a>";
               $pagination.= "<a href=\"#Page=\"2\"\" onClick='changePagination(2);'>2</a>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<span class='current'>$counter</span>";
                   else
                       $pagination.= "<a href=\"#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a>";     
               }
               $pagination.= "..";
               $pagination.= "<a href=\"#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a>";
               $pagination.= "<a href=\"#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a>";   
           }
           else
           {
               $pagination.= "<a href=\"#Page=\"1\"\" onClick='changePagination(1);'>1</a>";
               $pagination.= "<a href=\"#Page=\"2\"\" onClick='changePagination(2);'>2</a>";
               $pagination.= "..";
               for($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
               {
                   if($counter == $page)
                        $pagination.= "<span class='current'>$counter</span>";
                   else
                        $pagination.= "<a href=\"#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<a href=\"#Page=".($next)."\" onClick='changePagination(".($next).");'> Next &raquo;</a>";
        else
            $pagination.= "<span class='disabled'> Next &raquo;</span>";
    }
if(isset($_POST['pageId']) && !empty($_POST['pageId']))
{
    $id=$_POST['pageId'];
}
else
{
    $id='0';
}

									$sql = "select * from tb_notifications Where visibility='Public' Or visibility='To a user' Or (visibility='Private' And username='$username_log') order by notify_id desc limit ".mysqli_real_escape_string($connection,$start).",$recordsPerPage";
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
										if($result['status']== "Add" && $result['category']=="Documents") {
											$status_desc = $doc_added;
										}elseif($result['status']== "Add" && $result['category']=="Event") {
											$status_desc = $event_added;
										}elseif($result['status']== "Add" && $result['category']=="Schedule") {
											$status_desc = $schedule_added;
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
										$string = $result['description'];
										
										$count_words = str_word_count($string);
										
										$lim_words = 11;
										$limit_words = $lim_words-1;
										$x=0;
										echo "<tr><td><div id='style-description-activity'>";
										if(strlen($string) > 80) {
											echo $textdisplaylist = '<div>'.substr($string,0,80).'...<br><pre id=skip><a href="#">Read More</a> | Visibility: '.$result['visibility'].'</pre>';
										}else{
											echo $textdisplaylist = '<div>'.$string.'<br><pre id=skip><a href="#">View</a> | Visibility: '.$result['visibility'].'</pre>';
										}
										
										echo " </div></td></tr>";
										echo "</tr>";
										echo "</table>";
									}
									$dbh = null;					


//echo $HTML;

?>	
						</div>
						<div id="mypage-activity-footer">
							<?php 
								echo $pagination; 
								echo  "</div>";       
							?>
						</div>