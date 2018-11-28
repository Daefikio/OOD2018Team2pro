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
      <?php
        include("navBar2.php");
       ?>
<!---------------------------------------------------------------------------------------------->
        <div class="container-fluid con">
          <div class="jumbotron" >
            <h1 class="display-4">Congratulations! You have successfully registered.</h1>
          </div>
        <input class="btn btn-primary" value="Browse Packages" type="submit" onclick="location.href='http://google.com';" />
      </div>
      <?php
        include("footer2.php");
       ?>
  	</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
