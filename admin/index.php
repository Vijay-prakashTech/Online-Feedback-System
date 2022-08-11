<?php
	include('../dbconfig.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
$que=mysqli_query($conn,"select user and pass from admin where user='$email' and pass='$pass'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['user']=$email;
				header('location:dashboard.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Section</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
    .bg{
        background:goldenrod;
    }
    </style>
<body class="bg">

    <div class="container" style="margin-top: 100px">
        <div class="row" style="  background: lightseagreen;
    padding: 0px 21px;
">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="background: transparent;width: 413px;margin-right:20px;
    margin-bottom: 81px;
;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body" >
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" autofocus required placeholder="admin@gmail.com">
                                </div>
                                <div class="form-group">
                                    <input id="myInput" class="form-control" placeholder="admin" name="pass" type="password" required>
                                </div>
                                <div class="pswd"><input type="checkbox" onclick="myFunction()"><span style="margin-left:10px;">Show Password</span></div>
                                
                                
								<div class="form-group">
                                    <input name="login" type="submit" value="Login" class="btn btn-lg btn-success btn-block" style="border:1px solid black">
                                </div>
                                <span style="margin-left:100px"> <a href="../index.php"> <input type="button" value="Homepage" style="width: 160px;height: 50px;background-color: #32a4a8;color: white;border-radius: 5px;font-weight: bold" ></a></span>

                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../../demo/css/css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../demo/css/css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../..demo/css/css/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../demo/css/css/sb-admin-2.js"></script>

</body>

</html>
<style>
    .pswd{
	background: teal;
    width: 151px;
    padding: 6px 9px;
    margin-left: 0px;
    margin-top: 13px;
    margin-bottom:10px;
    color:white;
    
	border:2px solid transparent;
	border-radius:10px;
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
