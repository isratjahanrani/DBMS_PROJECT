<?php
session_start();
$house_id=$_GET['h'];
$s_id=$_GET['s'];
$rating=$_GET['r'];
$comment=$_GET['c'];

if($_GET['submit'])
{
	if($house_id!="" && $s_id!="" && $rating!="")
	{
		$query="insert into rating values('$house_id','$s_id','$rating','$comment')";
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