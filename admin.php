<?php
session_start(); // Start the session first

if (isset($_SESSION['error'])) {
    echo '<div class="error">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']); // Clear the error message after displaying it
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(images/mbg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-color: #f4f4f4;
            padding: 20px;
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            margin: 0;
        }
        
        nav {
            background-color: #f8f9fa;
            padding: 10px;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: flex-end;
        }
        
        li {
            margin-left: 30px;
        }
        
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        .error {
            color: red;
            text-align: center;
        }
        .btn-primary {
    display: inline-block;
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: white;
    text-align: center;
    border-radius: 4px;
    text-decoration: none;
    font-size: 16px;
    margin-top: 10px;
}

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="images/logo.png" alt="Your Logo" width="50" height="50">
        <a class="navbar-brand" href="myweb.php">SOFT-E CODE CAMP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" 
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More Details
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">What we offer</a></li>
                        <li><a class="dropdown-item" href="#">About</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">More</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <a href="login.php" class="btn btn-outline-success me-2">Login</a>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success me-2" type="submit">Search</button>
                <a href="simple.php" class="btn btn-outline-success">Join</a>
            </form>
        </div>
    </div>
</nav>

<h2 class="text-center mt-4">Admin Login</h2>

<form method="POST" action="authenticate.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" class="btn-primary">Login</button>
    <b style="text-align: center; display: block;">or</b>

    <a href="login.php" class="btn btn-primary">Login as User</a>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
