<?php

$EmailFrom = "info@amargura11.com";
$EmailTo = "info@amargura11.com";
$Subject = "online form";
$Name = Trim(stripslashes($_POST['Name']));
$Email = Trim(stripslashes($_POST['Email']));
$Message = Trim(stripslashes($_POST['Message']));
// validation
$validationOK=true;
if (!$validationOK) {
  echo "please check your details";
  header("Location: http://amargura11.com/contact.php");
  exit;
}

// prepare email body text

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"1;URL=contact_thankyou_page.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
}
?>
