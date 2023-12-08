<?php
function check_login($conn){


    if (isset($_SESSION['S_id'])) {
        $id=$_SESSION['S_id'];
        $query ="select* from student where University_email = '$University_email' limit 1";
		$result=mysqli_query($conn,$query);
        if ($result && mysqli_num_rows($result)>0) {
            $user_data=mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("location:student_sign_in.php");
	  die;
}




function random_num($length){
    $text ="";
    if ($length <5) {
        $length=5;
    }
    $len=rand(4,$length);
    for ($i=0; $i < $len ; $i++) { 
        # code...
        $text .= rand(0,9);
    }
    return $text;
}?>