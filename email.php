<?php
    if (isset($_REQUEST['first-name'])){
        $name = $_REQUEST['first-name'];
        $lastName = $_REQUEST['last-name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
      // Set your email address where you want to receive emails. 
       $to = 'garcia.joshua60@yahoo.com';
       $subject = 'Message';
       $headers = "From: ".$name." <".$email."> \r\n";
       $send_email = mail($to,$subject,$message,$headers);
       echo ($send_email) ? 'success' : 'error';
  }

?>
