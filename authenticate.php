<?php
session_start();

// Hardcoded admin credentials .mao ni password sa admin arun maka sud 
$admin_username = 'admin';
$admin_password = 'admin123456789'; 
// ari magkuha ug data gika sa form
$username = $_POST['username'];
$password = $_POST['password'];

// diri mag Check ifang  provided credentials kay match sa admin credentials
if ($username === $admin_username && $password === $admin_password) {
    // mao ni Set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    
    //if success mo Redirect to list.php
    header("Location: list.php");
    exit();
} else {
    // kung ang credentials gigama nimo kay di mao, redirect back to the login page with an error message
    $_SESSION['error'] = "Invalid username or password.";
    header("Location: login.php");
    exit();
}
?>