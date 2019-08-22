<?Php

	if (isset($_REQUEST['email'])) {
      
    $email = $_REQUEST['email'];
      
    // Set your email address where you want to receive emails. 
    $to = 'info@timesmix.com';
      
    $subject = 'Subscription Request From Website';
    $headers = "For: ".$email." \r\n";
      
    $send_email = mail($to,$subject,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}
?>