<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$pass=md5($p);	

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$e;
header('location:user');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>

						
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8" style="    margin: 0px auto;
    margin-top: 95px;
    background: lightseagreen;
    color: darkred;
    padding: 45px 0px;
	font-family:system-ui;">

<form method="post" class="form" style="margin-left: 115px;
    color: lavenderblush;font-weight:bold;font-size:15px
">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><h2>Login Form</h2></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Password</div>
		<div class="col-sm-5">
		<input  id="myInput"  type="password" name="p" class="form-control"/></div>
	</div>
	<div class="pswd"><input type="checkbox" onclick="myFunction()"><span style="margin-left:10px;">Show Password</span></div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8" >
		<input type="submit" style="background:teal;margin-bottom:10px" value="Login" name="save" class="btn btn-info"/>
		
		</div>
	<div class="link">
<h5>Don't Have Any Account <a href="index.php?info=registration" style="color:darkblue;text-decoration:none;">  - Registration Here </a></h5>
<br>
<h5><a href="forgetpass.php">forget Password</a></h5></div>
	</div>
	
</form>	
</div>
</div>

<style>
.pswd{
	background: teal;
    width: 161px;
    padding: 6px 9px;
    margin-left: 320px;
    margin-top: 13px;
	border:2px solid transparent;
	border-radius:10px;
}

	 @media only screen and (max-width: 400px){
		 .row{
			width: 350px;
            margin-left: 22px;
			margin-top:-10px;
		 }
		 .form{
			display: contents;
		 }
		 .h5{
			 margin-left:25px;
		 }
		 .col-sm-5{
			 width:314px;
		 }
		 .link{
			 margin-left:16px;
		 }
		 .pswd{
			margin-left: 35px;
			
		 }
	 }
	</style>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>