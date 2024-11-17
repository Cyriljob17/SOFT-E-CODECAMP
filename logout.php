<?php
session_start();
session_unset(); // Unset tanan variable
session_destroy(); // Destroy sa session
header("Location: login.php"); // Redirect sa login page
exit();
?>
