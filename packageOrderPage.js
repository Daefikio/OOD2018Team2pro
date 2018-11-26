/*Function used for validation of specific input fields to ensure the form
 is valid before submission*/
function validate(mainform)
{
  var myform = document.getElementById("form1");
  if (mainform.elements[0].value == "")
  {
    alert("Please enter your username.");
    return false;
  }
  if (mainform.elements[1].value == "")
  {
    alert("Please enter your password");
    return false;
  }
  if (mainform.elements[2].value == "")
  {
    alert("Please select your desired package for booking");
    return false;
  }
  return confirm("Continue submitting?");
}

/*Function used to change the background color of the input field when
valid data is entered*/
function checkFilled(mainform)
{
  for (var i = 0; i < 3; i++)
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
