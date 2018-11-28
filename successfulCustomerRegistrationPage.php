<!--Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&Javascript).
Code for successful customer regstration that lets the customer know they have
successfully registered.-->
<!DOCTYPE html>
<html lang="en">
  	<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
       <link rel="stylesheet" href="customerRegisterPage_styles.css"  />
  	  <script src="customerRegisterPage.js"></script>
      <title>Successful Registration</title>
  	</head>
  	<body class="container-fluid con">
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
        <img src="logo.jpeg" width="30px" height="30px" class="d-inline-block align-top"
        alt="">IT Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Products</a>
    </li>
    <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Account
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Sign up</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Log in</a>
      </div>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</nav>
<!---------------------------------------------------------------------------------------------->
        <div class="container-fluid con">
          <div class="jumbotron" >
            <h1 class="display-4">Congratulations! You have successfully registered.</h1>
          </div>
        <input class="btn btn-primary" value="Browse Packages" type="submit" onclick="location.href='http://google.com';" />
      </div>


  	</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
