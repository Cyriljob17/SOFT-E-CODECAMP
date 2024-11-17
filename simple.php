<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            text-decoration: underline; /* Underline on hover */
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
          <a class="nav-link" href="contact.php">Contacts</a>
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
       <ul>
       
       

       </ul>
      <form class="d-flex">
      <a href="login.php" class="btn btn-outline-success">Login</a>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <a href="simple.php" class="btn btn-outline-success">Join</a>
      </form>
    </div>
  </div>
</nav>
    <h1>Welcome! Please register below</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
       <b>Name:</b><input type="text" name="name" placeholder="Enter your name" required><br>
        <b>E-mail:</b> <input type="email" name="email" placeholder="Enter your email"required><br>
        <b>Password:</b> <input type="password" name="password" placeholder="Enter your password" required><br>
        <b>Confirm Password:</b> <input type="password" name="confirm_password" placeholder="Confirm password" required><br>
        <b>Age:</b> <input type="number" name="age" placeholder="Enter your age" required min="1"><br>
        <b>Birthdate:</b> <input type="date" name="birthdate" required><br> 
        <b>Gender:</b>
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="other" required>Other  
        <br><br>
        <input type="submit" value="Register">
        <a href="login.php" class="href">already register?click to log in</a>

    </form>

    <?php
    include 'includes/db_connect.php'; // Database connection

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and input
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $age = (int) htmlspecialchars($_POST["age"]); // Cast age to integer
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $birthdate = $_POST["birthdate"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;

        // Validate inputs
        if ($password != $confirm_password) {
            $error = "Passwords don't match.";
        } elseif ($age < 18) {
            $error = "You're too young! You are not allowed to register.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
        } elseif (is_null($gender)) {
            $error = "Please select a gender.";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare the SQL statement to insert data
            $sql = "INSERT INTO users (name, email, password, gender, age, birthdate) VALUES (?, ?, ?, ?, ?, ?)";

            // Prepare the statement to avoid SQL injection
            $stmt = $conn->prepare($sql);
            if ($stmt === false) {
                die("MySQL prepare error: " . $conn->error); // Check for preparation errors
            }

            // Bind parameters and execute the query
            $stmt->bind_param("ssssis", $name, $email, $hashed_password, $gender, $age, $birthdate); // Make sure to match the types
            if ($stmt->execute()) {
                header("Location: login.php"); // Redirect to login page after successful registration
                exit(); // Ensure no further code runs
            } else {
                $error = "Error: " . $stmt->error; // Show error if execution fails
            }

            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }
    }

    // Display success or error messages
    if (isset($error)) {
        echo "<div class='alert alert-danger'>$error</div>";
    }
    ?>
    <div class="container text-bottom-center my-5">
    <h2>Join Soft E CodeCamp</h2>
    <p>Start your programming journey with us for just <strong>$99</strong>!</p>
    <button type="button" class="btn btn-primary btn-lg" >Join Now for $99</button>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
