<!--Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&JavaScript).
Code for booking page interface that allows the customer to input
data for booking a travel package.-->
<!DOCTYPE html>
<html lang="en">
  	<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
       <link rel="stylesheet" href="customerRegisterPage_styles.css"  />
  	  <script src="packageOrderPage.js"></script>
      <title>Order Package</title>
  	</head>
  	<body class="container-fluid con">
      <?php
        include("navBar2.php")
       ?>
<!--Order Now information form where data is input-->
      <div class="container-fluid con">
        <div class="jumbotron" >
          <h1 class="display-4">Order Package</h1>
        </div>
        <div class="container-fluid">
          <div class="container-fluid2">
            <form id="form1" method="post" action="bouncer.php" >
              <div class="form-row">
                <div class="col-md-2 mb-3">
                </div>
                <div class="col-md-4 mb-3">
                  <label>User Id</label>
                  <input type="text" class="fieldz" id="userId" name="userId"
                    onfocus="tipuserid.style.visibility = 'visible'"
                    onblur="tipuserid.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipuserid">Enter your username.</p>
                </div>
                <div class="col-md-4 mb-3">
                  <label>Password</label>
                  <input type="password" class="fieldz" id="pwd" name="pwd"
                    onfocus="tippwd.style.visibility = 'visible'"
                    onblur="tippwd.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tippwd">Enter your password.</p>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Confirm Package</label>
                  <select class="fieldz" id="package" name="package"
                    onfocus="tippackage.style.visibility = 'visible'"
                    onblur="tippackage.style.visibility = 'hidden'"
                    onchange="checkFilled(this.form);" required="required" /><br />
                    <option value="">Select a package</option>
                    <option value="CNY">Caribbean New Year</option>
                    <option value="PP">Polynesian Paradise</option>
                    <option value="AE">Asian Expedition</option>
                    <option value="EV">European Vacation</option>
                    </select><br />
                  <p class="tip" id="tippackage">Select your desired package for booking.</p>
                </div>
              </div>
<!--Submit and Reset buttons to submit or reset input data-->
            <input class="btn btn-primary" value="Order Now" type="submit" onclick="return validate(this.form);" />
            <input class="btn btn-secondary" type="reset"
             onclick="return resetForm(this.form);" />
          </form>
        </div>
      </div>
    </div>
    <?php
      include("footer2.php")
     ?>
  	</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
