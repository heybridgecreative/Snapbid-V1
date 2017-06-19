<?php
/* Set e-mail recipient */
$myemail = "cmwdcontact@gmail.com";

/* Check all form inputs using check_input function */
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = "Property Add Request";
$propertyType = $_POST['propertyType'];
$propertylocation = $_POST['propertylocation'];
$propertyname = $_POST['propertyname'];
$rooms = $_POST['guests'];

$headers = "From:" . $email;

/* Let's prepare the message for the e-mail */
$message = "
Name: $fname $lname
E-mail: $email

Property Details
Name (If any): $propertyname
Type: $propertyType
Location: $propertylocation
Rooms: $rooms
";

/* Send the message using mail() function */
mail($myemail, $subject, $message, $headers);



if(mail($myemail, $subject, $message, $headers))
{
  echo "Mail Sent Successfully";
}else{
  echo "Mail Not Sent";
}



/* Redirect visitor to the thank you page 
if(!$success) {
	header('Location: add-request.php');
	exit();
}
*/