 <?php
$errorMsg="";$code;
if(isset($_POST['Submit'])){
 if($emp_email == ""){
    $errorMsg=  "error : You did not enter a email.";
    $code= "0";
} //check for valid email 
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emp_email)){
  $errorMsg= 'error : You did not enter a valid email.';
  $code= "0";
}
else{
	$code="1";
  
  //final code will execute here.
}

}
?>