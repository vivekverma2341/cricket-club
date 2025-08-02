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
  <body style="background-image:url(jj-ying-236821-unsplash.jpg) ;background-size:cover;background-attachment:fixed;font-weight:bold">	
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
                          <li><a href="addplayer.php">Add Player</a></li>
					    <li><a href="viewplayer.php">View Player</a></li>
                       <li><a href="gameplan.php">Game plans</a></li>
                      
                              <li><a href="#pricing">Time table</a></li>
                        	<li><a href="logout.php">Logout</a></li>
                                                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	
	
	
	<div class="row"><br><br><br><br><br><br><br><center>
	<?php
	include 'connect.php';
	if($_SERVER['REQUEST_METHOD']=="GET")
	{
		$a=$_GET['pid'];
	
	}
	?>
	<div class="col-lg-12"  style="background-color:rgba(150,150,0,0.3);width:800px;margin-left:300px;">
	<h1>Game Planning  </h1>
	<form action="gamecon.php" method="post">
	Game Plan Id : <input type="text" name="t0" value='<?php echo($a)?>' readonly style="width:200px; height:25px;border-radius:5px;text-align:center" >
	<p >Game Level :<select class="form-inline" name="t1" style="width:200px; height:25px;border-radius:5px;">
	<option value="School">School level</option>
	<option value="College">College level</option>
	<option value="Local Area">Local Area Level</option>
	<option value="Politican">Politican level</option>
	<option value="state">state level</option>
	<option value="national">national level</option>
	
	</select> Place : <select class="form-inline"  name="t2" style="width:280px; height:25px;border-radius:5px;">
	<option value="Vikas nagar ,mini Stadium">Vikas nagar ,mini Stadium</option>
	<option value="Vikas Nagar , LDA Stadium">Vikas Nagar , LDA Stadium </option>
	<option value="Indra Nagar ,Mini Stadium">Indra Nagar ,Mini Stadium</option>
	<option value="Hazrat Ganj ,K.D Singh Babu Stadium" >Hazrat Ganj ,K.D Singh Babu Stadium</option>
	<option value="Amar-Shahid path,Ikana Stadium">Amar-Shahid path,Ikana Stadium</option>
	
	</select></p>
	
	Date :<input type="date"  name="t3" style=" height:25px;border-radius:5px;"><br><br>
	
	
	
	Team Name(My Team) :<input type="text"  name="t4" style="width:200px; height:25px;border-radius:5px;">
	
	Team Name(Another Team) :<input  name="t5" type="text" style="width:200px; height:25px;border-radius:5px;"><br><br>
	
	
	</select> Winning price/throphy : <select  name="t6" class="form-inline" style="width:200px; height:25px;border-radius:5px;">
	<option>Best School throphy </option>
	<option>Best College throphy </option>
	<option>Best Area throphy </option>
	<option>Best Politican throphy </option>
	<option>Best state throphy </option>
	<option>Best national throphy </option>
	
	</select>
	
	<br>
	<p class="form-inline"><button class="btn btn-primary" >Created</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	
	
	
	<br><br><br>
	
	</form>
	
	
	</div> 
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
				&copy; 2025<a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">bootstraptaste</a>. All Rights Reserved.
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