<!--Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&JavaScript).
Code for About Us page-->
<!DOCTYPE html>
<html lang="en">
  	<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
       <link rel="stylesheet" href="customerRegisterPage_styles.css"  />
       <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
  	  <script src="customerRegisterPage.js"></script>
      <title>About Us</title>
  	</head>
  	<body class="container-fluid con">
      <?php
        include("navBar2.php");
      ?>
        <div class="container-fluid con">
          <div class="jumbotron display-1" >
            <h1 class="display-4">About Us</h1>
          </div>
          <div class="container-fluid">
            <div class="container-fluid2">
              <div id="container">
                <img id="team"  src="team3.jpeg" >

              </div>
              <div id="container">
                  <h2 id="formLabel">Mission Statement</h2>
                  <p>Who we are</p></br>
                  <p>Our History</p></br>
                  <p>Why we love what we do!</p>
    			  	</div>
          </div>
        </div>
      </div>
      <?php
        include("footer2.php");
       ?>
  	</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
