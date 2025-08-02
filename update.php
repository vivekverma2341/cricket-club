<?php
include 'connect.php';
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
	{		
		$a=$_POST['t1'];
		$b=$_POST['t2'];
		$c=$_POST['t3'];
		$d=$_POST['t4'];
	   $e=$_POST['t5'];
			
		$sql="update reg set playertype='$a',name='$b',address='$d',age='$e' where mail='$c'";
		if(mysqli_query($con,$sql))
		{			
				header("location:player.php?msg=$c");			
		}		

					
		}else	{header("location:player.php?msg=error");		}	
			
		

					
			

	
			?>