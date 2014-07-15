<?php
	include 'config/connection.php';
	
	require_once('includes/login_header.php');
	require_once('includes/main-menu-login.php');
?>
			<div style="margin-top: -380px;"/>
			
			<div style="margin-top: 20px;"/>
			
			
			<div id="content-wrapper-page">
				<div id="left-wrapper">
					<?php
						require_once('includes/left-menu.php');
					?>
				</div>
				<div id="right-wrapper">
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
<?php
	if(isset($_SESSION['userid']) && $_SESSION['userid'] != ''){ // Redirect to secured user page if user logged in
		$success_userid_log = $_SESSION['userid'];
		
		//select username success login
		foreach($dbh->query("Select * From tb_users Where userid='$success_userid_log'") as $result) {
			$success_username_log = $result['username'];
		}
		
		//For user activity query
		$dbh->query("Insert Into tb_useractivity (username, activity, datetime) Values ('$success_username_log', 'Logon to the system', now())");
		echo '<script type="text/javascript">window.location = "home.php?login=success"; </script>';
		
	}
	require_once('includes/login_box.php');
?>