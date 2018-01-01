
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="This is my resume website for showing resume,projects and project screenshots ">
<meta name="author" content="">
<!--<meta http-equiv="refresh" content="5" />-->
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="animate.min.css" type="text/css">
<link rel="stylesheet" href="font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<title>MyForm site</title>
<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<script src="parallax.js"></script>
<script src="contact.js"></script>
<script src="countto.js"></script>
<script src="jquery.easing.min.js"></script>
<script src="wow.min.js"></script>
<script src="common.js"></script>
</head>
<style>
fieldset.scheduler-border {
    border: 16px solid tomato !important;
    padding: 0 1.0em 1.0em 1.0em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}
 legend.scheduler-border {
        font-size: auto !important;
        font-weight: bold !important;
		font-style:italic;
		color:aqua;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
</style>
<body style="background-image:url('1.jpg');background-repeat:no-repeat">
 

<div class="row" >
<div  class="col-sm-12 col-md-12 col-lg-12 text center " style="height:50px">
</div>
</div>


<div class="container">
<fieldset class="scheduler-border" >
<legend class="scheduler-border animated bounceInDown">MyResponsiveForm</legend><center>
<div class="row" >

<div  class="col-sm-12 col-md-12 col-lg-12 text center " style="background-color:yellow;border:5px solid blue;opacity:0.7" >
<br/><br/><br/>

<form class="form-horizontal" role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="form-group animated bounceInleft" style="background-color:brown;opacity:1">
<label class="col-sm-2 control-label"><font color="white"> Name</font></label>
<div class="col-sm-10" id="emp_name">
<input type="text" class="form-control" id="emp_name" name= "emp_name"  
placeholder="Enter Name" <?php ?> >
<span><?php include 'name.php'; echo "<font color='white'><b>$errorMsg</b></font>"; ?></span>
</div>
</div>
<div class="form-group animated bounceInRight" style="background-color:red;opacity:1">
<label class="col-sm-2 control-label"><font color="white">Phone</font></label>
<div class="col-sm-10">
<input type="text" class="form-control" id="emp_number" name="emp_number"
placeholder="Enter phone no" >
<span><?php include 'num.php'; echo "<font color='white'><b>$errorMsg</b></font>"; ?></span>
</div>
</div>
<div class="form-group animated bounceInleft" style="background-color:green;opacity:1">
<label class="col-sm-2 control-label"><font color="white">Email</font></label>
<div class="col-sm-10">
<input type="text" class="form-control" id="emp_email" name="emp_email"
placeholder="Enter Email">
<span><?php include 'email.php'; echo "<font color='white'><b>$errorMsg</b></font>"; ?></span>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10"  >
<button style="background-color:purple;opacity:1" type="submit" name="Submit" class="btn btn-default animated bounceInleft"><font color="white">Sign in</font></button>
<span><?php include 'valid.php'; echo "<font color='green'><b>$msg</b></font>"; ?></span>
</div>
</div>
</form>

</div>
</div></fieldset></div></center>

</body>
</html>