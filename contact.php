
<?php

// get posted data into local variables
$EmailTo = "mary@tismle.com";
$Subject = "Message from website";
$Name = Trim(stripslashes($_POST['contact-name'])); 
$EmailFrom = Trim(stripslashes($_POST['contact-email']));  
$Message = Trim(stripslashes($_POST['contact-message'])); 

// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (!$validationOK) {
  print "<h2>Opps! Sorry, there was an error. Please try to send the message again. </h2>";
  exit;
}

// prepare email body text
$Body = "You've got this email from your website:";
$Body .= "\r\n";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\r\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\r\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\r\n";

// send email 
$success = mail( $EmailTo, $Subject, $Body );

//redirect to success page 
if ($success){
	print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
?>