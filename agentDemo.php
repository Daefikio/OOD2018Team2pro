<!--Author: Eugenia Chiu, Date: November 22, 2018,
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
      <link rel="stylesheet" href="agentDemo.css">
      <link rel="stylesheet" href="customerRegisterPage_styles.css"  />
      <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
  	  <script src="customerRegisterPage.js"></script>
      <title>Agent About</title>
  	</head>
    
  	<body class="container-fluid con">
      <?php
        include("navBar2.php");
      ?>

<!--Body Container-->
  <div class="contact-form-container">
		<div class="-wrap -main-wrap">
			<aside class="contact-form">
          <div id="container1">
            <p>This is where the agent info will go</p>
          </div>
        <!--Chad's Form-->
          <div id="container2">
              <h2>Connect with Agent</h2>
              <form id="form2" method="post" action="bouncer.php">
                    <label class="tags">First Name:</label>
                    <input type="text" name="custInqFName" required="required" id="custInqFName" />
                    <br />
                    <label class="tags">Last Name:</label>
                    <input type="text" name="custInqLName" required="required" id="custInqLName" />
                    <br />
                    <label class="tags">Email Address:</label>
                    <input type="text" name="custInqEmail" required="required" id="custInqEmail" />
                    <br />
                    <label class="tags">Phone Number:</label>
                    <input type="text" name="custIngPhone" required="required" id="custInqPhone" />
                    <br />
                    <label class="tags">Message:</label><br />
                    <textarea name="message" required="required" id="message" rows="5"></textarea>
                    <br />
                    <input class="button" value="Send Message" type="submit" onclick="return validateInquiry(this.form);" />
              </form>
			  	</div>
			</aside>
		</div>
	</div>


</body>
<footer>
  <?php
    include("footer2.php");
  ?>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
