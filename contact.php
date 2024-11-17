<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .div h2{
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
    <div class="container mt-5">
        <h2>Contact Details</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Get in Touch</h4>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-telephone-fill"></i> <strong>Phone:</strong> +12 24 5627 890
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-envelope-fill"></i> <strong>Email:</strong> Soft-E_Codcamp@gmail.com
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-geo-alt-fill"></i> <strong>Address:</strong> Bool District, Tagbilaran City, Bohol, Philippines
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Follow Us</h4>
                <ul class="list-unstyled d-flex">
                    <li class="me-3">
                        <a href="#" class="text-decoration-none"><i class="bi bi-facebook"></i> Facebook</a>
                    </li>
                    <li class="me-3">
                        <a href="#" class="text-decoration-none"><i class="bi bi-twitter"></i> Twitter</a>
                    </li>
                    <li class="me-3">
                        <a href="#" class="text-decoration-none"><i class="bi bi-instagram"></i> Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container text-bottom-center my-5">
    <h2>Join Soft E CodeCamp</h2>
    <p>Start your programming journey with us for just <strong>$99</strong>!</p>
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#joinModal">Join Now for $99</button>
</div>
    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</body>
</html>