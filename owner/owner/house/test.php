<?php 

include('../house_1/connection.php');
$sql = "SELECT * FROM house";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>House Lists</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="./hs.css" />
</head>
<body>

<div class="app-container">
  <section class="navigation">
    <a href="#" class="app-link">Houses Details</a>

    <div class="nav-right-side">
      <button class="mode-switch">
        <svg class="sun" fill="none" stroke="#fbb046" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-sun" viewBox="0 0 24 24">
          <defs />
          <circle cx="12" cy="12" r="5" />
          <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" />
        </svg>
        <svg class="moon" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-moon" viewBox="0 0 24 24">
          <defs />
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
        </svg>
      </button>
    </div>
  </section>

  <section class="app-main">
    <div class="app-main-left cards-area">
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="card-wrapper main-card">
          <a class="card cardItemjs" onclick="openModal()">
            <div class="card-image-wrapper">
              <img src="<?php echo $row["Pics"]; ?>" alt="House Image" />
            </div>
            <div class="card-info">
              <div class="card-text big cardText-js"><?php echo $row["House Name"]; ?></div>
              <div class="card-text small">Bedroom : <?php echo $row["Number of Rooms"]; ?></div>
              <div class="card-text small">Washroom : <?php echo $row["Washroom"]; ?></div>
              <div class="card-text small">Kitchen : <?php echo $row["Kitchen"]; ?> </div>
              <div class="card-text small">Balcony : <?php echo $row["Kitchen"]; ?></div>
              <div class="card-text small">Security : <?php echo $row["Guard"]; ?></div>
              <div class="card-text small">
                Starts from: <span class="card-price"><?php echo $row["Price Range"]; ?></span>
              </div>
              <a href="bk.php"> <button class="btn-book">Book Now</button></a>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </section>

</div>

<!-- <div id="modal-window" class="shadow">
      <div class="main-modal">
        <div class="modal-left">
         <div class="modal-image-wrapper">
            <img
              src=""
            />
          </div> -->
          <!-- <div class="modal-info-header">
            <div class="left-side">
              <h1 class="modalHeader-js"></h1>
              <p></p>
            </div>
            <div class="right-side">
              Starts from:
              <span class="amount"></span>
            </div>
          </div>
          <div class="info-bar">
            <div class="info-wrapper">
              <div class="info-icon">
                <svg
                  class="btn-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                  <path
                    d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"
                  ></path>
                </svg>
              </div>
              <span>Bedrooms</span>
            </div>
            <div class="info-wrapper">
              <div class="info-icon">
                <svg
                  class="btn-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                  <path
                    d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"
                  ></path>
                </svg>
              </div>
              <span>Belcony</span>
            </div>
            <div class="info-wrapper">
              <div class="info-icon">
                <svg
                  class="btn-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                  <path
                    d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"
                  ></path>
                </svg>
              </div>
              <span>Kitchen</span>
            </div>
            <div class="info-wrapper">
              <div class="info-icon">
                <svg
                  class="btn-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-wind"
                >
                  <path
                    d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"
                  />
                </svg>
              </div>
              <span>2 Bathrooms</span>
            </div>
            <div class="info-wrapper">
              <div class="info-icon">
                <svg
                  class="btn-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-square"
                >
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                </svg>
              </div>
              <span>Floor no </span>
            </div>
            <div class="info-wrapper">
              <div class="info-icon">
                <svg
                  class="btn-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-shield"
                >
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>
              </div>
              <span> Security </span>
            </div>
          </div>
          <div class="desc-wrapper">
            <div class="modal-info-header">
              <h1>Description</h1>
              <p>
              
              </p>
            </div>
            <div class="desc-actions">
              <button class="btn-book">Book Now</button>
              <div class="add-favourite">
                <input type="checkbox" id="favourite" />
                <label for="favourite">
                  <span class="favourite-icon">
                    <svg
                      class="btn-icon"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-heart"
                    >
                      <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                      />
                    </svg>
                  </span>
                  <span>Add to favourites</span>
                </label>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div class="modal-right">
          <div class="app-main-right-header">
            <span>Reviews</span>
            <a href="#">See All</a>
          </div>
          <div class="card-wrapper">
            <div class="card">
              <div class="profile-info-wrapper">
                <div class="profile-img-wrapper">
                  <img
                    src="https://source.unsplash.com/featured/1200x900/?woman,cool"
                    alt="Review"
                  />
                </div>
                <p>Jessica Finnick</p>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
              </p>
            </div>
          </div>
        
        </div>
        <button class="btn btn-close" onclick="closeM()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="feather feather-x"
          >
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
          </svg>
        </button> -->
      <!-- </div>
    </div> --> 

<script>
  let ini = document.querySelector("#modal-window");
  ini.classList.add("hideModal");
</script>

<script src="./hs.js"></script>
</body>
</html>