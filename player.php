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
  <body style="background-image:url(red_ball_cricket.jpg);background-size:cover;background-attachment:fixed" >	
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
                    <a class="navbar-brand" href="index.html">Cricket Club</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="player.php">Player</a></li>
                              <li><a href="time2.php">View Time table</a></li>
                      	    <li><a href="plan1.php"> View Game Plans</a></li>
							<li><a href="logout.php">Logout</a></li>
                       
                       
						
						
						
						
                                                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	
	<?php
include 'connect.php';

	$sql="select * from reg where mail='$se'";
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
		
		?>
		<br>
	
			
	<section id='a' style="font-weight:bold">
	<div class="col-lg-4"  style="background-color:rgba(230,230,0,0.3);margin-top:80px;width:1370px;">
	<center>
	<h2>Player Details Update</h2><form action="update.php" method="post"style="width:1370px;">

	<p class="form-inline">	 Player Time : <input type="text"  style="width:150px;"class="form-control" name="t1" value='<?php echo($a);?>'>
		
	 Name: 	<input type="text" class="form-control" style="width:150px;" name="t2"value='<?php echo($b);?>'>
	
	 Email id : <input type="email" readonly  style="width:150px;"class="form-control" name="t3" value='<?php echo($c);?>'>
	Address : <input type="text" class="form-control"style="width:150px;" name="t4" value='<?php echo($d);?>'>
 	player Age : <input type="number" class="form-control"style="width:100px;" name="t5"value='<?php echo($f);?>'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
	
	<input type="submit" class="btn btn-warning" value="Update" ><p><br>
	</form></center>
	
	
	<?php			
				

	}
	}		
	?>
	
	
	
	</center>
	</div>
	</section>		<section id='b'>
	</section></br>
	<br>
	<section>
	<div ></div>
	</section></br>
	<br>
	
		<div class="social-icon">
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
		</div>						
		<div class="text-center">
			<div class="copyright">
				&copy; 2025 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">bootstraptaste</a>. All Rights Reserved.
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