


<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Welcome - <?php echo $userRow['email']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
				<li><a href="login.php">login</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>
<!----start-images-slider---->
		<div class="images-slider">
			<!-- start slider -->
		    <div id="fwslider">
		        <div class="slider_container">
		            <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg1.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg2.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg3.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg4.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg5.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg6.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg7.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg8.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg9.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg10.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg11.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg12.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg13.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg14.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg15.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg16.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg17.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg18.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg19.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg20.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg21.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg22.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg23.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg24.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg25.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg26.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg27.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg28.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg29.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		             <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg30.jpg" alt=""/>
		                <!-- /Slide image -->
		             
		            </div>
		          
		        </div>
		        <div class="timers"> </div>
		        <div class="slidePrev"><span> </span></div>
		        <div class="slideNext"><span> </span></div>
		    </div>
		    <!--/slider -->
		</div>
<!--start main -->
<form action="bookonline_connect.php" method="post">
<div class="main_bg">
<div class="wrap">
	<div class="online_reservation">
	<div class="b_room">
		<div class="booking_room">
			<h4>book a room online</h4>
			
		</div>

		<div class="reservation">
			<ul>
				<li class="span1_of_1">
					<h5>type of room:</h5>
				
					<div class="section_room">
						<select id="country" name="rm" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Select a type of room</option>
				            <option value="null">Suite room</option>         
				            <option value="AX">Single room</option>
							<option value="AX">Double room</option>
		        		</select>
					</div>	
				</li>
				<li  class="span1_of_1 left">
					<h5>check-in-date:</h5>
					<div class="book_date">
						<form>
							<input class="date" name="d1" id="datepicker" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>

					</div>					
				</li>
				<li  class="span1_of_1 left">
					<h5>check-out-date:</h5>
					<div class="book_date">
						
							<input class="date" name="d2" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>		
				</li>
				<li class="span1_of_2 left">
					<h5>Adults:</h5>
					
					<div class="section_room">
						<select id="room" name="room" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>					
				</li>
				<li class="span1_of_3">
					<div class="date_btn">
						<form>
							<button name="btn-Create" type="submit" class="btn btn-lg btn-primary" id="submit" >Book Now</button>
						</form>
					</div>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="clear"></div>
		</div>
	</div>
</form>
	<!--start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				
					<img src="images/pic2.jpg" alt="" />
					<span class="next"> </span>
				</a>
			</div>
			<h4>single room<span>120$</span></h4>
			<p>Our single rooms are spacious, fast internet services, Telephone which keeps in touch with available customer service care in case of any emergency   </p>
		</div>
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				
					<img src="images/pic1.jpg" alt="" />
					<span class="next"> </span>
				</a>
			</div>
			<h4>double room<span>180$</span></h4>
			<p>This is reserved for important delegates from other countries most especially the Presidents, Ministers who normally come and attend meetings in the country such as East African Summits.</p>
		</div>
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				
					<img src="images/pic3.jpg" alt="" />
					<span class="next"> </span>
				</a>
			</div>
			<h4>suite room<span>210$</span></h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
				<p class="link"><span>© All rights reserved</span></p>
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