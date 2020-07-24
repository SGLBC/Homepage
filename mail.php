

<!DOCTYPE html>
<html lang="en">
<head>
<title>Mail</title>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
<![endif]-->
</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <div class="wrapper"> <a href="index.html" class="logo">South Grand Lake Baptist Church</a>
        <nav>
          <ul class="menu">
            <li><a href="index.html">home</a></li>
            <li><a href="about us.html">About Us</a></li>
            <li class="active"><a href="media.html">Media</a></li>
            <li><a href="contact us.html">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>

<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "jcnowen2004@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>

<footer>
  <div class="container_12">
    <div class="wrapper">
      <div class="grid_8"> South Grand Lake Baptist Church 3042 State Hwy 28 Eucha, Oklahoma 74342 </br> (918) 314-2270 <!--<a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/" class="link">TemplateMonster.com</a>-->
 </div>      <div class="grid_4">
        <div class="social"> My Social:<a href="https://www.facebook.com/South-Grand-Lake-Baptist-Church-963291343832081/"><img src="images/facebook-icon.png" alt=""></a><a href="https://anchor.fm/jacob-cotrill7"><img src="images/anchor1.png" alt=""></a> </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>