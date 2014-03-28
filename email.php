<?php
require_once "Mail.php";
//heroku config:set PWXX=somevalue
//heroku config:set UNXX=somevalue
//heroku config:set UNXX2=somevalue
//Then, access it from your code:

$my_un = getenv('UNXX');
$my_pw = getenv('PWXX');
$my_un_to = getenv('UNXX2');



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message= $_POST['message'];
$msg = "Name: $name" .
"Phone: $phone" .
"Message: $message" .
"Email: $email";
$subject = 'A Customer Email';
$to = $my_un_to;
//mail($to, $subject, $msg, 'From:' . $email);
echo 'Thank you for your input.  We will get back to you ASAP. <a href="index.html">Go back to the home page</a>';





 
 $from =   "The Sender <glennholt1@gmail.com>";
//$to = "Receiver <glennholt1@gmail.com>";
// $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 $body = $msg;
 echo $msg;
 $host = "smtp.gmail.com";
 $port = "587";
 $username = $my_un;
 $password = $my_pw;
 
 

 
 
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
















?>