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
                    // Database connection configuration
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "login_register"; // Replace with your actual database name
                    // Create a new PDO instance for database connection
                    try {
                        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                        die();
                    }
                    $error = "";
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['submit'])) {
                            // Form submitted, process the data
                            $folder = "../../home/news/all-news/";
                            // Image Upload
                            if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] === UPLOAD_ERR_OK) {
                                $image_file = $_FILES['image_path']['name'];
                                $image_tmp = $_FILES['image_path']['tmp_name'];
                                $image_target_file = $folder . basename($image_file);
                                $image_file_type = strtolower(pathinfo($image_target_file, PATHINFO_EXTENSION));
                                $allowed_image_types = array('jpg', 'jpeg', 'png', 'gif');
                                if (!in_array($image_file_type, $allowed_image_types)) {
                                    $error = 'Sorry, only ' . implode(', ', $allowed_image_types) . ' files are allowed for images';
                                }
                                if ($_FILES['image_path']['size'] > 2048576) {
                                    $error = 'Sorry, your image file is too large. Upload an image file less than 1 MB in size.';
                                }
                                if (empty($error)) {
                                    move_uploaded_file($image_tmp, $image_target_file);
                                    $image_title = $_POST['image_title'];
                                    // PDF Upload
                                    if (isset($_FILES['filename']) && $_FILES['filename']['error'] === UPLOAD_ERR_OK) {
                                        $pdf_file = $_FILES['filename']['name'];
                                        $pdf_tmp = $_FILES['filename']['tmp_name'];
                                        $pdf_target_file = $folder . basename($pdf_file);
                                        $pdf_file_type = strtolower(pathinfo($pdf_target_file, PATHINFO_EXTENSION));
                                        $allowed_pdf_types = array('pdf');
                                        if (!in_array($pdf_file_type, $allowed_pdf_types)) {
                                            $error = 'Sorry, only ' . implode(', ', $allowed_pdf_types) . ' files are allowed for PDFs';
                                        }
                                        if ($_FILES['filename']['size'] > 1048576) {
                                            $error = 'Sorry, your PDF file is too large. Upload a PDF file less than 1 MB in size.';
                                        }
                                        if (empty($error)) {
                                            move_uploaded_file($pdf_tmp, $pdf_target_file);
                                            $pdf_filename = pathinfo($pdf_file, PATHINFO_FILENAME); // Extract the filename without extension
                                            // Save the image and PDF file details in the database
                                            $stmt = $pdo->prepare("INSERT INTO news (image_path, pdf_path, title) VALUES (?, ?, ?)");
                                            $stmt->execute([$image_target_file, $pdf_target_file, $image_title]);
                                            if ($stmt) {
                                                echo '<div class="success-message">Upload successful!</div>';
                                                header("Location:news.php?action=successful"); // Redirect to the specified page
                                            } else {
                                                $error = 'Something went wrong while uploading the image and PDF.';
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    if (!empty($error)) {
                        echo '<div class="message">' . $error . '</div><br>';
                    }
                  ?>
                  <div class="uploader">
                   <h1>News</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                      <input type="text" name="image_title" placeholder="Description">
                      <input type="file" name="image_path" accept="image/*">
                      <input type="file" name="filename" accept=".pdf">
                      <input type="submit" name="submit" value="Submit">
                    </form>
                    <form action="" method="GET">
                    <input type="text" name="search" placeholder="Search by pdf">
                    </form>                    
                  </div>
              </div>
              <div class="second_half_con">
               <?php
                // Database connection configuration
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "login_register"; // Replace with your actual database name
                        // Create a new PDO instance for database connection
                        try {
                            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        } catch (PDOException $e) {
                            echo "Connection failed: " . $e->getMessage();
                            die();
                        }
                        // Search functionality
                        $search = "";
                        if (isset($_GET['search'])) {
                            $search = $_GET['search'];
                        }
                        // Prepare the SQL statement to search for news by title
                        $stmt = $pdo->prepare("SELECT * FROM news WHERE pdf_path LIKE :search");
                        $stmt->bindValue(':search', '%' . $search . '%');
                        $stmt->execute();
                        // Display the search results
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $imagePath = $row['image_path'];
                            $imageTitle = pathinfo($row['pdf_path'], PATHINFO_FILENAME);
                            echo '<div class="news-row news-col-1-4">';
                            echo '<a href="news-delete.php?id=' . $row['id'] . '" onClick="return confirm(\'Are you sure you want to delete?\')"><button class="btn-primary btn_del">Delete</button></a>';
                            echo '<div class="news-title">';
                            echo '<p>' . $imageTitle . '</p>';
                            echo '</div>';
                            echo '<a href="' . (isset($row['pdf_path']) ? $row['pdf_path'] : '#') . '">';
                            echo '<img id="img-size-news" src="' . $imagePath . '" alt="">';
                            echo '</a>';
                            echo '</div>';
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
</body>
</html>