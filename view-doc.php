<?php
	include 'config/connection.php';
	
	if(!isset($_SESSION['userid'])) {
		echo "<script>window: location='index.php'</script>";
	}
	
	$username_log = $_SESSION['username'];
	
	require_once('includes/header.php');
	require_once('includes/datetime.php');
	require_once('includes/main-menu.php');
	
	//get document viewed...
	$get_docid = $_GET['docid'];
	$get_cat = $_GET['cat'];
?>
			<script type="text/javascript"> 
				$(document).ready(function() {
					jQuery(window).load(function () {
						<?php
							$sql = "Select * From tb_doc_upload Where id='$get_docid' ";
							foreach($dbh->query($sql) as $result_views){
								$get_lastDocView = $result_views['views'];
							}
							$count_views = $get_lastDocView+1;
							$sql = "Update tb_doc_upload Set views='$count_views' Where id='$get_docid' ";
							$dbh->query($sql);
						?>
					});
				});
			</script>	
			<div style="margin-top: -380px;"/>
			
			<div style="margin-top: 20px;"/>
			
			
			<div id="content-wrapper-page">
				<div id="left-wrapper">
					<?php
						require_once('includes/left-menu.php');
					?>
				</div>
				<div id="right-wrapper">
					<div id="header-mypage">
						<div id="header-mypage-left">
							<img src="uploads/<?=$profile_pic;?>" width="100px" height="100px" class="img-polaroid">
						</div>
						<div id="header-mypage-right">
							<div id="mypage-info">
								<div id="mypage-info-head">Personal Information</div>
								Name: <?=$firstname_log;?> <?=$lastname_log;?> (<?=$username_log;?>)<br>
								Member Since: 
							</div>
							<div id="current-date">
								<div id="head-date">
									<center style="padding: 5px;">
									<?php
										echo date('M');
									?>
									</center>
								</div>
								<div id="body-date">
									<center>
									<?php
										$day_name = date("D");
										if($day_name == "Mon") {
											echo "Monday";
										} elseif($day_name == "Tue") {
											echo "Tuesday";
										} elseif($day_name == "Wed") {
											echo "Wednesday";
										} elseif($day_name == "Thu") {
											echo "Thursday";
										} elseif($day_name == "Fri") {
											echo "Friday";
										} elseif($day_name == "Sat") {
											echo "Saturday";
										} elseif($day_name == "Sun") {
											echo "Sunday";
										}
									?>
									<br>
									<?php
										echo date('d');
									?>
									<br>
									<?php
										echo date('Y');
									?>
									</center>
								</div>
							</div>
						</div>
					</div>
					<div id="mypage-activity">
						<div style="margin-top: 10px;">&nbsp;</div>
						<div id="mypage-activity-header">
							<div style="float: left;">
								Document Uploaded
							</div>
						</div>
						<div id="view-doc-body">
							<?php
								$sql = "Select * From tb_doc_upload Where id='$get_docid' ";
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
										$status_desc = "was uploaded new document";
									}
									echo "<td><div id='style-name-activity' style='margin-top: -8px;'>".
										$result['firstname']." ".
										$result['lastname']." ".
										$status_desc.
										"</div>
										<div style='margin-left: 10px;'>";
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
										echo $textdisplaylist = '<div>'.substr($string,0,80).'<br><pre id=skip><a href="view-doc.php">Read More</a> | Visibility: '.$result['visibility'].'</pre></div>';
									}else{
										echo $textdisplaylist = '<div>'.$string.'<br><div id=doc_view_actions>';
							?>
										<div style="margin-top: -6px; margin-left: -5px;">	
										<div class="btn-group">
											<a class="btn btn-primary" style="height: 30px; padding: 4px;" href="#">Actions</a>
												<a class="btn btn-primary dropdown-toggle" style="height: 30px;" data-toggle="dropdown" href="#"><span style="margin-top: 7px;" class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a href="doc_edit.php?edit_id=<?=$get_docid;?>"><i class="glyphicon glyphicon-pencil"></i> Update</a></li>
													<li><a href="doc_comment.php?comment_id=<?=$get_docid;?>" rel="facebox"><i class="glyphicon glyphicon-comment"></i> Comment</a></li>
													<li><a href="doc_download.php?download_id=<?=$get_docid;?>" rel="facebox"><i class="glyphicon glyphicon-download"></i> Download</a></li>
												</ul>
										</div>
										</div>
							<?php
										echo '<div id="doc_visibility_display">&nbsp;&nbsp;Views: '.$result['views'].' | Visibility: '.$result['visibility'].'</div>';
										echo'</div></div>';
									}
																		
									echo " </div></td></tr>";
									echo "</tr>";
									echo "</table>";
									}	
							?>
							<div id="style-activity-doc" style="width: 610px; height: 515px; margin-top: 10px;">
								<div id="doc_view_actions" style="width: 590px; margin:0px auto; margin-top: 10px; font-weight: bold; color: grey;">
									Comments
								</div>
								<div id="style-activity" style="width: 590px; margin-top: 10px;">
									<script>
										function SubmitForm() {
										var docid = $("#docid").val();
										var userid = $("#userid").val();
										var comment = $("#comment").val();
										var username = $("#username").val();
										var firstname = $("#firstname").val();
										var lastname = $("#lastname").val();
										var category = $("#category").val();
										var status = $("#status").val();
										if(comment == "") {
												notif({
													msg: "ERROR: Failed below is required.",
													type: "error",
													position: "center"
												});
												$('#comment').focus();
										} else {
										 $.post("exec_comment.php", { docid: docid, userid: userid, comment: comment, username: username, firstname: firstname, lastname: lastname, category: category, status: status },
										   function(data) {
												notif({
													msg: "Success: Posting your comment.",
													type: "success",
													position: "center"
												});	
													$("#comment").val("");
													$("#doc-comments").load("doc_comments.php?docid=<?=$get_docid;?>&&cat=<?=$get_cat;?>");
													var refreshId = setInterval(function()
													{
														$("#doc-comments").load("doc_comments.php?docid=<?=$get_docid;?>&&cat=<?=$get_cat;?>");
													}, 9000);
										   });
										 }
										}
										/*
										var refreshId = setInterval(function()
										{
											$("#doc-comments").load("doc_comments.php?docid=<?=$get_docid;?>&&cat=<?=$get_cat;?>");
										}, 1000);
										*/
									</script>
									<form>
										<div class="form-group" style="padding: 10px;">
											<input type="hidden" id="docid" name="docid" value="<?=$get_docid;?>">
											<input type="hidden" id="userid" name="userid" value="<?=$userid_log;?>">
											<input type="hidden" id="username" name="username" value="<?=$username_log;?>">
											<input type="hidden" id="firstname" name="firstname" value="<?=$firstname_log;?>">
											<input type="hidden" id="lastname" name="lastname" value="<?=$lastname_log;?>">
											<input type="hidden" id="category" name="category" value="Document">
											<input type="hidden" id="status" name="status" value="Comment">
											<textarea name="comment" id="comment" class="form-control" rows="2" placeholder="Comments here" required></textarea>
										</div>
										<div class="form-actions" style="padding: 10px; margin-top: -24px;">
											<input type="button" value="Submit Comment" class="buttonUpload1 btn btn-primary" onclick="SubmitForm();"/>
										</div>
									</form>
								</div>
								<div id="style-activity" style="width: 590px; height: 304px; margin-top: 10px; padding: 10px;">
									<div id="doc-comments">
										<?php
											$sql = "Select * From tb_doc_comments Where doc_id='$get_docid' And category='$get_cat' Order By doc_comment_id DESC";
											foreach($dbh->query($sql) as $result_comment_doc) {
												echo "<div id='up-triangle-comments' style='margin-top: 10px; margin-left: 40px;'></div>";
												echo "<div id='display-doc-comments' style='margin-top: 0px;'>";
												//select user post comment
												$sql = "Select * From tb_users Where userid='$result_comment_doc[user_id]'";
												foreach($dbh->query($sql) as $result_commentUserPic) {
													$comment_UserPic = $result_commentUserPic['photoupload'];
												}	
												echo "<img src='uploads/$comment_UserPic' width='30px'>";
												echo $result_comment_doc['comment']."<br>";
												
												$date1 = $result_comment_doc['datetime'];
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
												echo "</div>";
											}
										?>
									</div>
								</div>
								<table cellspacing='12' width='590px' border='0' style="margin-top: 10px; margin: 0px auto;">
									<tr>
										<td>
											
										</td>
									</tr>
								</table>
							<div>
							
						</div>
					</div>
				</div>
			</div>
			<!--
			</div>
					</div>
			<div id="footer-wrapper">
				sdfd
			</div>
			-->
<?php require_once('includes/footer.php');?>