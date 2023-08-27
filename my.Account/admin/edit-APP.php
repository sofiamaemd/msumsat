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
                <?php
                    // Database connection settings
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "login_register";

                    // Create a new PDO instance
                    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                    // Check if the APP form is submitted
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitAPP'])) {
                        // Retrieve form data
                        $APPTitle = $_POST['image_title'];
                        $APPFileName = $_FILES['file_name']['name'];
                        $oldFileName = $_POST['old_file_name'];

                        // Perform the update operation for APP
                        $stmt = $pdo->prepare("UPDATE annual_procurement_plan SET image_title = ?, file_name = ? WHERE file_name = ?");
                        $stmt->execute([$APPTitle, $APPFileName, $oldFileName]);

                        // Move uploaded file to the desired location for APP
                        $targetDirectoryAPP = "annual-procurement-plan/";
                        $targetFileAPP = $targetDirectoryAPP . basename($_FILES['file_name']['name']);
                        move_uploaded_file($_FILES['file_name']['tmp_name'], $targetFileAPP);

                        // Delete the previous file from the server
                        $previousFilePath = 'annual-procurement-plan/' . $oldFileName;
                        if (file_exists($previousFilePath) && $APPFileName !== $oldFileName) {
                            unlink($previousFilePath);
                        }

                        // Redirect the user to a success page for APP
                        header("Location: transparency-seal.php?updateAPP=successful!");
                        exit();
                    }

                    // Check if the delete action is triggered
                    if (isset($_GET['action']) && $_GET['action'] === 'deleteAPP') {
                        $fileToDelete = urldecode($_GET['file']); // Decode the file name

                        // Delete the file from the server
                        $filePath = 'annual-procurement-plan/' . $fileToDelete;
                        if (file_exists($filePath)) {
                            unlink($filePath);

                            // Delete the corresponding record from the database
                            $stmt = $pdo->prepare("DELETE FROM annual_procurement_plan WHERE file_name = ?");
                            $stmt->execute([$fileToDelete]);
                        }
                    }

                    // Prepare and execute the SQL query to fetch the data
                    $stmt = $pdo->prepare("SELECT image_title, file_name FROM annual_procurement_plan");
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?php
                    // Check if the APP file is requested for editing
                    if (isset($_GET['file'])) {
                        $fileToEdit = $_GET['file'];

                        // Fetch the corresponding record from the database
                        $stmt = $pdo->prepare("SELECT image_title, file_name FROM annual_procurement_plan WHERE file_name LIKE ?");
                        $stmt->execute(['%' . $fileToEdit . '%']);
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);

                        // Check if a record was found
                        if ($result) {
                            // Store the existing file name for updating
                            $oldFileName = $result['file_name'];
                ?>
                <div class="uploader">
                    <h1 style="text-align:center">IV. Annual Procurement Plan Edit</h1><br>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="old_file_name" value="<?php echo $oldFileName; ?>">
                        <input type="text" name="image_title" placeholder="Description" value="<?php echo $result['image_title']; ?>" required>
                        <input type="file" name="file_name" accept=".pdf" required>
                        <input type="submit" name="submitAPP" value="Update">
                    </form>
                </div>
                <?php
                    } else {
                        echo "Record not found.";
                    }
                }
                ?>
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

