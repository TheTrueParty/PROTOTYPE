<?php
    $fname = $_POST['firstname']; //creates variables from the name attribute
    $lname = $_POST['lastname'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $gender = $_POST['gender'];
    $from = 'From: CSC230 Web Form Sample <contact@csc230.com>'; 
    $to = 'andrewfriden@gmail.com'; //CHANGE THIS TO YOUR EMAIL!!
    $subject = 'CSC 230 PHP Form Demo';

    $body = "Information from your Sample Form:\n\nName: $fname $lname\n Address: $street\n City: $city, $state $zip\n Gender: $gender"; //the \n are used for line breaks
	
	if ($_POST['submit']) 
	{
	  if (mail ($to, $subject, $body, $from)) { 
        echo '<h1><font color = "green">Your message has been sent!</font></h1>';  //echo displays HTML content on web page
		} else { 
        echo '<h2>font color = "red">Something went wrong, go back and try again!font color = "red"></h2>'; 
      	}
	}
?>

<!doctype html>
<html>
<head>
<style>
body {
	margin:3em;
}
</style>
<title>Thank You</title>
</head>

<body>

<p><a href = "form.html">[ Back to Index Page ]</a></p>

</body>
</html>