/*Author: Mitchell (Chad) Dundas Smith, Date: November 22, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&Javascript).

Function used for validation of specific input fields to ensure the form
is valid before submission*/
function validate(mainform)
{
  var myform = document.getElementById("form1");
  if (mainform.elements[0].value == "")
  {
    alert("Please enter a first name");
    return false;
  }
  if (mainform.elements[1].value == "")
  {
    alert("Please enter a last name");
    return false;
  }
  //Regular expression used to validate email input
  var reg = /^[a-zA-Z][a-zA-Z0-9.!#$%&'*+\/=?^_`{-]+@([a-zA-Z][a-zA-Z0-9-]+\.)+[a-zA-Z]{2,6}$/;
  if (!reg.test(mainform.elements[2].value))
  {
    alert("invalid email address");
    return false;
  }
  if (mainform.elements[3].value == "")
  {
    alert("Please create a username.");
    return false;
  }
  if (mainform.elements[4].value == "")
  {
    alert("Please enter a password");
    return false;
  }
  if (mainform.elements[5].value != mainform.elements[4].value)
  {
    alert("Re-entered password does not match original password");
    return false;
  }
  //Validating that the individual registering is 18 years or older
  var today = new Date();
  var birthDate = new Date(mainform.elements[6].value);
  if (mainform.elements[6].value == "")
  {
    alert("Enter your birthdate");
    return false;
  }
  else if ((today.getFullYear() - birthDate.getFullYear()) < 18)
  {
    alert("Must be 18 years of age or older to register");
    return false;
  }
  if (mainform.elements[7].value == "")
  {
    alert("Please enter the address of your residence");
    return false;
  }
  if (mainform.elements[8].value == "")
  {
    alert("Please enter a phone number");
    return false;
  }
  if (mainform.elements[10].value == "")
  {
    alert("Please enter your city of residence");
    return false;
  }
  if (mainform.elements[11].value == "")
  {
    alert("Please select your province of residence");
    return false;
  }
  //Regular expression used to validate postal code input
  
  mainform.postal.value = mainform.postal.value.toUpperCase();
  var reg = /^[a-z]\d[a-z] ?\d[a-z]\d$/i;
  if (!reg.test(mainform.postal.value))
  {
    /*message += "Invalid Postal Code format: should be X9X 9X9<br />";
    mainform.postal.focus();
    mainform.postal.style.backgroundColor = "pink";*/
    alert("Invalid postal code format. Format: X9X 9X9");
    return false;
  }

  if (mainform.elements[13].value == "")
  {
    alert("Please select your country of residence");
    return false;
  }
  return confirm("Continue submitting?");
}
/*Function used to change the background color of the input field when
valid data is entered*/
function checkFilled(mainform)
{
  for (var i = 0; i < 14; i++)
  {
    if (mainform.elements[i].value == "")
    {
      mainform.elements[i].style.backgroundColor = "white";
    }
    else
    {
      mainform.elements[i].style.backgroundColor = "rgb(252, 235, 119)";
    }
  }
}


function resetForm(mainform)
{
  var yesNo = confirm("Are you sure you want to reset?");

  if(yesNo)
  {
    location.reload();
    return true;
  }
  else
  {
    return false;
  }
}
