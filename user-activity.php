<?php
	include 'config/connection.php';
	
	if(!isset($_SESSION['userid'])) {
		echo "<script>window: location='index.php'</script>";
	}
	
	$username_log = $_SESSION['username'];
	
	require_once('includes/header.php');
	require_once('includes/main-menu.php');
?>
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
								<table width="500px" align="center">
									<thead>
										<th>Useraname</th>
										<th>Activity</th>
										<th>Datetime</th>
									</thead>
								<?php
									$sql_userActivity = "Select * From tb_useractivity Order By useract_id DESC";
									foreach ($dbh->query($sql_userActivity) as $resultActivity) {
										echo "<tr>";
										echo "<td>".$resultActivity['username']."</td>";
										echo "<td>".$resultActivity['activity']."</td>";
										echo "<td>".$resultActivity['datetime']."</td>";
										echo "</tr>";
									}
								?>
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