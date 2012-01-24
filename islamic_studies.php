<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edgware Islamic Cultural Trust (EICT)</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://www.edgwareict.org.uk/css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="timetable.css" type="text/css"> 
    <script src="http://code.jquery.com/jquery-latest.js"></script>  
    <script type="text/javascript" src="js/jquery.validate.js"></script>

    <style type="text/css">
        * { font-family: Verdana; font-size: 96%; }
        label { width: 10em; float: left; }
        label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
        p { clear: both; }
        .submit { margin-left: 12em; }
        em { font-weight: bold; padding-right: 1em; vertical-align: top; }
    </style>
  <script>
      $(document).ready(function(){
        $("#contactform").validate();
      });     
  </script>   
</head>
<body id="page3" onLoad="myclock();">
  <div id="main">
  	<!-- header -->
    <header>
    	<h1><a href="/">Edgware <strong>Islamic</strong> Cultural <strong>Trust</strong></a></h1>
      <form id="ClockForm" action="">
        <fieldset>
          <input type="text" id="clock" />
        </fieldset>
      </form>
      <nav>
        <ul>
        	<li class="first"><a href="/">Home</a></li>
          <li><a href="about_us.html">About us</a></li>
          <li><a href="services.html">services</a></li>
          <li><a href="facilities.html">Facilities</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="donate_online.html">Donate Online</a></li>
          <li class="last"><a href="contacts.html">contacts</a></li>
        </ul>
      </nav>
    </header>
	<div>
	<p>&nbsp;</p>
	REGISTRATION OF INTEREST FOR ISLAMIC LESSONS AT EDGWARE ISLAMIC CULTURAL TRUST (EICT)  <p>&nbsp;</p>
	EICT is planning to start Islamic lessons in the near future. Please help us plan for the future by filling in this form.</br></br>
	</div>
    <form name="contactform" id="contactform" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
		<table width="800px">
			<tr>
			 <th colspan="3">Section A: Your Details</th>
			</tr>
            <tr>
             <td valign="top">
              <label for="first_name">First Name *</label>
             </td>
             <td valign="top">
              <input  type="text" name="first_name" id="first_name"  maxlength="50" size="30" class="required">
             </td>
            </tr>
         
            <tr>
             <td valign="top">
              <label for="last_name">Last Name *</label>
             </td>
             <td valign="top">
              <input  type="text" name="last_name" id="last_name" maxlength="50" size="30" class="required">
             </td>
            </tr>
            
            <tr>
             <td valign="top">
              <label for="email">Email Address *</label>
             </td>
             <td valign="top">
              <input  type="text" name="email" id="email" maxlength="80" size="30" class="required email">
             </td>
            </tr>
            
            <tr>
             <td valign="top">
              <label for="telephone">Telephone *</label>
             </td>
             <td valign="top">
              <input  type="text" name="telephone" id="telephone" maxlength="30" size="30" class="required number">
             </td>
            </tr>
            
            <tr>
             <td valign="top">
              <label for="address">Address</label>
             </td>
             <td valign="top">
              <textarea  name="address" id="address" maxlength="1000" cols="70" rows="6"></textarea>
             </td>
            </tr>
			<tr>
			 <th colspan="3">Section B: Your Childrens Details</th>
			</tr>            
            <tr>
                <td valign="top">Childrens</td>
                <td valign="top">
                    <table border="1" width="600px">
                        <tr align="center">
                            <td>Childrens</td><td>Age</td><td>Gender</td>
                        </tr>
                        <tr>
                            <td>First Child</td>
                            <td><input type="text" name="first_child_age" id="first_child_age" class="number"> </td>
                            <td>
                                <input type="radio" name="first_child_gender" id="first_child_gender" value="Boy">Boy 
                                <input type="radio" name="first_child_gender" id="first_child_gender" value="Girl">Girl
                            </td>
                        </tr>
                        <tr>
                            <td>Second Child</td>
                            <td><input type="text" name="second_child_age" id="second_child_age" class="number"> </td>
                            <td>
                                <input type="radio" name="second_child_gender" id="second_child_gender" value="Boy">Boy
                                <input type="radio" name="second_child_gender" id="second_child_gender" value="Girl">Girl 
                            </td>
                        </tr>
                        <tr>
                            <td>Third Child</td>
                            <td><input type="text" name="third_child_age" id="third_child_age" class="number"> </td>
                            <td>
                                <input type="radio" name="third_child_gender" id="third_child_gender" value="Boy">Boy
                                <input type="radio" name="third_child_gender" id="third_child_gender" value="Girl">Girl
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
			<tr>
			 <th colspan="3">Section C: Your Participation</th>
			</tr> 
			<tr>
			 <td colspan="3">
				Would you be willing to stay for at least half an hour per lesson (to help supervise and to observe lesson content so as to reinforce what is taught to your child at home)?  Please mention how long are you planning to stay.
			</td>
			</tr> 
            <tr>
             <td valign="top">
              <label for="participation">Your Participation *</label>
             </td>
             <td valign="top">
              <input type="text" name="participation" id="participation" class="required number"> mins
             </td>
            </tr>
			<tr>
			 <th colspan="3">Section D: Payment</th>
			</tr> 
			<tr>
			 <td colspan="3">
				How much would you be happy to pay (in advance) per month per child? Please write in GBP.
			</td>
			</tr> 
            <tr>
             <td valign="top">
              <label for="payment">Payment *</label>
             </td>
             <td valign="top">
              <input type="text" name="payment" id="payment" class="required number"> <i></br>[All fees will go towards the running costs of the Musalla]</i>
             </td>
            </tr>
			<tr>
			 <th colspan="3">Section E: Lesson Content</th>
			</tr> 
			<tr>
			 <td colspan="3">
				What is your preference for the content of the lessons? It might be quranic recitation or islamic studies or both. We highly value your thoughts towards our children's future.
			</td>
			</tr> 
            <tr>
             <td valign="top">
              <label for="lesson">Lesson Contents *</label>
             </td>
             <td valign="top">
              <textarea  name="lesson" id="lesson" maxlength="1000" cols="70" rows="6" class="required"></textarea>
             </td>
            </tr>
                                    
            <tr>
             <td valign="top">
              <label for="comments">Comments and Suggestions</label>
             </td>
             <td valign="top">
              <textarea  name="comments" id="comments" maxlength="1000" cols="70" rows="6"></textarea>
             </td>
            </tr>

            <tr>
             <th colspan="3">Section F: Other</th>
            </tr> 
            <tr>
             <td colspan="3">
                <li>
                    Would you be interested in 11+ (preparation for secondary school) fee paying classes for Maths and English
                    <input type="radio" name="maths" id="maths" value="Yes" class="required">Yes
                    <input type="radio" name="maths" id="maths" value="No" class="required">No
                </li>
                <li>
                    Would you be interested in Introduction to Adult Quran/ Tajweed Class
                    <input type="radio" name="tajweed" id="tajweed" value="Yes" class="required">Yes
                    <input type="radio" name="tajweed" id="tajweed" value="No" class="required">No
                </li>
                <li>
                    Would you be interested in weekend football (Adult and Children)
                    <input type="radio" name="football" id="football" value="Yes" class="required">Yes
                    <input type="radio" name="football" id="football" value="No" class="required">No
                </li>
                <li>
                    Would you be interested in fitness/self-defence training - Brazilian Jiu-Jitsu (Adult and Children)
                    <input type="radio" name="jitsu" id="jitsu" value="Yes" class="required">Yes
                    <input type="radio" name="jitsu" id="jitsu" value="No" class="required">No
                </li>                                                
             </td>
            </tr> 
                                            
            <tr>
             <td colspan="2" style="text-align:right">
              <input type="submit" value="Submit" id="submit" name="submit" style="height: 100px; width: 150px">  
             </td>
            </tr>
        </table>
	</form>

<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = array("Info@edgwareICT.org.uk","mmrs151@gmail.com");
    $email_subject = "EICT Islamic Studies Survey";
     
    $error = ""; 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die($error);
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
    $address = $_POST['address']; // not required
    $first_child_age = $_POST['first_child_age'];
    $first_child_gender = $_POST['first_child_gender'];
    $second_child_age = $_POST['second_child_age'];
    $second_child_gender = $_POST['second_child_gender'];
    $third_child_age = $_POST['third_child_age'];
    $third_child_gender = $_POST['third_child_gender'];    
    $participation = $_POST['participation'];
    $payment = $_POST['payment'];
    $lesson = $_POST['lesson'];
    $comments = $_POST['comments'];
    $maths = $_POST['maths'];
    $tajweed = $_POST['tajweed'];
    $football = $_POST['football'];
    $jitsu = $_POST['jitsu'];
         
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "First Child Age: ".clean_string($first_child_age)."\n";
    $email_message .= "First Child Gender: ".clean_string($first_child_gender)."\n";
    $email_message .= "Second Child Age: ".clean_string($second_child_age)."\n";
    $email_message .= "Second Child Gender: ".clean_string($second_child_gender)."\n";
    $email_message .= "Third Child Age: ".clean_string($third_child_age)."\n";
    $email_message .= "Third Child Gender: ".clean_string($third_child_gender)."\n";    
    $email_message .= "Participation: ".clean_string($participation)." mins\n";
    $email_message .= "Payment: £".clean_string($payment)."\n";
    $email_message .= "Lesson: ".clean_string($lesson)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
    $email_message .= "Maths and English: ".clean_string($maths)."\n";
    $email_message .= "Quran or Tajweed: ".clean_string($tajweed)."\n";
    $email_message .= "Football: ".clean_string($football)."\n";
    $email_message .= "Brazilian Jiu-Jitsu: ".clean_string($jitsu)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
foreach ($email_to as $email) {
	@mail($email, $email_subject, $email_message, $headers); 
}
 
?>
 
<!-- include your own success html here -->
<center><h3> 
Thank you for contacting us. We will be in touch with you very soon.
</center></h3> 
<p>&nbsp;</p>
<?php
}
?>
 </div>
  <!-- footer -->
  <footer>
    <div class="container">
      <div class="wrapper">
      	<div class="fleft">Edgware Islamic Cultural Trust (EICT) 2010, UK registered charity registration number 1137809 &copy; 2010<br />
      	  <!-- {%FOOTER_LINK} -->
        </div>
  <div class="fright">
        	<a href="about_us.html#executive">Executive Committee</a>        </div>
      </div>
    </div>
	</footer>
  <!-- coded by ramzes -->
  <script type="text/javascript"> Cufon.now(); </script> 
</body>
</html>

