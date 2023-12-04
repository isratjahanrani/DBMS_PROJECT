<?php
session_start ();
include ("connection.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
$name=$_POST['Full_Name'];
$email=$_POST['Email'];
$pwd=$_POST['Password'];
$mob=$_POST['Mobile_Number'];
$occ=$_POST['Occupation'];
$n_house=$_POST['Number_of_Houses'];
$state=$_POST['State'];
$city=$_POST['City'];
$add=$_POST['Address'];

if(!empty($name) && !empty($email)&& !empty($pwd) && !empty($mob))
	{

    // $O_id= random_num(20);
		$query="insert into owner (Name,Email,Password,Number,Occupation,No_Of_Houses,State,City,Address) values('$name','$email','$pwd','$mob','$occ','$n_house','$state','$city','$add')";
		mysqli_query($conn,$query);
		
		
		header('location:home.php');
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
    <link rel="stylesheet" href="ow.css" />

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
      <form method="post">
        <div class="form first">
          <div class="details personal">
            <span class="title"><b>Owner's Personal Details</b></span>

            <div class="fields">
              <div class="input-field">
                <label> Full Name</label>
                <input type="text" placeholder=" Enter Your Name" name="Full_Name" required />
              </div>

              <div class="input-field">
                <label>Email</label>
                <input type="text" placeholder=" Enter Your Email" name="Email" required />
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
                  placeholder=" Enter Your Mobile Number" name="Mobile_Number"
                  required
                />
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
                <label>Number of Houses</label>
                <input
                  type="number"
                  placeholder=" Enter Your number of Houses" name="Number_of_Houses"
                  required
                />
              </div>

              <div class="input-field">
                <label>State</label>
                <input type="text" placeholder=" Enter Your State" name="State" required />
              </div>

              <div class="input-field">
                <label>City</label>
                <input type="text" placeholder=" Enter Your City" name="City" required />
              </div>

              <div class="input-field">
                <label>Address</label>
                <input type="text" placeholder=" Enter Your Address" name="Address" required />
              </div>

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
