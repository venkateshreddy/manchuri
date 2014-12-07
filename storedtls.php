<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
extract($_REQUEST);
if($_REQUEST)
{
	
	require_once('classes/db.class.php');
	require_once('classes/manchuri.class.php');
	$contact = new Manchuri();

	$result = $contact->storeContactDetails($email,$name,$dtls,$project,$country,$city,$phone,$hearing,$timeframe,$toi);

	if($result)
	{
		require_once('mail.php');
		$content  = "Hi,\n\n";
		$content  .= "Request from site.\n";
		$content  .= "Please find the details below. \n\n";
		$content  = "Hi ".$name.",\n\n";
		$content  .= "e-mail: ".$email."\n";
		$content  .= "Mobile No: ".$phone."\n\n";
		$content  .= "City: ".$city."\n\n";
		$content  .= "Thank you."."\n\n";
		$content  .= "Regards,\n";
		$content  .= "Manchuri.";
		$subject  = "Contact Details."; 
		mlg_mail($email, $subject, $content);
		echo "success";
	}
	
}
else{
	echo "Enter All fields";
}
?>