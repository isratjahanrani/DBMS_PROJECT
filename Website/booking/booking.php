<?php
session_start();
$s_id=$_GET['s'];
$house_id=$_GET['h'];
$booking_date=$_GET['b'];
$price=$_GET['pr'];
$agreement=$_GET['a'];

if($_GET['submit'])
{
	if($s_id!="" && $house_id!="" && $booking_date!="" && $agreement!="" && $price!="")
	{
		$query="insert into booking values('$s_id','$house_id','$booking_date','$price','$agreement')";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				echo "<script type='text/javascript'>alert('Added successfully')
        window.location.href='booking.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Unsuccessfull')
        window.location.href='booking.php';
        </script>";
			}
	}
}
?>