<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	   <title>Loucoffee - Contact me</title>
	<link rel="stylesheet" type="text/css" href="script/style.css">
  <link rel="icon" type="image/png" href="images/Self_Portrait.png">

  <!-- import d'un kit fontawesome pour les icônes réseaux sociaux -->
      <script src="https://kit.fontawesome.com/279d5d08dd.js" crossorigin="anonymous"></script>
</head>


<body>

<!-- MENU -->
  <div class="header">
 <h1> <a href="index.html"><img class="logo" src="images/LogoLoucoffee2.png" width="250"></a></h1>

 <label for="toggle">☰</label>
 <input type="checkbox" id="toggle">
    <nav class="regular">
  <ul>
    <li><a href="about.html">about me</a></li>
    <li><a href="artwork.html">my artwork</a></li>
    <li><a href="projects.html">my other hats</a></li>
    <li><a href="contact.php"><b>contact me</b></a></li>
  </ul>
</nav>
</div>

<br><br>
<!-- FORMULAIRE -->

<div class="title-exhib"><h2>want to reach out?</h2></div>
<h3>Please use the form below!</h3>
<br><br>

<?php
if(!isset($_POST["soum"])){
?>
<!-- FORMULAIRE (ancien .html) -->
<div class="contact">
<form method="POST">
  <input type="text" name="name" placeholder="My name is..."><br><br>
  <input type="text" name="email" placeholder="My email is..."><br><br>
  <select name="subject" placeholder="I want to talk about...">
    <option value="null" disabled selected hidden>I want to contact you about...</option>
    <option value="commission">Commission</option> 
    <option value="prints">Prints</option>
   <!-- <option value="exhibition">Exhibition proposal</option> -->
    <option value="collab">Collaboration</option>
    <option value="other">Other</option>
  </select><br><br>
  <textarea name="message"rows="6" cols="50" placeholder="Hello Loucoffee!"></textarea><br><br><br>

  <input type="submit" name="soum" value="Submit"> 
</form>
</div>

</body>

<footer>
  
<a href="https://www.instagram.com/loucoffee/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
<a href="https://vm.tiktok.com/ZMLXJevGS/" target="_blank"><i class="fab fa-tiktok"></i></a>

<br><br><br>

<b>©2023 Loucoffee.</b> All rights reserved.<br>
Website designed by Solène Caudron. 

</footer>

</html>


<?php
exit();
}

//FLAG ERREUR
$error=0;

if((empty (($_POST["name"]) && ($_POST["email"]) && ($_POST["message"]))) || (!isset ($_POST["subject"]))){
print "<div class=\"contact\"><span class=\"error\">OOPS!</span><br>"; 
}

if(empty ($_POST["name"])){
  print "You need to specify your name!<br>";
  $error=1;
}

if(empty ($_POST["email"])){
print "You need to specify your email!<br>"; 
$error=1;
}

if(!isset ($_POST["subject"])){
print "You need to specify a subject!<br>"; 
$error=1;
}

if(empty ($_POST["message"])){
print "You need to type a message!<br>"; 
$error=1;
}

if($error==1){
    print " <br>
    <a href=\"contact.php\">
    <input type=\"submit\" value=\"Go back to the form\">
    </a>
    </div>
    </body> 
    <footer>
  
<a href=\"https://www.instagram.com/loucoffee/?hl=fr\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
<a href=\"https://www.tiktok.com/@justine.loucoffee\" target=\"_blank\"><i class=\"fab fa-tiktok\"></i></a>

<br><br><br>

<b>©2023 Loucoffee.</b> All rights reserved.<br>
Website designed by Solène Caudron. 

</footer>
    </html>"; exit();
}

//TRAITEMENT (ancien .php)
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$soum=$_POST["soum"];

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {

  $entete  = 'MIME-Version: 1.0' . "\r\n";
  $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $entete .= 'From: justineloucoffee@gmail.com' . "\r\n";
  $entete .= 'Reply-to: ' . $_POST['email'];

  $message = '<h1>Sent from Loucoffee Contact Page</h1>
  <p><b>Name : </b>' . $_POST['name'] . '<br>
  <p><b>Email : </b>' . $_POST['email'] . '<br>
  <p><b>Subject : </b>' . $_POST['subject'] . '<br>
  <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

  $reply = mail('justineloucoffee@gmail.com', 'Sent from Loucoffee Contact Page', $_POST['message'], 'From: justineloucoffee@gmail.com' . "\r\n" . 'Reply-to: ' . $_POST['email']);
  if($reply)

print "<div class=\"contact\">
<img class=\"imgpresentation\" src= \"http://cheyennebirdbanter.files.wordpress.com/2014/03/2002homing-pigeonms.png\">
<br><br>
<p><b>A carrier pigeon is on its way to deliver your message! I will answer you as soon as possible.</b></p>
</div>    </body> 
<footer>
  
<a href=\"https://www.instagram.com/loucoffee/?hl=fr\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
<a href=\"https://www.tiktok.com/@justine.loucoffee\" target=\"_blank\"><i class=\"fab fa-tiktok\"></i></a>

<br><br><br>

<b>©2023 Loucoffee.</b> All rights reserved.<br>
Website designed by Solène Caudron. 

</footer>
";
}
?>
