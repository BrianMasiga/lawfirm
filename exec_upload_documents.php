<?php
$get_pagename = $_GET['redirect_page'];
require_once('config/connection.php');
//http://en.wikipedia.org/wiki/Internet_media_type - list of mime file

if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  
	$randomNum = time()."".rand(1000000, 1000000);
	
	$currentFileName = explode('.', $_FILES['uploaded_file']['name']);
	
	$filename = "fileUploaded"."-".sha1($randomNum).".".$currentFileName[1];
    
      $newname = dirname(__FILE__).'/upload_documents/'.$filename;
      
      if (!file_exists($newname)) {
        
		//Insert filename of uploaded files
		$title = $_POST['title'];
		$description = $_POST['description'];
		$visibility = $_POST['visibility'];
		try {			
			$dbh->exec("INSERT INTO tb_doc_upload (filename, title, description, firstname, lastname, username, datetime, category, status, visibility) VALUES ('$filename', '$title', '$description', '$firstname_log', '$lastname_log', '$username_log', now(), 'Document', 'Add', '$visibility') ");
			
			$dbh->exec("INSERT INTO tb_notifications (title, description, firstname, lastname, username, datetime, category, status, visibility) VALUES ('$title', '$description', '$firstname_log', '$lastname_log', '$username_log', now(), 'Documents', 'Add', '$visibility')");

			/*** close the database connection ***/
			$dbh = null;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
		}
		
		
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
			header("location: $get_pagename");
		 
        } else {
           echo "Error: A problem occurred during file upload!";
        }
      } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
      }
} else {
 echo "Error: No file uploaded";
}
?>