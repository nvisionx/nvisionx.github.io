<?php

if (isset($_POST["submit"]))
{
	$name=$_REQUEST['fname']; 
	$email=$_REQUEST['emailid']; 
	//$sfrom="customer@project-x.com";
	$contactnumber=$_REQUEST['phonenumber'];
	$sub=$_REQUEST['sub'];
	$comment=$_REQUEST['comment'];
        
      //  $from="From: <$sfrom>\r\nReply-to: $email"; 
	//	$message="Name: $name\r\nE-mail: $email\r\nContact Number: $contactnumber\r\nSubject: $sub\r\nMessage: $comment"; 
       //$subject="this is test mail"; 
       $message="\nName:".$name."\nEmail:".$email."\nPhone:".$contactnumber."\nMessage:".$comment;
     
		
		mail("abhi77rocks@gmail.com", $sub,$message);
		mail("hemanth.nh3@gmail.com", $sub,$message);
		echo "<h4 class='alert alert-success'>Your Feedback is Successfully sent,we will get back you as soon as possible ..!</h4>"; 
}
else{
	echo "page not found/ no acess to page";
}

?>