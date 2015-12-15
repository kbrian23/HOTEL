

<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('email address and password are not matching, please try again your luck');</script>
        <?php
	}
	
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Welcome - <?php echo $userRow['email']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="js/jquery.min.js"></script>
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
		<script type="text/javascript" src="js/JFCore.js"></script>
		<script type="text/javascript" src="js/JFForms.js"></script>
		<!-- Set here the key for your domain in order to hide the watermark on the web server -->
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>
<!--nav-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>

</head>
<body>
<!-- start header -->

<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<img src="images/logo.png" alt="">
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
		
				<div id="header">
	<div id="right">
    </div>
    
</div>
				<div class="clear"></div>
			</ul>
			
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li><a href="index.php">home</a></li> 
				<li><a href="about.php">about us</a></li> 
				<li><a href="rooms.php">rooms & suits</a></li> 
				<li><a href="reservation.php">reservation</a></li> 
				
				<li><a href="contact.php">contact</a></li>
				<li><a href="login.php">login</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1 align="center"><b><font color="white" size="10px" >WELCOME TO PARADISE HOTEL</font></b></h1><br /><h3 align="center"><font color="yellow" size="5px">"Home For Every One"</font></h3>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">LOGIN</button></td>
</tr>
<tr>
<td>New user <a href="register.php">&nbsp;<font color='white'><u>Register here</u></font></a></td>
</tr>
</table>
</form>
</div>
</center>











		
<!--start main -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
			
			<div class="clear"></div>
</div>
</div>
</div>		
</body>
</html>