<?php
$host = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to change this even this script has already online on the internet.
$db   = 'btc'; // Your database name.
$user = 'root';             // Your database username.
$password = '';                 // Your database password. If your database has no password, leave it empty.

// Let's connect to host
$con =  mysqli_connect($host, $user, $password, $db) or DIE('Connection to host is failed, perhaps the service is down!');
// Select the database
mysqli_select_db($con, $db) or DIE('Database name is not available!');


/*-------------site variable------------------*/
$site ="http://localhost/bitpileup/";
$ajax_link ="//localhost/bitpileup/";

$site_name = "BitPileUp";

$site_img = $site."img/default.png";
?>