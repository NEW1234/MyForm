<?php
$errorMsg="";$code;
if(isset($_POST['Submit'])){

  
  $emp_number=trim($_POST["emp_number"]);
 

  if($emp_number == "") {
    $errorMsg=  "error : Please enter number.";
    $code= "0";
  }
  //check if the number field is numeric
  elseif(is_numeric(trim($emp_number)) == false){
    $errorMsg=  "error : Please enter numeric value.";
    $code= "0";
  }
  elseif(strlen($emp_number)<10){
    $errorMsg=  "error : Number should be ten digits.";
    $code= "0";
  }
  else
  {
	  $code="1";
  }
}
  ?>