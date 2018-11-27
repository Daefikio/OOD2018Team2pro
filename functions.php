<!--Author: Mitchell (Chad) Dundas Smith, Date: November 24, 2018,
CPRG-210-OSD-Web Application Devlopment, Assignment: Travel Website (Individual)
Code used to retrieve paramerters from the Agent object and upload them to the
database.-->
<?php
  include_once("dbConnectInfo.php");
  include_once("classCustomer.php");
  //include_once("agentToString.php");
/*insertagent function that inserts data into the travelexperts
database based on the *associative* array created in dataforfunction.php.*/
  function insertcustomer($cust)
  {
    //Set the paramaters (access members through object getters)
    $firstName = $cust->getCustFirstName();
    $lastName = $cust->getCustLastName();
    $emailAddress = $cust->getCustEmail();
    $userId = $cust->getCustUserId();
    $password  = $cust->getCustPassword();
    $birthdate = $cust->getCustBirthdate();
    $address= $cust->getCustAddress();
    $personalPhone= $cust->getCustPersonalPhone();
    $busPhone= $cust->getCustBusPhone();
    $city= $cust->getCustCity();
    $province= $cust->getCustProvince();
    $postalCode= $cust->getCustPostalCode();
    $country= $cust->getCustCountry();

    //Creation of INSERT INTO statement
    $sql = "INSERT INTO `customers`(`CustFirstName`,  `CustLastName`,
     `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`,
      `CustHomePhone`, `CustBusPhone`, `CustEmail`, `UserId`)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $dbh = mysqli_connect("localhost", "chad", "chad", "travelexperts");
    //Error messages to be presented if connection is unsuccessful
      if (!$dbh)
      {
        print("Connection Error: " . mysqli_connect_errno() .
        ":" . mysqli_connect_error() . "<br />");
        exit();
      }
      //Preparing, binding, and executing the statement
      $stmt = mysqli_prepare($dbh, $sql);
      mysqli_stmt_bind_param($stmt, "sssssssssss", $firstName, $lastName,
      $address, $city, $province, $postalCode, $country, $personalPhone,
      $busPhone, $emailAddress, $userId);
      $result = mysqli_stmt_execute($stmt);
      //Error messages to be presented if insert is unsuccessful
      if(!$result)
      {
        print(mysqli_stmt_error($stmt));
        mysqli_close($dbh);
        return false;
      }
      mysqli_close($dbh);
      return true;
    }
 ?>
