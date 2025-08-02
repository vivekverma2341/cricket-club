<?php
session_start();
$se=$_SESSION['em'];
if($se==null){
	header("location:home.php?msg=plz login first");
	
}
include 'connect.php';
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
                    <a class="navbar-brand" >Cricket Club</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                          <li class="active"><a href="player.php">Player</a></li>
                               <li><a href="time2.php">View Time table</a></li>
                      	    <li><a href="plan1.php"> View Game Plans</a></li>
							<li><a href="logout.php">Logout</a></li>
                       </a></li>
                       
                                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
<br><br><br><br><br><br>
	<div class="col-lg-6"  ><h1 style="text-align:center;color:black">Search Game Plan Acc. to Plan ID  </h1>
	<h4 style="text-align:center;color:black">If Your Mail ID Show In Select palyers Means You Are selected </h4>
						
						<center><div style="width:400px;height:130px;background-color:rgba(200,200,200,0.3);">
						<br><form action="" method="post">
						
						
<p class="form-inline">
<form action="" method="post">
  Game Plans >>>>><select class="form-control" name="t1">
<?php $sql="select distinct planid as pid from final";
$data=mysqli_query($con,$sql);
	if(mysqli_num_rows($data)>0)
	{
	while($row=mysqli_fetch_assoc($data))
		
	{
		//$aa=$row['mail'];		
		$a=$row['pid'];
			
		?>
		<option><?php echo($a);?></option>
		
		
		
		
		<?php 
		
	}	
	}
	
	?><br><br></select>
		<button>submit</button>
		<center>	</form>	
				
	
				</div></center>
					
					<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST")
	{		
		$a=$_POST['t1'];
		
		
			
		$sql="select * from final where planid='$a'";
$data=mysqli_query($con,$sql);
	if(mysqli_num_rows($data)>0)
	{
	if($row=mysqli_fetch_assoc($data))
		
	{
		$aa=$row['mail'];		
		$a=$row['planid'];
		$b=$row['level'];
		$c=$row['place'];
		$cc=$row['date'];
		$d=$row['myteam'];
		$e=$row['anotherteam'];
		$f=$row['winnerprice'];
			
		?><center><table class="table table-bordered" style="height:100px;width:400px;font-weight:bold;background-color:rgba(220,220,220,0.7);">
			
		<tr><td style="text-align:center;"> Plan ID : </td><td style="text-align:center;"><?php echo($a);?></td></tr>
		<tr><td style="text-align:center;">Level : </td ><td style="text-align:center;"><?php echo($b);?></td></tr>
		<tr><td style="text-align:center;">Place : </td><td style="text-align:center;"><?php echo($c);?></td></tr>
		<tr><td style="text-align:center;">Date : </td><td style="text-align:center;"><?php echo($cc);?></td></tr>
		
		<tr><td style="text-align:center;">My Team : </td><td style="text-align:center;"><?php echo($d);?></td></tr>
		<tr><td style="text-align:center;">Another team : </td><td style="text-align:center;"><?php echo($e);?></td></tr>
		<tr><td style="text-align:center;">Winning Price : </td><td style="text-align:center;"><?php echo($f);?></td></tr>
			
		</table>
		
		
	
		
		
		
		
		
		
		
		
		<br></div></div>
		
		<div class="col-lg-6">
		<h1 style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;Only select Player Show here   </h1>
		<table class="table table-bordered" style="height:100px;width:500px;font-weight:bold;background-color:rgba(220,220,220,0.7);">
			<tr><th>Plan Id </th><th>Player Type</th><th>Player Name</th><th style="text-align:center">Mail Id</th></tr>
			<?php
include 'connect.php';

		
		
			
		$sql="select * from final where planid='$a'";
$data=mysqli_query($con,$sql);
	if(mysqli_num_rows($data)>0)
	{
	while($row=mysqli_fetch_assoc($data))
		
	{
		$aa=$row['planid'];		
		$a=$row['playertype'];
		$b=$row['name'];
		$c=$row['mail'];
				
		?><center>
		<tr><td style="text-align:center;"><?php echo($aa);?></td>
		<td style="text-align:center;"><?php echo($a);?></td>
		<td style="text-align:center;"><?php echo($b);?></td>
		<td style="text-align:center;"><?php echo($c);?></td></tr>
		
			
		
		
		
		
		
		</center>
			</div>
	<?php
	}}
	
	
	?></table>
		
		
		
		
			<?php			
		}	
	}	

	}
		
if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	
?>
						
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