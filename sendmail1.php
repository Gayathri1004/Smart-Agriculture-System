<?php
include("dbconnection.php");
if (isset($_POST))
	{
	
    
    $to = $_POST['email'];
    $subject = "Response from Agricultural Management System";
    $body = $_POST['message'];
	$headers = "From: smaspd2020@gmail.com\r\n";

    
	$sql ="UPDATE ares.contact_us SET stat='Replied' WHERE email='$to'";
	mysqli_query($con,$sql);
if (mail($to, $subject, $body, $headers)) {
   echo '<script>window.alert("Email sent successfully" );</script>';
} else {
   		echo '<script>window.alert("Failed to send Email!");</script>';
}
	}
			echo '<script>location.href="feeds.php"</script>';
?>