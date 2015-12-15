<?php

include_once 'dbconnect.php';

if(isset($_POST['btn-Create']))
{
	$booking_id = mysql_real_escape_string($_POST['booking_id']);
	$checkin = mysql_real_escape_string($_POST['checkin']);
	$room = mysql_real_escape_string($_POST['room']);
	$adult = mysql_real_escape_string($_POST['adult']);
	$checkout = mysql_real_escape_string($_POST['checkout']);
	$child0_5 = mysql_real_escape_string($_POST['child0_5']);
	$child6_12 = mysql_real_escape_string($_POST['child6_12']);
	
	
	if(mysql_query("INSERT INTO reservation_tbl(booking_id,checkin,room,adult,checkout,child0_5,child6_12) VALUES('$booking_id','$checkin','$room','$adult','$checkout','$child0_5','$child6_12')"))
	{
		?> 
         <script>alert('successfully added to the database.');</script>
		<?php
    }
	else
	 {
		?> 
         <script>alert('Sorry !!! Check Well your details information well .');</script>
		<?php 
	}
}	
?>
