<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	
		
	
		
		$sql="insert into timetable values('$a','$b','$c','$d')";
		if(mysqli_query($con,$sql))
		{			
			
			header("location:time.php?msg=timetable Added successfully");			
		}		

					
		}else	{header("location:time.php?msg=error");		}	
			
		

if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	

?>
