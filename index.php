<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<style>
    .bg{
  background:goldenrod;
  height:auto;
}
.botm:hover{
   border-bottom:3px solid black;
    margin-top:-5px;
}
@media only screen and (max-width: 400px) {
    .col-sm-10{
     background:cornflowerblue;
   
     margin-right:120px;
     
     
 

 }
 .img{
     margin-right:114px;
 }
 .img1,.img2,.img3{
     display:none;
 }

}
    </style>
<body class="bg" >

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:cornflowerblue;">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:white;letter-spacing:3px;background:cornflowerblue;font-family:inherit;"><marquee width="100%" direction="left" height="100px">GOVERMENT POLYTECNIC COLLEGE KOTA.
</marquee></a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a class="botm" style="color: floralwhite;
    font-size: 15px;" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a class="botm"  style="color: floralwhite;
    font-size: 15px;" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
					
					<li><a class="botm"  style="color: floralwhite;
    font-size: 15px;" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	 <li class="dropdown">
        <a class="botm"  style="color: floralwhite;
    font-size: 15px;" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login" style="font-family:system-ui;background:blue;border-bottom:2px solid black;color:white;">Student</a></li>
		  <li><a href="index.php?info=faculty_login" style="font-family:system-ui;background:blue;border-bottom:2px solid black;color:white;">Faculty</a></li> 
          <li><a href="admin" style="font-family:system-ui;background:blue;border-bottom:2px solid black;color:white;">Admin</a></li> 
        </ul>
      </li>  
	  
	
	  
	  
	 <li>
                        <a class="botm"  style="color: floralwhite;
    font-size: 15px;" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact us</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide" style="width: 100%;
    justify-content: center;
    margin: 0px auto;
    margin-top: 2px;
    height: 90vh;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/gpck front.jpeg');"></div>
				<div class="carousel-caption">
                <h1>Goverment Polytecnic College Kota Front Gate of College</h1>
                  <p>Welcome</p>
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/gpck main.jpeg');"></div>
                <div class="carousel-caption">
                <h1>Goverment Polytecnic College Kota Main Gate</h1>
                  <p>Welcome</p>
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/gpck class.jpeg');"></div>
                <div class="carousel-caption">
                  <h1>Internet Lab Computer Science Department</h1>
                  <p>Welcome</p>
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    
<!-- slider -->			
<div class="container" style="width: 100%">

<div class="row">
    <div class="col-lg-12">
        
        
    <div class="col-sm-10" style="margin-top:130px;margin-bottom:80px;background:cornflowerblue;
margin-top: 130px;
justify-content: center;
padding: 20px 20px;
margin-bottom: 80px;
align-items: center;
display: flex;
margin-left:120px;

">
        

<!--Vetri Contents starts here-->
    
    <div class="img" style="margin-top:30px;margin-right:120px;">

<span style="margin-left: 120px"><img src="images/student logo.png"  class="img1" style="border-radius: 30px;    border-radius: 120px; border:1px solid black
">
</span>
<span style="margin-left: 120px"><img src="images/faculty logo.png" class="img1" style="border-radius: 30px;border:1px solid black; border-radius: 120px;">
</span>
<span style="margin-left: 100px"><img src="images/admin logo.jpg" class="img1" style=" border-radius: 120px;border:1px solid black"></span>
<br><br><br>

<!-- btn section  -->




<div  class="btn" style="">
<span  class="btn1" style="margin-left: 150px"> <a href="index.php?info=login"> <button class="button button2">Student Login</button></a></span>

<span class="btn2" style="margin-left: 170px"> <a href="index.php?info=faculty_login"> <button class="button button2" style="margin-left:13px;">Faculty Login</button></a></span>

<span  class="btn3" style="margin-left: 170px"> <a href="admin"> <button class="button button2"  style="margin-left:0px;">Admin Login</button></a></span><br><br><br>
                    </div>
    </div>

<!--Vetri Contents ends here-->

    </div>
    
        <?php } ?>
    </div>
    
</div>

	
    <!-- Page Content -->
    <div class="container" style="margin-bottom: 26px;">

        <div class="row">
            <div class="col-lg-12">
               
            </div>
            
    </div>

   
    <!-- <div class="card" style="width: 24rem;
    background: cornflowerblue;
    padding: 23px 46px;
    margin-bottom: 40px;
}">
  <img src="images/principal logo.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rajesh Sharma</h5>
    <p class="card-text">Principal of goverment polytecnic college.</p>
    <a href="#" class="email" style="font-family: monospace;
    color: brown;
    text-decoration: none;">Email :  Rajesh@gmail.com</a>
  </div>
</div> -->


    <!-- /container -->

	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF">Developed By Vijay Prakash	 </span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
<style>
	 @media only screen and (max-width: 400px)
     {
        .col-lg-12{
             margin-left:-93px;
             
         }
         .col-sm-10{
             width:280px;
             margin-top:102px;
         }

         .btn{
             display: inline-grid;
         }
         .btn1{
          margin-right:23px;
         }
         .btn2{
          margin-right:63px;
          padding-top:23px;
         }
         .btn3{
          margin-right:49px;
          padding-top:23px;
          
         }
     }

     
     .button2 {
        width: 160px;
    height: 50px;
    margin-left: -8px;
    background-color: #fc0366;
    color: white;
    border-radius: 25px;
    font-weight: bold;
}
.button2:hover {
  background-color: green;
  color: white;
}

    </style>