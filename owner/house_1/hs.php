<?php
session_start ();
include ("connection.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
$No_of_Flats=$_POST['No_of_Flats'];
$Price_Range=$_POST['Price_Range'];
$House_Road_No=$_POST['House_Road_No'];
$Address=$_POST['Address'];
$Flat_Location=$_POST['Flat_Location'];
$Number_of_Rooms=$_POST['Number_of_Rooms'];
$Washroom=$_POST['Washroom'];
$Balcony=$_POST['Balcony'];
$Kitchen=$_POST['Kitchen'];
$Drawing_Dinning=$_POST['Drawing_Dinning'];
$CCTV=$_POST['CCTV'];
$Guard=$_POST['Guard'];
$Lift=$_POST['Lift'];
$Service_Charge=$_POST['Service_Charge'];
$Pics=$_POST['Pics'];

if(!empty($House_Road_No) && !empty($Address))
	{

    // $O_id= random_num(20);
    $id=random_num(20);
    $query = "insert into house(id,No_of_Flats,`House no. & Road No.`,Address,`Flat Location`,`Number of Rooms`,Washroom,Balcony,Kitchen,`Drawing / Dinning room`,`Security (CCTV)`,Guard,Lift,`Service Charge`,Pics,`Price Range`) values('$id','$No_of_Flats','$House_Road_No','$Address','$Flat_Location','$Number_of_Rooms','$Washroom','$Balcony','$Kitchen','$Drawing_Dinning','$CCTV','$Guard','$Lift','$Service_Charge','$Pics','$Price_Range')";
		mysqli_query($conn,$query);
		
		header('location:doo.php');
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
    <link rel="stylesheet" href="hs.css" />

    <!-- Iconscout CSS -->
    <link
      rel="stylesheet"
      href="https://unicons. iconscout.com/release/v4.0.0/css/line.css"
    />

    <title>Flat Details</title>
  </head>
  <body>
    <div class="container">
      <header>Owner's House Details</header>
      <form action="#" method="post">
        <div class="form first">
          <div class="details personal">
            <span class="title"><b>Flat Details</b></span>

            <div class="fields">
              <div class="input-field">
                <label> Number of Flats</label>
                <input type="number" placeholder=" Enter the Number of Flats" name="No_of_Flats" required />
              </div>

              <div class="input-field">
                <label>Price Range</label>
                <input type="number" placeholder=" Price Details in Tk..." name="Price_Range" required />
              </div>

              <div class="input-field">
                <label> House no. & Road no. </label>
                <input
                  type="text"
                  placeholder=" Enter Your House no & Road no." name="House_Road_No"
                  required
                />
              </div>

              <div class="input-field">
                <label> Address</label>
                <input
                  type="text"
                  placeholder=" Enter Full Address with PostCode" name="Address"
                  required
                />
              </div>
          </div>

          <div class="form first">
            <div class="details personal">
              <span class="title"><b>Flat Description</b></span>
  
              <div class="fields">
                <div class="input-field">
                  <label> Flat Location</label>
                  <input type="text" placeholder=" Which Floor the Flat is located?" name="Flat_Location" required />
                </div>
  
                <div class="input-field">
                  <label>Number of Rooms</label>
                  <input type="number" placeholder=" Enter Number of Rooms" name="Number_of_Rooms" required />
                </div>
  
                <div class="input-field">
                  <label>Washroom </label>
                  <input
                    type="text"
                    placeholder=" Washroom Tiles or not" name="Washroom"
                    required
                  />
                </div>
  
                <div class="input-field">
                  <label> Balcony</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Balcony"
                    required
                  />
                </div>

                <div class="input-field">
                  <label> Kicthen</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Kitchen"
                    required
                  />
                </div>
                <div class="input-field">
                  <label>Drawing / Dinning Room</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Drawing_Dinning"
                    required
                  />
                </div>
                <div class="input-field">
                  <label> Security (CCTV)</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="CCTV"
                    required
                  />
                </div>

                <div class="input-field">
                  <label> Guard</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Guard"
                    required
                  />
                </div>

                <div class="input-field">
                  <label> Lift</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Lift"
                    required
                  />
                </div>

                <div class="input-field">
                  <label> Service Charge</label>
                  <input
                    type="text"
                    placeholder=" Amount in Tk" name="Service_Charge"
                    required
                  />
                </div>
            </div>

            <div class="container2">
  <div class="card">
    <h3><b>Upload Flats Picture Here</b></h3>
    <div class="drop_box">
      <header>
        <h4>Select File here</h4>
      </header>
      <p>Files Supported: PDF, TEXT, DOC, DOCX, JPG, PNG</p>
      <input type="file" accept=".doc, .docx, .pdf, .jpg, .jpeg, .png" id="fileID" name="Pics" style="display:none;">
      <button type="button" class="btn" onclick="chooseFile()">Choose File</button>
    </div>

    <div id="file-info"></div>

    <script>
      function chooseFile() {
        document.getElementById('fileID').click();
      }

      function handleFiles(files) {
        const fileInfo = document.getElementById('file-info');
        fileInfo.innerHTML = '';

        if (files.length > 0) {
          fileInfo.innerHTML = '<strong>Selected File(s):</strong><br>';
          for (const file of files) {
            fileInfo.innerHTML += `- ${file.name}<br>`;
          }
        } else {
          fileInfo.innerHTML = '<strong>No file selected.</strong>';
        }
      }

      // Attach an event listener to the file input element to call handleFiles when files are selected
      document.getElementById('fileID').addEventListener('change', function () {
        handleFiles(this.files);
      });
    </script>
              </div>
            </div>
            <!-- partial -->
              <script  src="./hs.js"></script>


          <button class="nextBtn">
            <span class="btnText"><h2>Submit</h2></span>
            <i class="uil uil-navigator"></i>
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
