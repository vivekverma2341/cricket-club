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
  <body>	
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
                        <li class="active"><a href="#header">Home</a></li>
                        <li><a href="#feature">Feature</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#pricing">Price & Plan</a></li>
                             <li><a href="#contact">Contact</a></li>
							 <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Log In</button>
</li>
                    
				             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center">Log In</h4>
        </div>
        <div class="modal-body"><center>
		<h2></h2>
		<form action="login.php" method="post" style="width:250px;">
		<select class="form-control" name="t1">
		<option value="player">Players</option>
		<option value="coach">Coaches</option>
	<option value="admin"> Admin</option>
	</select><br>
	<input type="text" class="form-control" name="t2" placeholder="Enter your mail Id"><br>
	<input type="password" class="form-control" name="t3" placeholder="Enter Your Password"><br>
	<input type="submit" class="btn btn-warning" >
	
	
		</form></center>
              </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	<div class="slider">		
		<div id="about-slider">
				<!-- Indicators -->
				
				<div class="carousel-inner">
					<div class="item active">						
						<img src="img/abc1.png" style='height:700px;width:1355px' class="img-responsive" alt="" > 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2 ><span style="color:white"><b>Cricket Clubs,Leagues & Teams</b></span></h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
											<button class="btn btn-warning btn-lg " style="background-color:lightblue;"><a href="#feature" style="border-radius:10px;width:100px;height:50px;">Started</button></a>
											<button class="btn btn-warning btn-lg" style="background-color:lightblue;"><a href="#pricing" style="border-radius:10px;width:100px;height:50px;">	Plans</a></button>
									</div>
								</form>
							</div>
						</div>
				    </div>
			 
				   
				    
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			 <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
		<form action="reg.php" method="post" style="width:300px;">
	
		<input type="text" class="form-control" name="t1" placeholder="Enter your Name"><br>
	<input type="email" class="form-control" name="t2" placeholder="Enter Your mail Id"><br>
	<input type="text" class="form-control" name="t3" placeholder="Enter your Address"><br>
	<input type="number" class="form-control" name="t4" placeholder="Enter Your Age"><br>
	Male : <input type="radio" name="t5" value="male" placeholder="Enter your mail Id">Female : <input type="radio" name="t5" value="female" placeholder="Enter your mail Id"><br><br>
	<input type="password" class="form-control" name="t6" placeholder="Enter Your Password"><br>
	
	
	<input type="submit" class="btn btn-warning" >
	</form>
	
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	<div id="feature">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3>Features</h3>
					</div>
				<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-bars"></i>						
							<h2>Playing Area</h2>
				</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-suitcase"></i>
							<h2>Equipments</h2>
							</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-tags"></i>
							<h2>Laws & Gameplay</h2>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-trophy"></i>
							<h2>Spirit of the Game</h2>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="gallery">
		<div class="container">
			<div class="text-center">
				<h3>Gallery</h3>
				</div>
			<div class="row">
				<figure class="effect-chico">						
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s" >
						<a href="img/1.jpg" class="flipLightBox">
						<img src="img/1.jpg" class="img-responsive" alt="" style="height:200px;">
						</a>						
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="img/2.jpg" class="flipLightBox">
						<img src="img/2.jpg" class="img-responsive" alt="" style="height:200px;">
						</a>
					</div>
				</figure>	
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="img/3.jpg" class="flipLightBox">
						<img src="img/3.jpg" class="img-responsive" alt="" style="height:200px;">
						</a>
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="img/4.jpg" class="flipLightBox">
						<img src="img/4.jpg" class="img-responsive" alt="" style="height:200px;">
						</a>
					</div>	
				</figure>
			</div>
		</div>
		<div class="gallery">
			<div class="container">
				<div class="row">
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/5.jpg" class="flipLightBox">
							<img src="img/5.jpg" class="img-responsive" alt="" style="height:200px;">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/6.jpg" class="flipLightBox">
							<img src="img/6.jpg" class="img-responsive" alt="" style="height:200px;">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/7.jpg" class="flipLightBox">
							<img src="img/7.jpg" class="img-responsive" alt="" style="height:200px;">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/8.jpg" class="flipLightBox">
							<img src="img/8.jpg" class="img-responsive" alt="" style="height:200px;">
							</a>
						</div>
					</figure>
				</div>
			</div>
		</div>
	</div><!--/#gallery-->
	
	
	<div id="pricing">
		<div class="container">
			<div class="text-center">
				<h3>Pricing Table</h3>
					</div>
			
			<div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-3 plan price-one wow fadeInDown" data-wow-offset="0" data-wow-delay="0.2s" style="height:550px;">
                        <ul>
                            <li class="heading-three" style="background-color:blue">
                                <h2>Start Up Free</h2>
                                <span>$0/Month</span>
                            </li><li></li>
                            <li>1-20 player</li>
							<li></li>
                              <li class="plan-action">
                                <a href="" class="btn btn-primary" style="background-color:blue">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-3 plan price-two wow fadeInDown" data-wow-offset="0" data-wow-delay="0.6s" style="height:550px;">
                        <ul>
                            <li class="heading-three" style="background-color:blue">
                                <h2>Small</h2>
                                <span>$20/Month</span>
                            </li>
                            <li>21-50 player</li>
                            <li>Priority E-mail Support </li>
                            <li>Advertisement Free</li>
							<li></li>
                              <li class="plan-action">
                                <a href="" class="btn btn-primary" style="background-color:blue">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-3 plan price-three wow fadeInDown" data-wow-offset="0" data-wow-delay="0.9s" style="height:550px;">
                         <ul>
                            <li class="heading-three" style="background-color:blue">
                                <h2>Medium</h2>
                                <span>$35/Month</span>
                            </li>
							<li>51-150 player</li>
                       
							   <li>Priority E-mail Support </li>
                            <li>Advertisement Free</li>
                       
                               <li>Save 20% with annual Subscriptions</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary" style="background-color:blue">Sign up</a>
                            </li>
                        </ul>
                    </div>
<div class="col-sm-3 plan price-three wow fadeInDown" data-wow-offset="0" data-wow-delay="0.9s" style="height:550px;">
                         <ul>
                            <li class="heading-three" style="background-color:blue">
                                <h2>Large</h2>
                                <span>$50/Month</span>
                            </li>
							<li>151-250 player</li>
                       
							   <li>Priority E-mail Support </li>
                            <li>Advertisement Free</li>
                       
                               <li>Save 20% with annual Subscriptions</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary" style="background-color:blue">Sign up</a>
                            </li>
                        </ul>
                    </div>



                   
                </div>
            </div><!--/pricing-area-->			
		</div>
	</div><!--/#pricing-->
	
	
	<footer>
		<div id="contact">
			<div class="container">
				<div class="text-center">
					<h3>Contact Us</h3>
								</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s"><br><br><br><br>
						<h2 style="text-align:center"><b>Contact us any time</b></h2>
							</div>				
					
					<div class="col-md-6 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
						<h2 style="text-align:center">Contact Info</h2>
						<ul>
							<li style="text-align:center"><i class="fa fa-home fa-2x"></i> jaankipuram ,Lko</li><hr>
							<li style="text-align:center"><i class="fa fa-phone fa-2x"></i> +91 8081508803</li><hr>
							<li style="text-align:center"><i class="fa fa-envelope fa-2x"></i> vivekmmb2341@gmail.com</li>
						</ul>
					</div>
					
					
				</div>
			</div>
		</div><!--/#contact-->					
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