<?Php

	$from = $_POST['email'];				
	
	//$to="kalpesh.khona@gmail.com";
	$to="info@timesmix.com";
	
	$subject="New Subscription on the website";
	
	$headers  = "MIME-Version: 1.0" . "\r\n";	
	
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	
	$headers .= 'From:'. $from . "\r\n";
	 
	$txt = "<html>
  			<body>
			<table width='500' border='0' cellpadding='0' cellspacing='0' >
			  <tr>
				<td height='33' width='120'>Email :</td>
				<td height='33'>".$_POST['email']."</td>
			  </tr>
			</table>
			</html>";
   
   mail($to,$subject,$txt,$headers);
?>
<script type="text/javascript">
alert("Thank you for your Enquiry/ Feedback. We will get back to you soon.");
window.location="index.html";
</script>

