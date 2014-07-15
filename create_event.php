<?php
	require_once('config/connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Create New Event</title>
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
</head>
<body>
	<h4 id="upload-doc-header">&nbsp;&nbsp;&nbsp;Create New Event</h4>
	<span style="display: inline-block; width: 13px; height: 3px"><span style="position: relative; display: inline-block; width: 3px; height: 3px"><i style="position: absolute;display:inline-block;width:0;height:0;line-height:0;border:13px solid transparent;border-right:13px solid #067eba;border-top:13px solid #067eba;left:0px;top:0px; margin-left: -36px; margin-top: -10px;"></i></span></span>
	
	<div id="wrapper-upload-files" style="width: 500px;">
		<script type="text/javascript">
			$(document).ready(function() {
					$('#btnCreateEvent').live("click", function() { 
					
					var title = $("#title").val();
					
					jQuery.facebox(function() { 
						var form_data = {
							title: title
						};
						$.ajax({
							url: "exec_create_event.php",
							type: 'POST',
							data: form_data,
							success: function(data) {
								jQuery.facebox(data);
							},
							error: function() {
								$.facebox('There was an error.');
							}
							)
						});
					})
				})
			});
			
		</script>
		
		<script type="text/javascript" language="javascript">
			function validateEventForm(){
				var form=document.getElementById("addEventForm");
				var title=form["title"].value;
				if(title!=""){
					$.facebox.close();
				}
			}
		</script>
		<?php
			$get_page = $_GET['pagename'];
		?>
		<form  method="post" name="form" action="exec_create_event.php?redirect_page=<?=$get_page;?>" id="addEventForm" >
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="title" id="title" class="form-control" placeholder="Event Name" required>
			</div>
			<div class="form-group">
					<label for="name">Details</label>
					<textarea name="details" id="details" class="form-control" rows="3" placeholder="Event Details" required></textarea>
			</div>
			<div class="form-group">
				<label for="name">Where</label>
				<input type="text" name="place" id="title" class="form-control" placeholder="Event Place" required>
			</div>
			<div class="form-group">
				<label for="name">When</label>
					<input type="text" name="date" id="event_date" class="form-control" placeholder="Event Date" style="width: 140px" required>
				
				<div style="margin-top: -20px; margin-left: 150px;">
					<input type="text" name="time" class="form-control" placeholder="Add Time?" style="width: 100px; margin-top: -34px;">
				</div>
			</div>
			<div class="form-group">
				<label for="name">Visibility</label>
				<select class="form-control" name="visibility">
					<option value="Public">Public</option>
					<option value="Private">Private</option>
				</select>
			</div>
			<div class="form-actions">
				<input type="submit" name="btnCreateEvent" value="Create Event" class="btn btn-primary btn-large" id="btnCreateEvent" onclick="validateEventForm();">
				<!--$.facebox.close()-->
			</div>
		</form>
		<div class="progressBar">
			<div class="status"></div>
		</div>
	</div>
	<script>
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#event_date').datepicker({
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