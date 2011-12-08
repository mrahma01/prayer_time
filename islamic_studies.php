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
<body>
    <form name="contactform" id="contactform" method="post" action="">
        <table width="800px">
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
              <input  type="text" name="email" id="email" maxlength="80" size="30" class="required">
             </td>
            </tr>
            
            <tr>
             <td valign="top">
              <label for="telephone">Telephone Number *</label>
             </td>
             <td valign="top">
              <input  type="text" name="telephone" id="telephone" maxlength="30" size="30" class="required">
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
                <td valign="top">Childrens</td>
                <td valign="top">
                    <table border="1" width="600px">
                        <tr align="center">
                            <td>Childrens</td><td>Age</td><td>Gender</td>
                        </tr>
                        <tr>
                            <td>First Child</td>
                            <td><input type="text" name="first_child_age" id="first_child_age"> </td>
                            <td><input type="text" name="first_child_gender" id="first_child_gender"> </td>
                        </tr>
                        <tr>
                            <td>Second Child</td>
                            <td><input type="text" name="second_child_age" id="second_child_age"> </td>
                            <td><input type="text" name="second_child_gender" id="second_child_gender"> </td>
                        </tr>
                        <tr>
                            <td>Third Child</td>
                            <td><input type="text" name="third_child_age" id="third_child_age"> </td>
                            <td><input type="text" name="third_child_age" id="third_child_gender"> </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
             <td valign="top">
              <label for="perticipation">Your Perticipation *</label>
             </td>
             <td valign="top">
              <input type="text" name="perticipation" id="perticipation" class="required"> mins
             </td>
            </tr>

            <tr>
             <td valign="top">
              <label for="payment">Payment *</label>
             </td>
             <td valign="top">
              <input type="text" name="payment" id="payment" class="required"> <i></br>[All fees will go towards the running costs of the Musalla]</i>
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
              <label for="comments">Comments and Suggestions *</label>
             </td>
             <td valign="top">
              <textarea  name="comments" id="comments" maxlength="1000" cols="70" rows="6"></textarea>
             </td>
            </tr>
                    
            <tr>
             <td colspan="2" style="text-align:right">
              <input type="submit" value="Submit" id="submit" name="submit" style="height: 100px; width: 150px">  
             </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "mmrs151@gmail.com";
    $email_subject = "EICT Islamic Studies Survey";
     
    $error = ""; 
    function died($error) {
        // your error code can go here
        $error .= "We are very sorry, but there were error(s) found with the form you submitted. ";
        $error .= "These errors appear below.<br /><br />";
        $error .= $error."<br /><br />";
        $error .= "Please go back and fix these errors.<br /><br />";
        die($error);
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
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
    $perticipation = $_POST['perticipation'];
    $payment = $_POST['payment'];
    $lesson = $_POST['lesson'];
    $comments = $_POST['comments'];
         
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
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
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
    $email_message .= "Perticipation: ".clean_string($perticipation)."\n";
    $email_message .= "Payment: £".clean_string($payment)."\n";
    $email_message .= "Lesson: ".clean_string($lesson)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>
