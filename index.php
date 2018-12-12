 <? 
	if(isset($_POST['submit'])){
		$to = "paulapaivamoreira@yahoo.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$subject = "Form submission";
		$message = $_POST['message']
		$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];


		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
			    
	}
?>