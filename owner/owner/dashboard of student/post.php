<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Student Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./dos.css" />
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <div class="dashboard">
      <div class="dashboard-nav">
        <header>
          <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a
          ><a href="#" class="brand-logo"
            ><i class="fas fa-anchor"></i> <span>BRAND</span></a
          >
        </header>
        <nav class="dashboard-nav-list">
          <a href="dos.html" class="dashboard-nav-item"
            ><i class="fas fa-home"></i> Home </a
          ><a href="dos.html" class="dashboard-nav-item active"
            ><i class="fas fa-tachometer-alt"></i> dashboard </a
          ><a href="#" class="dashboard-nav-item"
            ><i class="fas fa-file-upload"></i> Upload Your Picture
          </a>
          <div class="dashboard-nav-dropdown">
            <a
              href="#!"
              class="dashboard-nav-item dashboard-nav-dropdown-toggle"
              ><i class="fas fa-user"></i> Roommate Seeking
            </a>
            <div class="dashboard-nav-dropdown-menu">
              <a href="#" class="dashboard-nav-dropdown-item">Requests</a>
              <a href="../roommate/rm.php" class="dashboard-nav-dropdown-item">Make a Post</a>
            </div>
          </div>

          <a href="#" class="dashboard-nav-item"
            ><i class="fas fa-cogs"></i> Ratings</a
          >

          <a href="../house/test.php" class="dashboard-nav-item"
            ><i class="fas fa-photo-video"></i> Houses
          </a>
          <div class="nav-item-divider"></div>
          <a href="#" class="dashboard-nav-item"
            ><i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </nav>
      </div>
      <div class="dashboard-app">
        <header class="dashboard-toolbar">
          <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
        </header>
        <div class="dashboard-content">
          <div class="container">
            <div class="card">
              <div class="card-header">
                <h1>Welcome back User</h1>
              </div>
              <div class="card-body">
                <p>Your account type is: Student Profile</p>
              </div>
            </div>
            <div class="card shadow border-0 mb-7">
              <div class="card-header">
                <h5 class="mb-0">Students Posts </h5>
              </div>
              <div class="table-responsive">
                <table class="table table-hover table-nowrap">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Poster Name</th>
                      <th scope="col">Personal Email</th>
                      <th scope="col">Address</th>
                      <th scope="col">Mobile Number</th>
                      <th scope="col">Floor Name</th>
                      <th scope="col">Number of Bedrooms</th>
                      <th scope="col">Washroom</th>
                      <th scope="col">Balcony</th>
                      <th scope="col">Kitchen</th>
                      <th scope="col">Drawing / Dinning room</th>
                      <th scope="col">Security (CCTV)</th>
                      <th scope="col">Guard</th>
                      <th scope="col">Lift</th>
                      <th scope="col">WIFI</th>
                      <th scope="col">Service Charge</th>
                      <th scope="col">Price Range</th>
                      <th></th>
                      </td>
                      <!-- <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">Update</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      include ("../house_1/connection.php");
                      $sql = "SELECT `Poster_Name`,`Personal_Email`, `Address`, `Mobile_Number`, `Flat_Location`, 
                      `Number_of_Rooms`, `Washroom`,`Balcony`,`Kitchen`, `Drawing_Dinning`, `CCTV`, `Guard`, 
                      `Lift`, `WIFI`, `Service_Charge`, `Price_Range`
               FROM `roommate`";
                      $result =mysqli_query($conn,$sql);
                      if($result){
                        while ($row =mysqli_fetch_assoc(($result))) {
                          $Poster_Name =$row['Poster_Name'];
                          $Personal_Email=$row['Personal_Email'];
                          $Address=$row['Address'];
                          $Mobile_Number=$row['Mobile_Number'];
                          $Flat_Location=$row['Flat_Location'];
                          $Number_of_Rooms=$row['Number_of_Rooms'];
                          $Washroom=$row['Washroom'];
                          $Balcony=$row['Balcony'];
                          $Kitchen=$row['Kitchen'];
                          $Drawing_Dinning=$row['Drawing_Dinning'];
                          $CCTV=$row['CCTV'];
                          $Guard=$row['Guard'];
                          $Lift=$row['Lift'];
                          $WIFI=$row['WIFI'];
                          $Service_Charge=$row['Service_Charge'];
                          $Price_Range=$row['Price_Range'];
                          
                          
                          echo '
                          <tr>
                
                          <th scope="col">'.$Poster_Name.'</th>
                          <td >'.$Personal_Email.'</td>
                          <td >'.$Address.'</td>
                          <td >'.$Mobile_Number.'</td>
                          <td >'.$Flat_Location.'</td>
                          <td >'.$Number_of_Rooms.'</td>
                          <td >'.$Washroom.'</td>
                          <td >'.$Balcony.'</td>
                          <td >'.$Kitchen.'</td>
                          <td >'.$Drawing_Dinning.'</td>
                          <td >'.$CCTV.'</td>
                          <td >'.$Guard.'</td>
                          <td >'.$Lift.'</td>
                          <td >'.$WIFI.'</td>
                          <td >'.$Price_Range.'</td>
                          <td >'.$Service_Charge.'</td>
                         
                          <th></th>
                          
                        </tr> ';
                        }
                      }

                     ?> 
                   
                    
                  </tbody>
                </table>
              </div>
              <div class="card-footer border-0 py-5">
                
              </div>
            </div>
          
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./dos.js"></script>
  </body>
</html>



