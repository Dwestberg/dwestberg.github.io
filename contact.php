<!DOCTYPE html>
<html>
<head>
<title>BookReservs</title>
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css2?family=Eczar&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

<?php
include 'header.php'; ?>


<h3 class="contacttext">
  Contact Us
</h3>
<hr/>
<h4 class="contact"> Feel free to ask us questions. We <i class="fa fa-heart wow animate__animated animate__bounceIn"></i> to help! </h4>



<div class="flexcontainer">
<div class="left">
<input class="contactform" type="text" id="name" name="name" placeholder="Your name">
<input class="contactform" type="text" id="email" name="email" placeholder="Email">

<textarea class="textarea" id="subject" name="subject" placeholder="Message" style="height:200px"></textarea>
<input type="submit" value="Send">

</div>

<div class="right">
<h4 class="contact"><i class="fas fa-map-marker-alt"></i> <b>BookReserv </b><br> Jönköping, Sweden </h4>
<h4 class="contact"><i class="fas fa-phone-alt"></i> <b>(036)123-4567 </b></h4>
<h4 class="contact"><i class="fas fa-envelope"></i> <b> Bookreserv@gmail.com </b></h4>

<hr/>
<div class="flexcontainer">
<h4 class="icons"> <i class="fab fa-facebook-f"></i></h4><h4 class="icons"><i class="fab fa-twitter"></i></h4><h4 class="icons"><i class="fab fa-instagram"></i></h4>
</div>
</div>
</div>
  <?php
include 'footer.php'; ?>

</body>
</html>