<?php
	$get_pagename = $_GET['pagename'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Upload your documents</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	
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
	<h4 id="upload-doc-header">&nbsp;&nbsp;&nbsp;Upload your documents</h4>
	<span style="display: inline-block; width: 13px; height: 3px"><span style="position: relative; display: inline-block; width: 3px; height: 3px"><i style="position: absolute;display:inline-block;width:0;height:0;line-height:0;border:13px solid transparent;border-right:13px solid #067eba;border-top:13px solid #067eba;left:0px;top:0px; margin-left: -36px; margin-top: -10px;"></i></span></span>
	<h5 style="width: 400px;"><pre>Upload your documents below and select the visibility of your file upload.</pre></h5>
	
	<div id="wrapper-upload-files">
		<?php
			$get_page = $_GET['pagename'];
		?>
		<form name="demoFiler" id="demoFiler" enctype="multipart/form-data" method="post" action="exec_upload_documents.php?redirect_page=<?=$get_page;?>">
			<input type="hidden" name="pagename" value="<?=$get_pagename;?>"/>
			<input type="file" name="uploaded_file" style="visibility:hidden;" id="pdffile" />
			<div class="form-group">
				<label class="control-label" for="inputEmail">Document</label>
				<div class="controls">
						<input type="text" id="subfile" class="form-control" placeholder="Document" style="width: 250px;" required>
						<div style="margin-top: -34px; margin-left: 260px;">
							<a class="btn1" onclick="$('#pdffile').click();" style="text-decoration: none;">Browse</a>
						</div>
				</div>
			</div>
			<div class="form-group">
				<label for="name">Title</label>
				<input type="text" name="title" class="form-control" placeholder="Title" required>
			</div>
			<div class="form-group">
					<label for="name">Description</label>
					<textarea name="description" id="desc" class="form-control" rows="3" placeholder="Description" required></textarea>
			</div>
			<div class="form-group">
				<label for="name">Visibility</label>
				<select class="form-control" name="visibility">
					<option value="Public">Public</option>
					<option value="Private">Private</option>
				</select>
			</div>
			<div class="form-actions">
				<input type="submit" value="Upload document" id="upld" class="buttonUpload1 btn btn-primary btn-large"/>
				<!--onClick="$.facebox.close();"-->
			</div>
		</form>
		<div class="progressBar">
			<div class="status"></div>
		</div>
	</div>
</body>
</html>