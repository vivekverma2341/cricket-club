<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a=$_POST['t1'];

		$sql="select * from reg where mail='$a'";
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
		
			
		}		

	}
	}
if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	
?>
						
						
	