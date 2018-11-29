<!--Author: James Cockriell, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&JavaScript).
Code for customer registration page interface that allows the customer to input
data for registration.-->
<!DOCTYPE html>
<html lang="en">
  	<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
       <link rel="stylesheet" href="contactPages_styles.css"  />
       <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
      <title>Contact Calgary</title>
  	</head>
  	<body class="container-fluid con">
      <?php
        include("navBar2.php");
      ?>
<!-- Customer Registration form where data is input-->
        <div class="container-fluid con">
          <div class="jumbotron" >
            <h1 class="display-4">Meet Our Travel Experts</h1>
            <h2>Calgary</h2>
          </div>
          <div class="container-fluid">
            <div class="container-fluid2">
              <?php
              $mysqli = new mysqli("localhost", "chad", "chad", "travelexperts");

              /* check connection */

              if ($mysqli->connect_errno) {
                  printf("Connect failed: %s\n", $mysqli->connect_error);
                  exit();
              }
              $query = "SELECT AgtFirstName, AgtLastName, AgtPosition FROM agents  WHERE AgencyId = 1";

              if ($result = $mysqli->query($query)) {

                  // /* fetch associative array */
              ?>
              <div class="container" id = "cardcon">
                  <div class="row">
                  <?php
                  // $row = $result->fetch_assoc();
                  for($i=0; $i< mysqli_num_rows($result); $i++){
                      // var_dump($result->fecth_assoc);
                      while ($row = $result->fetch_assoc()) {
                      ?>
                      <div id ="padding" class="col-md-4">
                          <div class="card text-white bg-primary">
                              <img class="card-img-top" src="einstein.png" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title"><?php print($row["AgtFirstName"] . " " . $row["AgtLastName"])?></h4>
                                <h4><?php print("Title: " . $row["AgtPosition"])?></h4>
                                <a href="agentDemo.php" class="btn btn-secondary btn-md">View Profile</a>
                              </div>
                            </div>
                          </div>
                          <?php $j= $i+1;if ( $j%3==0){echo '</div><div class="row">';}
                      }
                  }
              }
              /* close connection */
              $mysqli->close();

              ?>
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
