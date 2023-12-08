<?php
session_start ();
include ("../house/connection.php");
include("../house/function.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
  $Poster_Name=$_POST['Poster_Name'];
  $Personal_Email=$_POST['Personal_Email'];
  $Address=$_POST['Address'];
  $Mobile_Number=$_POST['Mobile_Number'];
$Price_Range=$_POST['Price_Range'];
$Flat_Location=$_POST['Flat_Location'];
$Number_of_Rooms=$_POST['Number_of_Rooms'];
$Washroom=$_POST['Washroom'];
$Balcony=$_POST['Balcony'];
$Kitchen=$_POST['Kitchen'];
$Drawing_Dinning=$_POST['Drawing_Dinning'];
$CCTV=$_POST['CCTV'];
$Guard=$_POST['Guard'];
$Lift=$_POST['Lift'];
$WIFI=$_POST['WIFI'];
$Service_Charge=$_POST['Service_Charge'];


if(!empty($Poster_Name) && !empty($Mobile_Number))
	{

    
    $id=random_num(20);
    $query = "insert into roommate(S_id,`Poster_Name`,`Personal_Email`,Address,`Mobile_Number`,Price_Range,Flat_Location,Number_of_Rooms,Washroom,Balcony,Kitchen,`Drawing_Dinning`,`CCTV`,Guard,Lift,WIFI,`Service_Charge`) values
    ('$id','$Poster_Name','$Personal_Email','$Address','$Mobile_Number','$Price_Range','$Flat_Location','$Number_of_Rooms','$Washroom','$Balcony','$Kitchen','$Drawing_Dinning','$CCTV','$Guard','$Lift','$WIFI','$Service_Charge')";
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
    <link rel="stylesheet" href="rm.css" />

    <!-- Iconscout CSS -->
    <link
      rel="stylesheet"
      href="https://unicons. iconscout.com/release/v4.0.0/css/line.css"
    />

    <title>Roommate Seeking Post</title>
  </head>
  <body>
    <div class="container">
      <header>Roommate Seeking Post</header>
      <form action="#" method = "post">
        <div class="form first">
          <div class="details personal">
            <span class="title"><b>Poster Details</b></span>

            <div class="fields">
             
              <div class="input-field">
                <label>Poster Name</label>
                <input
                  type="text"
                  name="Poster_Name"
                  placeholder=" Enter Your Name"
                  required
                />
              </div>

              <div class="input-field">
                <label>Personal Email</label>
                <input
                  type="text"
                  name="Personal_Email"
                  placeholder=" Enter Your Personal Email"
                  required
                />
              </div>
              <div class="input-field">
                <label>Address</label>
                <input
                  type="text"
                  name="Address"
                  placeholder=" Enter Your Address"
                  required
                />
              </div>
             
              <div class="input-field">
                <label>Mobile Number</label>
                <input
                  type="number"
                  name="Mobile_Number"
                  placeholder=" Enter Your Mobile Number"
                  required
                />
              </div>

             
            </div>
          </div>
          <div class="details personal">
            <span class="title"><b>Flat Details</b></span>
          
              
            <div class="fields">
            <div class="input-field">
                <label>Floor Name</label>
                <input
                  type="number"
                  name="Flat_Location"
                  placeholder="Which Floor...."
                  required
                />
              </div>
              <div class="input-field">
                <label>	Number of Bedrooms</label>
                <input
                  type="number"
                  name="Number_of_Rooms"
                  placeholder="Enter Number of Bedrooms"
                  required
                />
              </div>

              <div class="input-field">
                <label>Washroom</label>
                <input
                  type="number"
                  name="Washroom"
                  placeholder="Enter Number of Washroom"
                  required
                />
              </div>

              <div class="input-field">
                <label>Balcony</label>
                <input
                  type="number"
                  name="Balcony"
                  placeholder="Enter Number of Balcony"
                  required
                />
              </div>

              <div class="input-field">
                <label>Kitchen</label>
                <input
                  type="number"
                  name="Kitchen"
                  placeholder="Enter Number of Balcony"
                  required
                />
              </div>

              <div class="input-field">
                <label>Drawing / Dinning room</label>
                <input type="text" name="Drawing_Dinning" placeholder="Avaiable or Not" required />
              </div>

              <div class="input-field">
                <label>Security (CCTV)</label>
                <input
                  type="text"
                  name="CCTV"
                  placeholder="Avaiable or Not"
                  required
                />
              </div>

              <div class="input-field">
                <label>Guard</label>
                <input type="text" name="Guard" placeholder="Avaiable or Not" required />
              </div>

              <div class="input-field">
                <label>Lift</label>
                <input
                  type="text"
                  name="Lift"
                  placeholder="Avaiable or Not"
                  required
                />
              </div>
              <div class="input-field">
                <label>WIFI</label>
                <input
                  type="text"
                  name="WIFI"
                  placeholder="Avaiable or Not"
                  required
                />
              </div>
              <div class="input-field">
                <label>Service Charge</label>
                <input
                  type="number"
                  name="Service_Charge"
                  placeholder=" Enter Amount Of Service Charge"
                  required
                />
              </div>
             
              <div class="input-field">
                <label>Price Range</label>
                <input
                  type="number"
                  name="Price_Range"
                  placeholder=" Enter Amount Of Price Range"
                  required
                />
              </div>

              
            </div>
          </div>

          <button class="nextBtn">
            <span class="btnText">Post</span>
            <i class="uil uil-navigator"></i>
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
