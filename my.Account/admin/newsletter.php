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

                  $success = false;
                  $error = [];

                  if (isset($_POST['submit'])) {
                      $newsletterTitle = isset($_POST['newsletter_title']) ? $_POST['newsletter_title'] : '';
                      $folder = "../../home/newsletter/all-newsletter/";

                      // Newsletter Image Upload
                      if (isset($_FILES['newsletter_img']) && $_FILES['newsletter_img']['error'] === UPLOAD_ERR_OK) {
                          $newsletterImgFile = $_FILES['newsletter_img']['name'];
                          $newsletterImgTmp = $_FILES['newsletter_img']['tmp_name'];
                          $newsletterImgTargetFile = $folder . basename($newsletterImgFile);
                          $newsletterImgFileType = strtolower(pathinfo($newsletterImgTargetFile, PATHINFO_EXTENSION));

                          $allowedImageTypes = array('jpg', 'jpeg', 'png', 'gif');
                          if (!in_array($newsletterImgFileType, $allowedImageTypes)) {
                              $error[] = 'Sorry, only ' . implode(', ', $allowedImageTypes) . ' files are allowed for images';
                          }

                          if ($_FILES['newsletter_img']['size'] > 1048576) {
                              $error[] = 'Sorry, your image file is too large. Upload an image file less than 1 MB in size.';
                          }

                          if (empty($error)) {
                              move_uploaded_file($newsletterImgTmp, $newsletterImgTargetFile);
                              $newsletterImgFile = $mysqli->real_escape_string($newsletterImgFile);
                              $result = $mysqli->query("INSERT INTO newsletters (newsletter_img, newsletter_pdf, newsletter_title) VALUES ('$newsletterImgFile', '', '$newsletterTitle')");
                              if (!$result) {
                                  $error[] = 'Something went wrong while uploading the image.';
                              } else {
                                  $success = true;
                              }
                          }
                      }

                      // Newsletter PDF Upload
                      if (isset($_FILES['newsletter_pdf']) && $_FILES['newsletter_pdf']['error'] === UPLOAD_ERR_OK) {
                          $newsletterPdfFile = $_FILES['newsletter_pdf']['name'];
                          $newsletterPdfTmp = $_FILES['newsletter_pdf']['tmp_name'];
                          $newsletterPdfTargetFile = $folder . basename($newsletterPdfFile);
                          $newsletterPdfFileType = strtolower(pathinfo($newsletterPdfTargetFile, PATHINFO_EXTENSION));

                          $allowedPdfTypes = array('pdf');
                          if (!in_array($newsletterPdfFileType, $allowedPdfTypes)) {
                              $error[] = 'Sorry, only ' . implode(', ', $allowedPdfTypes) . ' files are allowed for PDFs';
                          }

                          if ($_FILES['newsletter_pdf']['size'] > 1048576) {
                              $error[] = 'Sorry, your PDF file is too large. Upload a PDF file less than 1 MB in size.';
                          }

                          if (empty($error)) {
                              move_uploaded_file($newsletterPdfTmp, $newsletterPdfTargetFile);
                              $newsletterPdfFile = $mysqli->real_escape_string($newsletterPdfFile);
                              $result = $mysqli->query("UPDATE newsletters SET newsletter_pdf = '$newsletterPdfFile' WHERE newsletter_title = '$newsletterTitle'");
                              if (!$result) {
                                  $error[] = 'Something went wrong while uploading the PDF.';
                              } else {
                                  $success = true;
                              }
                          }
                      }
                  }

                  if (!empty($error)) {
                      foreach ($error as $err) {
                          echo '<div class="message">' . $err . '</div><br>';
                      }
                  }

                  if ($success) {
                      echo '<div class="success-message">Upload successful!</div>';
                      header("Location:newsletter.php?action=successful"); // Redirect to the specified page

                  }

                  // Delete newsletter
                  if (isset($_GET['id'])) {
                      $id = $_GET['id'];

                      // Retrieve the newsletter information
                      $result = $mysqli->query("SELECT newsletter_img, newsletter_pdf FROM newsletters WHERE id = $id LIMIT 1");

                      if ($result && $result->num_rows > 0) {
                          $row = $result->fetch_assoc();

                          $deleteImage = $row['newsletter_img'];
                          $deletePdf = $row['newsletter_pdf'];

                          $folder = "../../home/newsletter/all-newsletter/";

                          // Delete the newsletter image file
                          if (!empty($deleteImage) && file_exists($folder . $deleteImage)) {
                              unlink($folder . $deleteImage);
                          }

                          // Delete the newsletter PDF file
                          if (!empty($deletePdf) && file_exists($folder . $deletePdf)) {
                              unlink($folder . $deletePdf);
                          }

                          // Delete the newsletter entry from the database
                          $deleteResult = $mysqli->query("DELETE FROM newsletters WHERE id = $id");

                          if ($deleteResult) {
                              echo "Newsletter deleted successfully.";
                          } else {
                              echo "Error deleting newsletter from the database.";
                          }
                      } 
                  }
                ?>
                <div class="uploader">
                  <h1>Newsletter</h1>
                  <form method="POST" enctype="multipart/form-data">
                    <div>
                      <input type="file" name="newsletter_img" id="newsletter_img" required accept="image/*">
                    </div>
                    <div>
                      <input type="file" name="newsletter_pdf" id="newsletter_pdf" required accept=".pdf" placeholder="Newsletter PDF:">
                    </div>
                    <div>
                      <input type="text" name="newsletter_title" id="newsletter_title" required placeholder="Newsletter Title:">
                    </div>
                    <div>
                      <input type="submit" name="submit" value="Submit">
                    </div>
                  </form>
                  <form action="" method="GET">
                        <input type="text" name="search" placeholder="Search by newsletter PDF">
                  </form>
                </div>
              </div>
              <div class="second_half_con">
                <?php
                      // Assuming you have already established a database connection
                      $mysqli = new mysqli("localhost", "root", "", "login_register");

                      if (isset($_GET['search'])) {
                          $searchQuery = $_GET['search'];
                          $query = "SELECT id, newsletter_img, newsletter_pdf, newsletter_title FROM newsletters WHERE newsletter_pdf LIKE '%$searchQuery%' ORDER BY id DESC";
                          $result = $mysqli->query($query);
                      } else {
                          $result = $mysqli->query("SELECT id, newsletter_img, newsletter_pdf, newsletter_title FROM newsletters ORDER BY id DESC");
                      }
                  ?>
                  <?php
                      // Check if the result contains any rows
                      if ($result && $result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                              echo '<div class="delete-section">';
                              echo '<a href="?id=' . $row['id'] . '" onClick="return confirm(\'Are you sure you want to delete this newsletter?\')"><button class="btn-primary btn_del">Delete</button></a>';
                              echo '<h1><a>' . basename($row['newsletter_pdf'], ".pdf") . '</a></h1>';
                              echo '<p>' . $row['newsletter_title'] . '</p>';
                              echo '<div id="respo-newsletter" class="news-letter-col-1-3">';
                              echo '<a href="../../home/newsletter/all-newsletter/' . $row['newsletter_pdf'] . '">';
                              echo '<img id="img-size-newsletter" src="../../home/newsletter/all-newsletter/' . $row['newsletter_img'] . '" alt=""></a>';
                              echo '<div id="respo-d-btn" class="button-position">';
                              echo '</div>';
                              echo '</div>';
                              echo '</div>';
                          }
                      } else {
                          echo "No newsletters found.";
                      }

                      $result->free_result();
                      $mysqli->close();
                  ?>
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
<script>
  const toggleSidebarButton = document.getElementById('toggle-sidebar');
const sidebar = document.querySelector('.sidenav-container');

toggleSidebarButton.addEventListener('click', () => {
  sidebar.classList.toggle('show-sidebar');
});

</script>
</body>
</html>

