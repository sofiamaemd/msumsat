<?php
  session_start(); // Start the session
  // Function to check if the user is logged in as admin
  function checkAdminAuthentication() {
      // Check if the user is logged in and the "user" session variable is set
      if (isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
          // Check if the role is "admin"
          if ($_SESSION["role"] === "admin") {
              // User is logged in as admin, continue
              return;
          }
      }
      // User is not logged in as admin or authentication failed, redirect to login.php
      header("Location: ../login.php");
      exit();
  }
  // Call the function to perform the admin authentication check
  checkAdminAuthentication();
?>
<?php
ob_start(); // Start output buffering
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="SHORTCUT ICON" href="../../images/1.ico"/>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/creative.css"/>
  <link rel="stylesheet" href="../style/responsive.css"/>
  <link rel="stylesheet" href="../style/style.css"/>
  <link rel="stylesheet" href="../../layout/styles/body.css"/>
<title>My.Account</title>
</head>
<body>
<header>
  <p>header sample</p>
</header>
<div class="dash-con">
    <div class="sidebar">
      <div class="sidenav-container" id="side-nav">
              <nav class="nav">
                  <div class="nav__user">
                      <div class="nav__user-image">
                        <img src="../../my.Account/sample-pic.png" alt="profile">
                      </div>
              
                      <div class="nav__user-info">
                        <div class="nav__user-info-name">Admin</div>
                        <div class="nav__user-info-email">sample@gmail.com</div>
                      </div>
                  </div>
                  <div class="nav__brand">
                    <div class="nav__icon nav__icon--menu" id="nav-toggle">
                      <ion-icon name="menu-outline"></ion-icon>
                      </div>
                 <span href="#" class="nav__brand-logo">
                   My.Account
                 </span>
                  </div>
                <hr>
                <ul class="nav__list">
                  <li class="nav__item">
                    <a href="../admin.php" class="nav__link active">
                      <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">Home</span>
                    </a>
                  </li>
          
                  <li class="nav__item">
                    <a href="#" class="nav__link">
                      <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">Admin</span>
                      <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
                    </a>
          
                    <ul class="nav__drop">
                      <div class="padding">
                         <li>
                          <a href="banner.php">Banner</a>
                        </li>
                        <li>
                          <a href="news.php">News</a>
                        </li>
<li>
                          <a href="calendar-events.php">Calendar of Events</a>
                        </li>
                        <li>
                          <a href="newsletter.php">Newsletter</a>
                        </li>
                        <li>
                          <a href="transparency-seal.php">Transparency Seal</a>
                        </li>
                        <li>
                          <a href="gallery.php">Campus Gallery</a>
                        </li>
                        <li>
                          <a href="featured-co.php">Featured Campus Officials</a>
                        </li>
                        <li>
                          <a href="campus-officials-directory.php">CO Directory</a>
                        </li>
                        <li>
                          <a href="board-regents.php">Board of Regents</a>
                        </li>
                        <li>
                          <a href="msu-system-officials.php">MSU System Officials</a>
                        </li>
                        <li>
                          <a href="department-heads.php">Department Heads</a>
                        </li>
                        <li>
                          <a href="faculty-directory.php">Faculty Directory</a>
                        </li>
                        <li>
                          <a href="staff-directory.php">Staff Directory</a>
                        </li>
                      </div>
                    </ul>
                  </li>
                  <li class="nav__item">
                    <a href="#" class="nav__link">
                      <ion-icon name="wallet-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">Departments</span>
                      <ion-icon name="chevron-down-outline" class="toggle-icon"></ion-icon>
                    </a>
          
                    <ul class="nav__drop">
                      <div class="padding">
                        <li>
                          <a href="departments/cs.php">DCS</a>
                        </li>
                        <li>
                          <a href="departments/et.php">DET</a>
                        </li>
                        <li>
                          <a href="departments/hrmt.php">DHRMT</a>
                        </li>
                        <li>
                          <a href="departments/hees.php">DHESS</a>
                        </li>
                        <li>
                          <a href="departments/it.php">DIT</a>
                        </li>
                        <li>
                          <a href="departments/nsm.php">DNSM</a>
                        </li>
                        <li>
                          <a href="departments/se.php">DSE</a>
                        </li>
                      </div>
                    </ul>
                  </li>
                  <li class="nav__item">
                      <a href="#" class="nav__link">
                        <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Profile</span>
                      </a>
                    </li>
                  <li class="nav__item">
                    <a href="#" class="nav__link">
                      <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">Analytics</span>
                    </a>
                  </li>
                  <li class="nav__item">
                    <a href="#" class="nav__link">
                      <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">Team</span>
                    </a>
                  </li>
                  <li class="nav__item">
                    <a href="../../home.php" class="nav__link active">
                      <ion-icon name="globe-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">MSU-MSAT</span>
                    </a>
                  </li>
                  <li class="nav__item">
                    <a href="../logout.php" class="nav__link">  <!-- ===== name:settings-outline ===== -->
  
                      <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">Log out</span>
                    </a>
                  </li>
                </ul>
                <hr>
              </nav>
      </div>
    </div>
  <div class="main-content">
         <header class="con-fix">
            <div class="respo-toggle">
              <div class="toggle left" id="toggle-sidebar">
                <span class="line-toggle"></span>
                <span class="line-toggle"></span>
                <span class="line-toggle"></span>
              </div>
            </div>
            <div class="right">
              <a>navbar</a>
            </div>
          </header> 
          <div class="no-1-con con-fix">
             <div class="col-1-row-1">
                <div class="first_half_con">
                    <?php
                      // Assuming you have already established a database connection
                      $mysqli = new mysqli("localhost", "root", "", "login_register");

                      // Check if the connection was successful
                      if ($mysqli->connect_errno) {
                          echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                          exit();
                      }

                      if (isset($_POST['directory_submit'])) {
                          // Process the uploaded file
                          $targetDirectory = "gallery-images/"; // Change this to the desired directory to save the images
                          $targetFile = $targetDirectory . basename($_FILES['gallery_image']['name']);
                          $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                          // Check if the file is an actual image
                          $check = getimagesize($_FILES['gallery_image']['tmp_name']);
                          if ($check === false) {
                              echo "Invalid image file.";
                              exit();
                          }

                          // Check if the file already exists
                          if (file_exists($targetFile)) {
                              echo "File already exists.";
                              exit();
                          }

                          // Check the file size (optional)
                          // if ($_FILES['gallery_image']['size'] > 500000) {
                          //     echo "File is too large.";
                          //     exit();
                          // }

                          // Allow only specific image file formats (e.g., JPEG, PNG)
                          if ($imageFileType !== 'jpg' && $imageFileType !== 'png' && $imageFileType !== 'jpeg') {
                              echo "Only JPG, JPEG, and PNG files are allowed.";
                              exit();
                          }

                          // Move the uploaded file to the desired directory
                          if (move_uploaded_file($_FILES['gallery_image']['tmp_name'], $targetFile)) {
                              // File successfully uploaded, store the file name in the database
                              $galleryImage = basename($_FILES['gallery_image']['name']);

                              // Prepare the SQL statement
                              $insertQuery = "INSERT INTO campus_gallery (gallery_image) VALUES ('$galleryImage')";

                              // Execute the SQL statement
                              if ($mysqli->query($insertQuery) === true) {
                                  echo "Image uploaded and saved to the database successfully.";
                              } else {
                                  echo "Error: " . $mysqli->error;
                              }
                          } else {
                              echo "Failed to upload the image.";
                          }
                      }

                      $mysqli->close();
                    ?>
                  <div class="uploader">
                      <h1>Photo Uploads</h1>
                      <form method="POST" enctype="multipart/form-data">
                          <div>
                              <input type="file" name="gallery_image" id="gallery_image" accept="image/*" required>
                          </div>
                          <div>
                              <input type="submit" name="directory_submit" value="Submit">
                          </div>
                      </form>
                  </div>
                </div>
                <div class="second_half_con">
                  <style>
                    .col-2-gallery{display:inline-block;float:left;width:46%;margin: 10px 10px 0px 10px;}
                    .col-2-gallery img{width:100%;height:180px;display:flex;float:left;}
                  </style>
                  <div class="slider">
                      <div class="slider-wrapper con-fix">
                          <?php
                          // Assuming you have already established a database connection
                          $mysqli = new mysqli("localhost", "root", "", "login_register");

                          // Check if the connection was successful
                          if ($mysqli->connect_errno) {
                              echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                              exit();
                          }

                          // Check if the delete button is clicked and an image ID is provided
                          if (isset($_GET['delete']) && isset($_GET['id'])) {
                              $imageId = $_GET['id'];

                              // Retrieve the image information from the database
                              $result = $mysqli->query("SELECT gallery_image FROM campus_gallery WHERE id = $imageId");
                              if ($result && $result->num_rows > 0) {
                                  $row = $result->fetch_assoc();
                                  $imagePath = "gallery-images/" . $row['gallery_image'];

                                  // Delete the image file from the file system
                                  if (unlink($imagePath)) {
                                      // Delete the image record from the database
                                      $mysqli->query("DELETE FROM campus_gallery WHERE id = $imageId");
                                      echo "Image deleted successfully.";
                                  } else {
                                      echo "Failed to delete the image file.";
                                  }
                              } else {
                                  echo "Image not found.";
                              }
                          }

                          // Retrieve gallery images from the database
                          $result = $mysqli->query("SELECT id, gallery_image FROM campus_gallery ORDER BY id ASC");
                          if ($result && $result->num_rows > 0) {
                              $count = 0;
                              $slideCount = 0;
                              echo '<div class="slide">';

                              while ($row = $result->fetch_assoc()) {
                                  if ($count % 6 === 0 && $count > 0) {
                                      echo '</div>'; // Close the previous slide
                                      $slideCount++;
                                      echo '<div class="slide">';
                                  }
                                  echo '<div class="col-2-gallery">';
                                  echo '<div class="img-con">';
                                  echo '<img src="gallery-images/' . $row['gallery_image'] . '" alt="">';
                                  echo '<a class="delete-btn" href="?delete=true&id=' . $row['id'] . '">Delete</a>'; // Delete button with the corresponding ID
                                  echo '</div>';
                                  echo '</div>';
                                  $count++;
                              }

                              echo '</div>'; // Close the last slide
                              $slideCount++;

                          } else {
                              echo "No gallery images found.";
                          }

                          $result->free_result();
                          $mysqli->close();
                          ?>
                      </div>
                      <div class="nav-md">
                          <div class="pagination-btn slider-nav">
                              <button class="slider-previous" id="prev">prev</button>
                          </div>
                          <div class="slider-pagination"></div>
                          <div class="pagination-btn slider-nav">
                              <button class="slider-next" id="next">next</button>
                          </div>
                      </div>
                  </div>
                </div>
             </div>
          </div>
          <div class="no-2-con con-2-design">
              <div class="con-1-col-3">
                  <h1>Registered</h1>
              </div>
              <div class="con-1-col-3">
                  <h2>Active User</h1>
              </div>
              <div class="h-links con-fix">
                  <div class="row-3">
                      <h1>Helpful links</h1>
                  </div>
              </div>
              <div class="s-g-links con-fix">
                  <div class="row-3">
                      <h1>Scholarship & Grants</h1>
                  </div>
              </div>
          </div>
          <footer class="con-fix">
              <p>footer sample<br>
          </footer>   
           
  </div>  
</div> 
<!-- ===== IONICONS ===== -->
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<!-- ===== MAIN JS ===== -->
<script src="../script/sidebar.js"></script>
<script src="../script/all.js"></script>
<script>
const toggleSidebarButton = document.getElementById('toggle-sidebar');
const sidebar = document.querySelector('.sidenav-container');
toggleSidebarButton.addEventListener('click', () => {
sidebar.classList.toggle('show-sidebar');
});
</script>
<script src="https://kit.fontawesome.com/c919db264e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<!-- Pagination --> 
<script>
        //-------------------------------pagination------------------------------
    
    $(document).ready(function(){
        var activeSlider = $('.slider');                                    // Get the active slider element
    
        // Remove all links from the slider-pagination element
        $('.slider-pagination a').remove();
    
    
        // Find all slide elements within the slider-wrapper element and append a link for each slide to the slider-pagination element
        $('.slider-wrapper').find('.slide').each(function (index) {
            $('.slider-pagination').append('<a>'+(index+1)+'</a>');
        });
    
        // Remove the 'current' class from the current link and the 'active' class from all slides
        $('.current').removeClass('current');
        $('.slide').removeClass('active');
        
        // Set the first slide to be the active slide and the first link to have the 'current' class
        activeSlider.find('.slider-wrapper > .slide:first-child').addClass('active').show();
        activeSlider.find('.nav-md > .slider-pagination a').first().addClass('current');

        // When a link is clicked within the slider-pagination element
        $('.slider-pagination a').click(function() {
            // Remove the 'current' class from the current link and add it to the clicked link
            $('.current').removeClass('current');
            $(this).addClass('current');
            var sliderInd = $(this).index();                                // Get the index of the clicked link and set the corresponding slide to be the active slide
            activeSlider.find('.slider-wrapper > .slide.active').removeClass('active').hide();
            activeSlider.find('.slider-wrapper > .slide').eq(sliderInd).fadeIn(250).addClass('active');
        });
        // For each slider element
        $('.slider').each(function() {
            var show = 5;                                                   // Set the number of links to show at one time to 5
            let dots = $('.slider-pagination').children('a');               // Get all links within the slider-pagination element
            let count_el = $('.slider-pagination').children('a').length;    // Get the total number of links within the slider-pagination element
    
            // If there are more links than the number to show
            if (dots.length > show) {
                // Hide links after the number to show
                $(this).find('.slider-pagination').children('a').slice(show).hide();
            }
            else {
                // Show all links
                $(this).find('.slider-pagination').children('a').slice(count_el).show(); 
            }
        });
    });
    $(document).ready(function() {
        var sliderPagers = $('.slider').find('.slider-pagination a'),       // Get all links within the slider-pagination element for the active slider
            lastElem = sliderPagers.last().index(),                         // Get the index of the last link within the slider-pagination element
            activeSlider = $('.slider'),                                    // Get the active slider element
            sliderTarget;
        // Update the slider
        function sliderResponse(sliderTarget) {
            sliderPagers.removeClass('current');
            sliderPagers.eq(sliderTarget).addClass('current');
            activeSlider.find('.slider-wrapper > .slide.active').hide().removeClass('active');
            activeSlider.find('.slider-wrapper > .slide').eq(sliderTarget).fadeIn(250).addClass('active');
            }
        // Handles next button click
        $('.slider-next').on('click', function() {
            lastElem = sliderPagers.length-1;
            // Get index of currently active slider
            sliderTarget = activeSlider.find('.slider-pagination a.current').index();
            // Determine which slider to switch to
            if (sliderTarget === lastElem) {
                sliderTarget = 0;
            }  
            else {
                sliderTarget = sliderTarget + 1;
            }
            // Update slider pagination
            sliderPagers.eq(sliderTarget).addClass('current').show();       
            // Hide previous pagination elements if necessary
            if (sliderTarget > 4) {
                sliderPagers.eq(sliderTarget - 5).hide();
            }
            // Show all pagination elements if necessary
            if (sliderTarget == 0) {
                activeSlider.find('.slider-pagination').children('a').show();
                activeSlider.find('.slider-pagination a').slice(5).hide();
            }
            // Update slider response
            sliderResponse(sliderTarget);
        });
        // Handles previous button click
        $('.slider-previous').on('click', function() {
            lastElem = sliderPagers.length-1; 
            // Get index of currently active slider
            sliderTarget = activeSlider.find('.slider-pagination a.current').index();
            // Determine which slider to switch to
            if (sliderTarget === 0) {
                sliderTarget = lastElem;
                sliderPagers.eq(lastElem).addClass('current').show();
            }  
            else {
                sliderTarget = sliderTarget-1;
                sliderPagers.eq(sliderTarget).addClass('current').show();
            }
            // Hide next pagination elements if necessary
            if (sliderTarget<sliderPagers.length-5) {
                sliderPagers.eq(sliderTarget+5).hide();
            }
            // Show all pagination elements if necessary
            if (sliderTarget == lastElem) {
                activeSlider.find('.slider-pagination').children('a').show();
                activeSlider.find('.slider-pagination a').slice(0, -5).hide();
            }
            // Update slider response
            sliderResponse(sliderTarget);
        });
    });
</script>
</body>
</html>