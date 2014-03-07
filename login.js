$(document).ready(function(){
   alert("Fill Username & Password");
   
function validateForm()
{
var x=document.forms["myForm"]["userName"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
}

});