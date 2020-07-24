<?php
//variable seting
$name = $_REQUEST['Name']
$address = $_REQUEST['Address']
$email = $_REQUEST['Email']
$message = $_REQUEST['Message']

if (empty($name) || empty($address) || empty($email) || empty($message))
{
	echo ("Please fill all the fields");
}
{
	mail("amukharjeearpans99@gmail.com", "Want to Contact", $message, "From: $name <$email>");
	echo "<script type='text/javascript'>alert('your message sent successfully');
          window.history.log(-1);
	</script>";
}
?>