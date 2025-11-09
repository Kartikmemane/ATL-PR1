<?php
session_start();
if(!isset($_SESSION['u'])) header("Location: login.php");
echo "<h3>Welcome ".$_SESSION['u']."!</h3><a href='logout.php'>Logout</a>";
?>
