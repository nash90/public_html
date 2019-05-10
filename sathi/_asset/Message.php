<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="_css/my_style.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="send.php" method="post" method="get" name="message">
<fieldset id style="border-left-color: #06C; border-bottom-color: #06C; border-right-color: #06C; border-top-color: #06C; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; margin-left: auto; margin-right: auto; margin-top: 20px; width: 300px; padding: 20px;" >
  <p>
    <legend>Contact Us </legend>
  </p>
  
 <?php
  if (isset($_GET['s']))    
{    
          // Instructions if $_POST['value'] or $_GET['value'] exist    
   
  $s=$_GET['s'];
  
  if ($s == "1"){
	  echo ("Your message was sent Successfully");
	  }else if ($s == 2){
		  echo("Failed to send your message check security");
		  }
}
  ?>
   
  <p>Subject<br>
    <label for="txt"></label>
    <input type="text" name="txt" id="txt">
  </p>
  <p>First Name<br>
    <label for="txt2"></label>
    <input type="text" name="txt2" id="txt2">
</p>
  <p>last Name<br>
    <label for="txt3"></label>
    <input type="text" name="txt3" id="txt3">
</p>
  <p>Email<br>
    <label for="txt4"></label>
    <input type="text" name="txt4" id="txt4">
</p>
  <p>Message<br>
    <label for="txt5"></label>
    <textarea name="txt5" rows="4" id="txt5"></textarea>
</p>
  <p>Security 6+4 is<br>
    <label for="security"></label>
    <input type="text" name="security" id="security">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
    <br>
  </p>
</fieldset>

</form>
</body>
</html>
