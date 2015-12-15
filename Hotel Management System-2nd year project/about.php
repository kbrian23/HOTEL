
<!DOCTYPE HTML>
<html>
<head>
<title>About us | Paradise Hotel</title>
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
				<h4>ONE OF THE LEADING HOTELS IN THE WORLD</h4>
				<p class="para">
Paradise's Uganda flagship, the Paradise Hotel is an inspirational blend of 5-star polish, pan-African panache, social style and business reliability.
Ideally located at the very heart of Kampala, our luxury business hotel stands amidst 7.2 acres of landscaped grounds and water gardens. An oasis of cool and green, encircled by the seven hills of Kampala, this 152-room world-class hotel is the focal point of national, regional, business, political and social life.
Drawing its architectural inspiration from the abundance of Uganda's lakes and rivers, the hotel has been created around a central water theme, which manifests itself both in the extensive water gardens and in the hand-carved panels and shimmering mosaics with which it is decorated.
Inspirationally styled as a Kampala showcase for Ugandan art, this unique 5-star hotel offers; an international conference centre, a garden auditorium, a roof-top terrace, a rock-sculptured pool terrace, three restaurants, two bars and the Moorish palace of the ‘Maisha Mind Body and Spirit Spa'.

</p>			</div>
				<div class="grids_of_2">
					<div class="grids_of_img">
						
					</div>
					<div class="grids_of_para">
						
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