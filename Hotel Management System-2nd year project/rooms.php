
<!DOCTYPE HTML>
<html>
<head>
<title>Rooms | paradise Hotel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
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
				<li><a href="index.php">Home</a></li> |
				<li><a href="about.php">About us</a></li> |
				<li><a href="rooms.php">Rooms & suites</a></li> |
				<li class="active"><a href="reservation.php">Reservation</a></li> |
				<li><a href="contact.php">Contact</a></li> |
				<li><a href="logout.php?logout">Log out</a></li>
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
				<li><a href="logout.php?logout">LOGOUT</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
			<div class="room">
				<h4>BUSINESS FRIENDLY WITH FIVE STAR AMENITIES</h4>
				<p class="para">Accommodation at Paradise Hotel offers business friendly facilities with 5 star modern and luxury amenities and services. We offer a wide range of rooms and suites, all of which are elegantly presented in a fusion of international and Ugandan style, and all of which have private balconies or terraces. Our accommodation choices are some of the finest places to stay in Kampala city.
All our rooms and suites offer: 24-hour room service, air-conditioning, Wi-Fi and in-room modem hook-up, direct-dial phone, voice-mail, complimentary newspaper, in-room satellite TV, mini bar, private safe, 240V/3 pin (square)sockets and shaver sockets, tea and coffee-making facilities, hair driers, bathrobe and slippers, porter/concierge, airport shuttle and limousine service.
Our exclusive Paradise Owesome Lounge is solely for the use of our residents and offers a stylish lounge with newspapers, periodicals and café service as well as a Bedouin-tented outdoor terrace and meeting area. Additionally, our residents are invited to use the extensive services of our Business Centre, which offers a complete range of technological support and a series of private board rooms.
While most of our rooms are designated non-smoking, a number of rooms are available for smokers, but these should be booked in advance
</p>
			</div>
				<div class="grids_of_2">
					<div class="grids_of_img">
						<h3><strong><font color="red">EXECUTIVE ROOMS</font></strong></h3>
						<img src="images/pic4.jpg" alt=""/>
					</div>
					<div class="grids_of_para">
						<p class="para">Styled in deep claret or royal blue, they feature luxuriant queen beds. Our 32 Executive Rooms, which are larger than the Deluxe Rooms, offer a spacious lounge/meeting area.
all of which feature
<ul class="s_nav">

<li>A large ensuite bathroom</li>
<li>Dressing table</li>
<li>Air conditioned</li>
<li>Spacious Room</li>
</ul>
</p>
					</div>
					<div class="clear"></div>					
				</div>
				<div class="grids_of_2">
					<div class="grids_of_img">
						
					</div>
					

					<div class="clear"></div>					
				</div>						

		</div>
		<div class="sidebar">
			 <div class="date_btn">
				<form>
					<input type="submit" value="book now" style="width: 82px;">
				</form>
			</div>
			<h4>room features</h4>
			<ul class="s_nav">
				<li>A powerful and strong laptop</a></li>
				<li>Fast Wireless internet</a></li>
				<li>A spacious bathroom</a></li>
				<li>A comfortable bed for rest </a></li>
				<li>A cell phone in case of any emergency </a></li>
			</ul>
			<h4>we accept</h4>
			<ul class="s_nav1">
				<li><a class="icon1" href="#"></a></li>
				<li><a class="icon2" href="#"></a></li>
				<li><a class="icon3" href="#"></a></li>
				<li><a class="icon4" href="#"></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>		
<!--start main -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
			<div class="copy">
				<p class="link"><span>© All rights reserved </span></p>
			</div>
			<div class="f_nav">
				<ul>
					<li><a href="index.php">home</a></li> 
				<li><a href="about.php">about us</a></li> 
					<li><a href="rooms.php">rooms & suits</a></li>
					<li><a href="reservation.php">reservation</a></li>
					<li><a href="contact.php">Contact</a></li>
				<li><a href="logout.php?logout">LOGOUT</a></li>
				</ul>
			</div>
			<div class="soc_icons">
				<ul>
					<li><a class="icon1" href="#"></a></li>
					<li><a class="icon2" href="#"></a></li>
					<li><a class="icon3" href="#"></a></li>
					<li><a class="icon4" href="#"></a></li>
					<li><a class="icon5" href="#"></a></li>
					<div class="clear"></div>
				</ul>	
			</div>
			<div class="clear"></div>
</div>
</div>
</div>		
</body>
</html>