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
                          <li><a href="addplayer.php">Add Player</a></li>
					    <li><a href="viewplayer.php">View Player</a></li>
                       <li><a href="viewplan.php">Game plans</a></li>
                            <li><a href="time.php">Time table</a></li>
                      <li><a href="logout.php">Logout</a></li>
                                                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	
	
	
	<div class="row"><br><br><br><br><br><br><center>
	<div class="col-lg-4"  style="background-color:rgba(150,150,0,0.3);width:500px;margin-left:100px;"><br>
		<?php

include 'connect.php';
	$sql="select max(planid) as p from gameplan";
$data=mysqli_query($con,$sql);
	if(mysqli_num_rows($data)>0)
	{
 while($row=mysqli_fetch_assoc($data))
		
	{
		$id=$row['p'];	
		$id1=$id+1;
		
	
		?>
	
	
	
	
	</form><h2>Select Players with Plan ID >>>>> <?php echo($id1);?></h2>
	<?php }}?>	
		<table class="table table-stripped">
		<tr><th style="text-align:center;">Player ID</th ><th style="text-align:center;">Player Type</th ><th style="text-align:center;">Name</th><th style="text-align:center;">Mail Id</th><th style="text-align:center;"></th ></tr>
	



	
	<?php
include 'connect.php';


	$sql="select * from reg ";
$data=mysqli_query($con,$sql);
	if(mysqli_num_rows($data)>0)
	{
 while($row=mysqli_fetch_assoc($data))
		
	{
				
		$a=$row['playertype'];
		$b=$row['name'];
		$c=$row['mail'];
		$d=$row['address'];
		$f=$row['age'];
		$g=$row['gender'];
		
		?><center><form action="addcart.php" method="post">
		<tr><td style="text-align:center;"><input type="text" readonly name="t4" value='<?php echo($id1);?>' class="form-control"></td>
		<td style="text-align:center;"><input type="text" readonly name="t1"value='<?php echo($a);?>' class="form-control"></td>
		<td style="text-align:center;"><input type="text" readonly name="t2" value='<?php echo($b);?>' class="form-control"></td>
		<td style="text-align:center;"><input type="text" readonly name="t3" value='<?php echo($c);?>' class="form-control"></td>
		<td><button type="submit"   >Select</button></td></tr>
		</form>
		</center>
		
			<?php			
		}		

	}
			
	?>
	</table>
	
	
	</div>
	
	
	<div class="col-lg-6"  style="background-color:rgba(150,150,0,0.3);width:600px;margin-left:100px;">
		
	<br><br>
		
	<h2> Selected Player Details </h2>
		<table class="table table-stripped">
		<tr><th style="text-align:center;">Player ID</th ><th style="text-align:center;">Player Type</th ><th style="text-align:center;">Name</th><th style="text-align:center;">Mail Id</th><th>Delete</th></tr>
	
	<?php


	$sql1="select * from selectplayer";
$data=mysqli_query($con,$sql1);
	if(mysqli_num_rows($data)>0)
	{
 while($row=mysqli_fetch_assoc($data))
		
	{
		$i=$row['planid'];	
		$type=$row['playertype'];
		$name=$row['name'];
		$mail=$row['mail'];
		
		?><center>
		
		<tr><td style="text-align:center;"><input type="text" readonly name="t0" value='<?php echo($i);?>' class="form-control"></td>
		
		<td style="text-align:center;"><input type="text" readonly name="t1"value='<?php echo($type);?>' class="form-control"></td>
				
		<td style="text-align:center;"><input type="text" readonly name="t2" value='<?php echo($name);?>' class="form-control"></td>
		<td style="text-align:center;"><input type="text" readonly name="t3" value='<?php echo($mail);?>' class="form-control"></td>
		
		</center><td><form action="delete.php" method="post"><button type="submit" name="t1" value='<?php echo($mail)?>'>Delete</button></form></td></tr></tr>
		
		</center>
		
		
	
	
	<?php			
		}		

	}
	
	?><form action="gameplan.php"><button name="pid" value='<?php echo($id1)?>' class="btn btn-primary">If 15 Player select (((Click here)))</button></form>
	<br><br></table>
	
	</div>
	</div>
   
	
		
  </body>
</html>