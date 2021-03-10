<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
//check input fields
if( empty($name) || empty($email) || empty($subject) || empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("nss@hyderabad.bits-pilani.ac.in", "Web Tech Message", $message, "From: $name <$email>")
		echo "<script type='text/javascript'>alert('Thanks for your message');
		window.history.log(-1);
		</script>";
}

	
?>