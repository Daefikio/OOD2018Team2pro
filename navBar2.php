<!--Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 & 2.
Code for navigation bar interface that allows the customer to navigate
the website.-->
<!--NavBar-->
<style>
  .navbar-collapse {
    font-family: Helvetica, Helvetica, Arial, sans-serif;
  }
</style>
<nav class="navbar navbar-expand-lg navbar navbar-dark background1">
  <a class="navbar-brand" href="#">
  <img id="logo" src="logo.jpeg" width="30px" height="30px" class="d-inline-block align-top"
  alt="">Travel Experts</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="landingPage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Travel Packages</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="travelpackages.php">Casual</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Corporate</a>
        </div>
      <li class="nav-item active">
        <a class="nav-link" href="customerRegisterPage.php">Register</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="contactPageCalgary.php">Calgary</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contactPageOkotoks.php">Okotoks</a>
        </div>
      </li>
    </ul>
    <div id="aboutUs" class="form-inline my-2 my-lg-0">
      <style>
      .nav-link{
        color: white;
      }>?
      </style>
      <a class="nav-link" href="aboutUs.php">About Us</a>
    </div>
  </div>
</nav>
