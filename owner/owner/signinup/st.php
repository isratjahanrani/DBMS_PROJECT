<?php
session_start ();
include ("connection.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
$Name=$_POST['Name'];
$University_email=$_POST['University_email'];
$Password=$_POST['Password'];
$Contact_number=$_POST['Contact_number'];
$Department=$_POST['Department'];
$University_id=$_POST['University_id'];
$Occupation=$_POST['Occupation'];
$Present_address=$_POST['Present_address'];
$Permanent_address=$_POST['Permanent_address'];
$Personal_email=$_POST['Personal_email'];

if(!empty($Name) && !empty($University_email)&& !empty($Password) && !empty($Contact_number))
	{
    $S_id=random_num(20);
		$query="insert into student (S_id,Name,University_email,Password,Contact_number,Department,University_id,Occupation,Present_address,Permanent_address,Personal_email) values('$S_id','$Name','$University_email','$Password','$Contact_number','$Department','$University_id','$Occupation','$Present_address','$Permanent_address','$Personal_email')";
		mysqli_query($conn,$query);
		
		
		header('location:../dashboard of student/dos.html');
	       die;   
  }else
			{
				echo "Sign up unsuccessfull";
			}
	
}



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="st.css" />

    <!-- Iconscout CSS -->
    <link
      rel="stylesheet"
      href="https://unicons. iconscout.com/release/v4.0.0/css/line.css"
    />

    <title>Registration Form</title>
  </head>
  <body>
    <div class="container">
      <header>Sign Up Registration</header>
      <form action="#" method="post">
        <div class="form first">
          <div class="details personal">
            <span class="title"><b>Student's Personal Details</b></span>

            <div class="fields">
              <div class="input-field">
                <label> Full Name</label>
                <input type="text" placeholder=" Enter Your Name" name= "Name" required />
              </div>

              <div class="input-field">
                <label>University Email</label>
                <input
                  type="text"
                  placeholder=" Enter Your University Email" name="University_email"
                  required
                />
              </div>

              <div class="input-field">
                <label>Password</label>
                <input
                  type="text"
                  placeholder=" Enter Your Password" name="Password"
                  required
                />
              </div>

              <div class="input-field">
                <label> Mobile Number</label>
                <input
                  type="number"
                  placeholder=" Enter Your Mobile Number"name="Contact_number"
                  required
                />
              </div>

              <div class="input-field">
                <label>Department Name</label>
                <input
                  type="text"
                  placeholder=" Enter Your Department Name" name="Department"
                  required
                />
              </div>

              <div class="input-field">
                <label>ID No. </label>
                <input type="number" placeholder=" Enter Your University ID" name="University_id"required />
              </div>

              <div class="input-field">
                <label>Occupation</label>
                <input
                  type="text"
                  placeholder=" Enter Your Occupation" name="Occupation"
                  required
                />
              </div>

              <div class="input-field">
                <label>Present Address </label>
                <input
                  type="text"
                  placeholder=" Enter Your Present Address" name="Present_address"
                  required
                />
              </div>

              <div class="input-field">
                <label>Permanent Address </label>
                <input
                  type="text"
                  placeholder=" Enter Your Permanent Address" name="Permanent_address"
                  required
                />
              </div>

              <div class="input-field">
                <label>Personal Email</label>
                <input
                  type="text"
                  placeholder=" Enter Your Personal Email" name="Personal_email"
                  required
                />
              </div>
            </div>
          </div>

          <!-- <div class="details ID">
            <span class="title"><b>Expected House Details</b></span>

            <div class="fields">
              <div class="input-field">
                <label> House No.</label>
                <input
                  type="text"
                  placeholder=" Enter Your House No. "
                  required
                />
              </div>

              <div class="input-field">
                <label> Floor No. </label>
                <input
                  type="text"
                  placeholder=" Enter Your Floor No."
                  required
                />
              </div>

              <div class="input-field">
                <label>Apartment No.</label>
                <input
                  type="text"
                  placeholder=" Enter Your Appartment No."
                  required
                />
              </div>

              <div class="input-field">
                <label>Expected Entry </label>
                <input type="date" placeholder=" Entry Date" required />
              </div>

              <div class="input-field">
                <label>Any Reference</label>
                <input type="text" placeholder=" Yes / No" required />
              </div>
            </div> -->

            <button class="nextBtn">
              <span class="btnText"><h2>Sign Up</h2></span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
