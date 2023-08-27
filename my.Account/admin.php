<?php require_once("database.php"); ?>
<?php require_once('admin_check.php');?>
<?php
ob_start(); // Start output buffering
// HTML tags and other code before session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="SHORTCUT ICON" href="../images/1.ico"/>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/responsive.css"/>
  <link rel="stylesheet" href="style/style.css"/>
  <link rel="stylesheet" href="style/creative.css"/>
<title>My.Account</title>
</head>
<body>
<header>
  <p>sample</p>
</header>
<div class="dash-con">
    <div class="sidebar">
      <div class="sidenav-container" id="side-nav">
              <nav class="nav">
                  <div class="nav__user">
                      <div class="nav__user-image">
                        <img src="sample-pic.png" alt="profile">
                      </div>
              
                      <div class="nav__user-info">
                        <div class="nav__user-info-name">Admin</div>
                        <div class="nav__user-info-email">Admin@gmail.com</div>
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
                    <a href="admin.php" class="nav__link active">
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
                          <a href="admin/banner.php">Banner</a>
                        </li>
                        <li>
                          <a href="admin/news.php">News</a>
                        </li>
                        <li>
                          <a href="admin/calendar-events.php">Calender of Events</a>
                        </li>
                        <li>
                          <a href="admin/newsletter.php">Newsletter</a>
                        </li>
                        <li>
                          <a href="admin/transparency-seal.php">Transparency Seal</a>
                        </li>
                        <li>
                          <a href="admin/gallery.php">Campus Gallery</a>
                        </li>
                        <li>
                          <a href="admin/featured-co.php">Featured Campus Officials</a>
                        </li>
                        <li>
                          <a href="admin/campus-officials-directory.php">CO Directory</a>
                        </li>
                        <li>
                          <a href="admin/board-regents.php">Board of Regents</a>
                        </li>
                        <li>
                          <a href="admin/msu-system-officials.php">MSU System Officials</a>
                        </li>
                        <li>
                          <a href="admin/department-heads.php">Department Heads</a>
                        </li>
                        <li>
                          <a href="admin/faculty-directory.php">Faculty Directory</a>
                        </li>
                        <li>
                          <a href="admin/staff-directory.php">Staff Directory</a>
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
                          <a href="admin/departments/cs.php">DCS</a>
                        </li>
                        <li>
                          <a href="admin/departments/et.php">DET</a>
                        </li>
                        <li>
                          <a href="admin/departments/hrmt.php">DHRMT</a>
                        </li>
                        <li>
                          <a href="admin/departments/hees.php">DHESS</a>
                        </li>
                        <li>
                          <a href="admin/departments/it.php">DIT</a>
                        </li>
                        <li>
                          <a href="admin/departments/nsm.php">DNSM</a>
                        </li>
                        <li>
                          <a href="admin/departments/se.php">DSE</a>
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
                    <a href="../home.php" class="nav__link active">
                      <ion-icon name="globe-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">MSU-MSAT</span>
                    </a>
                  </li>
                  <li class="nav__item">
                    <a href="logout.php" class="nav__link">  <!-- ===== name:settings-outline ===== -->
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
              <a>Right</a>
            </div>
        </header> 
          <div class="no-1-con con-fix">
            <div class="col-1-row-1">
              <div class="first_half_con">
                  <?php
                    $error = [];
                    $success = false;
                    if (isset($_POST['submit'])) {
                        $image_title = isset($_POST['title']) ? $_POST['title'] : '';
                        $folder = "../home/announcements/all-announcements/";

                        // Image Upload
                        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                            $image_file = $_FILES['image']['name'];
                            $image_tmp = $_FILES['image']['tmp_name'];
                            $image_target_file = $folder . basename($image_file);
                            $image_file_type = strtolower(pathinfo($image_target_file, PATHINFO_EXTENSION));
                            $allowed_image_types = array('jpg', 'jpeg', 'png', 'gif');
                            if (!in_array($image_file_type, $allowed_image_types)) {
                                $error[] = 'Sorry, only ' . implode(', ', $allowed_image_types) . ' files are allowed for images';
                            }
                            if ($_FILES['image']['size'] > 2048576) {
                                $error[] = 'Sorry, your image file is too large. Upload an image file less than 1 MB in size.';
                            }
                            if (empty($error)) {
                                move_uploaded_file($image_tmp, $image_target_file);
                            }
                        } else {
                            $error[] = 'Please select an image file.';
                        }

                        // PDF Upload
                        if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
                            $pdf_file = $_FILES['pdf']['name'];
                            $pdf_tmp = $_FILES['pdf']['tmp_name'];
                            $pdf_target_file = $folder . basename($pdf_file);
                            $pdf_file_type = strtolower(pathinfo($pdf_target_file, PATHINFO_EXTENSION));
                            $allowed_pdf_types = array('pdf');
                            if (!in_array($pdf_file_type, $allowed_pdf_types)) {
                                $error[] = 'Sorry, only ' . implode(', ', $allowed_pdf_types) . ' files are allowed for PDFs';
                            }
                            if ($_FILES['pdf']['size'] > 1048576) {
                                $error[] = 'Sorry, your PDF file is too large. Upload a PDF file less than 1 MB in size.';
                            }
                            if (empty($error)) {
                                move_uploaded_file($pdf_tmp, $pdf_target_file);
                            }
                        } else {
                            $error[] = 'Please select a PDF file.';
                        }
                        if (empty($error)) {
                            $image_file = mysqli_real_escape_string($db, $image_file);
                            $pdf_file = mysqli_real_escape_string($db, $pdf_file);
                            $image_title = mysqli_real_escape_string($db, $image_title);

                            $result = mysqli_query($db, "INSERT INTO items(image, pdf, title) VALUES('$image_file', '$pdf_file', '$image_title')");

                            if (!$result) {
                                $error[] = 'Something went wrong while uploading the image and PDF.';
                            } else {
                                $success = true;
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
                        header("Location:admin.php?action=successful"); // Redirect to the specified page
                    }
                  ?>
                  <div class="uploader">
                    <h1>Announcements</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                      <input type="text" name="title"  placeholder="Description">
                      <input type="file" name="image" accept="image/*">
                      <input type="file" name="pdf"  accept=".pdf">
                      <input type="submit" name="submit" value="Submit">
                    </form> 
                    <form action="" method="GET">
                      <input type="text" name="search"  placeholder="Search by pdf">
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
                    // Prepare the SQL statement to search for items by PDF
                    $stmt = $pdo->prepare("SELECT * FROM items WHERE pdf LIKE :search ORDER BY id DESC");
                    $stmt->bindValue(':search', '%' . $search . '%');
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="item">';
                        echo '<a href="delete.php?id=' . $row['id'] . '" onClick="return confirm(\'Are you sure you want to delete?\')"><button class="btn-primary btn_del">Delete</button></a>';
                        $image_file = $row['image'];
                        $pdf_file = $row['pdf'];
                        $title = $row['title'];
                        echo '<h1>';
                        if (!empty($pdf_file)) {
                            $pdf_title = pathinfo($pdf_file, PATHINFO_FILENAME); // Extract the filename without extension
                            echo '<a href="../home/announcements/all-announcements/' . $pdf_file . '" target="_blank">' . $pdf_title . '</a>';
                            echo '<i class="fas fa-file-pdf"></i>';
                        }
                        echo '</h1>';
                        echo '<h2>' . $title . '</h2>';
                        // Display the image
                        if (!empty($image_file)) {
                            echo '<img src="../home/announcements/all-announcements/' . $image_file . '">';
                        }
                        echo '<div class="actions">';
                        // Additional actions if needed
                        echo '</div>';
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
              <p>sample<br>
          </footer>   
  </div> 
</div> 
<!-- ===== IONICONS ===== -->
<script src="https://cdn.jsdelivr.net/npm/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
<!-- ===== MAIN JS ===== -->
<script src="script/sidebar.js"></script>
<script src="script/all.js"></script>
<script>
const toggleSidebarButton = document.getElementById('toggle-sidebar');
const sidebar = document.querySelector('.sidenav-container');
toggleSidebarButton.addEventListener('click', () => {
sidebar.classList.toggle('show-sidebar');
});
</script>
</body>
</html>