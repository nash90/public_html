<?php

$subject1 = $_POST['txt'];
$name1 = $_POST['txt2'];
$name2 = $_POST['txt3'];
$emailid = $_POST['txt4'];
$message1 = $_POST['txt5'];
$secure1 = $_POST['security'];
$summ = $_POST['sum'];

$to = "sathi.shibuya@gmail.com";
$subject = "mail message from the website of sathi ($subject1)";
//$message = "A visitor of sathi website has send following message. \n\n Name: $name1 $name2 \n\n Email: $emailid \n\n $message1 \n\n ";
$message = $message1;


//echo ("Abinash is here\n");
//echo "$secure1<br/>"; 
//echo $emailid; "<br/>";
//echo $to;
//echo $summ;

$empty1=0;
if (empty($subject1) OR empty($name1) OR empty($name2) OR empty($emailid) OR empty($message1)){
	
	header("Location: Comment.php?s=3");
	$empty1=1;
}

while ($empty1 == 0){
	if ($secure1 == $summ){
		mail($to, $subject, $message);
		header("Location: Comment.php?s=1");
		}else{
			header("Location: Comment.php?s=2");	
			}
$empty1 = 1;
}

?>