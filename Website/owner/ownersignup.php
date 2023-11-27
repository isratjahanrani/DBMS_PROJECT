<?php
session_start();
$name=$_GET['f'];
$email=$_GET['e'];
$pwd=$_GET['p'];
$mob=$_GET['m'];
$occ=$_GET['o'];
$n_house=$_GET['n'];
$state=$_GET['s'];
$city=$_GET['ci'];
$add=$_GET['a'];

if($_GET['submit'])
{
	if($name!="" && $email!="" && $pwd!="" && $mob!="")
	{
		$query="insert into owner values('$name','$email','$pwd','$mob','$occ','$n_house','$country','$state','$city','$add')";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				$_SESSION['uname']=$name;
				header('location:home.php');
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Sign up unsuccessfull')
        window.location.href='index.html';
        </script>";
			}
	}
}
?>