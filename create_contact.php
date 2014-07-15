<?php
	require_once('config/connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Add Contact</title>
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
	<h4 id="upload-doc-header">&nbsp;&nbsp;&nbsp;Add Contact</h4>
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
		<form  method="post" name="form" action="exec_create_schedule.php?redirect_page=<?=$get_page;?>" id="addSchedForm" >
			<div style="border-bottom: 2px solid grey; color: grey; font-weight: bold; margin-bottom: 15px;">Contact Information</div>
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
					<input type="text" name="company" class="form-control" placeholder="Company" style="width: 330px" value="<?php if(!empty($bdate_edit)){echo $bdate_edit;}?>" required>
			</div>
			<div class="form-group">
					<input type="text" name="job_title" class="form-control" placeholder="Job Title" style="width: 330px" value="<?php if(!empty($bdate_edit)){echo $bdate_edit;}?>" required>
			</div>
			<div class="form-group">
					<input type="text" name="group" class="form-control" placeholder="Group" style="width: 330px" value="<?php if(!empty($bdate_edit)){echo $bdate_edit;}?>" required>
			</div>
			<div class="form-group">
					<input type="email" pattern="[^ @]*@[^ @]*" name="email" class="form-control" placeholder="E-mail Address" style="width: 330px" value="<?php if(!empty($bdate_edit)){echo $bdate_edit;}?>" required>
			</div>
			<div style="border-bottom: 2px solid grey; color: grey; font-weight: bold; margin-bottom: 15px;">Phone Numbers</div>
			<div class="form-group">
					<input type="tel" pattern="[0-9]{10,10}" name="home_number" class="form-control" placeholder="Home" style="width: 160px" required>
				<div style="margin-top: -34px; margin-left: 170px;">
					<input type="text" name="work_number" class="form-control" placeholder="Work" style="width: 160px" required>
				</div>
			</div>
			<div class="form-group">
					<input type="text" name="cell_number" class="form-control" placeholder="Cell" style="width: 160px" required>
				<div style="margin-top: -34px; margin-left: 170px;">
					<input type="text" name="fax_number" class="form-control" placeholder="Fax" style="width: 160px" required>
				</div>
			</div>
			<div style="border-bottom: 2px solid grey; color: grey; font-weight: bold; margin-bottom: 15px;">Address</div>
			<div class="form-group">
					<input type="text" name="street" class="form-control" placeholder="Street" style="width: 330px" value="<?php if(!empty($bdate_edit)){echo $bdate_edit;}?>" required>
			</div>
			<div class="form-group">
					<input type="text" name="apt/unit" class="form-control" placeholder="Apt/Unit" style="width: 330px" value="<?php if(!empty($bdate_edit)){echo $bdate_edit;}?>" required>
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
			$('#schedule_date').datepicker({
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