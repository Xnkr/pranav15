<?php
session_start();
if(isset($_POST['email'])) {

		////////////////////////////////////////////////////////////////////////////////Mailer
		
      // EDIT THE 2 LINES BELOW AS REQUIRED
     $email_to = "registrations@pranav2k15.com";
     $email_subject = "Pranav2k15 Registration";
 
    function died($error) {
		$_SESSION['error'] = $error;
        header("Location: err.php");
	   echo $error;
		 die();
     }
      
     // validation expected data exists
     if(!isset($_POST['name']) ||
         !isset($_POST['clg']) ||
         !isset($_POST['email']) ||
         !isset($_POST['dept']) ||
		 !isset($_POST['year'])||
		 !isset($_POST['phone'])) {
         died('We are sorry, but there appears to be a problem with the form you submitted.');       
     }
	 
	 //assigning variables
     $name = $_POST['name']; // required
     $clg = $_POST['clg']; // required
     $email_from = trim($_POST['email']); // required
     $dept = $_POST['dept']; // required
     $event = $_POST['event']; // required
	 $phone = trim($_POST['phone']);
	 $year = $_POST['year'];
	 $email = $email_from;
     

		//proper validation
     $error_message = "";
	 
     $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	 
   if(!preg_match($email_exp,$email_from)) {
     $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
   }
   
     $string_exp = "/^[A-Za-z .'-]+$/";
   if((!preg_match($string_exp,$name))||(strlen($name) < 2)) {
     $error_message .= 'The Name you entered does not appear to be valid.<br />';
   }
   if((!preg_match($string_exp,$clg))||(strlen($clg) < 2)) {
     $error_message .= 'The College Name you entered does not appear to be valid.<br />';
   }
   
   if(strlen($dept) < 2) {
     $error_message .= 'The Department you entered do not appear to be valid.<br />';
   }
   
   if(strlen($year) < 1) {
     $error_message .= 'The Year you entered do not appear to be valid.<br />';
   }
   if (strlen($phone) < 10) {
        $error_message .= 'The Phone number you entered is short.<br />';
    } 
   if(!is_numeric($phone)){
	$error_message .= 'The Phone number you entered do not appear to be valid.<br />';
	}
	
	if(count($event) < 1){
   $error_message .= 'You have not selected any Events.<br />';
	}
   
     $email_message = "Registration details below.\n\n";
      
     function clean_string($string) {
       $bad = array("content-type","bcc:","to:","cc:","href");
       return str_replace($bad,"",$string);
     }
      
     $email_message .= "Name: ".clean_string($name)."\n";
     $email_message .= "College: ".clean_string($clg)."\n";
     $email_message .= "Email: ".clean_string($email_from)."\n";
     $email_message .= "Dept: ".clean_string($dept)."\n";
     $email_message .= "Year: ".clean_string($year)."\n";
     $email_message .= "Phone: ".clean_string($phone)."\n";
	$eventdata = implode(",", $event);
      $email_message .= "Event: ".clean_string($eventdata)."\n";
	 
     
 // create email headers
 //$headers = 'From: '.$email_from."\r\n". 'Reply-To: '.$email_from."\r\n" . 'X-Mailer: PHP/' . phpversion();
 //@mail($email_to, $email_subject, $email_message, $headers);
 //echo "mailed!";	
	
	
////////////////////////////////////////////////////////////////////////////////Database
		$servername = "localhost";
		$username = "pranaomn_admin";
		$password = "pranav2k15";
		$dbname = "pranaomn_reg";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$q = "SELECT * FROM pranav";
		$res = $conn->query($q);
		$rows = $res->num_rows;
		$id = $rows+1;
		echo "Previous Total: ".$res->num_rows."<br>";
		$domail = 0;
		$e = 0;

	if($rows > 0)
	{
	$query = "SELECT * FROM pranav WHERE email='$email' ";
	$result = $conn->query($query);

	if ($result->num_rows > 0) {
        print 'user is already in table<br>';
		echo $result->num_rows;
		$e = 1;
    }
    else {
		$sql = "INSERT INTO pranav (id, name, email, phone, clg, dept, year, event)
		VALUES ('$id' ,'$name', '$email', '$phone', '$clg', '$dept', '$year','$eventdata')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			$domail = 1;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}
	else
	{
		$sql = "INSERT INTO pranav (id, name, email, phone, clg, dept, year, event)
		VALUES ('$id' ,'$name', '$email', '$phone', '$clg', '$dept', '$year','$eventdata')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			$domail = 1;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
	if($e == 1)
	{
		$error_message .= 'Email ID Entered has already been registered.<br />';
	}
	if(strlen($error_message) > 0) {
     died($error_message);
   }
	if($domail == 1)
	{	$headers = 'From: '.$email_from."\r\n". 'Reply-To: '.$email_from."\r\n" . 'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);
		echo "<br>mailed!";	
		$email_amessage = "";
		$email_ppmessage = "";
		$email_prmessage = "";
$email_sfmessage = "";
		$email_opmessage ="";
		$email_amessage = "Hello ".$name.",
			
Thanks for registering for PRANAV 2K15.

DATE OF SYMPOSIUM: 19TH OF AUGUST 2015	
REPORTING TIME: 9.00 A.M
VENUE: MEENAKSHI SUNDARARAJAN ENGINEERING COLLEGE ,#363,ARCOT ROAD,KODAMBAKKAM,CHENNAI-600024
Here’s your ticket for our symposium. 

NAME: ".$name."
EVENTS: ".$eventdata."

REGARDS,
TEAM PRANAV

******DISCLAIMER*******
•	This is an auto generated email. For any queries contact us through the email id and numbers provided in our website.
•	Printout of this email is recommended for easier identification and confirmation. (For paper and project presentation selection email printout is to be brought.)
•	Reporting time is to be strictly followed. 
•	Participants are to arrange their own mode of transport and lunch. 
";
		$headers = 'From: '.$email_to."\r\n". 'Reply-To: '.$email_to."\r\n" . 'X-Mailer: PHP/' . phpversion();
		@mail($email_from, $email_subject, $email_amessage, $headers);
		if((in_array('Paper Presentation',$event)))
		{	
			$email_ppmessage = "Hello ".$name.",
			
Thanks for registering for PAPER PRESENTATION at PRANAV 2K15.
Kindly mail us your abstract to us at pranav2k15.paper@gmail.com. 
We shall get back to you after the selection process is done.

DATE OF SYMPOSIUM: 19TH OF AUGUST 2015	
REPORTING TIME: 9.00 A.M
VENUE: MEENAKSHI SUNDARARAJAN ENGINEERING COLLEGE, #363 ARCOT ROAD,KODAMBAKKAM,CHENNAI-600024

REGARDS
TEAM PRANAV

********DISCLAIMER*******
•	This is an auto generated email. For any queries contact us through the email id and numbers provided in our website.
•	Failure to mail the abstract shall be considered invalid registration.
";
$headers = 'From: '.$email_to."\r\n". 'Reply-To: '.$email_to."\r\n" . 'X-Mailer: PHP/' . phpversion();
		@mail($email_from, $email_subject, $email_ppmessage, $headers);
		}
		if((in_array('Project Presentation',$event)))
		{
			$email_prmessage = "Hello ".$name.",
			
Thanks for registering for PROJECT PRESENTATION at PRANAV 2K15.
Kindly mail us your abstract to us at pranav2k15.project@gmail.com. 
We shall get back to you after the selection process is done.

DATE OF SYMPOSIUM: 19TH OF AUGUST 2015	
REPORTING TIME: 9.00 A.M
VENUE: MEENAKSHI SUNDARARAJAN ENGINEERING COLLEGE, #363 ARCOT ROAD,KODAMBAKKAM,CHENNAI-600024

REGARDS
TEAM PRANAV

********DISCLAIMER*******
•	This is an auto generated email. For any queries contact us through the email id and numbers provided in our website.
•	Failure to mail the abstract shall be considered invalid registration.
";
		$headers = 'From: '.$email_to."\r\n". 'Reply-To: '.$email_to."\r\n" . 'X-Mailer: PHP/' . phpversion();
		@mail($email_from, $email_subject, $email_prmessage, $headers);
		}
if((in_array('Short Film making',$event)))
{$email_sfmessage = "Hello ".$name.",
			
Thanks for registering for SHORT FILM MAKING at PRANAV 2K15.
Kindly send us the film made and the details beforehand via post as a CD-ROM to the following address:
ROOM NO #49, IIET MEN’S HOSTEL, OPP.SEKAR EMPORIUM, KODAMBAKKAM, CHENNAI-600024
OR upload your file to the following link, (only if the movie can be compressed to within 75mb) 
http://dropitto.me/pranav2k15sfm 

[Password: sfmupload]

DATE OF SYMPOSIUM: 19TH OF AUGUST 2015	
REPORTING TIME: 9.00 A.M
VENUE: MEENAKSHI SUNDARARAJAN ENGINEERING COLLEGE, #363 ARCOT ROAD,KODAMBAKKAM,CHENNAI-600024

REGARDS
TEAM PRANAV

********DISCLAIMER*******
•	This is an auto generated email. For any queries contact us through the email id and numbers provided in our website.
•	Failure to send or upload the short film shall be considered as an invalid registration.
";
$headers = 'From: '.$email_to."\r\n". 'Reply-To: '.$email_to."\r\n" . 'X-Mailer: PHP/' . phpversion();
		@mail($email_from, $email_subject, $email_sfmessage, $headers);
}
if((in_array('Short Film making',$event)))
{$email_opmessage = "Hello ".$name.",
			
Thanks for registering for ONLINE PHOTOGRAPHY at PRANAV 2K15.
Kindly Upload your photo(s) to the following facebook page, 
https://wwww.facebook.com/onlinephotography.pranav2k15 

DATE OF SYMPOSIUM: 19TH OF AUGUST 2015	
REPORTING TIME: 9.00 A.M
VENUE: MEENAKSHI SUNDARARAJAN ENGINEERING COLLEGE, #363 ARCOT ROAD,KODAMBAKKAM,CHENNAI-600024

REGARDS
TEAM PRANAV

********DISCLAIMER*******
•	This is an auto generated email. For any queries contact us through the email id and numbers provided in our website.
•	Failure to send or upload the short film shall be considered as an invalid registration.
";
$headers = 'From: '.$email_to."\r\n". 'Reply-To: '.$email_to."\r\n" . 'X-Mailer: PHP/' . phpversion();
		@mail($email_from, $email_subject, $email_sfmessage, $headers);
}
		header("Location: ty.html");
	}
	else
	{	echo "<br><br>not mailed! Report fast!";
	}
 }
 else
 {
 $error = 'Email Address not found.';
 $_SESSION['error'] = $error;
 echo $error;
  header("Location: err.php");
 }
 
?>