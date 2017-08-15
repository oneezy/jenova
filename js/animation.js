        $(document).ready(function(){
			
			// The sun moving down
			$("div#SunNormal").delay(3000).animate({"margin-bottom": "-190px"}, 12000);
			$("div#SunOverlap").delay(3000).animate({"margin-bottom": "-190px"}, 12000);
			
			
			// Man animation intro
			$("#ManStand").delay(5700).fadeOut(0); // Man you see above the logo
			$("#ManStandTransform02").delay(5700).fadeIn(25).delay(50).fadeOut(100); // Man dissapears
			$("#ManFly").delay(7000).animate({"left": "30%"}, 5000).fadeOut(25); // Man flys in from the left
			$("#ManFlyTransform01").delay(12000).fadeIn(25).delay(100).fadeOut(50); // Man dissapears while flying
			$("#ManFlyTransform02").delay(12250).fadeIn(0).animate({"left": "200%"}, 500); // Man flys lightspeed away!
			$("#ManFlyTransform03").delay(14000).animate({"left": "50%"}, 500).fadeOut(25); // Man flys lightspeed from top left
			$("#ManFlyTransform04").delay(14525).fadeIn(25).delay(25).fadeOut(25); // Man transforms
			$("#ManFlyTransform05").delay(14675).fadeIn(0); // Man standing on top left
			$("#Home").delay(15500).fadeIn(500);
			
			$("#LightSpeedStars01").delay(8000).fadeIn(0).animate({"right": "200%"}, 500); // Lightspeed stars!
			$("#LightSpeedStars02").delay(10000).fadeIn(0).animate({"right": "200%"}, 500); // Lightspeed stars!
			$("#LightSpeedStars03").delay(10500).fadeIn(0).animate({"right": "200%"}, 500); // Lightspeed stars!
			
			$("#JenovaLighted").delay(10000).fadeIn(10).fadeOut(1200); // Jenova Fading in/out!
		  	
		  	
			// Hover effect to buttons
			$(".header a").hover(
			   function () {
				$(this).addClass("hover");
			   },
			   function () {
				$(this).removeClass("hover");
			   }
			);

			// When you hover over "jplayer" music controller
			$("#Controller").mouseenter(function(){
				$("#JPplaylist").animate({"bottom": "48px"}, 500);
			});
			
			$("#Controller").mouseleave(function(){
				$("#JPplaylist").animate({"bottom": "-500px"}, 500);
			});
			
			
			
			// When you click on "home" button
			$("a#home").click(function(){
				$("a#home").addClass("selected");
				$("a#songs").removeClass("selected");
				$("a#shows").removeClass("selected");
				$("a#gear").removeClass("selected");
				$("a#booking").removeClass("selected");
				
				$("#Home").delay(1000).fadeIn(500);
				$("#Lyrics").fadeOut(500);
				$("#Shows").fadeOut(500);
				$("#Gear").fadeOut(500);
				$("#Booking").fadeOut(500);
				
			});
			
			// When you click on "songs" button
			$("a#songs").click(function(){
				$("a#home").removeClass("selected");
				$("a#songs").addClass("selected");
				$("a#shows").removeClass("selected");
				$("a#gear").removeClass("selected");
				$("a#booking").removeClass("selected");
				
				$("#Home").fadeOut(500);
				$("#Lyrics").delay(1000).fadeIn(500);
				$("#Shows").fadeOut(500);
				$("#Gear").fadeOut(500);
				$("#Booking").fadeOut(500);
			});
			
			// When you click on "shows" button
			$("a#shows").click(function(){
				$("a#home").removeClass("selected");
				$("a#songs").removeClass("selected");
				$("a#shows").addClass("selected");
				$("a#gear").removeClass("selected");
				$("a#booking").removeClass("selected");
				
				$("#Home").fadeOut(500);
				$("#Lyrics").fadeOut(500);
				$("#Shows").delay(1000).fadeIn(500);
				$("#Gear").fadeOut(500);
				$("#Booking").fadeOut(500);
			});
			
			// When you click on "gear" button
			$("a#gear").click(function(){
				$("a#home").removeClass("selected");
				$("a#songs").removeClass("selected");
				$("a#shows").removeClass("selected");
				$("a#gear").addClass("selected");
				$("a#booking").removeClass("selected");
				
				$("#Home").fadeOut(500);
				$("#Lyrics").fadeOut(500);
				$("#Shows").fadeOut(500);
				$("#Gear").delay(1000).fadeIn(500);
				$("#Booking").fadeOut(500);
			});
			
			// When you click on "booking" button
			$("a#booking").click(function(){
				$("a#home").removeClass("selected");
				$("a#songs").removeClass("selected");
				$("a#shows").removeClass("selected");
				$("a#gear").removeClass("selected");
				$("a#booking").addClass("selected");
				
				$("#Home").fadeOut(500);
				$("#Lyrics").fadeOut(500);
				$("#Shows").fadeOut(500);
				$("#Gear").fadeOut(500);
				$("#Booking").delay(1000).fadeIn(500);
			});
		  
        });