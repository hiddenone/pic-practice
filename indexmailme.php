<?php
 require_once "Mail.php";
 
 $from = "The Sender <glennholt1@gmail.com>";
 $to = "Receiver <glennholt1@gmail.com>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "smtp.gmail.com";
 $port = "587";
 $username = "glennholt1@gmail.com";
 $password = "***REMOVED***";
 
 

 
 
 
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