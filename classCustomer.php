<!--Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 2 (PHP).
File  creates an Agent class to be used later to instantiate agent object-->
<?php
  class Customer
  {
    private $CustFirstName;
    private $CustLastName;
    private $CustEmail;
    private $CustUserId;
    private $CustPassword;
    private $CustBirthdate;
    private $CustAddress;
    private $CustPersonalPhone;
    private $CustBusPhone;
    private $CustCity;
    private $CustProvince;
    private $CustPostalCode;
    private $CustCountry;

//Public methods of Agent class
    public function __construct($CustFirstName, $CustLastName,
    $CustEmail, $CustUserId, $CustPassword, $CustBirthdate, $CustAddress,
    $CustPersonalPhone, $CustBusPhone, $CustCity, $CustProvince,
    $CustPostalCode, $CustCountry)
    {
      $this->CustFirstName = ($CustFirstName);
      $this->CustLastName = ($CustLastName);
      $this->CustEmail = ($CustEmail);
      $this->CustUserId = ($CustUserId);
      $this->CustPassword = ($CustPassword);
      $this->CustBirthdate = ($CustBirthdate);
      $this->CustAddress = ($CustAddress);
      $this->CustPersonalPhone = ($CustPersonalPhone);
      $this->CustCity = ($CustCity);
      $this->CustProvince = ($CustProvince);
      $this->CustPostalCode = ($CustPostalCode);
      $this->CustCountry = ($CustCountry);
    }

    public function getCustFirstName()
    {
      return $this->CustFirstName;
    }
    public function setCustFirstName($CustFirstName)
    {
      $this->CustFirstName = $CustFirstName;
    }

    public function getCustLastName()
    {
      return $this->CustLastName;
    }
    public function setCustLastName($CustLastName)
    {
      $this->CustLastName = $CustLastName;
    }

    public function getCustEmail()
    {
      return $this->CustEmail;
    }
    public function setCustEmail($CustEmail)
    {
      $this->CustEmail = $CustEmail;
    }

    public function getCustUserId()
    {
      return $this->CustUserId;
    }
    public function setCustUserId($CustUserId)
    {
      $this->CustUserId = $CustUserId;
    }

    public function getCustPassword()
    {
      return $this->CustPassword;
    }
    public function setCustPassword($CustPassword)
    {
      $this->CustPassword = $CustPassword;
    }

    public function getCustBirthdate()
    {
      return $this->CustBirthdate;
    }
    public function setCustBirthdate($CustBirthdate)
    {
      $this->CustBirthdate = $CustBirthdate;
    }

    public function getCustAddress()
    {
      return $this->CustAddress;
    }
    public function setCustAddress($CustAddress)
    {
      $this->CustAddress = $CustAddress;
    }

    public function getCustPersonalPhone()
    {
      return $this->CustPersonalPhone;
    }
    public function setCustPersonalPhone($CustPersonalPhone)
    {
      $this->CustPersonalPhone = $CustPersonalPhone;
    }

    public function getCustBusPhone()
    {
      return $this->CustBusPhone;
    }
    public function setCustBusPhone($CustBusPhone)
    {
      $this->CustBusPhone = $CustBusPhone;
    }

    public function getCustCity()
    {
      return $this->CustCity;
    }
    public function setCustCity($CustCity)
    {
      $this->CustCity = $CustCity;
    }

    public function getCustProvince()
    {
      return $this->CustProvince;
    }
    public function setCustProvince($CustProvince)
    {
      $this->CustProvince = $CustProvince;
    }

    public function getCustPostalCode()
    {
      return $this->CustPostalCode;
    }
    public function setCustPostalCode($CustPostalCode)
    {
      $this->CustPostalCode = $CustPostalCode;
    }

    public function getCustCountry()
    {
      return $this->CustCountry;
    }
    public function setCustCountry($CustCountry)
    {
      $this->CustCountry = $CustCountry;
    }
  }
 ?>
