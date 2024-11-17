<?php
session_start();
session_destroy(); // Destroy all sessions
header("Location: admin.php"); // Redirect to login page
exit();
?>