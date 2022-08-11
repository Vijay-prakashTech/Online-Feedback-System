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

$sql=mysqli_query($conn,"select * from faculty where email='$e' and password='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['faculty_login']=$e;
header('location:faculty');
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
		<div class="col-sm-8" style="margin-top: 150px;
    background: lightseagreen;">

<form method="post" class="form" style=" margin-bottom:25px;   margin-left: 100px;
    padding: 35px 0px;    color: cornsilk;">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" style="text-align:center;width:100%;"><h2>Faculty Login Form</h2></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter YOur Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter YOur Password</div>
		<div class="col-sm-5">
		<input id="myInput" type="password" name="p" class="form-control"/></div>
	</div>	<div class="pswd"><input type="checkbox" onclick="myFunction()"><span style="margin-left:10px;">Show Password</span></div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" style="background:teal"name="save" class="btn btn-info"/>
		
		</div>
	</div>
</form>	
</div>
</div>
<style>
	.pswd{
	background: teal;
    width: 151px;
    padding: 6px 9px;
    margin-left: 313px;
    margin-top: 13px;
	border:2px solid transparent;
	border-radius:10px;
	cursor:pointer;
}

	 @media only screen and (max-width: 400px){
        .col-sm-8{
			margin-top: 150px;
    margin-left: 24px;
    width: 400px;
		}
.form{
	
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