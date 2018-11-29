<!--Author: James Cockriell Date: November 26, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 & 2.
Code for contacts page. Contacts page is split into 2 files; contacts1.php, contacts2.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Contact2</title>
    <style>
        body{
        background: #de6161;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2657eb, #de6161);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2657eb, #de6161); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .jumbo{
            height: 100vh;
        }

        .jumbotron{
            background-color: forestgreen;
            color: white;
            text-align: center;
        }

        #padding{
          margin: 20px 0px 5px 0px;
        }

        #hero{
          width:100%;
          margin: 0px;
        }

       /*.border{
           border: 5px white solid;
           padding:10px 15px;
           margin: 20px 10px;

       }*/
    </style>
</head>
<body>
    <?php
      include(navBar2.php);
    ?>
    <!-- jumbotron container -->

    <div class="container-fluid jumbo">
            <div id="hero" class="jumbotron">
            <h1 class="display-3">Meet our Travel Experts</h1>
           <h2>Calgary</h2>
    </div>
     
    <?php
    $mysqli = new mysqli("localhost", "james", "password", "travelexperts");
    /* check connection */

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
        /* fetch associative array */ 

    $query = "SELECT AgtFirstName, AgtLastName, AgtPosition FROM agents  WHERE AgencyId = 2";
    if ($result = $mysqli->query($query)) {  
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
                      <a href="#" class="btn btn-secondary btn-md">View Profile</a>
                    </div>
                  </div>
                </div>
                <?php $j= $i+1;if ( $j%3==0){echo '</div><div class="row">';}
            }
        }
    }
    /* close connection */
    $mysqli->close();
    include(footer2.php);
    ?>
</body>
</html>