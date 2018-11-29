<!-- Author: James Cockriell, Date: November 28, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 2 (Adding extra website functionality).
Code for message agent form that can be submitted by a customer.-->

<?php
function insertproject($cust)
	{
		$sql = "INSERT INTO `profile_contact`(`Fname`, `Lname`, `emailAddress`, `phoneNumber`, `message`) VALUES  (?,?,?,?,?)";
        $dbh = mysqli_connect("localhost", "chad", "chad", "travelexperts");
		if (!$dbh)
		{
			print("Connection Error: " . mysqli_connect_errno() . ":" . mysqli_connect_error() . "<br />");
			exit();
		}
		
		$stmt = mysqli_prepare($dbh, $sql);
		mysqli_stmt_bind_param($stmt, "sssss", $cust["Fname"], $cust["Lname"], $cust["emailAddress"], $cust["phoneNumber"], $cust["message"]);
		$result = mysqli_stmt_execute($stmt);
		if (!$result)
		{
			print(mysqli_stmt_error($stmt));
			return false;
		}
		mysqli_close($dbh);
		return true;
    }
        if (isset($_REQUEST["Fname"]))
	    {
	    	if (insertproject($_REQUEST))
	    	{
	    		print("Data inserted sucessfully");
	    	}
	    	else
	    	{
	    		print("Data insert failed, call tech support");
            }
	    }
	    else
	    {
	    	header("project.php");
        }
?>