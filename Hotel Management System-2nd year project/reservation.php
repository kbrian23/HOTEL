
<!DOCTYPE HTML>
<html>
<head>
<title>Reservation | Paradise hotel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker2" ).datepicker();
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
	<div class="room">
		<p>&nbsp;</p>
		<h4>BOOKING INFORMATION</h4>
			<p class="para">Offering an outdoor pool and a restaurant, Paradise Hotel is located in Kampala. Free WiFi access is available.

Each room here will provide you with a TV, air conditioning and a balcony. There is also an electric kettle. Featuring a shower, private bathroom also comes with a bath and a hairdryer. You can enjoy city view from the room.

At Paradise Hotel you will find a fitness centre. Other facilities offered at the property include a tour desk and luggage storage. The property offers free parking.

We speak your language!

This property has been on Booking.com since Nov 19, 2014.
Hotel Rooms: 148 </p>
		</div>	
		<form method="post" action="reserve_connect.php">		
			<div class="span_of_2">
				<div class="span2_of_1">
					<h4>check-in:</h4>
					<div class="book_date btm">
						
							<input class="date" name"checkin" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						
					</div>	
					<div class="sel_room">
						<h4>number of rooms</h4>
						<select id="country" name="room" onchange="change_country(this.value)" class="frm-field required">
							<option value="nulls">Select a type of Room</option>
				            <option value="Suite room">Suite room=$2000</option>         
				            <option value="Single room">Single room=$600</option>
							<option value="Double room">Double room=$1000</option>
		        		</select>
					</div>	
					<div class="sel_room left">
						<h4>adults per room:</h4>
						<select id="country" name="adult" onchange="change_country(this.value)" class="frm-field required">
							<option value="1">1</option>
				            <option value="2">2</option>         
				            <option value="3">3</option>
							<option value="4">4</option>
		        		</select>
					</div>	
				</div>
				
				<div class="span2_of_1">
					<h4>check-out:</h4>
					<div class="book_date btm">
						
							<input class="date" name="checkout" id="datepicker2" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						
					</div>	
					<div class="sel_room">
						<h4>childern 0-5:</h4>
						<select id="country" name="child0_5" onchange="change_country(this.value)" class="frm-field required">
							<option value="0">0</option>
							<option value="1">1</option>
				            <option value="2">2</option>         
				            <option value="3">3</option>
							<option value="4">4</option>
		        		</select>
					</div>	
					<div class="sel_room left">
						<h4>childern 6-12:</h4>
						<select id="country" name="child6_12" onchange="change_country(this.value)" class="frm-field required">
							<option value="0">0</option>
							<option value="1">1</option>
				            <option value="2">2</option>         
				            <option value="3">3</option>
							<option value="4">4</option>
		        		</select>
					</div>	
				</div>
				<div class="clear"></div>
			  </div>
			   <div class="res_btn">
				
					<button name="reset" type="reset" class="btn btn-lg btn-primary" id="reset">Cancel</button>
              		<button name="btn-Create" type="submit" class="btn btn-lg btn-primary" id="submit" >Book Now</button>
				</div>
			
			
	</div>
</div>
</div>
</form>
<p>&nbsp;</p>		
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