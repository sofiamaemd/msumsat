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
              <div class="uploader">.
                  <?php 
                  // Check if the ID parameter is set
                  if (isset($_GET['id'])) {
                      $officialId = $_GET['id'];

                      // Check if the form is submitted
                      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                          // Process the form data

                          // Retrieve the updated information from the form
                          $updatedName = $_POST['name'];
                          $updatedProfession = $_POST['profession'];

                          // Perform the database update
                          // Replace the code below with your own database update logic

                          // Assuming you have already established a database connection
                          $mysqli = new mysqli("localhost", "root", "", "login_register");

                          // Check if the connection was successful
                          if ($mysqli->connect_errno) {
                              echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                              exit();
                          }
                          // Prepare and execute the update query without updating the image
                          $updateQuery = "UPDATE featured_officials SET name = '$updatedName', profession = '$updatedProfession' WHERE id = $officialId";
                          $result = $mysqli->query($updateQuery);

                          if ($result) {
                              // Update successful
                              echo "<div class='success-message'>Updated Successfully!</div>";
                              echo "<a href='featured-co.php'>Go back to the original page</a>";

                          } else {
                              // Update failed
                              echo "<div class='error-message'>Error updating official information: " . $mysqli->error . "</div>";
                          }

                          // Retrieve the existing official information from the database
                          $selectQuery = "SELECT * FROM featured_officials WHERE id = $officialId";
                          $result = $mysqli->query($selectQuery);

                          if ($result && $result->num_rows > 0) {
                              // Official found
                              $official = $result->fetch_assoc();
                              ?>
                              <h2>Edit Official</h2>
                              <form method="POST" action="featured-co-edit.php?id=<?php echo $officialId; ?>" enctype="multipart/form-data">
                                  <input type="file" name="image" id="image">
                                  <input type="text" name="name" value="<?php echo $official['name']; ?>" placeholder="Name:">
                                  <input type="text" name="profession" value="<?php echo $official['profession']; ?>" placeholder="Profession">
                                  <input type="submit" value="Update">
                              </form>
                              <?php
                          } else {
                              // Official not found
                              echo "<div class='error-message'>Official not found.</div>";
                          }

                          // Close the database connection
                          $mysqli->close();
                      } else {
                          // Retrieve the existing official information from the database
                          // Replace the code below with your own database retrieval logic

                          // Assuming you have already established a database connection
                          $mysqli = new mysqli("localhost", "root", "", "login_register");

                          // Check if the connection was successful
                          if ($mysqli->connect_errno) {
                              echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                              exit();
                          }

                          // Prepare and execute the select query
                          $selectQuery = "SELECT * FROM featured_officials WHERE id = $officialId";
                          $result = $mysqli->query($selectQuery);

                          if ($result && $result->num_rows > 0) {
                              // Official found
                              $official = $result->fetch_assoc();
                              ?>
                              <h2>Edit Official</h2>
                              <form method="POST" action="featured-co-edit.php?id=<?php echo $officialId; ?>" enctype="multipart/form-data">
                                  <input type="file" name="image" id="image">
                                  <input type="text" name="name" value="<?php echo $official['name']; ?>" placeholder="Name:">
                                  <input type="text" name="profession" value="<?php echo $official['profession']; ?>" placeholder="Profession">
                                  <input type="submit" value="Update">
                              </form>
                              <?php
                          } else {
                              // Official not found
                              echo "<div class='error-message'>Official not found.</div>";
                          }

                          // Close the database connection
                          $mysqli->close();
                      }
                  } else {
                      echo "<div class='error-message'>Invalid request. Official ID is missing.</div>";
                  }
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
<script src="../script/all.js"></script>
<script>
const toggleSidebarButton = document.getElementById('toggle-sidebar');
const sidebar = document.querySelector('.sidenav-container');
toggleSidebarButton.addEventListener('click', () => {
sidebar.classList.toggle('show-sidebar');
});
</script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://kit.fontawesome.com/c919db264e.js" crossorigin="anonymous"></script>
</body>
</html>

