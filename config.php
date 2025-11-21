<?php
$db_host = "localhost";
<<<<<<< HEAD
$db_user = "admin_logistic";
=======
$db_user = "corner_admin";
>>>>>>> galih
$db_pass = "";
$db_name = "logistic_corner";


$site_name = "Logistic Corner";
$site_url = "http://localhost/logistic_corner";


$session_timeout = 3600;


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
