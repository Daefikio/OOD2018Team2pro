<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: black;
      font-size: 19px;
      color:white;
      height: 65px;
      padding: 8px 0px 0px 0px;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
      max-height: 700px;
  }

  .h3{
    font-size: 30px;
  }

  #footer{
    background-color: black;
    color: white;
  }

.dropdown-menu{
  background-color: black;
}


#drop{
  color: white;
  font-size: 15px;
}

.hoverable:hover{
  box-shadow:5px 10px 5px grey;
}

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
<?php include "navBar.php"; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/caribbean.jpg" alt="Caribbean">
        <div class="carousel-caption">
          <h3>Caribbean</h3>
        </div>      
      </div>

      <div class="item">
        <img src="img/polynesian.jpg" alt="Polynesian">
        <div class="carousel-caption">
          <h3>Polynesian</h3>
        
        </div>      
      </div>

      <div class="item">
        <img src="img/tokyo.jpg" alt="Tokyo">
        <div class="carousel-caption">
          <h3>Asia</h3>
        
        </div>      
      </div>

      <div class="item">
        <img src="img/Paris.jpg" alt="Paris">
        <div class="carousel-caption">
          <h3>European Travel</h3>
        </div>      
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!--Packages-->
  
<div class="container text-center">   

  <h3>Popular Destination Travel Packages</h3><br>
  <div class="row">
    <div class="col-sm-4 hoverable">
      <img src="img/hills.jpg" class="img-responsive" style="width:100%" alt="Image">
      <div class="well">
          <p>Polynesian Travel Package</p>
      </div>
    </div>

    <div class="col-sm-4 hoverable"> 
        <a href="caribbeanPackage.php"><img src="img/sea.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      <div class="well">
          <p>Caribbean Traval Package</p>
      </div>   
    </div>

    <div class="col-sm-4 hoverable"> 
        <img src="img/fields.jpg" class="img-responsive" style="width:100%" alt="Image">
        <div class="well">
            <p>European Travel Package</p>
        </div>  
    </div>
  
  </div>
</div><br>

<footer id ="footer" class="container-fluid text-center">
  <p>Travel Experts &copy; 2018</p>
</footer>

</body>
</html>
