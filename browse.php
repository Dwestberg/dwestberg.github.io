<!DOCTYPE html>
<html>
<head>
<title>BookReservs</title>
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css2?family=Eczar&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/nwq4lrq.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

<?php
include 'header.php'; ?>

<div class="form">
<h1> Browse Books </h1>
<label for="title">Title</label><label class="authlabel" for="author">Author</label><br>
    <input type="text" id="title" name="titlename" placeholder="Book Title...">
    <input type="text" id="author" name="authorname" placeholder="Author Name...">

    <input type="submit" value="Submit">
</div>

<table id="books">
  <tr>
    <th>Title</th>
    <th>Author</th>
    <th></th>
  </tr>
  <tr>
    <td>The Da Vinci Code</td>
    <td>Brown, Dan</td>
    <td><button>Reserve</button></td>
  </tr>
  <tr>
    <td>New Moon</td>
    <td>Meyer, Stephanie</td>
    <td><button>Reserve</button></td>
  </tr>
  <tr>
    <td>Man and Boy</td>
    <td>Parsons, Tony</td>
    <td><button>Reserve</button></td>
  </tr>
  <tr>
    <td>Boy in the striped Pyjamas</td>
    <td>Boyne, John</td>
    <td><button>Reserve</button></td>
  </tr>
  
</table>

  <?php
include 'footer.php'; ?>

</body>
</html>