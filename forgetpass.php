<?php 
include ('dbconfig.php');
extract($_POST);
if(isset($save))
{

	if($np==""|| $cp=="" || $e=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	
	

$sql=mysqli_query($conn,"select * from user where email='$e'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$np=md5($np);
	$sql=mysqli_query($conn,"update user set pass='$np' where email='$user'");
	
	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New  password not matched with Confirm Password </font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgetpass</title>
</head>
<body>
    <from method="post">
        <table>
            <input type="email" name="e" placeholder="Enter Your Email... " require>
            <br>
            <input type="password" name="np" placeholder="Enter New Password" require>
            <br>
            <input type="password" name="cp" placeholder="Confim New Password" require>
            <br>
            <input type="submit" name="save" value="Reset">
</table>
</form>
</body>
</html>