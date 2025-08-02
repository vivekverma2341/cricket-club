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
	$h=$_POST['t8'];
	$i=$_POST['t9'];
	$j=$_POST['t10'];
	$k=$_POST['t11'];
	$l=$_POST['t12'];
	
	
		
		$sql="insert into addcoach values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
		if(mysqli_query($con,$sql))
		{			
			
			header("location:addcoach.php?msg=Added Coaches successfully");			
		}		else	{header("location:addcoach.php?msg=error");		}		

					
		}
			
		

if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	

?>
