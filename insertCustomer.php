<!--Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 2 (PHP).
Code used to retrieve paramerters from the Customer object and upload them to the
database.-->
<?php
  include_once("dbConnectInfo.php");
  include_once("classCustomer.php");
/*insertcustomer function that inserts data into the travelexperts
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
      `CustHomePhone`, `CustBusPhone`, `CustEmail`, `UserId`, `CustPassword`)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
      mysqli_stmt_bind_param($stmt, "ssssssssssss", $firstName, $lastName,
      $address, $city, $province, $postalCode, $country, $personalPhone,
      $busPhone, $emailAddress, $userId, $password);
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
