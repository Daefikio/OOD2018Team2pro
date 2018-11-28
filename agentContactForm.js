/*Author: Mitchell (Chad) Dundas Smith, Date: November 24, 2018,
PROJ-207-OSD-Threaded Project for OOSD, Assignment: Project Workshop 1 (HTML&Javascript).

Function used for validation of specific input fields to ensure the form
is valid before submission*/
function validateInquiry(mainform)
{
  var myform = document.getElementById("form2");
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
    alert("Please enter a phone number");
    return false;
  }
  if (mainform.elements[4].value == "")
  {
    alert("Please enter a message");
    return false;
  }
  return confirm("Continue submitting?");
}
