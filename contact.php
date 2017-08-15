<?php include("php/head-doctype.php"); ?>

<head>

    <title>::: JENOVA :::</title>
    <meta name="description" content="We are Jenova~" />
    
    <meta name="keywords" content="jenova, jenova band, jenova music" />
    <?php include("php/head-meta.php"); ?>
	<?php include("php/head-stylesheet.php"); ?>
    <?php include("php/head-jquery.php"); ?>
    
    
</head>

<body style="background:transparent;">
    <div id="Contact">
    	<form method="post" action="forms-contact.php" style="padding-left:150px;">
        
			<?php
              $ipi = getenv("REMOTE_ADDR");
              $httprefi = getenv ("HTTP_REFERER");
              $httpagenti = getenv ("HTTP_USER_AGENT");
            ?>
            
            <input type="hidden" name="ip" value="<?php echo $ipi ?>" />
            <input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
            <input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" /> 
                 
        	<div>
                <input type="text" title="Full Name" value="Full Name" name="name" onFocus="inputFocus(this)" onBlur="inputBlur(this)" />
                <input type="text" title="Phone Number" value="Phone Number" name="phone" onFocus="inputFocus(this)" onBlur="inputBlur(this)" />
                <input type="text" title="Email" value="Email" name="email" onFocus="inputFocus(this)" onBlur="inputBlur(this)" />
            </div>
            
            <div>
            	<textarea name="details" title="Write message..."></textarea>
            </div>
            
            <p class="clear"></p>
            
            <div style="padding-left:102px; width:300px; height:50px; padding-top:10px;">
                <input type="reset" class="clear" value="clear" />
                <input type="submit" class="submit" value="submit" />
            </div>
            
        </form>
    </div>
</body>

</html>