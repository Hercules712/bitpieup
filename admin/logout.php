<?php
session_start();
unset($_SESSION['admin']);
session_destroy();
header('Location: login.php?status=logged_out');

?>