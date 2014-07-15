	<?php require_once('config/connection.php');?>
	
	<?php
	$get_pagename = $_GET['redirect_page'];
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			$randomNum = time()."".rand(1000000, 1000000);
	
			$currentFileName = explode('.', $_FILES['image']['name']);
			
			$newFileName = "profilePicUploaded"."-".sha1($randomNum).".".$currentFileName[1];
			
			$currPic = $_POST['currentpic'];
			//delete current profile pic
			unlink('uploads/'.$currPic);
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $newFileName);
			
			$location=$newFileName;
			$userlogid = $_POST['userlogid'];
			
			if(!$update=mysql_query("UPDATE tb_users SET photoupload = '$location' WHERE userid='$userlogid'")) {
			
				echo mysql_error();
				
				
			}
			else{
			
			header("location: $get_pagename");
			exit();
			}
			}
	}


?>