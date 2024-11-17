<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
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
        ul li:hover{
          text-decoration: underline;
        }
        a {
            text-decoration: none; 
            color: #007bff;
            font-weight: bold; 
        }
        a:hover {
            text-decoration: underline; /* Underline on hover */
        }
        .container.text-center.my-5 {
    margin-top: auto;
    margin-bottom: 20px; /* Adds space above the footer */
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contacts</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           More Details
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#accordition-body">What we offer</a></li>
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
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <b>Hey ! Welcome! </b>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">"<b>Soft E CodeCamp </b>offers a variety of programming courses, designed to help aspiring developers learn key web technologies like HTML, CSS, JavaScript, PHP, Bootstrap, and MySQL. Join us to kickstart your coding journey and build a strong foundation in web development!"
        To join just click the join or login button above and follow the instructions. If you have any questions or need help, feel free to ask .or just contact us via email at [info@softecodecamp.com](mailto:info@softecode0)
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <b>Want to become a programmer?</b>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul style="font-weight: bold;">
    <li>SOFTWARE ENGINEER</li>
    <li>WEB DESIGNER</li>
    <li>WEB DEVELOPER</li>
    <li>BACK  DEVELOPER</li>
    <li>FRONT END DEVELOPER</li>
    <li>IT SPECIALIST</li>
    <li>IT SUPPORT</li>
    <li>FULL STACK DEVELOPER</li>
    <li>SOFTWARE DEVELOPER</li>
    <li>CYBERSECURITY</li>
    
</ul>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
       <b>Here are the list of programming languages we offered</b>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">    
    <li><b>for FRONTEND</b></li>
    <li></li>
    <li><b>HTML-</b></li>
    <li><b>CSS-</b></li>
    <li><b>JAVASCRIPT-</b></li>
    <li><b>PHP-</b></li>
    <li><b>BOOTSTRAP-</b></li>
    <li><b>MYSQL-</b></li>

    <li></li>
    
    <li><b> for BACKEND</b></li>

    <li></li>
    
    <li><b>PYTHON-</b></li>
    <li><b>JAVA-</b></li>
    <li><b>C-</b></li>
    <li><b>C++-</b></li>
    <li><b>C#-</b></li>
    <li><b>RUBY-</b></li>
    <li><b>SWIFT-</b></li>
    <li><b>GO</b>-</li>
    <li><b>KOTLIN-</b></li>
</div>

    </div>
  </div>
</div>



<div class="container text-bottom-center my-5">
    <h2>Join Soft E CodeCamp</h2>
    <p>Start your programming journey with us for just <strong>$99</strong>!</p>
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#joinModal">Join Now for $99</button>
</div>


<div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="joinModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="joinModalLabel">Join Soft E CodeCamp for $99</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Get lifetime access to our programming courses for only $99!</p>
        <form>
          
          <a href="simple.php" class="btn btn-primary" role="button">Complete Payment</a>        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>