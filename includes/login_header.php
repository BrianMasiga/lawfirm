<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="shortcut icon" href="_img/logo.jpg"/>
		<link href="css/style.css" rel="stylesheet">
		<title>Complete Law Firm Management Software</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
		<link href="css/docs.css" rel="stylesheet" media="screen">
		<link href="css/diapo.css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" rel="stylesheet" media="screen">
	<!-- js -->			
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.hoverdir.js"></script>
		
		<link href="hover_scroll/jquery-ui-1.css" type="text/css" rel="stylesheet">
		<link href="hover_scroll/jquery.css" type="text/css" rel="stylesheet">
	
		<script type="text/javascript" src="hover_scroll/jquery-1.js"></script>
		<script type="text/javascript" src="hover_scroll/jquery-ui-1.js"></script>
		<script type="text/javascript" src="hover_scroll/jquery.js"></script>
		<script type="text/javascript" src="hover_scroll/main.js"></script>
		
	<!--Facebox-->
		<script type="text/javascript" src="js/jquery.form.js"></script>
		<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
		<script src="facebox/facebox.js" type="text/javascript"></script> 
		<script type="text/javascript">
			$(document).ready(function(){
				 $(".contimage").hover(function() {
						$(this).animate({
							opacity:1
						},200);
					}, function() {
						$(this).animate({
							opacity:0.8
						},200);
					});
					$('#submitform').ajaxForm({
						target: '#error',
						success: function() {
						$('#error').fadeIn('slow');
						}
				});
			$('a[rel*=facebox]').facebox()
				 }); 
		</script>
	<!-- Boxes -->	
		<script src="js/login.js"></script>
		
		<script>
			$(document).ready(function(){
				$("#case_menu").click(function () {
					if ($("#menudiv").is(":hidden")) {
						$("#menudiv").slideDown("slow");
					} else {
						$("#menudiv").slideUp("slow");
					}
				});
				
				$("#menudiv").mouseleave(function(){
					$(this).slideUp("slow");
					$("#sub_menudiv-agreements").slideUp("slow");
					$("#sub_menudiv-probate").slideUp("slow");
				});
				$("#menu_opener1").click(function(){
					$("#menudiv").slideUp("slow");
				});
		
				$("#case_submenu-agreements").click(function () {
					if ($("#sub_menudiv-agreements").is(":hidden")) {
						$("#sub_menudiv-probate").slideUp("slow");
						$("#sub_menudiv-agreements").slideDown("slow");
					} else {
						$("#sub_menudiv-agreements").slideUp("slow");
					}
				});
				
				$("#case_submenu-probate").click(function () {
					if ($("#sub_menudiv-probate").is(":hidden")) {
						$("#sub_menudiv-agreements").slideUp("slow");
						$("#sub_menudiv-probate").slideDown("slow");
					} else {
						$("#sub_menudiv-probate").slideUp("slow");
					}
				});
				
		
			});
			 
			$(document).ready(function() {

			  $("#footer-menu").click(function(){
				 $(".show-footer-menu").show( 'slow', function(){ 
					 $(".log").text('Slide Down Transition Complete');
				  });
			  });

			  $("#up").click(function(){
				 $(".show-footer-menu").hide( 'slow', function(){ 
					 $(".log").text('Slide Up Transition Complete');
				  });
			  });

		   });
 
	</script>
	<script type="text/javascript">
		<!--Notification tab functions-->
		$(document).ready(function(){
				$(".doc").click(function () {
					if ($(".doc_notify").is(":hidden")) {
						$(".all_notify").css({"display":"none"});
						$(".event_notify").css({"display":"none"});
						$(".sched_notify").css({"display":"none"});
						$(".contact_notify").css({"display":"none"});
						$(".task_notify").css({"display":"none"});
						$(".memo_notify").css({"display":"none"});
						$(".doc_notify").fadeIn("slow");
						$(".doc_notify").load("doc_notify.php");
						$(".doc").css({"background":"white"});
						$(".doc").css({"color":"#069fec"});
						$(".all").css({"background":"transparent"});
						$(".all").css({"color":"#fff"});
						$(".event").css({"background":"transparent"});
						$(".event").css({"color":"#fff"});
						$(".contact").css({"background":"transparent"});
						$(".contact").css({"color":"#fff"});
						$(".task").css({"background":"transparent"});
						$(".task").css({"color":"#fff"});
						$(".memo").css({"background":"transparent"});
						$(".memo").css({"color":"#fff"});
					}
				});
				$(".all").click(function () {
					if ($(".all_notify").is(":hidden")) {
						$(".doc_notify").css({"display":"none"});
						$(".event_notify").css({"display":"none"});
						$(".sched_notify").css({"display":"none"});
						$(".contact_notify").css({"display":"none"});
						$(".task_notify").css({"display":"none"});
						$(".memo_notify").css({"display":"none"});
						$(".all_notify").fadeIn("slow");
						$(".doc").css({"background":"transparent"});
						$(".doc").css({"color":"#fff"});
						$(".event").css({"background":"transparent"});
						$(".event").css({"color":"#fff"});
						$(".all").css({"background":"white"});
						$(".all").css({"color":"#069fec"});
						$(".contact").css({"background":"transparent"});
						$(".contact").css({"color":"#fff"});
						$(".task").css({"background":"transparent"});
						$(".task").css({"color":"#fff"});
						$(".memo").css({"background":"transparent"});
						$(".memo").css({"color":"#fff"});
					}
				});
				$(".event").click(function () {
					if ($(".event_notify").is(":hidden")) {
						$(".doc_notify").css({"display":"none"});
						$(".all_notify").css({"display":"none"});
						$(".sched_notify").css({"display":"none"});
						$(".contact_notify").css({"display":"none"});
						$(".task_notify").css({"display":"none"});
						$(".memo_notify").css({"display":"none"});
						$(".event_notify").fadeIn("slow");
						$(".event").css({"background":"white"});
						$(".event").css({"color":"#069fec"});
						$(".doc").css({"background":"transparent"});
						$(".doc").css({"color":"#fff"});
						$(".all").css({"background":"transparent"});
						$(".all").css({"color":"#fff"});
						$(".sched").css({"background":"transparent"});
						$(".sched").css({"color":"#fff"});
						$(".contact").css({"background":"transparent"});
						$(".contact").css({"color":"#fff"});
						$(".task").css({"background":"transparent"});
						$(".task").css({"color":"#fff"});
						$(".memo").css({"background":"transparent"});
						$(".memo").css({"color":"#fff"});
					}
				});
				$(".sched").click(function () {
					if ($(".sched_notify").is(":hidden")) {
						$(".doc_notify").css({"display":"none"});
						$(".all_notify").css({"display":"none"});
						$(".event_notify").css({"display":"none"});
						$(".contact_notify").css({"display":"none"});
						$(".task_notify").css({"display":"none"});
						$(".memo_notify").css({"display":"none"});
						$(".sched_notify").fadeIn("slow");
						$(".sched").css({"background":"white"});
						$(".sched").css({"color":"#069fec"});
						$(".event").css({"background":"transparent"});
						$(".event").css({"color":"#fff"});
						$(".doc").css({"background":"transparent"});
						$(".doc").css({"color":"#fff"});
						$(".all").css({"background":"transparent"});
						$(".all").css({"color":"#fff"});
						$(".contact").css({"background":"transparent"});
						$(".contact").css({"color":"#fff"});
						$(".task").css({"background":"transparent"});
						$(".task").css({"color":"#fff"});
						$(".memo").css({"background":"transparent"});
						$(".memo").css({"color":"#fff"});
					}
				});
				$(".contact").click(function () {
					if ($(".contact_notify").is(":hidden")) {
						$(".doc_notify").css({"display":"none"});
						$(".all_notify").css({"display":"none"});
						$(".event_notify").css({"display":"none"});
						$(".sched_notify").css({"display":"none"});
						$(".task_notify").css({"display":"none"});
						$(".memo_notify").css({"display":"none"});
						$(".contact_notify").fadeIn("slow");
						$(".contact").css({"background":"white"});
						$(".contact").css({"color":"#069fec"});
						$(".event").css({"background":"transparent"});
						$(".event").css({"color":"#fff"});
						$(".doc").css({"background":"transparent"});
						$(".doc").css({"color":"#fff"});
						$(".all").css({"background":"transparent"});
						$(".all").css({"color":"#fff"});
						$(".sched").css({"background":"transparent"});
						$(".sched").css({"color":"#fff"});
						$(".task").css({"background":"transparent"});
						$(".task").css({"color":"#fff"});
						$(".memo").css({"background":"transparent"});
						$(".memo").css({"color":"#fff"});
					}
				});
				$(".task").click(function () {
					if ($(".task_notify").is(":hidden")) {
						$(".doc_notify").css({"display":"none"});
						$(".all_notify").css({"display":"none"});
						$(".event_notify").css({"display":"none"});
						$(".sched_notify").css({"display":"none"});
						$(".contact_notify").css({"display":"none"});
						$(".memo_notify").css({"display":"none"});
						$(".task_notify").fadeIn("slow");
						$(".task").css({"background":"white"});
						$(".task").css({"color":"#069fec"});
						$(".event").css({"background":"transparent"});
						$(".event").css({"color":"#fff"});
						$(".doc").css({"background":"transparent"});
						$(".doc").css({"color":"#fff"});
						$(".all").css({"background":"transparent"});
						$(".all").css({"color":"#fff"});
						$(".sched").css({"background":"transparent"});
						$(".sched").css({"color":"#fff"});
						$(".contact").css({"background":"transparent"});
						$(".contact").css({"color":"#fff"});
						$(".memo").css({"background":"transparent"});
						$(".memo").css({"color":"#fff"});
					}
				});
				$(".memo").click(function () {
					if ($(".memo_notify").is(":hidden")) {
						$(".doc_notify").css({"display":"none"});
						$(".all_notify").css({"display":"none"});
						$(".event_notify").css({"display":"none"});
						$(".sched_notify").css({"display":"none"});
						$(".contact_notify").css({"display":"none"});
						$(".task_notify").css({"display":"none"});
						$(".memo_notify").fadeIn("slow");
						$(".memo").css({"background":"white"});
						$(".memo").css({"color":"#069fec"});
						$(".event").css({"background":"transparent"});
						$(".event").css({"color":"#fff"});
						$(".doc").css({"background":"transparent"});
						$(".doc").css({"color":"#fff"});
						$(".all").css({"background":"transparent"});
						$(".all").css({"color":"#fff"});
						$(".sched").css({"background":"transparent"});
						$(".sched").css({"color":"#fff"});
						$(".contact").css({"background":"transparent"});
						$(".contact").css({"color":"#fff"});
						$(".task").css({"background":"transparent"});
						$(".task").css({"color":"#fff"});
					}
				});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#footer-iconlist").click(function () {
				if ($("#show-footer-menu").is(":hidden")) {
					$("#show-footer-menu").slideDown("slow");
					$("#show-footer-menu").css({"position":"fixed"});
				} else {
					$("#show-footer-menu").slideUp("slow");
				}
			});
			$("#show-footer-menu").mouseleave(function()  {
				$(this).slideUp("slow");
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
		changePagination('0');    
		});
		function changePagination(pageId){
			 $(".flash").show();
			 $(".flash").fadeIn(400).html
						('Loading <img src="ajax-loader.gif" />');
			 var dataString = 'pageId='+ pageId;
			 $.ajax({
				   type: "POST",
				   url: "loadData-pagination.php",
				   data: dataString,
				   cache: false,
				   success: function(result){
				   $(".flash").hide();
						 $("#pageData").html(result);
				   }
			  });
		}
	</script>
	<script type="text/javascript">
		// function ReloadPage() {
			// location.reload();
		// };
		// $(document).ready(function() {
			// setTimeout("ReloadPage()", 10000); 
		// });
	</script>
	<script type="text/javascript">
		//Messages notifications
		function error_notif_admin(){
            notif({
				msg: "Error: You couldn't access the administration panel.",
				type: "error",
				position: "center"
			});
        }
	</script>
	</head>
	<body marginheight="0" marginwidth="0">
		<?php
			$page_index = $_SERVER["REQUEST_URI"];
			$page_name = split("/lawfirm/", $page_index);
		?>
		<div id="main-wrapper">
			<div id="header-wrapper">
				
				<div id="top-header">
				</div>
				
				<div id="middle-header">
					<div id="style-title">Complete Law Firm Management Software</div>
					<div id="style-bar-title"></div>
					<span style="display: inline-block; width: 3px; height: 3px"><span style="position: relative; display: inline-block; width: 3px; height: 3px"><i style="position: absolute;display:inline-block;width:0;height:0;line-height:0;border:12.5px solid transparent;border-right:12.5px solid #067eba;border-top:12.5px solid #067eba;left:0px;top:0px; margin-left: -24px; margin-top: px;"></i></span></span>
				</div>
					
					<span style="display: inline-block; width: 3em; height: 3em"><span style="position: relative; display: inline-block; width: 3em; height: 3em"><i style="position: absolute;display:inline-block;width:0;height:0;line-height:0;border:2.5em solid transparent;border-right:2.5em solid #069eec;border-top:2.5em solid #069eec;left:0em;top:0em; margin-left: 320px; margin-top: -20px;"></i></span></span>