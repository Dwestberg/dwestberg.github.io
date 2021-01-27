
<?php
include 'config.php'; ?>

<header>
  <a href="index.php" class="logo"><img class="logoimg" src="LOG.png"/></a>
  <div class="header-right">
    <a class="<?php echo ($page == 'index.php') ? 'active' : ' ' ?>" href="index.php">Home</a>
    <a class="<?php echo ($page == 'browse.php') ? 'active' : ' ' ?>" href="browse.php">Browse Books</a>
    <a class="<?php echo ($page == 'mybooks.php') ? 'active' : ' ' ?>" href="mybooks.php">My Books</a>
    <a class="<?php echo ($page == 'contact.php') ? 'active' : ' ' ?>" href="contact.php">Contact</a>
    <a class="<?php echo ($page == 'about.php') ? 'active' : ' ' ?>" href="about.php">About</a>
  </div>
</header>