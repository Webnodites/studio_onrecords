<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
	<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>   
     <script src="sweetalert2.min.js"></script>
</body>
</html>
<?php
echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

if(isset($_POST["submitbtn"]))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["mobile"];
	$msg=$_POST["message"];
	
	$from = $email;
	$to="contact@studioonrecords.com";
	$sub = "Enquiry on Website";

	$header = "From:".$from;
	$message = "Name :".$name."\n";
	$message .= "Email :".$email."\n";
	$message .= "Mobile No. :".$phone."\n";
	$message .= "Message :".$msg."\n";
     
     echo $message;
	$sendmail = mail($to,$sub,$message,$header);
	if($sendmail){
		echo "<script>swal({
				  title: 'Thank You!',
				  text: 'Message Sent Successfully!',
				  icon: 'success',
				  button: 'Ok!',
				}).then(function(){
			         window.location.href='index.html';
			         });
			   </script>";
	}
	else{
	
		echo "<script>
			swal({
				  title: 'Oops!',
				  text: 'Something Went Wrong!',
				  icon: 'error',
				  button: 'Ok!',
				}).then(function(){
			         window.location.href='index.html';
			         });  
			</script>";

		}

}


?>