<?php
	$get_pagename = $_GET['pagename'];
	
	$get_userlogid = $_GET['userlogid'];
	
	require_once('config/connection.php');
	if(!isset($_SESSION['userid'])) {
		echo "<script>window: location='index.php'</script>";
	}
	
	foreach($dbh->query("Select * From tb_users Where userid='$get_userlogid'") as $result_user_edit) {
		
		$usertype_log = $result_user_edit['usertype'];
		
		$username_edit = $result_user_edit['username'];
		$firstname_edit = $result_user_edit['firstname'];
		$middlename_edit = $result_user_edit['middlename'];
		$lastname_edit = $result_user_edit['lastname'];
		$email_edit = $result_user_edit['email'];
		$phoneno_edit = $result_user_edit['phoneno'];
		$bdate_edit = $result_user_edit['bdate'];
		$address_edit = $result_user_edit['contactaddress'];
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Update Account</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	
	<!-- jQuery -->
	<script src="js/jquery-1.8.3.js"></script>
		
	<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
		<link href="css/docs.css" rel="stylesheet" media="screen">
		<link href="css/diapo.css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" rel="stylesheet" media="screen">
		<link href="css/datepicker.css" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>    
	
	<script>
 	$(document).ready(function(){
 		// This is the simple bit of jquery to duplicate the hidden field to subfile
 		$('#pdffile').change(function(){
			$('#subfile').val($(this).val());
		}); 

		// This bit of jquery will show the actual file input box
		$('#showHidden').click(function(){
			$('#pdffile').css('visibilty','visible');
		});
 	});
 	</script>
	<script type="text/javascript" language="javascript">
		function validateUserFormEdit(){
			var password=document.forms["editUser"]["password"].value;
			var repassword=document.forms["editUser"]["repassword"].value;
			if (password != repassword)
			  {
			  alert("Password did not match.");
			  return false;
			  }
		}
	</script>
	<link href="css/style_dragdrop.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<h4 id="upload-doc-header">&nbsp;&nbsp;&nbsp;Update Account</h4>
	<span style="display: inline-block; width: 13px; height: 3px"><span style="position: relative; display: inline-block; width: 3px; height: 3px"><i style="position: absolute;display:inline-block;width:0;height:0;line-height:0;border:13px solid transparent;border-right:13px solid #067eba;border-top:13px solid #067eba;left:0px;top:0px; margin-left: -36px; margin-top: -10px;"></i></span></span>
	
	<div id="wrapper-upload-files" style="width: 500px;">
		<?php
			$get_page = $_GET['pagename'];
		?>
		<form name="editUser" enctype="multipart/form-data" method="post" action="exec_edit_user.php?redirect_page=<?=$get_page;?>" onsubmit="return validateUserFormEdit()">
			<div style="border-bottom: 2px solid grey; color: grey; font-weight: bold; margin-bottom: 15px;"><?php if($usertype_log=="admin" || $usertype_log=="staff"){echo "Personal";}else{echo "Client";}?> Information</div>
			<div class="form-group">
					<input type="hidden" name="editid" value="<?=$get_userlogid;?>">
					<input type="text" name="firstname" class="form-control" placeholder="Firstname" style="width: 160px" value="<?php if(!empty($firstname_edit)){echo $firstname_edit;}?>" required>
				<div style="margin-top: -34px; margin-left: 170px;">
					<input type="text" name="middlename" class="form-control" placeholder="Middlename" style="width: 160px" value="<?php if(!empty($middlename_edit)){echo $middlename_edit;}?>" required>
				</div>
				<div style="margin-top: -34px; margin-left: 340px;">
					<input type="text" name="lastname" class="form-control" placeholder="Lastname" style="width: 160px" value="<?php if(!empty($lastname_edit)){echo $lastname_edit;}?>" required>
				</div>
			</div>
			<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Email" style="width: 160px" value="<?php if(!empty($email_edit)){echo $email_edit;}?>" required>
				<div style="margin-top: -34px; margin-left: 170px;">
					<input type="text" name="phoneno" class="form-control" placeholder="Phone Number" style="width: 160px" value="<?php if(!empty($phoneno_edit)){echo $phoneno_edit;}?>" required>
				</div>
			</div>
			<div class="form-group">
					<input type="text" name="bdate" class="form-control" id="birthdate" placeholder="Birth Date" style="width: 160px" value="<?php if(!empty($bdate_edit)){echo $bdate_edit;}?>" required>
			</div>
			<div class="form-group">
					<textarea name="address" id="desc" class="form-control" rows="2" placeholder="Address" required><?php if(!empty($address_edit)){echo $address_edit;}?></textarea>
			</div>
			<div style="border-bottom: 2px solid grey; color: grey; font-weight: bold; margin-bottom: 15px;">User Information</div>
			<div class="form-group">
					<input type="text" name="username" class="form-control" id="birthdate" placeholder="Username" style="width: 160px" value="<?php if(!empty($username_edit)){echo $username_edit;}?>" readonly="readonly">
			</div>
			<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="New Password" style="width: 160px">
				<div style="margin-top: -34px; margin-left: 170px;">
					<input type="password" name="repassword" class="form-control" placeholder="Confirm New Password" style="width: 170px">
				</div>
			</div>
			<div class="form-group">
					<input type="text" name="curr_password" class="form-control" placeholder="Current Password" style="width: 160px" required>
			</div>
			<div class="form-actions">
				<input type="submit" value="Save Info" class="btn btn-primary btn-large"/>
				<!--onClick="$.facebox.close();"-->
			</div>
		</form>
		<div class="progressBar">
			<div class="status"></div>
		</div>
	</div>
	<script>
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#birthdate').datepicker({
				format: 'dd-mm-yyyy',
                todayBtn: 'linked'
			});
			
			$('#end_date').datepicker({
				format: 'dd-mm-yyyy',
                todayBtn: 'linked'
			});
            
			$('#dp2').datepicker();
            $('#btn2').click(function(e){
                e.stopPropagation();
                $('#dp2').datepicker('update', '03/17/12');
            });             
            
			$('#dp3').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});
                
            //inline    
            $('#dp6').datepicker({
                todayBtn: 'linked'
            });
                
            $('#btn6').click(function(){
                $('#dp6').datepicker('update', '15-05-1984');
            });            
            
            $('#btn7').click(function(){
                $('#dp6').data('datepicker').date = null;
                $('#dp6').find('.active').removeClass('active');                
            });            
		});
	</script>
</body>
</html>