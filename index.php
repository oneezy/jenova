<?php include("php/head-doctype.php"); ?>

<head>
	<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <title>::: JENOVA :::</title>
    <meta name="description" content="We are Jenova~" />
    
    <meta name="keywords" content="jenova, jenova band, jenova music" />
    <?php include("php/head-meta.php"); ?>
	<?php include("php/head-stylesheet.php"); ?>
    <?php include("php/head-jquery.php"); ?>
    
    <!-- URL Image -->
    <link rel="shortcut icon" href="http://www.jenovaishere.com/favicon.ico" />    
    
	<!-- Scrolling Stars -->
	<script type="text/javascript">
		var scrollSpeed = 70; // speed in milliseconds
		var current = 0; // set the default position
		var direction = 'h'; // set the direction
	
		function bgscroll(){
			current -= 1; // 1 pixel row at a time
			$("#StarsNormal").css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px"); // move the background with backgrond-position css properties
		 }
	   
		 setInterval("bgscroll()", scrollSpeed); //Calls the scrolling function repeatedly
	</script>
    
    <!-- Select Box BG's -->
	<script type="text/javascript">
		$(function(){
			$(".select-white").change(function(){
				$(".span-white").html($(this).val());
			})
			
			$(".select-black").change(function(){
				$(".span-black").html($(this).val());
			})
			
			$(".select-pink").change(function(){
				$(".span-pink").html($(this).val());
			})
			
			$(".select-blue").change(function(){
				$(".span-blue").html($(this).val());
			})			
		})
    </script>    
    
    <!-- Songs (jPlayer) -->
	<script type="text/javascript">
		$(document).ready(function(){
		
			new jPlayerPlaylist({
				jPlayer: "#jquery_jplayer_1",
				cssSelectorAncestor: "#jp_container_1"
			}, [
				{
					title:"Haste (demo)",
					mp3:"http://www.jenovaishere.com/music/jenova-haste.mp3",
					oga:"http://www.jenovaishere.com/music/jenova-haste.ogg"
				},
				{
					title:"Stand Up (demo)",
					mp3:"http://www.jenovaishere.com/music/jenova-standup.mp3",
					oga:"http://www.jenovaishere.com/music/jenova-standup.ogg"
				},
				{
					title:"Energy (demo)",
					mp3:"http://www.jenovaishere.com/music/jenova-energy.mp3",
					oga:"http://www.jenovaishere.com/music/jenova-energy.ogg"
				}
			], {
				swfPath: "js/jplayer",
				supplied: "ogg, mp3",
				wmode: "window"
			});
		});
	</script>
    
</head>

<body>

	<?php include("php/header.php"); ?>

    <div id="StarsNormal"></div>
    
    <img id="Jenova" alt="Jenova" src="images/logo.png" />
    <img id="JenovaLighted" alt="Jenova" src="images/logo-lighted.png" />
    <img id="ManStand" alt="Man" src="images/man-stand.png" />
    <img id="ManStandTransform02" alt="Man" src="images/man-stand-transform02.png" />
    
    <!-- Big Man (fly from left) -->
    <img id="ManFly" alt="Man" src="images/man-fly.png" />
    <img id="ManFlyTransform01" alt="Man" src="images/man-fly-transform01.png" />
    <img id="ManFlyTransform02" alt="Man" src="images/man-fly-transform02.png" />
    
    <!-- Little Man (fly from left) -->
    <img id="ManFlyTransform03" alt="Man" src="images/man-fly-transform03.png" />
    <img id="ManFlyTransform04" alt="Man" src="images/man-stand-transform02.png" />
    
    <!-- Lightspeed Stars! -->
    <img id="LightSpeedStars01" alt="Man" src="images/man-fly-transform02.png" />
    <img id="LightSpeedStars02" alt="Man" src="images/man-fly-transform02.png" />
    <img id="LightSpeedStars03" alt="Man" src="images/man-fly-transform02.png" />
    
    <!-- Little Man (standing) -->
    <img id="ManFlyTransform05" alt="Man" src="images/man-stand.png" />
    
    <div id="SunNormal"></div>
    <div id="SunOverlap"></div>
    
    <!-- Content -->
	<?php include("pages/jenova.php"); ?>
    <?php include("pages/lyrics.php"); ?>
    <?php include("pages/shows.php"); ?>
    <?php include("pages/gear.php"); ?>
    
    <div id="Booking" class="content">
		<iframe src="contact.php" allowtransparency="true" frameborder="0" scrolling="no" style="width:100%; height:200px;"></iframe>
    </div>
    
    <?php include("pages/songs.php"); ?>
</body>

</html>