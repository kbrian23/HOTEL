<?php

include_once 'dbconnect.php';

if(isset($_POST['btn-Create']))
{
	$contact_id = mysql_real_escape_string($_POST['contact_id']);
	$userName = mysql_real_escape_string($_POST['userName']);
	$userEmail = mysql_real_escape_string($_POST['userEmail']);
	$userPhone = mysql_real_escape_string($_POST['userPhone']);
	$userMsg = mysql_real_escape_string($_POST['userMsg']);
	
	
	if(mysql_query("INSERT INTO contact(contact_id,userName,userEmail,userPhone,userMsg) VALUES('$contact_id','$userName','$userEmail','$userPhone','$userMsg')"))
	{
		?> 
         <script>alert('successfully added to the database.');</script>
		<?php
    }
	else {
		?> 
         <script>alert('Sorry !!! Check Well your details information well .');</script>
		<?php 
		}
}	
?>
