<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Owners Dashboard</title>
    <link rel="stylesheet" href="./doo.css" />
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <!-- Banner -->
    <a
      href="https://webpixels.io/components?ref=codepen"
      class="btn w-full btn-primary text-truncate rounded-0 py-2 border-0 position-relative"
      style="z-index: 1000"
    >
      <strong>Owners's </strong> Dashboard
    </a>

    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
      <!-- Vertical Navbar -->
      <nav
        class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
        id="navbarVertical"
      >
        <div class="container-fluid">
          <!-- Toggler -->
          <button
            class="navbar-toggler ms-n2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#sidebarCollapse"
            aria-controls="sidebarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Brand -->
          <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
            <img
              src="https://preview.webpixels.io/web/img/logos/clever-primary.svg"
              alt="..."
            />
          </a>
          <!-- User menu (mobile) -->
          <div class="navbar-user d-lg-none">
            <!-- Dropdown -->
            <div class="dropdown">
              <!-- Toggle -->
              <a
                href="#"
                id="sidebarAvatar"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <div class="avatar-parent-child">
                  <img
                    alt="Image Placeholder"
                    src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                    class="avatar avatar- rounded-circle"
                  />
                  <span class="avatar-child avatar-badge bg-success"></span>
                </div>
              </a>
              <!-- Menu -->
              <div
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="sidebarAvatar"
              >
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Billing</a>
                <hr class="dropdown-divider" />
                <a href="#" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-house"></i> Dashboard
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="hs.php">
                  <i class="bi bi-chat"></i> Add Flats
                </a>
              </li>
            </ul>
            <!-- Divider -->
            <hr class="navbar-divider my-5 opacity-20" />
            <!-- Navigation -->

            <!-- Push content down -->
            <div class="mt-auto"></div>
            <!-- User (md) -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-person-square"></i> Account
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <i class="bi bi-box-arrow-left"></i> Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Main content -->
      <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
          <div class="container-fluid">
            <div class="mb-npx">
              <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                  <!-- Title -->
                  <h1 class="h2 mb-0 ls-tight">Application</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                  <div class="mx-n1">
                    
                    <a
                      href="hs.php"
                      class="btn d-inline-flex btn-sm btn-primary mx-1"
                    >
                      <span class="pe-2">
                        <i class="bi bi-plus"></i>
                      </span>
                      <span>Add Flats</span>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Nav -->
              <ul class="nav nav-tabs mt-4 overflow-x border-0">
                <li class="nav-item">
                  <a href="#" class="nav-link active">All files</a>
                </li>
              </ul>
            </div>
          </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
          <div class="container-fluid">
            <!-- Card stats -->
            <div class="row g-6 mb-6">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <span
                          class="h6 font-semibold text-muted text-sm d-block mb-2"
                          >Total Rent</span
                        >
                        <span class="h3 font-bold mb-0">75,000 Tk</span>
                      </div>
                      <div class="col-auto">
                        <div
                          class="icon icon-shape bg-tertiary text-white text-lg rounded-circle"
                        >
                          <i class="bi bi-credit-card"></i>
                        </div>
                      </div>
                    </div>
                    <div class="mt-2 mb-0 text-sm">
                      <span
                        class="badge badge-pill bg-soft-success text-success me-2"
                      >
                        <i class="bi bi-arrow-up me-1"></i>13%
                      </span>
                      <span class="text-nowrap text-xs text-muted"
                        >Since last month</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <span
                          class="h6 font-semibold text-muted text-sm d-block mb-2"
                          >New Students</span
                        >
                        <span class="h3 font-bold mb-0">5</span>
                      </div>
                      <div class="col-auto">
                        <div
                          class="icon icon-shape bg-primary text-white text-lg rounded-circle"
                        >
                          <i class="bi bi-people"></i>
                        </div>
                      </div>
                    </div>
                    <div class="mt-2 mb-0 text-sm">
                      <span
                        class="badge badge-pill bg-soft-success text-success me-2"
                      >
                        <i class="bi bi-arrow-up me-1"></i>30%
                      </span>
                      <span class="text-nowrap text-xs text-muted"
                        >Since last month</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <span
                          class="h6 font-semibold text-muted text-sm d-block mb-2"
                          >Total hours</span
                        >
                        <span class="h3 font-bold mb-0">1.400</span>
                      </div>
                      <div class="col-auto">
                        <div
                          class="icon icon-shape bg-info text-white text-lg rounded-circle"
                        >
                          <i class="bi bi-clock-history"></i>
                        </div>
                      </div>
                    </div>
                    <div class="mt-2 mb-0 text-sm">
                      <span
                        class="badge badge-pill bg-soft-danger text-danger me-2"
                      >
                        <i class="bi bi-arrow-down me-1"></i>-5%
                      </span>
                      <span class="text-nowrap text-xs text-muted"
                        >Since last month</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <span
                          class="h6 font-semibold text-muted text-sm d-block mb-2"
                          >Work load</span
                        >
                        <span class="h3 font-bold mb-0">95%</span>
                      </div>
                      <div class="col-auto">
                        <div
                          class="icon icon-shape bg-warning text-white text-lg rounded-circle"
                        >
                          <i class="bi bi-minecart-loaded"></i>
                        </div>
                      </div>
                    </div>
                    <div class="mt-2 mb-0 text-sm">
                      <span
                        class="badge badge-pill bg-soft-success text-success me-2"
                      >
                        <i class="bi bi-arrow-up me-1"></i>10%
                      </span>
                      <span class="text-nowrap text-xs text-muted"
                        >Since last month</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow border-0 mb-7">
              <div class="card-header">
                <h5 class="mb-0">Owners Rented Flats</h5>
              </div>
              <div class="table-responsive">
                <table class="table table-hover table-nowrap">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">No_of_Flats</th>
                      <th scope="col">Flat_Location</th>
                      <th scope="col">Number_of_Rooms</th>
                      <th scope="col">Washroom</th>
                      <th scope="col">Balcony</th>
                      <th scope="col">Kitchen</th>
                      <th scope="col">Drawing_Dinning</th>
                      <th scope="col">CCTV</th>
                      <th scope="col">Guard</th>
                      <th scope="col">Lift</th>
                      <th scope="col">Price_Range</th>
                      <th scope="col">Service_Charge</th>
                      <th scope="col">House_Road_No</th>
                      <th scope="col">Address</th>
                      <th></th>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">Update</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      include ("connection.php");
                      $sql = "SELECT `id`,`No_of_Flats`, `Flat Location`, `Number of Rooms`, `Washroom`, 
                      `Balcony`, `Kitchen`, `Drawing / Dinning room`, `Security (CCTV)`, `Guard`, `Lift`, 
                      `Price Range`, `Service Charge`, `House no. & Road No.`, `Address`
               FROM `house`";
                      $result =mysqli_query($conn,$sql);
                      if($result){
                        while ($row =mysqli_fetch_assoc(($result))) {
                          $ID =$row['id'];
                          $No_of_Flats=$row['No_of_Flats'];
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
                          echo '
                          <tr>
                
                          <th scope="col">'.$ID.'</th>
                          <td >'.$No_of_Flats.'</td>
                          <td >'.$Flat_Location.'</td>
                          <td >'.$Number_of_Rooms.'</td>
                          <td >'.$Washroom.'</td>
                          <td >'.$Balcony.'</td>
                          <td >'.$Kitchen.'</td>
                          <td >'.$Drawing_Dinning.'</td>
                          <td >'.$CCTV.'</td>
                          <td >'.$Guard.'</td>
                          <td >'.$Lift.'</td>
                          <td >'.$Price_Range.'</td>
                          <td >'.$Service_Charge.'</td>
                          <td >'.$House_Road_No.'</td>
                          <td >'.$Address.'</td>
                          <th></th>
                          </td>
                          <td class="text-end">
                            <a href="update.php? updateid='.$ID.'" class="btn btn-sm btn-neutral">Update</a>
                            <button
                              type="button"
                              class="btn btn-sm btn-square btn-neutral text-danger-hover"
                            >
                             <a href ="delete.php? deleteid='.$ID.'" <i class="bi bi-trash"></i></a>
                            </button>
                          </td>
                        </tr> ';
                        }
                      }

                     ?> 
                    <!-- <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Rahim
                        </a>
                      </td>
                      <td>Feb 15, 2023</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-1.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#"> CSE </a>
                      </td>
                      <td>3,500 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-success"></i>Paid
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Karim
                        </a>
                      </td>
                      <td>June 12, 2023</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-2.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#"> EEE </a>
                      </td>
                      <td>2,750 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-warning"></i>Paid
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Manisha
                        </a>
                      </td>
                      <td>Mar 20, 2022</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-3.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Civil
                        </a>
                      </td>
                      <td>4,200 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-success"></i>Postponed
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          James
                        </a>
                      </td>
                      <td>DEc 15, 2021</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-4.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#"> CSE </a>
                      </td>
                      <td>3.500 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-dark"></i>Not Paid
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Shuvo
                        </a>
                      </td>
                      <td>Apr 10, 2023</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-5.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#"> BBA </a>
                      </td>
                      <td>3,500 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-danger"></i>Canceled
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Mohim
                        </a>
                      </td>
                      <td>March 15, 2023</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-1.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#"> EEE </a>
                      </td>
                      <td>3,500 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-success"></i>Paid
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Bithi
                        </a>
                      </td>
                      <td>Apr 15, 2023</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-2.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#"> BBA </a>
                      </td>
                      <td>2,750 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-warning"></i>Postponed
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Fahim
                        </a>
                      </td>
                      <td>Mar 20, 2023</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-3.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#"> EEE </a>
                      </td>
                      <td>4,200 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-success"></i>Not Paid
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Rahima
                        </a>
                      </td>
                      <td>MAy 19, 2023</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-4.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#"> CSE </a>
                      </td>
                      <td>3.,500 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-dark"></i>Not discussed
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          alt="..."
                          src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                          class="avatar avatar-sm rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#">
                          Anthony
                        </a>
                      </td>
                      <td>Apr 10, 2023</td>
                      <td>
                        <img
                          alt="..."
                          src="https://preview.webpixels.io/web/img/other/logos/logo-5.png"
                          class="avatar avatar-xs rounded-circle me-2"
                        />
                        <a class="text-heading font-semibold" href="#"> BBA </a>
                      </td>
                      <td>4,500 Tk</td>
                      <td>
                        <span class="badge badge-lg badge-dot">
                          <i class="bg-danger"></i>Canceled
                        </span>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                        <button
                          type="button"
                          class="btn btn-sm btn-square btn-neutral text-danger-hover"
                        >
                          <i class="bi bi-trash"></i>
                        </button>
                      </td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
              <div class="card-footer border-0 py-5">
                <span class="text-muted text-sm"
                  >Showing 10 items out of 250 results found</span
                >
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <!-- partial -->
  </body>
</html>
