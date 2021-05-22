<?php 
session_start();
unset($_SESSION['admin']);
session_destroy();
header('Location: ../session/login.php?status=logged_out');

?>