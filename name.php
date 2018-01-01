<?php
$errorMsg="";$code;
if(isset($_POST['Submit'])){

  $emp_name=trim($_POST["emp_name"]);
  $emp_number=trim($_POST["emp_number"]);
  $emp_email=trim($_POST["emp_email"]);

  if($emp_name =="") {
    $errorMsg=  "error : You did not enter a name.";
    $code= "0" ;
  }
  else{
	  $code="1";
	  $errorMsg= "<font color='aqua'></font>";
  echo "$errorMsg";
  //final code will execute here.
}

}
?>
