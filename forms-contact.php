<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$details = $_POST['details'];


if (eregi('http:', $details)) {
die ("Do NOT try that! ! ");
}

if(!$email == "" && (!strstr($email,"@") || !strstr($email,".")))
{
echo "<span class='span-class' style='font-size:36px; color:white; text-align:center; font-style:italic; margin:0 auto; display:block;'>Please enter a valid email...</span><br />\n";

die ("<span class='span-class' style='font-family:arial; font-size:14px; color:#686868; text-align:center; margin:0 auto; display:block;'>(click back button)</span>");
}

$todayis = date("l, F j, Y, g:i a") ;

$details = stripcslashes($details);

$message = " $todayis [EST] \n
From: $name ($email)
Phone Number: $phone
Message: $details
";

$from = "From: info@jenovaishere.com\r\n";

mail("reddogg794@gmail.com, mrrioku@yahoo.com", '::: SOMEONE AWAITS YOU :::'.$subject, $message, $from);

?>

<?php include("php/head-doctype.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Meta Information -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=8, FF=3, OtherUA=4,IE=edge, chrome=1">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" media="all" href="css/stylesheet.css" />

    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    
    <!-- On Form Focus -->
    <script type="text/javascript" src="js/on-form-focus.js"></script>

    <!-- Form Validation -->
    <script type="text/javascript" src="js/validate.js"></script>
</head>

<body style="background:transparent;">
    <div>
    	<span style="font-family:'Times New Roman', Times, serif; font-size:36px; text-align:center; color:white; font-style:italic; margin:0 auto; display:block; padding-top:40px;">The answers you seek will be given soon...</span>
    </div>
    
</body>

</html>