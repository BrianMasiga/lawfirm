<?php
	$get_download_id = $_GET['download_id'];
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
	<link href="css/style_dragdrop.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<h4 id="upload-doc-header">&nbsp;&nbsp;&nbsp;Download document</h4>
	<span style="display: inline-block; width: 13px; height: 3px"><span style="position: relative; display: inline-block; width: 3px; height: 3px"><i style="position: absolute;display:inline-block;width:0;height:0;line-height:0;border:13px solid transparent;border-right:13px solid #067eba;border-top:13px solid #067eba;left:0px;top:0px; margin-left: -36px; margin-top: -10px;"></i></span></span>
	<h5 style="width: 400px;"><pre>Download the uploaded document by clicking the button below.</pre></h5>
	
	<div id="wrapper-upload-files">
		<?php
				require_once('config/log_connection.php');
				
				$sql = "Select * From tb_doc_upload Where id='$get_download_id'";
				foreach($dbh->query($sql) as $result_download) {
					$donwload_doc = $result_download['filename'];
				}
			
		?>
			<div class="form-actions">
				<a href='file-download.php?filename=<?=$donwload_doc;?>'>
					<button type="submit" name="doc_downloadid" class="btn btn-primary btn-large" onClick="$.facebox.close();">
					<i class="glyphicon glyphicon-download"></i> Download</button>
				</a>
			</div>
		<div class="progressBar">
			<div class="status"></div>
		</div>
	</div>
</body>
</html>