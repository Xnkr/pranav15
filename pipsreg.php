<?php
session_start();
if(isset($_POST['email'])) {

		////////////////////////////////////////////////////////////////////////////////Mailer
		
      // EDIT THE 2 LINES BELOW AS REQUIRED
     $email_to = "pips@pranav2k15.com";
     $email_subject = "Pranav2k15 PIPS Registration";
 
    function died($error) {
		$_SESSION['error'] = $error;
        header("Location: perr.php");
	   echo $error;
		 die();
     }
      
     // validation expected data exists
     if(!isset($_POST['name']) ||
         !isset($_POST['clg']) ||
         !isset($_POST['email']) ||
         !isset($_POST['prevp']) ||
		 !isset($_POST['year'])||
		 !isset($_POST['phone'])) {
         died('We are sorry, but there appears to be a problem with the form you submitted.');       
     }
	 
	 //assigning variables
     $name = $_POST['name']; // required
     $clg = $_POST['clg']; // required
     $email_from = trim($_POST['email']); // required
     $prevp = $_POST['prevp']; // required
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
     $error_message .= 'The School/College Name you entered does not appear to be valid.<br />';
   }
   
   if(strlen($prevp) < 1) {
     $error_message .= 'Enter Number of Youth parliaments attended.<br />';
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
   
     $email_message = "PIPS details below.\n\n";
      
     function clean_string($string) {
       $bad = array("content-type","bcc:","to:","cc:","href");
       return str_replace($bad,"",$string);
     }
      
     $email_message .= "Name: ".clean_string($name)."\n";
     $email_message .= "School/College: ".clean_string($clg)."\n";
     $email_message .= "Email: ".clean_string($email_from)."\n";
     $email_message .= "Num of Youth Parliaments: ".clean_string($prevp)."\n";
     $email_message .= "Year: ".clean_string($year)."\n";
     $email_message .= "Phone: ".clean_string($phone)."\n";
	 
     
 // create email headers
 //$headers = 'From: '.$email_from."\r\n". 'Reply-To: '.$email_from."\r\n" . 'X-Mailer: PHP/' . phpversion();
 //@mail($email_to, $email_subject, $email_message, $headers);
 //echo "mailed!";	
	
	
////////////////////////////////////////////////////////////////////////////////Database
		$servername = "localhost";
		$username = "pranaomn_admin";
		$password = "pranav2k15";
		$dbname = "pranaomn_pips";

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
		$sql = "INSERT INTO pranav (id, name, email, phone, clg, year, prevp)
		VALUES ('$id' ,'$name', '$email', '$phone', '$clg', '$year', '$prevp')";

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
		$sql = "INSERT INTO pranav (id, name, email, phone, clg, year, prevp)
		VALUES ('$id' ,'$name', '$email', '$phone', '$clg', '$year', '$prevp')";

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
		
		$email_amessage = "Hello ".$name.",
			
Thanks for registering for PIPS-PRANAV’S INIDAN PARLIAMENT SIMULATION at PRANAV 2K15. We shall get back to you with the topic of discussion soon.

DATE OF SYMPOSIUM: 19TH OF AUGUST 2015	
REPORTING TIME: 9.00 A.M
VENUE: MEENAKSHI SUNDARARAJAN ENGINEERING COLLEGE ,#363,ARCOT ROAD,KODAMBAKKAM,CHENNAI-600024
Here’s your ticket for our symposium. 

NAME: ".$name."
EVENT: PIPS-PRANAV’S INIDAN PARLIAMENT SIMULATION

REGARDS,
TEAM PRANAV

******DISCLAIMER*******
•	This is an auto generated email. For any queries contact us through the email id and numbers provided in our website.
•	Printout of this email is recommended for easier identification and confirmation. 
•	Reporting time is to be strictly followed. 
•	Participants are to arrange their own mode of transport.
•	Lunch would be provided. 
";
		$headers = 'From: '.$email_to."\r\n". 'Reply-To: '.$email_to."\r\n" . 'X-Mailer: PHP/' . phpversion();
		@mail($email_from, $email_subject, $email_amessage, $headers);
		
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
  header("Location: perr.php");
 }
 
?>