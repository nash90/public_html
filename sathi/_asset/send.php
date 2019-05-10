<?php

$subject1 = $_POST['txt'];
$name1 = $_POST['txt2'];
$name2 = $_POST['txt3'];
$emailid = $_POST['txt4'];
$message1 = $_POST['txt5'];
$secure1 = $_POST['security'];


$to = "sathi.shibuya@gmail.com";
$subject = "mail message from the website of sathi ($subject1)";
//$message = "A visitor of sathi website has send following message. \n\n Name: $name1 $name2 \n\n Email: $emailid \n\n $message1 \n\n ";
$message = $message1;


echo ("Abinash is here\n");
echo "$secure1<br/>"; 
echo $emailid; "<br/>";
echo $to;


if ($secure1 == "10"){
	mail($to, $subject, $message);
	header("Location: Message.php?s=1");
	}else{
		header("Location: Message.php?s=2");	
		}


?>