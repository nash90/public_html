<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sathi Indian-Nepali Curry Restaurant, Shibuya, Tokyo</title>
<link rel="stylesheet" type="text/css" href="_css/my_style.css">

</head>

<body>

<div class="Container" id="Container" style="height: auto;">

  <div class="Container" id="Head">   
    <h1>
    Sathi <span style="color: #900; ">Indo-Nepalese</span> Restaurant, Shibuya </h1>
    <h1><span style="color: #900">サティー渋谷店</span>インド・ネパールカレー屋 </h1>
    
  </div>
  
  <div class="Container" id="logo">
  <img name="pic1" src="_image/naan1uk.gif" width="200" height="150" alt="">
  </div>
  <div style = "clear: both"></div>
  
    
  <div class="Container" id="Menu">
  <table width="200" height="300" border="1">
  <tr>
    <th scope="row"><a href="index.html">Home</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="Menu.html">More Menu</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="About_us.html">About Us</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="Address.html">Address</a></th>
  </tr>
  <tr>
    <th scope="row"><a href="Comment.php">Comment</a></th>
  </tr>
</table>
  </div>
  
  <div class="Container" id="picture">
  <img name="pic" src="_image/2.1.jpg" width="760" height="300" alt="" style="background-color: #00CC00">
  </div>
<div style ="clear: both;"> </div>
  
  <div class="Container" id="text" style="height: auto;">
    
<form action="send1.php" method="post" method="get" name="message1">
<fieldset id style="border-left-color: #06C; border-bottom-color: #06C; border-right-color: #06C; border-top-color: #06C; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; margin-left: auto; margin-right: auto; margin-top: 20px; width: 300px; padding: 20px; font-size: 16px; font-weight: bold;" >

 
    <legend>Send Message to Us</legend>
  
 <?php
  if (isset($_GET['s']))    
{    
          // Instructions if $_POST['value'] or $_GET['value'] exist    
   
  $s=$_GET['s'];
  
  if ($s == "1"){
	  
	  echo ("<font color='#3333CC'>Your message was sent Successfully</font>");
	  
	  }else if ($s == 2){
		  
		  echo("<font color='#FF0000'>Failed to send your message because security was wrong. Please try again</font>");
		  
		  }else if ($s == 3){echo("<font color='#FF0000'>One or more boxes were left empty. Please enter data in all boxes and try again.</font>");}
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
<?php
$a1 = rand(0,20);
$a2 = rand(0,10);
$sum = $a1+$a2;
/*<a href = "send1.php?sum=<?php echo $sum ?>"></a>*/
?>

<input type="hidden" name = "sum" value="<?php echo $sum ?>">

  <p>Security <?php print $a1?>+<?php print $a2?> is<br>
    <label for="security"></label>
    <input type="text" name="security" id="security">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
    <br>
  </p>
</fieldset>

</form>

    
  </div>
  
<!-- ~~ finish of container -->
</div>
</body>

</html>
