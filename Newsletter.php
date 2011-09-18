<?php
$my_email = "Info@edgwareICT.org.uk";
$continue = "/";

// Check referrer is from same site.

if(!(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))){print "Please enable referrer logging to use this contact form.  Your message was not sent."; exit;}

// Describe function to check for new lines.

function new_line_check($a)
{

if(preg_match('`[\r\n]`',$a)){header("location: $_SERVER[HTTP_REFERER]");exit;}

}

new_line_check($_POST['Name']);

// Check for disallowed characters in the Name and Email fields.

$disallowed_name = array(':',';','"','=','(',')','{','}','@');

foreach($disallowed_name as $value)
{

if(stristr($_POST['Name'],$value)){header("location: $_SERVER[HTTP_REFERER]");exit;}

}

new_line_check($_POST['Email']);

$disallowed_email = array(':',';',"'",'"','=','(',')','{','}');

foreach($disallowed_email as $value)
{

if(stristr($_POST['Email'],$value)){header("location: $_SERVER[HTTP_REFERER]");exit;}

}

$message = "";

// This line prevents a blank form being sent, and builds the message.

foreach($_POST as $key => $value){if(!empty($value)){$set=1;}$message = $message . "$key: $value\n\n";} if($set!==1){header("location: $_SERVER[HTTP_REFERER]");exit;}

$message = $message . " ";
$message = stripslashes($message);

$subject = "Online subscription Edgware Islamic Cultural Trust";
$headers = "From: " . $_POST['Email'] . "\n" . "Return-Path: " . $_POST['Email'] . "\n" . "Reply-To: " . $_POST['Email'] . "\n";

mail($my_email,$subject,$message,$headers);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>EICT Newsletter subscription</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="logo-wrap">
  <div id="logo">
    <h2>EICT Newsletter subscription</h2>
  </div>
</div>
<!-- start header -->
<!-- end header -->
<!-- start page -->
<div id="wrapper">
<div id="wrapper-btm">
<div id="page">
	<!-- start content -->
	<div id="content">
    <div class="post">
		  <div class="entry">
		    <h4>Thank you <?php print stripslashes($_POST['Name']); ?>, for subscribing to our newsletter!</h4>
		    <p>&nbsp;</p>
		    <p><font face="arial" size="2"><a href="<?php print "$continue"; ?>">Click here to go back to home</a></font></p>
		    <p>&nbsp;</p>
		  </div>
    </div>
	</div>
	<!-- end content -->
</div>
<!-- end page -->
</div>
</div>

</body>
</html>
