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
  <link rel="stylesheet" href="../../layout/styles/body.css"/>
  <link rel="stylesheet" href="../../layout/styles/framework.css"/>
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
                  // Database connection configuration
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $dbname = "login_register";

                              // Establish database connection
                              $conn = new mysqli($servername, $username, $password, $dbname);
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }

                              // Check if the form is submitted
                              if (isset($_POST['sched_submit'])) {
                                  // Retrieve form data
                                  $day = $_POST['day'];
                                  $date = $_POST['date'];
                                  $event_name = $_POST['event_name'];
                                  $start_time = $_POST['start_time'];
                                  $end_time = $_POST['end_time'];
                                  $location = $_POST['location'];

                                  // Upload PDF file
                                  $target_dir = "../../home/events/all-events/";
                                  $target_file = $target_dir . basename($_FILES["pdf"]["name"]);
                                  $uploadOk = 1;
                                  $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                                  // Check if the file is a PDF
                                  if ($pdfFileType != "pdf") {
                                      echo "Only PDF files are allowed.";
                                      $uploadOk = 0;
                                  }

                                  // Check if the file was successfully uploaded
                                  if ($uploadOk == 0) {
                                      echo "Sorry, your file was not uploaded.";
                                  } else {
                                      if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)) {
                                          // File uploaded successfully, insert data into the database
                                          $sql = "INSERT INTO event_schedule (day, date, event_name, start_time, end_time, location, pdf_path)
                                                  VALUES ('$day', '$date', '$event_name', '$start_time', '$end_time', '$location', '$target_file')";

                                          if ($conn->query($sql) === TRUE) {
                                              // Event details and PDF file uploaded successfully, redirect to another page
                                              $conn->close();
                                              header("Location:calendar-events.php?action=successful"); // Redirect to the specified page
                                              exit();
                                          } else {
                                              echo "Error: " . $sql . "<br>" . $conn->error;
                                          }
                                      } else {
                                          echo "Sorry, there was an error uploading your file.";
                                      }
                                  }
                              }

                              // Check if delete form is submitted
                              if (isset($_POST['delete'])) {
                                  $eventId = $_POST['eventId'];

                                  // Delete event from the database
                                  $deleteSql = "DELETE FROM event_schedule WHERE id = '$eventId'";
                                  if ($conn->query($deleteSql) === TRUE) {
                                      echo "Event deleted successfully.";
                                      header("Location:calendar-events.php?action=deleted"); // Redirect to the specified page
                                    } else {
                                      echo "Error deleting event: " . $conn->error;
                                  }
                              }
                ?>
                <div class="uploader">
                  <h1>Calendar of Events</h1>
                  <form method="POST" action="" enctype="multipart/form-data">
                    <select name="day" class="day" required>
                      <option value="">Select Day</option>
                      <option value="MON">MON</option>
                      <option value="TUE">TUE</option>
                      <option value="WED">WED</option>
                      <option value="THU">THU</option>
                      <option value="FRI">FRI</option>
                      <option value="SAT">SAT</option>
                      <option value="SUN">SUN</option>
                    </select>
                    <input type="text" name="date" required placeholder="Date">
                    <input type="text" name="event_name" required placeholder="Event Title">
                    <input type="text" name="start_time" required placeholder="Start Time">
                    <input type="text" name="end_time" required placeholder="End Time">
                    <input type="text" name="location" required placeholder="Location">
                    <input type="file" name="pdf" required>
                    <input type="submit" name="sched_submit" value="Upload">
                  </form>
                  <form action="" method="GET">
                    <input type="text" name="search" placeholder="Search by pdf">
                  </form>
                </div>
              </div>
              <div class="second_half_con">
                <div class="EDesign" id="eventscrollable-div">
                  <?php
                    // Establish database connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // Search functionality
                    $search = isset($_GET['search']) ? $_GET['search'] : '';
                    // Retrieve event details from the database based on the search query
                    $sql = "SELECT * FROM event_schedule WHERE event_name LIKE '%$search%' ORDER BY id DESC";
                    $result = $conn->query($sql);
                    if ($result) {
                        if ($result->num_rows > 0) {
                            // Loop through each row of data
                            while ($row = $result->fetch_assoc()) {
                                // Display event details using the provided HTML design
                                echo '<div class="delete-event">';
                                echo '<form method="POST" action="">';
                                echo '<input type="hidden" name="eventId" value="' . $row['id'] . '">';
                                echo '<input type="submit" name="delete" value="Delete">';
                                echo '</form>';
                                echo '</div>';
                                echo '<div class="row-border btmspace-10 con-fix inline-block">';
                                echo '<div id="e-adjust-1" class="event-col-1 first">';
                                echo '<a href="' . $row['pdf_path'] . '">';
                                echo '<div class="eventName-Day">';
                                echo $row['day'];
                                echo '</div>';
                                echo '<div class="eventNo-Date">';
                                echo $row['date'];
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                                echo '<div id="e-adjust-2" class="event-col-2">';
                                echo '<a href="' . $row['pdf_path'] . '" target="_blank">';
                                echo $row['event_name'];
                                echo '</a>';
                                echo '<h1>';
                                echo $row['start_time'] . ' - ' . $row['end_time'];
                                echo '</h1>';
                                echo '<h2>';
                                echo $row['location'];
                                echo '</h2>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo "No events found.";
                        }
                    } else {
                        echo "Error executing the query: " . $conn->error;
                    }

                    // Close the database connection
                    $conn->close();
                  ?>
                 <div id="respo-events" class="con-fix"></div>
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
<script>
  const toggleSidebarButton = document.getElementById('toggle-sidebar');
const sidebar = document.querySelector('.sidenav-container');

toggleSidebarButton.addEventListener('click', () => {
  sidebar.classList.toggle('show-sidebar');
});

</script>
</body>
</html>

