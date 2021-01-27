<!DOCTYPE html>
<html>
<head>
<title>BookReservs</title>
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css2?family=Eczar&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/nwq4lrq.css">
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


<div class="headerimg">
<img src="header.png">
<!-- <a href="#browse"> Browse our books now! </a> -->
</img>
</div>

<h3 class="bodytext">
Hello, and welcome <br> to our online bookclub
</h3>

<div id="grid">

<div id="browse">
<a href="browse.php"><img src="browse.jpeg"> </img>
<h2 class="wow animate__animated animate__backInRight"> Browse Books </h2> </a>
<p> <b> Browse through our virtual library </b><br> Choose from a wide amount of books  </p>
  </div>
  
  <div id="mybooks">
<a href="mybooks.php" ><img src="mybooks.jpeg"> </img>

<h2 class="wow animate__animated animate__backInRight"> My Books </h2> </a>
<p> <b> Look what books you have reserved </b><br> An easy way to what books you have already reserved     </p>
  </div>
  
  </div> 


  <?php
include 'footer.php'; ?>

</body>
</html>

