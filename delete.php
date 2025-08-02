<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a=$_POST['t1'];
	
	
		
		
		$sql="delete from selectplayer where mail='$a'";
		if(mysqli_query($con,$sql))
		{			
			
			header("location:viewplan.php");			
		}		

					
		}else	{header("location:viewplan.php");		}	
			
		

if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	

?>
