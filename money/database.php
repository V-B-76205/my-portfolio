<?php
// Change these values if your local MySQL setup uses a different account.
$db_host = "localhost:3308";
$db_user = "root";
$db_pass = "root";
$db_name = "money";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Database connection failed. Check database.php settings and make sure MySQL is running.");
}

?>
