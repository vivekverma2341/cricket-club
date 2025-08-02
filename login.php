 <?php
include 'connect.php';
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$a=$_POST['t1'];
		$b=$_POST['t2'];
		$c=$_POST['t3'];
		if($a=='player')
		{
	$sql="select password from reg where mail='$b'";
	$result=mysqli_query($con,$sql);
	if($row=mysqli_fetch_assoc($result))
	{		$dbpswd=$row['password'];
		if($c==$dbpswd)
		{      
			
	$_SESSION['em']=$b;
	header("location:player.php?msg=$b");
	}}
		else{
				header("location:home.php?msg=error1");
	
		}
		}else if($a=='coach')
		{
	$sql="select password from addcoach where mail='$b'";
	$result=mysqli_query($con,$sql);
	if($row=mysqli_fetch_assoc($result))
	{		$dbpswd=$row['password'];
		if($c==$dbpswd)
		{      
			$_SESSION['em']=$b;
	
	header("location:coach.php?msg=welcome admin");
	} else{
				header("location:home.php?msg=error3");
	}
	}else{
				header("location:home.php?msg=errorrrr");
	}		}else if($a=='admin')
		{
	$sql="select password from admin where mail='$b'";
	$result=mysqli_query($con,$sql);
	if($row=mysqli_fetch_assoc($result))
	{		$dbpswd=$row['password'];
		if($c==$dbpswd)
		{      
			$_SESSION['em']=$a;
	
	header("location:admin.php?msg=welcome admin");
	}}
		else{
				header("location:home.php?msg=error3");
	
		}
		}
	}	
?>