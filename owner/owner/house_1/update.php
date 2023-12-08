<?php
session_start ();
include ("connection.php");
include("function.php");
$id=$_GET ['updateid'];
$query ="SELECT `House Name`, `Flat Location`, `Number of Rooms`, `Washroom`, 
`Balcony`, `Kitchen`, `Drawing / Dinning room`, `Security (CCTV)`, `Guard`, `Lift`, 
`Price Range`, `Service Charge`, `House no. & Road No.`, `Address`
FROM `house` WHERE `id`=$id";
$result =mysqli_query($conn,$query);
$row =mysqli_fetch_assoc(($result));
$House_Name=$row['House Name'];
 $Flat_Location=$row['Flat Location'];
 $Number_of_Rooms=$row['Number of Rooms'];
                          $Washroom=$row['Washroom'];
                          $Balcony=$row['Balcony'];
                          $Kitchen=$row['Kitchen'];
                          $Drawing_Dinning=$row['Drawing / Dinning room'];
                          $CCTV=$row['Security (CCTV)'];
                          $Guard=$row['Guard'];
                          $Lift=$row['Lift'];
                          $Price_Range=$row['Price Range'];
                          $Service_Charge=$row['Service Charge'];
                          $House_Road_No=$row['House no. & Road No.'];
                          $Address=$row['Address'];


if($_SERVER['REQUEST_METHOD']=="POST"){
$House_Name=$_POST['House_Name'];
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

 
$query = "UPDATE `house`
SET 
  `House Name` = '$House_Name',
  `Price Range` = '$Price_Range',
  `House no. & Road No.` = '$House_Road_No',
  `Address` = '$Address',
  `Flat Location` = '$Flat_Location',
  `Number of Rooms` = '$Number_of_Rooms',
  `Washroom` = '$Washroom',
  `Balcony` = '$Balcony',
  `Kitchen` = '$Kitchen',
  `Drawing / Dinning room` = '$Drawing_Dinning',
  `Security (CCTV)` = '$CCTV',
  `Guard` = '$Guard',
  `Lift` = '$Lift',
  `Service Charge` = '$Service_Charge'
WHERE
  `id` = '$id'";

$result = mysqli_query($conn, $query);

if ($result) {
  header('location:doo.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
  }else
			{
				echo "";
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
                <label> House Name</label>
                <input type="text" placeholder=" Enter the Number of Flats" name="House_Name" value =<?php  echo "$House_Name";?> required />
              </div>

              <div class="input-field">
                <label>Price Range</label>
                <input type="number" placeholder=" Price Details in Tk..." name="Price_Range" value =<?php  echo "$Price_Range";?> required />
              </div>

              <div class="input-field">
                <label> House no. & Road no. </label>
                <input
                  type="text"
                  placeholder=" Enter Your House no & Road no." name="House_Road_No" value =<?php  echo "$House_Road_No";?>
                  required
                />
              </div>

              <div class="input-field">
                <label> Address</label>
                <input
                  type="text"
                  placeholder=" Enter Full Address with PostCode" name="Address" value =<?php  echo "$Address";?>
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
                  <input type="text" placeholder=" Which Floor the Flat is located?" name="Flat_Location" value =<?php  echo "$Flat_Location";?> required />
                </div>
  
                <div class="input-field">
                  <label>Number of Rooms</label>
                  <input type="number" placeholder=" Enter Number of Rooms" name="Number_of_Rooms"value =<?php  echo "$Number_of_Rooms";?> required />
                </div>
  
                <div class="input-field">
                  <label>Washroom </label>
                  <input
                    type="text"
                    placeholder=" Washroom Tiles or not" name="Washroom" value =<?php  echo "$Washroom";?>
                    required
                  />
                </div>
  
                <div class="input-field">
                  <label> Balcony</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Balcony" value =<?php  echo "$Balcony";?>
                    required
                  />
                </div>

                <div class="input-field">
                  <label> Kicthen</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Kitchen" value =<?php  echo "$Kitchen";?>
                    required
                  />
                </div>
                <div class="input-field">
                  <label>Drawing / Dinning Room</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Drawing_Dinning" value =<?php  echo "$Drawing_Dinning";?>
                    required
                  />
                </div>
                <div class="input-field">
                  <label> Security (CCTV)</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="CCTV" value =<?php  echo "$CCTV";?>
                    required
                  />
                </div>

                <div class="input-field">
                  <label> Guard</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Guard" value =<?php  echo "$Guard";?>
                    required
                  />
                </div>

                <div class="input-field">
                  <label> Lift</label>
                  <input
                    type="text"
                    placeholder=" Available or not" name="Lift" value =<?php  echo "$Lift";?>
                    required
                  />
                </div>

                <div class="input-field">
                  <label> Service Charge</label>
                  <input
                    type="text"
                    placeholder=" Amount in Tk" name="Service_Charge" value =<?php  echo "$Service_Charge";?>
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


          <button class="nextBtn" >
            <span class="btnText" ><h2>Update</h2></span>
            <i class="uil uil-navigator"></i>
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
