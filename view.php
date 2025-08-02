<?php
session_start();
$se=$_SESSION['em'];
if($se==null){
	header("location:home.php?msg=plz login first");
	
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bikin - HTML Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 <body style=" height:100%;background-image:url(img/cricket_ball_in_the_grass-2560x1600.jpg); background-size:cover;background-attachment:fixed; ">	
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" >Cricket Club</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#header">Admin</a></li>
                        <li><a href="addcoach.php">Add Coach</a></li>
                        <li><a href="view.php">View Coach / Player </a></li>
						    <li><a href="time1.php">Time table</a></li>
                           <li><a href="plan.php">Game Plans</a></li>
							<li><a href="logout.php">Logout</a></li>
                       
                                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
<br><br><br><br><br><br>
	<div class="col-lg-12"  ><h1 style="text-align:center;color:black">Search Coach &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Search Player</h1>
						<center><div style="width:500px;height:130px;background-color:rgba(200,200,200,0.3);">
						<br><form action="" method="post">
<p class="form-inline">	<button  name="ta" value="coach" style="height:30px; border-radius:10px; background-color:lightblue;border:2px solid blue">  Search Coach</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email " name="t1"  placeholder="Enter Coach Mail ID " class="form-control" style="width:200px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button  name="ta" value="player" style="height:30px; border-radius:10px; background-color:lightblue;border:2px solid blue"> Search Player</button>
						
					
						
	
				</div></center></div>
					
					<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST")
	{		
		$a=$_POST['ta'];
		$b=$_POST['t1'];
		//echo($a);echo($b);
		
		
		if($a=="coach")
		{
			
		$sql="select * from addcoach where mail='$b'";
$data=mysqli_query($con,$sql);
	if(mysqli_num_rows($data)>0)
	{
	if($row=mysqli_fetch_assoc($data))
		
	{
				
		$a=$row['name'];
		$b=$row['mail'];
		$c=$row['address'];
		$d=$row['gender'];
		$e=$row['aadar'];
		$f=$row['mobile'];
		$g=$row['workexperience'];
		$h=$row['workplace'];
		$i=$row['medal'];
		$j=$row['specialist'];
		$k=$row['playinglevel'];
		
		?><center>
		<div  style="width:500px;height:500px;background-color:rgba(200,200,200,0.7);font-weight:bold;margin-top:250px"><br><h2>Coach Details</h2><br><table class="table table-stripped">	
		<tr><td style="text-align:center;"> Name : </td><td style="text-align:center;"><?php echo($a);?></td></tr>
		<tr><td style="text-align:center;">Email Id : </td ><td style="text-align:center;"><?php echo($b);?></td></tr>
		<tr><td style="text-align:center;">Address : </td><td style="text-align:center;"><?php echo($c);?></td></tr>
		<tr><td style="text-align:center;">Gender : </td><td style="text-align:center;"><?php echo($d);?></td></tr>
		<tr><td style="text-align:center;">Aadar : </td><td style="text-align:center;"><?php echo($e);?></td></tr>
		<tr><td style="text-align:center;">Mobile : </td><td style="text-align:center;"><?php echo($f);?></td></tr>
		<tr><td style="text-align:center;">Work Experience : </td><td style="text-align:center;"><?php echo($g);?></td></tr>
		<tr><td style="text-align:center;">Work Place : </td><td style="text-align:center;"><?php echo($h);?></td></tr>
		<tr><td style="text-align:center;">Medal : </td><td style="text-align:center;"><?php echo($i);?></td></tr>
		<tr><td style="text-align:center;">Specialist : </td><td style="text-align:center;"><?php echo($j);?></td></tr>
		<tr><td style="text-align:center;">Playing Level : </td><td style="text-align:center;"><?php echo($k);?></td></tr>
		
		</table><br></div></center>
			<?php			
		}		

	}
			
		}elseif($a=="player")
		{
			
		$sql="select * from reg where mail='$b'";
$data=mysqli_query($con,$sql);
	if(mysqli_num_rows($data)>0)
	{
	if($row=mysqli_fetch_assoc($data))
		
	{
				
		$a=$row['playertype'];
		$b=$row['name'];
		$c=$row['mail'];
		$d=$row['address'];
		$f=$row['age'];
		$g=$row['gender'];
		
		?><center>
		<div  style="width:500px;height:350px;background-color:rgba(200,200,200,0.3);margin-top:250px"><br><h2>Player Details</h2><br>
		<table class="table table-stripped">
		<tr><td style="text-align:center;"> Player Type : </td><td style="text-align:center;"><?php echo($a);?></td></tr>
				
		<tr><td style="text-align:center;"> Name : </td><td style="text-align:center;"><?php echo($b);?></td></tr>
		<tr><td style="text-align:center;">Email Id : </td><td style="text-align:center;"><?php echo($c);?></td></tr>
		<tr><td style="text-align:center;">Address : </td><td style="text-align:center;"><?php echo($d);?></td></tr>
		<tr><td style="text-align:center;">Age : </td><td style="text-align:center;"><?php echo($f);?></td></tr>
		<tr><td style="text-align:center;">Gender : </td><td style="text-align:center;"><?php echo($g);?></td></tr>
		</table><br></div></center>
		
			<?php			
		}		

	}
			
		
		
		}
				else
				{
					echo"error";
					
				}
	}
if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	
?>
						
					
					
					
	
	
		
						
				
	
	
	
	
		<div class="social-icon" >
			<div class="container">
				<div class="col-md-6 col-md-offset-3">						
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						<li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
					</ul>						
				</div>
			</div>
		</div>		<footer>				
		<div class="text-center">
			<div class="copyright">
				&copy; 2015 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">bootstraptaste</a>. All Rights Reserved.
			</div>
            <!-- 
                All links in the footer should remain intact. 
                Licenseing information is available at: http://bootstraptaste.com/license/
                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Bikin
            -->
		</div>									
	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/parallax.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>