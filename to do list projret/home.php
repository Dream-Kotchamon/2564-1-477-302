<?php session_start(); ?>

<?php if(!isset($_SESSION['login'])) {header('Location: index.php?login=You No Login'); }?>

<h1>Home</h1>
<h2>Hello <?php echo $_SESSION['username']; ?> </h2>

<a href="con_logout.php">Logout</a>