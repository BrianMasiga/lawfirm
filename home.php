<?php
	include 'config/connection.php';
	
	if(!isset($_SESSION['userid'])) {
		echo "<script>window: location='index.php'</script>";
	}
	
	$username_log = $_SESSION['username'];
	
	require_once('includes/header.php');
	require_once('includes/main-menu.php');

	$page_name = split("/lawfirm/", $page_index);
?>
	
			<script type="text/javascript"> 
			
				<?php 
					if($page_name[1] == "home.php?login=success") {
				?>
				$(document).ready(function() {
					jQuery(window).load(function () {
						notif({
							msg: "Success: Welcome back <?php echo "<b>".$firstname_log;?> <?php echo $lastname_log."</b>";?> to your lawfirm software.",
							type: "success",
							position: "center"
						});
					});
					window: location='home.php'
				});
				<?php } ?>
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
							<?php
								if($profile_pic != "") {
							?>
								<img src="uploads/<?=$profile_pic;?>" width="100px" height="100px" class="img-polaroid">
							<?php } else { ?>
								<img src="icons/profile.png" width="100px">
							<?php } ?>
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
								Recent activity
							</div>
							<div style="float: right;">
								<ul id="notify_menu">
									<li><a id="notify_menu_li" class="all" style="color: #069fec;">All</a></li>
									<li><a id="notify_menu_li" class="doc">Documents</a></li>
									<li><a id="notify_menu_li" class="event">Event</a></li>
									<li><a id="notify_menu_li" class="sched">Schedule</a></li>
									<li><a id="notify_menu_li" class="contact">Contact</a></li>
									<li><a id="notify_menu_li" class="task">Task</a></li>
									<li><a id="notify_menu_li" class="memo">Memo</a></li>
								</ul>
							</div>
						</div>
						<div class="all_notify">	
							<div id="pageData"></div>
						</div>
						<div class="doc_notify">
						
						</div>
						<div class="event_notify">
							event
						</div>
						<div class="sched_notify">
							sched
						</div>
						<div class="contact_notify">
							contact
						</div>
						<div class="task_notify">
							Task
						</div>
						<div class="memo_notify">
							Memo
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