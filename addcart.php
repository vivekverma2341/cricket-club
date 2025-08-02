<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
		
		
		$sql="insert into selectplayer(planid,playertype,name,mail) values('$d','$a','$b','$c')";
		if(mysqli_query($con,$sql))
		{			
			
			header("location:viewplan.php");			
		}else	{header("location:viewplan.php?msg=player already Added");		}	
			
				

					
		}else	{header("location:viewplan.php?msg=errror");		}	
			
		

if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	

?>
