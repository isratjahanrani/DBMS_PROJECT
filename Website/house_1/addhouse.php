<?php
session_start();
$owner_id=$_GET["o"];
$no_rooms=$_GET['n'];
$rate=$_GET['ra'];
$pics=$_GET['u'];
$house_no_and_road_no=$_GET['c'];
$city=$_GET['city'];
$add=$_GET['a'];
$desc=$_GET['de'];
if($_GET['submit'])
{
	if($owner_id!="" && $no_rooms!="" && $desc!="" && $house_no_and_road_no!="")
	{
		$query="insert into house values('$owner_id','$no_rooms','$rate','{$pics}','$house_no_and_road_no','$city','$add','$desc')";
		$data=mysqli_query($conn,$query);
		
		if($data)

			{
				echo "<script type='text/javascript'>alert('Added successfully')
        window.location.href='houses.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Unsuccessfull')
        window.location.href='houses.php';
        </script>";
			}
	}
}
?>