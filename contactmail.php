<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=PT%20Sans:400,700" rel="stylesheet" type="text/css">
	<title></title>
	 <style>
	    .swal-overlay--show-modal .swal-modal {
    		font-family: georgia;
		}
        .swal-text {
            font-size: 18px;
            text-align:center;
        }
        .swal-title {
            color: #000c2d;
            font-size:28px;
        }
        .swal-button {
            background-color: #e03114;
            font-size:16px;
        }
        .swal-button:hover {
            background-color: #e03114;
        }
        .swal-button:focus {
            background-color: #e03114;
        }
        .swal-button:not([disabled]):hover {
            background-color: #e03114;
        }
    </style>
</head>
<body>
	<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>  
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
     
	$sendmail = mail($to,$sub,$message,$header);
	if($sendmail){
		echo "<script>swal({
				  title: 'Thank You!',
				  text: 'Message Sent Successfully!',
				  icon: 'success',
				  button: 'Ok!',
				}).then(function(){
			         window.location.href='index';
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
			         window.location.href='index';
			         });  
			</script>";

		}

}


?>