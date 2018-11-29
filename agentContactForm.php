<!--Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&JavaScript).
Code for message agent form that can be submitted by a customer.-->
<!DOCTYPE html>
<html lang="en">
  	<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	  <script src="agentContactForm.js"></script>
      <title>Agent Contact Format</title>
  	</head>
<div class="contact-form-container">
		<div class="-wrap -main-wrap">
			<aside class="contact-form">
				<div class="box">
					<h2>Connect with Agent</h2>
					<form id="form2" method="post" action="contactfunction.php">
							<div class="col-md-4 mb-3">
								<label>First Name:</label>
									<input type="text" name="custInqFName" required="required" id="custInqFName" />
							</div>
							<div class="col-md-4 mb-3">
								<label>Last Name:</label>
									<input type="text" name="custInqLName" required="required" id="custInqLName" />
							</div>
							<div class="col-md-4 mb-3">
								<label>Email Address:</label>
									<input type="text" name="custInqEmail" required="required" id="custInqEmail" />
							</div>
							<div class="col-md-4 mb-3">
								<label>Phone Number:</label>
									<input type="text" name="custIngPhone" required="required" id="custInqPhone" />
							</div>
							<div class="col-md-4 mb-3">
								<label>Message:</label>
									<textarea name="message" required="required" id="message" rows="5"></textarea>
							</div>
								<input class="button" value="Send Message" type="submit" onclick="return validateInquiry(this.form);" />
					</form>
				</div>
			</aside>
		</div>
	</div>
