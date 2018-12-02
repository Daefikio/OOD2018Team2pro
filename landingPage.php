<!--Author: Eugenia Chu, Date: November 20, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&Javascript).
HTML page for the detailed package demo page.-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="landingPage_styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include "navBar2.php"; ?>

<!--Carousel Images with 6 second timer-->

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
          <h3 id="cText">Caribbean</h3>
        </div>
      </div>

      <div class="item">
        <img src="img/polynesian.jpg" alt="Polynesian">
        <div class="carousel-caption">
          <h3 id="cText">Polynesian</h3>

        </div>
      </div>

      <div class="item">
        <img src="img/tokyo.jpg" alt="Tokyo">
        <div class="carousel-caption">
          <h3 id="cText">Asia</h3>

        </div>
      </div>

      <div class="item">
        <img src="img/Paris.jpg" alt="Paris">
        <div class="carousel-caption">
          <h3 id="cText">European Travel</h3>
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

<?php
  include("footer2.php");
 ?>

</body>
</html>
