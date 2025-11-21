<?php
$db_host = "localhost";
<<<<<<< HEAD
$db_user = "superadmin";
=======
$db_user = "admin_logistic";
$db_user = "corner_admin";
>>>>>>> 574134e6bd6799085ce6fda0b6d75a3667ad9c52
$db_pass = "";
$db_name = "logistic_corner";


$site_name = "Logistic Corner";
$site_url = "http://localhost/logistic_corner";


$session_timeout = 3600;


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//menambahkann syntax 3
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
