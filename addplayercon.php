<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
		$f=$_POST['t6'];
		$g=$_POST['t7'];
	
		$h="player";
	
	
		
		$sql="insert into reg values('$a','$b','$c','$d','$e','$f','$g','$h')";
		if(mysqli_query($con,$sql))
		{			
			
			header("location:addplayer.php?msg=Player Added successfully");			
		}		

					
		}else	{header("location:addplayer.php?msg=error");		}	
			
		

if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	

?>
