<div id="main-menu">
			<div style="width: 600px; height: 50px;" class="ui-widget-content">
				<div style="width: 500px; height: 50px; background: none;" class="listcontainer">
					<ul id="my-horizontal-list" style="font-size: 12px;">
					<li style="width:62px; height:50px;" id="menu-hover">
						<a href="home.php" style="color: white; text-decoration: none;">
							&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/home.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;Home
						</a>
					</li>
					<li style="width:70px; height:50px;" id="menu-hover">
						<a href="mypage.php" style="color: white; text-decoration: none;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/my_page.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;My Page
						</a>
					</li>
					<li style="width:150px; height:50px;" id="menu-hover">
						<a href="#" style="color: white; text-decoration: none;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;<img src="icons/employee.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee Directory
						</a>
					</li>
					<li style="width:128px; height:50px;" id="menu-hover">
						<a href="#" style="color: white; text-decoration: none;" id="case_menu">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/case.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Case Records <img src="icons/Arrow-Down-icon.png" style="width: 8px;">
						</a>
					</li>
					<li style="width:60px; height:50px;" id="menu-hover">
						<a href="#" style="color: white; text-decoration: none;">
							&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/task.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;Tasks
						</a>
					</li>
					<li style="width:100px; height:50px;" id="menu-hover">
						<a href="#" style="color: white; text-decoration: none;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/document.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Documents
						</a>
					</li>
					<li style="width:128px; height:50px;" id="menu-hover">
						<a href="#" style="color: white; text-decoration: none;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/cms.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Intranet Contents
						</a>
					</li>
					<li style="width:67px; height:50px;" id="menu-hover">
						<a href="#" style="color: white; text-decoration: none;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/memo.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memo
						</a>
					</li>
					<li style="width:105px; height:50px;" id="menu-hover">
						<?php
							$sql = "Select * From tb_users Where userid='$userid_log'";
							foreach($dbh->query($sql) as $result) {
								$userlog_type = $result['usertype'];
							}
							if($userlog_type=="admin") {
						?>
						<a href="admin.php" style="color: white; text-decoration: none;" onclick="success_notif_admin();">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/admin.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin Area
						</a>
						<?php }else{ ?>
						<a href="#" style="color: white; text-decoration: none;" onclick="error_notif_admin()">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/admin.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin Area
						</a>
						<?php } ?>
					</li>
					<li style="width:67px; height:50px;" id="menu-hover">
						<a href="#" style="color: white; text-decoration: none;">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/report.png"><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report
						</a>
					</li>
					</ul>
					<div style="display: none;" class="arrow left"></div>
					<div style="display: none;" class="arrow right"></div>
				</div>
			</div>
			<div id="menudiv" style="position: fixed; background: none; display: none; width: 558px;">
				<div id="style-sub-menu"></div>
					<p id="style-sub-menu-header">&nbsp;Case Records</p>
					<ul style="margin-top: -10px; background: white; border-left: 1px solid lightgrey; border-right: 1px solid lightgrey;">
					<li><a href="#">Civil Matters</a><br /></li>
					<li><a href="#">Criminal Matters</a><br /></li>
					<li><a href="#" id="case_submenu-agreements">Agreements</a>&nbsp;<img src="icons/Arrow-Down-icon.png" style="width: 8px;"><br /></li>   
						<div id="sub_menudiv-agreements" style="positon: fixed; background: #fff; display: none;">
						<ul>
							<li><a href="#" id="">Leases</a><br /></li>
							<li><a href="#" id="">Deed of Assignment</a><br /></li>
							<li><a href="#" id="">Power of Attorney</a><br /></li>
							<li><a href="#" id="">MOU</a><br /></li>
							<li><a href="#" id="">General Contract</a></li>
						</ul>
						</div>
					<li><a href="#" id="case_submenu-probate">Probate</a>&nbsp;<img src="icons/Arrow-Down-icon.png" style="width: 8px;"><br /> </li>
						<div id="sub_menudiv-probate" style="positon: fixed; background: #fff; display: none;">
						<ul>
							<li><a href="#" id="">Wills</a><br /></li>
							<li><a href="#" id="">Letter of Administration</a><br /></li>
						</ul>
						</div>
					<li><a href="#" id="A3">Secretarial Administration</a>	</li>
					<li style="list-style: none; margin-left: -40px;"><p id="style-sub-menu-header">&nbsp;</p></li>
					</ul>
				
			</div>
			
			<!--Start of user menu / Search-->	
				<span style="display: inline-block; width: 3em; height: 3em"><span style="position: relative; display: inline-block; width: 3em; height: 3em"><i style="position: absolute;display:inline-block;width:0;height:0;line-height:0;border:1.5em solid transparent;border-right:1.5em solid #069eec;border-top:1.5em solid #069eec;left:0em;top:0em; margin-top: -130px; margin-left: 1px;"></i></span></span>
				<div id="user-menu">
					
						<div class="btn-group">
							<a class="btn btn-primary" style="height: 30px; padding: 4px;" href="#">
								<?php
									if($profile_pic == "") {
								?>
								<i class="glyphicon glyphicon-user"></i> 
								<?php } else { ?>
								<img src="uploads/<?=$profile_pic;?>" width="20px" height="20px" class="img-polaroid">
								<?php } ?>
								<?=$username_log;?>
								
							</a>
								<a class="btn btn-primary dropdown-toggle" style="height: 30px;" data-toggle="dropdown" href="#"><span style="margin-top: 7px;" class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="edit-user.php?pagename=<?=$page_name[1];?>&&userlogid=<?=$userid_log;?>" rel="facebox"><i class="glyphicon glyphicon-pencil" ></i> Update Account</a></li>
									<li><a href="update-profile-pic.php?pagename=<?=$page_name[1];?>&&userlogid=<?=$userid_log;?>" rel="facebox"><i class="glyphicon glyphicon-picture"></i> Update Profile Picture</a></li>
									<li class="divider"></li>
									<li><a href="logout.php"><i class="glyphicon glyphicon-ban-circle"></i> Logout</a></li>
								</ul>
						</div>
						
						<div id="search">
							<div class="input-group-btn1">
								<span style="color: #4c66a4; margin-top: 5px; margin-left: 4px;" class="glyphicon glyphicon-search"></span>
								<div class="content">
									<input type="text" class="search" id="searchid" placeholder="Search for people" /><br /> 
								</div>
							</div>
							
						</div>
					
				</div>
				<!--End of user menu / Search-->	
		
			</div>
			
				</div>
				
			</div>
			