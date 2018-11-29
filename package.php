<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vaction Packages</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="landingPage_styles.css"  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php include "navBar2.php"; ?>

<!--  Card CSS  -->
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  background-color: white;
  transition: 0.3s;
  width: 90%;
  height: 80%;
  border-radius: 5px;
  margin: auto;
  text-align: left;
  font-family: arial;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
}

.price {
color: grey;
font-size: 22px;
}

.card button {
border: none;
outline: 0;
padding: 12px;
color:black;
background-color: white;
text-align: center;
cursor: pointer;
width: 50 %;
font-size: 18px;
}

.card button:hover {
opacity: 0.7;
}

img {
  border-radius: 5px 5px 0 0;
  width: 50px;
  height: 250px;
}

.container {
  padding: 2px 16px;
}
</style>
<!--  Modal CSS  -->
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


<?php
/* Package Php call script */
$mysqli = new mysqli("localhost", "root", "", "travelexperts");
/* check connection */
if (mysqli_connect_errno()){
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
};
$query = "SELECT PkgName, PkgStartDate, PkgEndDate, PkgBasePrice FROM packages";
if ($stmt = $mysqli->prepare($query)){
/* execute statement */
$stmt->execute();
/* bind result variables */
$stmt->bind_result($PkgName, $PkgStartDate, $PKgEndDate, $PkgBasePrice);
/* fetch values */
while ($stmt->fetch());
$stmt->close();
};
/* close connection */
$mysqli->close();
?>

<body>
<!-- Dont move the divs it gets messy-->
<div class="card">
<img class="img-fluid rounded-circle" img src="img/relax.jpg" alt="Avatar" style="width:50%">
<div id="travelinfo" class="container">
  <h4><b>Travel around Polynesian</b></h4>
  <p>Polynesian Paradise 8 Day All Inclusive Hawaiian Vacation
2019-12-12
2019-12-20
</p>
  <p class="price">$3000</p>
  <a href="#openModal1">Book Now</a>

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
</br>

<div class="card">
<img class="img-fluid rounded-circle" img src="img/beach.jpg" alt="Avatar" style="width:50%">
<div class="container">
  <h4><b>Set sail around the Caribean</b></h4>
  <p>Caribbean New Year Cruise the Caribbean & Celebrate the New Year.
2019-12-25
2019-01-04
</p>
  <p class="price">$4800</p>
  <a href="#openModal2">Book Now</a>

    <div id="openModal2" class="modalDialog">
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
</br>
<div class="card">
<img class="img-fluid rounded-circle" img src="img/tokyo.jpg" alt="Avatar" style="width:50%">
<div class="container">
  <h4><b>Travel around Asia</b></h4>
  <p>Asian Expedition
    Airfaire, Hotel and Eco Tour.
2019-05-14
2019-05-28
</p>
  <p class="price">$2800</p>
  <a href="#openModal3">Book Now</a>

    <div id="openModal3" class="modalDialog">
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
</br>
<div class="card">
<img class="img-fluid rounded-circle" img src="img/hills.jpg" alt="Avatar" style="width:50%">
<div class="container">

  <h4><b>Vist Europe</b></h4>
  <p>Euro Tour with Rail Pass and Travel Insurance
    2019-11-01
    2019-11-14
</p>
  <p class="price">$3000</p>
  <a href="#openModal4">Purchase</a>

    <div id="openModal4" class="modalDialog">
  <div>
      <a href="#close" title="Close" class="close">X</a>
      <h2>Sign in</h2>
      <form>
        <input type="text" name="AccountName" value="Account Name">
        <input type="text" name="Password" value="Password"> <br>
        <input type="submit" value="Submit"><br>
        <a href="customerRegisterPage.php" class="button">Book Now</a>
        </form>
  </div>
  </div>
</div>
</div>
  <Footer>
    <!-- Navigation -->

    <!-- Footer -->
    <?php
      include("footer2.php");
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </Footer>

</html>
