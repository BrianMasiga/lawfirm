<?php
	require_once('config/connection.php');
	
	$get_updatepic_id = $_GET['userlogid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Upload your documents</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<!-- jQuery -->
		<script src="js/jquery-1.8.0.min.js"></script>
	
	<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
		<link href="css/docs.css" rel="stylesheet" media="screen">
		<link href="css/diapo.css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" rel="stylesheet" media="screen">
		<link href="css/datepicker.css" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>    
		
		
	<style>
	#imagePreview {
		width: 200px;
		height: 200px;
		background-position: center center;
		background-size: cover;
		-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
		display: inline-block;
	}
	#imagePrevievStyle {
		height: 232px;
		border-radius: 0px 0px 10px 10px;
		-moz-border-radius: 0px 0px 10px 10px;
		-webkit-border-radius: 5px 5px 5px 5px;
		border: 1px solid lightgrey;
	}
	</style>
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
</head>
<body>
	<h4 id="upload-doc-header">&nbsp;&nbsp;&nbsp;Update Profile Picture</h4>
	<span style="display: inline-block; width: 13px; height: 3px"><span style="position: relative; display: inline-block; width: 3px; height: 3px"><i style="position: absolute;display:inline-block;width:0;height:0;line-height:0;border:13px solid transparent;border-right:13px solid #067eba;border-top:13px solid #067eba;left:0px;top:0px; margin-left: -36px; margin-top: -10px;"></i></span></span>
	
	<div id="wrapper-upload-files">
		<?php
			$get_page = $_GET['pagename'];
		?>
		<form action="exec-update-profile-pic.php?redirect_page=<?=$get_page;?>" method="post" enctype="multipart/form-data">
			<div>
				<label for="name">Upload new profile image to your account</label>
			</div>
			<div id="imagePrevievStyle1">
				<?php
					$sql = "Select * From tb_users Where userid='$get_updatepic_id'";
					foreach( $dbh->query($sql) as  $result ) {
						$profile_pic = $result['photoupload'];
					}
				?>
				<div id="imagePreview" style="margin-top: 12px; margin-left: 12px;">
					<?php
						if($profile_pic != "") {
					?>
						<img src="uploads/<?=$profile_pic;?>" width='200px' height='200px'>
					<?php } else { ?>
						<img src="icons/profile.png" width="200px">
					<?php } ?>
					
				</div>
				<input type="hidden" name="currentpic" value="<?=$profile_pic;?>">
				<input type="hidden" name="userlogid" value="<?=$get_updatepic_id;?>">
				<input type="hidden" name="pagename" value="<?=$get_pagename;?>"/>
				<input type="file" name="image" style="visibility:hidden;" id="pdffile" />
				<div class="form-group" style="margin-top: 10px; margin-bottom: 30px; margin-top: -10px;">
					<div class="controls">
							<input type="text" id="subfile" class="form-control" placeholder="File Image" style="width: 203px; margin-left: 10px;" required>
							<div style="margin-top: -34px; margin-left: 230px;">
								<a class="btn1" onclick="$('#pdffile').click();" style="text-decoration: none;">Browse</a>
							</div>
					</div>
				</div>
				<br>
			</div>
			<div class="form-actions" style="margin-top: -40px;">
				<input type="submit" value="Save Profile Image" style="margin-left: 10px;" class="btn btn-primary btn-large"/>
			</div>
		</form>
		<div class="progressBar">
			<div class="status"></div>
		</div>
	</div>
</body>
</html>