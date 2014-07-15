<?php
include('includes/connection.php');
if($_POST)
{
    $q = mysql_real_escape_string($_POST['search']);
    $strSQL_Result = mysql_query("select * from name where name like '%$q%' or id like '%$q%' order by id LIMIT 5");
	if(mysql_num_rows($strSQL_Result) >= 1) {
		 while($row=mysql_fetch_array($strSQL_Result))
		{
        $username   = $row['name'];
        $email      = $row['id'];
        $b_username = '<strong>'.$q.'</strong>';
        $b_email    = '<strong>'.$q.'</strong>';
        $final_username = str_ireplace($q, $b_username, $username);
        $final_email = str_ireplace($q, $b_email, $email);
        ?>
            <div class="show" align="left">
                <img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn1/27301_312848892150607_553904419_n.jpg" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
            </div>
        <?php
		}
	} else {
		echo "Keyword not found: ".$q;
	}
   
}
?>