<?php
session_start(); // Start the session
include 'includes/db_connect.php'; // Include sa imong data base

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Prepare and execute SQL query to fetch user data
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Fetch the user data

        // Verify sa password
        if (password_verify($password, $user['password'])) {
            // Set sa session variables
            $_SESSION['user_id'] = $user['id']; // Store user ID in session
            $_SESSION['user_name'] = $user['name']; // Store user name in session
            
            // adto sa home page
            header("Location: home.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found with that email.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-image: url(images/mbg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-color: #f0f0f0;
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
        
.container {
    
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Heading styling */
.container h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* Input fields styling */
.container input[type="email"],
.container input[type="password"],
.container input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

/* Submit button styling */
.container input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    border: none;
}

.container input[type="submit"]:hover {
    background-color: #45a049;
}

/* Link styling */
.container a {
    display: block;
    margin: 10px 0;
    color: #007BFF;
    text-decoration: none;
}

.container a:hover {
    text-decoration: underline;
}

/* Admin button styling */
.container .btn-primary {
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

.container .btn-primary:hover {
    background-color: #0056b3;
}
h1{
    text-align: center;
}
    </style>
   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <img src="images/logo.png" alt="Your Logo" width="50" height="50">
    <a class="navbar-brand" href="myweb.php">SOFT-E CODE CAMP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="myweb.php">Home</a>
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
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <a href="simple.php" class="btn btn-outline-success">Join</a>
      </form>
    </div>
  </div>
</nav>
<h1>Login as Admin or User</h1>
    <div class="container"> 
        
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            
            <a href="admin.php" class="btn btn-primary">Login as Admin</a>
            <a href="simple.php" class="href">Dont have an account?Register here</a>



        </form>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
    </div>
    <div class="container text-bottom-center my-5">
    <h2>Join Soft E CodeCamp</h2>
    <p>Start your programming journey with us for just <strong>$99</strong>!</p>
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#joinModal">Join Now for $99</button>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
