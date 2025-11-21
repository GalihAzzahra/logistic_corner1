<?php
$db_host = "localhost";
$db_user = "admin_logistic";
$db_user = "corner_admin";
$db_pass = "";
$db_name = "logistic_corner";


$site_name = "Logistic Corner";
$site_url = "http://localhost/logistic_corner";


$session_timeout = 3600;


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//hendra menambah syntax 1
$upload_dir = "uploads/";
$max_file_size = 5242880;
$allowed_extensions = array("jpg", "jpeg", "png", "pdf");
?>
