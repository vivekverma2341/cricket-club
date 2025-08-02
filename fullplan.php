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
  <body style="background-image:url(jj-ying-236821-unsplash.jpg) ;background-size:cover;background-attachment:fixed">	
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
                        <li class="active"><a href="coach.php">Coach</a></li>
                                 <li><a href="coach.php">Back to Home</a></li>
                        	<li><a href="logout.php">Logout</a></li>
                                                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	
	
	
	<div class="row"><br><br><br><br><br><br><center>
	
	<div class="col-lg-12"  style="background-color:rgba(150,150,0,0.3);width:600px;margin-left:350px;">
		<h2><i style="font-size:30px;">Congrats!!!!!! </i>This Is YOUR Final details & Team</h2>
	
		<table class="table table-stripped">
		
	<?php
	if($_SERVER['REQUEST_METHOD']=="GET")
	{
		$a=$_GET['msg'];
	
include 'connect.php';

	$sql="select * from final where planid='$a'";
$data=mysqli_query($con,$sql);
	if(mysqli_num_rows($data)>0)
	{
 if($row=mysqli_fetch_assoc($data))
		
	{
					$a=$row['planid'];
				
		$b=$row['level'];
		$c=$row['place'];
		$d=$row['date'];
		$e=$row['myteam'];
		$f=$row['anotherteam'];
		$g=$row['winnerprice'];
		
		?>
		<center>

		<tr><td>Plan ID</td><td><input type="text" readonly name="t1"value='<?php echo($a);?>' class="form-control"></td>
		<td>Level</td><td><input type="text" readonly name="t1"value='<?php echo($b);?>' class="form-control"></td></tr>
		<tr><td>Place</td><td><input type="text" readonly name="t1"value='<?php echo($c);?>' class="form-control"></td>
		<td>Date</td><td><input type="text" readonly name="t1"value='<?php echo($d);?>' class="form-control"></td>
		<tr><td>My Team</td><td><input type="text" readonly name="t1"value='<?php echo($e);?>' class="form-control"></td>
		<td>Another Team</td><td><input type="text" readonly name="t1"value='<?php echo($f);?>' class="form-control"></td></tr>
		<tr><td>price/throphy</td><td><input type="text" readonly name="t1"value='<?php echo($g);?>' class="form-control"></td></tr>
		
			</center>
		
			<?php			
		}		

	}
	}
	?>
	</table>
	
		
	<h2> Selected Player Details </h2>
	
		<table class="table table-stripped">
		<tr><th style="text-align:center;">Player Type</th ><th style="text-align:center;">Name</th><th style="text-align:center;">Mail Id</th></tr>
	
	<?php


	$sql1="select * from final where planid='$a' ";
$data=mysqli_query($con,$sql1);
	if(mysqli_num_rows($data)>0)
	{
 while($row=mysqli_fetch_assoc($data))
		
	{
				
		$a=$row['playertype'];
		$b=$row['name'];
		$c=$row['mail'];
		
		?><center>
		<center>
		<tr></td ><td style="text-align:center;"><input type="text" readonly name="t1"value='<?php echo($a);?>' class="form-control"></td>
				
		<td style="text-align:center;"><input type="text" readonly name="t2" value='<?php echo($b);?>' class="form-control"></td>
		<td style="text-align:center;"><input type="text" readonly name="t3" value='<?php echo($c);?>' class="form-control"></td>
		
		</center></tr></tr>
		
		</center>
		
			<?php			
		}		

	}
	
	?>
	
	</table><br> <br> 
	</div> </center>
	</div>
   
	
	<!--/#contact-->					
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