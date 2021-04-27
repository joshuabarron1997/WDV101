<!doctype html>
<html>
<head>
	
	<!--Josh Barron
		Final
		4/25/18-->
	
	<meta charset="utf-8">
	
	<meta name = "description" content = "Pet To Go, Volunteering and working to save the pets of tommorow."/>
	
	<meta name = "keywords" content = "Pets to Go, dogs, cats, pets, shelter, no-kill, volunteer, puppy, kitten, community"/>
	
	<title>Pets To Go</title>
	
	<link href = "final.css" rel = "stylesheet" type = "text/css"/>
	
	<style type = "text/css">
		
		#main {	width: 500px;
				margin: 10px 196px;
				padding: 25px 0px 25px 0px;
				border: solid 2px black;
				border-radius: 25px;
				text-align: center;}
		
		fieldset {border: 0px;}
		
		.button {border: solid 1px;
					padding: 4px;
					border-radius: 25px;}
		
		.button:hover {background-color: skyblue;
						font-weight: bold;
						padding: 5px}
		
	</style>
	
<title>Pets To Go</title>
	
</head>

<body>
	
	<div id = "container">
		
		<header>
				<a href = "index.html" title = "Home"><img src ="images/banner.gif"
				 width = "850"
				 height = "179"
				 alt = "banner"/></a>
		</header><!--end header-->
		
		<div id = "navbar">
		
			<nav>
				<ul class = "center">
					<li><a href = "index.html" title = "Home">Home</a></li>
					<li><a href = "aboutpets.html" title = "About Our Pets">About our Pets</a></li>
					<li><a href = "aboutus.html" title = "About Us">About Us</a></li>
					<li><a href = "currentpets.html" title = "Current Pets">Current Pets</a></li>
					<li><a href = "upcomingevents.html" title = "Upcoming Events">Upcoming Evenets</a></li>
					<li><a href = "form.html" title = "Volunteer">Volunteer</a></li>
				</ul>
			</nav>
			
		</div><!--end navbar-->
		
		<div id = "main">
			
			<h3 class = "underline">Thank You for Volunteering!</h3><br>
			
			

			

	
		</div><!--end main-->

		<footer>
			<p class = "center"><span class = "underline">Pets To Go Animal Shelter</span><br>
				3183 S Veterans Pkwy<br>
				Springfield, Illinois 62704<br>
				217-698-3091</p>
		</footer><!--end footer-->
		
	</div><!--end container-->
	


<?php
//This code pulls the field name and value attributes from the Post file
//The Post file was created by the form page when it gathered all the name value pairs from the form.
//It is building a string of data that will become the body of the email

//          CHANGE THE FOLLOWING INFORMATION TO SEND EMAIL FOR YOU //  

	$toEmail = "webformtr18@joshbarron.info";		//CHANGE within the quotes. Place email address where you wish to send the form data. 
										//Use your DMACC email address for testing. 
										//Example: $toEmail = "jhgullion@dmacc.edu";		
	
	$subject = "WDV101 Email Example";	//CHANGE within the quotes. Place your own message.  For the assignment use "WDV101 Email Example" 

	$fromEmail = "webformtr18@joshbarron.info";		//CHANGE within the quotes.  Use your DMACC email address for testing OR
										//use your domain email address if you have Heartland-Webhosting as your provider.
										//Example:  $fromEmail = "contact@jhgullion.org";  

//   DO NOT CHANGE THE FOLLOWING LINES  //

	$emailBody = "Form Data\n\n ";			//stores the content of the email
	foreach($_POST as $key => $value)		//Reads through all the name-value pairs. 	$key: field name   $value: value from the form									
	{
		$emailBody.= $key."=".$value."\n";	//Adds the name value pairs to the body of the email, each one on their own line
	} 
	
	$headers = "From: $fromEmail" . "\r\n";				//Creates the From header with the appropriate address

 	if (mail($toEmail,$subject,$emailBody,$headers)) 	//puts pieces together and sends the email to your hosting account's smtp (email) server
	{
   		echo("<p>Message successfully sent!</p>");
  	} 
	else 
	{
   		echo("<p>Message delivery failed...</p>");
  	}

?>

</body>
</html>
