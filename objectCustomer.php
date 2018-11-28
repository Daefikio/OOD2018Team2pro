<!--Author: Mitchell (Chad) Dundas Smith, Date: November 24, 2018,
CPRG-210-OSD-Web Application Devlopment, Assignment: Travel Website (Individual)
Code used to create an agent object which is an instance of the agent class.-->
<?php
  include("insertCustomer.php");
  include_once("classCustomer.php");
  //if(isset($_REQUEST["AgtFirstName"]))
  if(isset($_REQUEST["CustFirstName"]))
  {
    //Creating a new object (instance) of the Agent class
    $cust = new Customer
    ($CustFirstName = $_REQUEST["CustFirstName"],
    $CustLastName = $_REQUEST["CustLastName"],
    $CustEmail = $_REQUEST["CustEmail"],
    $CustUserId = $_REQUEST["CustUserId"],
    $CustPassword = $_REQUEST["CustPassword"],
    $CustBirthdate = $_REQUEST["CustBirthdate"],
    $CustAddress = $_REQUEST["CustAddress"],
    $CustPersonalPhone = $_REQUEST["CustPersonalPhone"],
    $CustBusPhone = $_REQUEST["CustBusPhone"],
    $CustCustCity = $_REQUEST["CustCity"],
    $CustProvince = $_REQUEST["CustProvince"],
    $CustCustPostalCode = $_REQUEST["CustPostalCode"],
    $CustCountry = $_REQUEST["CustCountry"]);
    /* If the form database contains valid data pass the
    array to insertagent() function */
    if(insertcustomer($cust))
    {
      print("Congratulations! You are now registered");
    }
    else
    {
      print("Registration failed, try again or call an agency");
    }
  }
  else
  {
    header("Location: customerRegisterPage.php");
  }
 ?>
