<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$aa=$_POST['t0'];
		$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
		$f=$_POST['t6'];
		
	
		
		$sql="update selectplayer set level='$a',place='$b',date='$c',myteam='$d',anotherteam='$e',winnerprice='$f' where planid='$aa'";
		if(mysqli_query($con,$sql))
		{			
			
			$sql1="insert into final(planid,playertype,name,mail,level,place,date,myteam,anotherteam,winnerprice)select * from selectplayer";
if(mysqli_query($con,$sql1))
		{	
	$sql2="delete from selectplayer  ";
if(mysqli_query($con,$sql2))
		{	$sql3="insert into gameplan(planid)value($aa)";
if(mysqli_query($con,$sql3))
		{	
	header("location:fullplan.php?msg=$aa");			
			
	}else	{header("location:gameplan.php?msg=error1");		}	
	
			
	}else	{header("location:gameplan.php?msg=error1");		}	
		
	
	}else	{header("location:gameplan.php?msg=error2");		}	
		
		
		}else	{header("location:gameplan.php?msg=error3");		}	
				

					
		}else	{header("location:gameplan.php?msg=error4");		}	
			
		

if(isset($_POST['sub']))
		{
			echo $_POST['sub'];
			}
	

?>
