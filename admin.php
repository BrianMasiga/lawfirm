<?php
	include 'config/connection.php';
	
	if(!isset($_SESSION['userid'])) {
		echo "<script>window: location='index.php'</script>";
	}
	
	$username_log = $_SESSION['username'];
	
	require_once('includes/header.php');
	require_once('includes/main-menu.php');
?>
			<script type="text/javascript"> 
				$(document).ready(function() {
					jQuery(window).load(function () {
						notif({
							msg: "Success: Welcome back administrator you are now accessing the administration panel.",
							type: "success",
							position: "center"
						});
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
				<div id="right-wrapper-admin">
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
					<div id="admin-page">
						<div style="margin-top: 10px;">&nbsp;</div>
						<div id="mypage-activity-header">
							<div style="float: left;">
								Administration Tools
							</div>
							<div style="float: right;">
								
							</div>
						</div>
						<div id="admin-body">
							<div style="margin-top: 20px;">
								<table cellpadding="10" cellspacing="10" width="600px" align="center" border="0" >
									<tr align="center" height="120px">
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/branch.png">
											</div>
											<div>
												Branch Office
											</div>
										</td>
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/department.png">
											</div>
											<div>
												Departments
											</div>
										</td>
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/roles.png">
											</div>
											<div>
												Roles
											</div>
										</td>
									</tr>
									<tr align="center" height="120px">
										
										<td id="admin-panel-menu" onclick="window:location='user-management.php'">
											<div>
												<img src="icons/admin/user_managment.png">
											</div>
											<div>
												User Management
											</div>
										</td>
										
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/groups.png">
											</div>
											<div>
												Groups
											</div>
										</td>
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/content_approval.png">
											</div>
											<div>
												Content Approval
											</div>
										</td>
									</tr>
									<tr align="center" height="120px">
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/admin_category.png">
											</div>
											<div>
												Content Category(s)
											</div>
										</td>
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/memo.png">
											</div>
											<div>
												Memo Management
											</div>
										</td>
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/system_settings.png">
											</div>
											<div>
												System Settings
											</div>
										</td>
									</tr>
									<tr align="center" height="120px">
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/comapny_logo.png">
											</div>
											<div>
												Company Logo
											</div>
										</td>
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/poll.png">
											</div>
											<div>
												Polls
											</div>
										</td>
										<td id="admin-panel-menu">
											<div>
												<img src="icons/admin/backup.png">
											</div>
											<div>
												Backup / Restore
											</div>
										</td>
									</tr>
									<tr align="center" height="120px">
										<td id="admin-panel-menu" onclick="window:location='user-activity.php'">
											<div>
												<img src="icons/admin/user_activity.png" width="30px">
											</div>
											<div>
												User Activity
											</div>
											
										</td>
									</tr>
								</table>
							</div>
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