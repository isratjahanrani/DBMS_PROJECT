<?php
$name=$_GET['n'];
$university_id=$_GET['u'];
$university_email=$_GET['u_email'];
$personal_email=$_GET['p'];
$department=$_GET['d'];
$present_address=$_GET['present'];
$permanent_address=$_GET['permanent'];
$pwd=$_GET['pass'];
$mob=$_GET['m'];
$occ=$_GET['o'];

if($_GET['submit'])
{
	if($name!="" && $university_id!="" && $university_email!="" && $personal_email!="" && $department!="" && $present_address!=""&& $permanent_address!=""&& $pwd!="" && $mob!="")
	{
		$query="insert into student values('$name','$university_id','$university_email','$personal_email','$department','$present_address','$permanent_address','$pwd','$mob','$occ')";
		$data=mysqli_query($conn,$query);
		if($data)

			echo 1;
		else
			echo 2;
	}
}

?>