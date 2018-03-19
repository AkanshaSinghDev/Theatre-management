<?php
	$json=json_decode(file_get_contents('php://input'));
	$name=$json->name;
	$email=$json->email;
	$phone=$json->phone;
	$auth="Enter the auth key";
	$message="Hi $name,\n  Your movie ticket booking has been confirmed. Please note that tickets once booked cannot be canceled.\n-Regards,\nVIT Cinema";
	mail($email, 'Booking Confirmation', $message,'From: no-reply@vitcinema.com');
	$response = file_get_contents("https://control.msg91.com/api/sendhttp.php?authkey="+$auth+"&mobiles=".$phone."&message=Hi%20".$name."%0AYour%20movie%20ticket%20has%20been%20confirmed.%20Please%20note%20that%20tickets%20once%20booked%20cannot%20be%20canceled.%0A-Regards,%0AVIT%20Cinema&sender=VITCIN&route=4&country=91");
?>