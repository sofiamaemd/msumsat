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
                    // Check if the form is submitted
                    if (isset($_POST['banner_submit'])) {
                        $title = isset($_POST['title']) ? $_POST['title'] : '';

                        // Image upload
                        if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] === UPLOAD_ERR_OK) {
                            $imageFile = $_FILES['image_path']['name'];
                            $imageTmp = $_FILES['image_path']['tmp_name'];
                            $imageTargetFile = 'banner/' . basename($imageFile);
                            move_uploaded_file($imageTmp, $imageTargetFile);
                        } else {
                            $imageTargetFile = '';
                        }
                        // Insert data into the database
                        $insertQuery = "INSERT INTO banner (title, image_path) VALUES (?, ?)";
                        $stmt = $mysqli->prepare($insertQuery);
                        $stmt->bind_param("ss", $title, $imageTargetFile);
                        $stmt->execute();

                        if ($stmt->affected_rows > 0) {
                            echo "Data inserted successfully.";
                            header("Location:banner.php?action=successful"); // Redirect to the specified page
                        } else {
                            echo "Error inserting data into the database.";
                        }
                        $stmt->close();
                    }
                    $mysqli->close();
                  ?>
                  <div class="uploader">
                    <h1>Banner</h1>
                      <form method="POST" enctype="multipart/form-data">
                          <div>
                              <input type="text" name="title" id="title" required placeholder="Title">
                          </div>
                          <div>
                              <input type="file" name="image_path" id="image" accept="image/*" required>
                          </div>
                          <div>
                              <input type="submit" name="banner_submit" value="Submit">
                          </div>
                      </form>
                      <form class="search-form" action="" method="GET">
                          <input type="text" name="search" placeholder="Search by Title">
                      </form>
                  </div>
                  <?php
                    // Assuming you have already established a database connection
                    $mysqli = new mysqli("localhost", "root", "", "login_register");
                    // Check if the connection was successful
                    if ($mysqli->connect_errno) {
                        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                        exit();
                    }
                    // Check if a search query is submitted
                    if (isset($_GET['search'])) {
                        $searchQuery = $_GET['search'];
                        // Prepare the SQL query with a search filter
                        $query = "SELECT id, title, image_path FROM banner WHERE title LIKE '%$searchQuery%' ORDER BY id DESC";
                        $result = $mysqli->query($query);
                    } else {
                        // Retrieve all employee information from the database
                        $result = $mysqli->query("SELECT id, title, image_path FROM banner ORDER BY id DESC");
                    }
                  ?>
                </div>
                <div class="second_half_con">
                  <div class="slider">
                    <div class="slider-wrapper">
                        <style>
                            .admin-banner-img{margin:0;padding:0;border-radius:0;width:100%;}
                            .collapse-con img{width:100%;border-radius:0%;}
                        </style>
                      <?php
                        // Check if any employee information found
                          if ($result && $result->num_rows > 0) {
                            echo '<div class="slide">';
                            echo '<div class="collapse-con">';
                            while ($row = $result->fetch_assoc()) {
                              echo '<div class="collapse">';
                              echo '<button class="collapse-btn" onclick="toggleCollapse(this)">' . $row['title'] . '</button>';
                              echo '<div class="collapse-content">';
                              echo '<form class="employee-form" action="delete-banner.php" method="POST">';
                              echo '<input type="hidden" name="employee_id" value="' . $row['id'] . '">';
                              echo '<button type="submit" class="delete-button">Delete</button>';
                              echo '<div class="pair con-fix">';
                              echo '<div class="collapse-1-whole">';
                              echo '<div class="admin-banner-img">';
                              echo '<center><img src="' . $row['image_path'] . '" alt=""></center>';
                              echo '</div>';
                              echo '</div>';
                              echo '<div class="collapse-1-whole">';
                              echo '<div class="official-contents">';
                              echo '</div>';
                              echo '</div>';
                              echo '</div>';
                              echo '</form>';
                              echo '</div>';
                              echo '</div>';
                              }
                              echo '</div>'; // Close the last collapse-con
                              echo '</div>'; // Close the last slide
                                } else {
                                    echo "No banner information found.";
                                  }
                                  $result->free_result();
                                  $mysqli->close();
                      ?>
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
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://kit.fontawesome.com/c919db264e.js" crossorigin="anonymous"></script>
</body>
</html>