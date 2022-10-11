<?php
    if (isset($_REQUEST['first-name'])){
        $name = $_REQUEST['first-name'];
        $lastName = $_REQUEST['last-name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];  
        // -check values name & email
        $nameCheck= nameCheck($name.$lastName);
        $emailCheck=emailCheck($email);
     
        if ($nameCheck && $emailCheck === "success"){
            $to = 'admin@joshgarcia-dev.com';
             $subject = 'Message';
             $headers = "From: ".$name." <".$email."> \r\n";
             $sendEmail = mail($to,$subject,$message,$headers);
             $messageSent = ($sendEmail) ? "success" : "fail";
             echo $messageSent;
             return;
          }
          else if($nameCheck === "fail name"){
             echo $nameCheck;
             return;
          }
          else if($emailCheck === "fail email"){
            echo $emailCheck;
            return;
         }
        }
    
      // Set your email address where you want to receive emails. 
      // ==================================
      //  $to = 'admin@joshgarcia-dev.com';
      //  $subject = 'Message';
      //  $headers = "From: ".$name." <".$email."> \r\n";
      //  $send_email = mail($to,$subject,$message,$headers);
      //  echo ($send_email) ? 'success' : 'error';

function emailCheck($sample){
  $test =null;
  if (!filter_var($sample,FILTER_VALIDATE_EMAIL)) {
  return   $test = "fail email";
}
else{
  return $test ="success";
}
return $test;
};


function nameCheck($sample){
  $test =null;
  if (!preg_match("/^[a-zA-Z-' ]*$/",$sample) || $sample==="") {
    $test = "fail name";
    return $test;
  }
  else{
    return $test= "success";
  }
  echo $test;  
};
