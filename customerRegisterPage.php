<!--Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&JavaScript).
Code for customer registration age interface that allows the customer to input
data for registration.-->
<!DOCTYPE html>
<html lang="en">
  	<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
       <link rel="stylesheet" href="customerRegisterPage_styles.css"  />
  	  <script src="customerRegisterPage.js"></script>
      <title>Registration Page</title>
  	</head>
  	<body class="container-fluid con">
      <?php
        include("navBar2.php");
      ?>
<!---------------------------------------------------------------------------------------------->
<!--Form for customer registration-->
        <div class="container-fluid con">
          <div class="jumbotron" >
            <h1 class="display-4">Register Now</h1>
          </div>
        <div class="container-fluid">
          <div class="container-fluid2">
            <form id="form1" method="post" action="objectCustomer.php" >
              <div class="form-row">
                <div class="col-md-2 mb-3">
                </div>
                <div class="col-md-4 mb-3">
                  <label>First name</label>
                  <input type="text" class="fieldz" id="CustFirstName" name="CustFirstName"
                    onfocus="tipCustFirstName.style.visibility = 'visible'"
                    onblur="tipCustFirstName.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustFirstName">Enter your first name.</p>
                </div>
                <div class="col-md-4 mb-3">
                  <label>Last name</label>
                  <input type="text" class="fieldz" id="CustLastName" name="CustLastName"
                    onfocus="tipCustLastName.style.visibility = 'visible'"
                    onblur="tipCustLastName.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustLastName">Enter your last name.</p>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-2 mb-3">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Email</label>
                  <input type="text" class="fieldz" id="CustEmail" name="CustEmail"
                    onfocus="tipCustEmail.style.visibility = 'visible'"
                    onblur="tipCustEmail.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustEmail">Enter your email.</p>
                </div>
                <div class="col-md-4 mb-3">
                  <label>User Id</label>
                  <input type="text" class="fieldz" id="CustUserId" name="CustUserId"
                    onfocus="tipCustUserId.style.visibility = 'visible'"
                    onblur="tipCustUserId.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustUserId">Create a username.</p>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-2 mb-3">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Password</label>
                  <input type="password" class="fieldz" id="CustPassword" name="CustPassword"
                    onfocus="tipCustPassword.style.visibility = 'visible'"
                    onblur="tipCustPassword.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustPassword">Enter your password.</p>
                </div>
                <div class="col-md-4 mb-3">
                  <label>Re-Enter Password</label>
                  <input type="password" class="fieldz" id="CustRePassword" name="CustRePassword"
                    onfocus="tipCustRePassword.style.visibility = 'visible'"
                    onblur="tipCustRePassword.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustRePassword">Re-enter your password.</p>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-2 mb-3">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Birthdate</label>
                  <input type="date" class="fieldz" id="CustBirthdate" name="CustBirthdate"
                    onload= "01/01/01"
                    onfocus="tipCustBirthdate.style.visibility = 'visible'"
                    onblur="tipCustBirthdate.style.visibility = 'hidden'"
                    onchange="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustBirthdate">Select your birthdate.</p>
                </div>
                <div class="col-md-4 mb-3">
                  <label>Address</label>
                  <input type="text" class="fieldz" id="CustAddress" name="CustAddress" rows="3"
                    cols="30"
                    onfocus="tipCustAddress.style.visibility = 'visible'"
                    onblur="tipCustAddress.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustAddress">Enter your home address.</p>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-2 mb-3">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Personal Phone</label>
                  <input type="phone" class="fieldz" id="CustPersonalPhone" name="CustPersonalPhone"
                    placeholder="ex) (XXX) XXX-XXXX"
                    onfocus="tipCustPersonalPhone.style.visibility = 'visible'"
                    onblur="tipCustPersonalPhone.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustPersonalPhone">Enter your phone number.<br />(XXX) XXX-XXXX</p>
                </div>
                <div class="col-md-4 mb-3">
                  <label>Business Phone</label>
                  <input type="phone" class="fieldz" id="CustBusPhone" name="CustBusPhone"
                    placeholder="ex) (XXX) XXX-XXXX"
                    onfocus="tipCustBusPhone.style.visibility = 'visible'"
                    onblur="tipCustBusPhone.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);" /><br />
                  <p class="tip" id="tipCustBusPhone">Enter your phone number.<br />(XXX) XXX-XXXX</p>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-2 mb-3">
                </div>
                <div class="col-md-4 mb-3">
                  <label>City</label>
                  <input type="text" class="fieldz" id="CustCity" name="CustCity"
                    onfocus="tipCustCity.style.visibility = 'visible'"
                    onblur="tipCustCity.style.visibility = 'hidden'"
                    oninput="checkFilled(this.form);"	required="required" /><br />
                  <p class="tip" id="tipCustCity">Enter your city of residence.</p>
                </div>
                <div class="col-md-4 mb-3">
                  <label>Province</label>
                  <select class="fieldz" id="CustProvince" name="CustProvince"
                    onfocus="tipCustProvince.style.visibility = 'visible'"
                    onblur="tipCustProvince.style.visibility = 'hidden'"
                    onchange="checkFilled(this.form);" required="required" /><br />
                    <option value="">Select a province</option>
                    <option value="AB">Alberta</option>
                    <option value="SK">Saskatchewan</option>
                    <option value="BC">British Columbia</option>
                    <option value="MB">Manitoba</option>
                    <option value="ON">Ontario</option>
                    <option value="QC">Quebec</option>
                    </select><br />
                  <p class="tip" id="tipCustProvince">Select your province of residence.</p>
                </div>
            </div>
            <div class="form-row">
              <div class="col-md-2 mb-3">
              </div>
              <div class="col-md-4 mb-3">
                <label>Postal Code</label>
                <input type="text" class="fieldz" id="CustPostalCode" name="CustPostalCode"
                  placeholder="ex) X9X 9X9"
                  onfocus="tipCustPostalCode.style.visibility = 'visible'"
                  onblur="tipCustPostalCode.style.visibility = 'hidden'"
                  oninput="checkFilled(this.form);"	required="required" /><br />
                <p class="tip" id="tipCustPostalCode">Enter your postal code.<br />Format: X9X 9X9</p>
              </div>
              <div class="col-md-4 mb-3">
                <label>Country</label>
                <select type="text" class="fieldz" id="CustCountry" name="CustCountry"
                  onfocus="tipcCustCountry.style.visibility = 'visible'"
                  onblur="tipCustCountry.style.visibility = 'hidden'"
                  oninput="checkFilled(this.form);"	required="required" /><br />
                  <option value="">Select Country</option>
                  <option value="CAN">Canada</option>
                  </select><br />
                <p class="tip" id="tipCustCountry">Select your country of residence.</p>
              </div>
            </div>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div>
<!--Submit and Reset buttons to submit or reset input data-->
            <input class="btn btn-primary" value="Register Now" type="submit" onclick="return validate(this.form);" />
            <input class="btn btn-secondary" type="reset"
             onclick="return resetForm(this.form);" />
          </form>
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
