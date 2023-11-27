<?php
session_start();
$sid=$_GET['s'];
$name=$_GET['n'];
$occupation=$_GET['o'];
$present_address=$_GET['present'];
$permanent_address=$_GET['permanent'];
$gender=$_GET['g'];
$date_of_birth=$_GET['d'];
$rel=$_GET['r'];
$contact_number=$_GET['c'];

if($_GET['submit'])
{
	if($sid!="" && $name!="" && $rel!="" && $gender!="" && $contact_number!="")
	{
		$query="insert into member values('$sid','$name','$occupation','$present_address','$permanent_address','$gender','$date_of_birth','$rel','$contact_number',)";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				echo "<script type='text/javascript'>alert('Added successfully')
        window.location.href='tenant.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Unsuccessfull')
        window.location.href='tenant.php';
        </script>";
			}
	}
}
?>