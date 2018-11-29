<!--Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
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
       <link rel="stylesheet" href="customerRegisterPage_styles.css"  />
       <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
  	  <script src="agentContactForm.js"></script>
      <title>Agent Bio</title>
  	</head>
  	<body class="container-fluid con">
      <?php
        include("navBar2.php");
      ?>
<!-- Customer Registration form where data is input-->
        <div class="container-fluid con">
          <div class="jumbotron display-1" >
            <h1 class="display-4">Agent Bio</h1>
          </div>
          <div class="container-fluid">
            <div class="container-fluid2">
              <div id="container1">
                <img class="profilePic" src="zoolander1.png" alt="AgentPhoto" >
                <p class="agtInfo">Hello, my name is Chad and I am a Junior Agent at Travel Experts. My favorite thing to do is to make travel packages and customize CSS stylesheets. When I am not making travel website and packages, I am decorating cakes at my grandmother's house. Now, before you ask, I am not angry. I am just tired from coding and debuggin all of my programs. Messy code does not impress me, and my mission objective is to spend as much time as I can playing around in bouncy castle. <br /> My favorite place to travel is to France to see the feline and friends circus. I highly recommend it. My favorite food is responsibility sourced salmon from fancy feast. The quickest way to my heart is to organize code in a KISS (Keep It Simple Sweetie) way.
                </p>
              </div>
              <div id="container2">
                  <h2 id="formLabel">Connect with Agent</h2>
                  <form id="form1" method="post" action="contactfunction.php">
                        <label class="tags">First Name:</label>
                        <input type="text" name="Fname" required="required" id="Fname" />
                        &nbsp&nbsp&nbsp&nbsp
                        <label class="tags">Last Name:</label>
                        <input type="text" name="Lname" required="required" id="Lname" />

                        &nbsp&nbsp&nbsp&nbsp<label class="tags">Email Address:</label>
                        <input type="text" name="emailAddress" required="required" id="emailAddress" />
                        &nbsp&nbsp&nbsp&nbsp&nbsp
                        <label class="tags">Phone #:</label>
                        <input type="text" name="phoneNumber" required="required" id="phoneNumber" />
                        <br />
                        <label class="tags">Message:</label><br />
                        <textarea name="message" required="required" id="message" rows="5"></textarea>
                        <br />
                        <input id="sendMessage" class="btn btn-primary" value="Send Message" type="submit" onclick="return validateInquiry(this.form);" />
                  </form>
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
