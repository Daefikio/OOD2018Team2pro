
<!DOCTYPE html>
<!--Author:Garett Cepka(SIGN IN POPUP/Card content) and Eugenia Chiu(CSS/HTML), Date: November 20, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&CSS).
CSS page for the detailed package demo page.-->

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travel Packages</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="caribbeanPackage_styles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>
    <style>
    .modalDialog {
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0,0,0,0.8);
            z-index: 99999;
            opacity:0;
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
            pointer-events: none;
        }

        .modalDialog:target {
            opacity:1;
            pointer-events: auto;
        }

        .modalDialog > div {
            width: 400px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: -moz-linear-gradient(#fff, #999);
            background: -webkit-linear-gradient(#fff, #999);
            background: -o-linear-gradient(#fff, #999);
        }

        .close {
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top: -10px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius: 12px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
        }

        .close:hover { background: #00d9ff; }
    </style>

    <!-- Navigation -->
<?php include "navBar2.php"; ?>
<!--JumboTron Code-->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Travel Packages</h1>
        </div>
      </div>

    </header>

<!--FIRST TRAVEL PACKAGE-->
    <section>
      <div class="container card">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="polynesia.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <div id="travelinfo" class="container">
                <h2 id="info" class="display-4">Travel Around Polynesia</h2>
                <p id="more">Polynesian Paradise 8 Day All Inclusive Hawaiian Vacation <br /><br />
              Duration: 2019-12-12 &nbsp&nbsp to &nbsp&nbsp
              2019-12-20
              </p>
                <p id="more" class="price">Price: $3000.00 CAN</p>
                <a id="more" href="#openModal1">Book Now</a>

                <div id="openModal1" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>Sign in</h2>
                    <form>
                      <input type="text" name="AccountName" value="Account Name">
                      <input type="text" name="Password" value="Password"> <br>
                      <input type="submit" value="Submit"><br>
                      <a href="customerRegisterPage.php" class="button">Register</a>
                      </form>
                </div>

              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--SECOND TRAVEL PACKAGE-->
    <section>
      <div class="container card">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="asia.jpeg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <div id="travelinfo" class="container">
                <h2 id="info" class="display-4">Travel Around Asia</h2>
                <p id="more">Asian Expedition Airfaire, Hotel and Eco Tour. <br /><br />
              Duration: 2019-12-12 &nbsp&nbsp to &nbsp&nbsp
              2019-12-20
              </p>
                <p id="more" class="price">Price: $3000.00 CAN</p>
                <a id="more" href="#openModal1">Book Now</a>

                <div id="openModal1" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>Sign in</h2>
                    <form>
                      <input type="text" name="AccountName" value="Account Name">
                      <input type="text" name="Password" value="Password"> <br>
                      <input type="submit" value="Submit"><br>
                      <a href="customerRegisterPage.php" class="button">Register</a>
                      </form>
                </div>

              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!--THIRD TRAVEL PACKAGES-->
<section>
  <div class="container card">
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2">
        <div class="p-5">
          <img class="img-fluid rounded-circle" src="caribbean.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="p-5">
          <div id="travelinfo" class="container">
            <h2 id="info" class="display-4">Set sail around the Caribean</h2>
            <p id="more">Caribbean New Year Cruise the Caribbean & Celebrate the New Year <br /><br />
          Duration: 2019-12-25 &nbsp&nbsp to &nbsp&nbsp
          2019-01-04
          </p>
            <p id="more" class="price">Price: $4800.00 CAN</p>
            <a id="more" href="#openModal1">Book Now</a>

            <div id="openModal1" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <h2>Sign in</h2>
                <form>
                  <input type="text" name="AccountName" value="Account Name">
                  <input type="text" name="Password" value="Password"> <br>
                  <input type="submit" value="Submit"><br>
                  <a href="customerRegisterPage.php" class="button">Register</a>
                  </form>
            </div>

          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--FOURTH TRAVEL PACKAGE-->
<section>
  <div class="container card">
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2">
        <div class="p-5">
          <img class="img-fluid rounded-circle" src="europe.jpeg" alt="">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="p-5">
          <div id="travelinfo" class="container">
            <h2 id="info" class="display-4">Vist Europe</h2>
            <p id="more">Euro Tour with Rail Pass and Travel Insurance<br /><br />
          Duration: 2019-11-01 &nbsp&nbsp to &nbsp&nbsp
          2019-11-14
          </p>
            <p id="more" class="price">Price: $3000.00 CAN</p>
            <a id="more" href="#openModal1">Book Now</a>

            <div id="openModal1" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <h2>Sign in</h2>
                <form>
                  <input type="text" name="AccountName" value="Account Name">
                  <input type="text" name="Password" value="Password"> <br>
                  <input type="" value="Submit"><br>
                  <a href="customerRegisterPage.php" class="button">Register</a>
                  </form>
            </div>

          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <!-- Footer -->
    <?php
      include("footer2.php");
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
