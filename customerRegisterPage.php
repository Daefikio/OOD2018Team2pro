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
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
        <img src="logo.jpeg" width="30px" height="30px" class="d-inline-block align-top"
        alt="">IT Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Products</a>
    </li>
    <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item dropdown active">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Account
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Sign up</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Log in</a>
      </div>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</nav>
<!---------------------------------------------------------------------------------------------->
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
            <input class="btn btn-primary" value="Register Now" type="submit" onclick="return validate(this.form);" />
            <input class="btn btn-secondary" type="reset"
             onclick="return resetForm(this.form);" />
          </form>
        </div>
      </div>
      </div>


  	</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
