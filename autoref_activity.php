<?php
	require_once('config/connection.php');
?>
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
								<div id="pageData"></div>