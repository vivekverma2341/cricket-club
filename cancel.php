<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST")
	{ 
     $a=$_POST['t1'];
	
	
	
		
		
		$sql="delete from timetable where day='$a'";
		if(mysqli_query($con,$sql))
		{			
			
			header("location:time.php?msg=done");			
		}		

					
		}else	{header("location:time.php?msg=errror");		}	
			
		

if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	

?>
