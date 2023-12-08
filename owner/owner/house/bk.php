<?php 
session_start ();
include ("connection.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
$Booking_date=$_POST['Booking_date'];
$Price=$_POST['Price'];
$House_Name=$_POST['House_Name'];
$members=$_POST['members'];
$s_contact=$_POST['s_contact'];
$s_name=$_POST['s_name'];



if(!empty($House_Name) && !empty($s_contact))
	{

    
    $s_id=random_num(20);
    $h_id=random_num(20);
    $query = "insert into booking (S_id,H_id,Booking_date,Price,House_Name,members,s_name,s_contact) values ('$s_id','$h_id','$Booking_date','$Price','$House_Name','$members','$s_name','$s_contact')";
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
    <link rel="stylesheet" href="bk.css" />

    <!-- Iconscout CSS -->

    <link
      rel="stylesheet"
      href="https://unicons. iconscout.com/release/v4.0.0/css/line.css"
    />

    <link
    href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    rel="stylesheet"
    />

  
    <title>Booking Form</title>
  </head>
  <body>
    <div class="container">
      <header>Make Your Reservation</header>
      <form action="#"method ="post">
        <div class="form first">
          <div class="details personal">
            <span class="title"><b>Booking Information</b></span>

            <div class="fields">
              <div class="input-field">
                <label> House Name </label>
                <input type="text" name="House_Name" placeholder=" Enter Your House No. Details." required />
              </div>
             
              
              <div class="input-field">
                <label>Check in Date</label>
                <input
                  type="date"
                  name="Booking_date"
                  placeholder=""
                  required
                />
              </div>
              
              <div class="input-field">
                <label> Enter the Rent</label>
                <input
                  type="number"
                  name="Price"
                  placeholder=" Price in Tk..."
                  required
                />
              </div>
              <div class="fields">
                <div class="input-field">
                  <label> Number Of Members </label>
                  <input type="text" name="members" placeholder=" Enter Total No. Of Members If Alone Type N/A ." required />
              </div>
              <div class="fields">
                <div class="input-field">
                  <label> Contact Number </label>
                  <input type="text" name="s_contact" placeholder=" Enter Your Contact Number ." required />
                </div>
                <div class="fields">
                <div class="input-field">
                  <label> Student Name </label>
                  <input type="text" name="s_name" placeholder=" Enter Your Contact Number ." required />
                </div>

              <button class="nextBtn">
                <span class="btnText"><h2>Book Now</h2></span>
                <i class="uil uil-navigator"></i>
              </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
