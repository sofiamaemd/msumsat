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
                <div class="uploader">
                    <center><h1>Transparency Seal</h1></center>
                    <?php
                        // Database connection settings
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "login_register";
                        // Create a new PDO instance
                        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        // Check if the ABT form is submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ABT_title']) && isset($_FILES['ABT_file_name'])) {
                            // Retrieve form data
                            $ABTTitle = $_POST['ABT_title'];
                            $ABTFileName = $_FILES['ABT_file_name']['name'];

                            // Prepare and execute the SQL query for ABT
                            $stmt = $pdo->prepare("INSERT INTO approved_budget_targets (ABT_title, ABT_file_name) VALUES (?, ?)");
                            $stmt->execute([$ABTTitle, $ABTFileName]);
                            // Move uploaded file to desired location for ABT
                            $targetDirectoryABT = "approved-budget-targets/";
                            $targetFileABT = $targetDirectoryABT . basename($_FILES['ABT_file_name']['name']);
                            move_uploaded_file($_FILES['ABT_file_name']['tmp_name'], $targetFileABT);
                            // Redirect the user to a success page for ABT
                            header("Location: transparency-seal.php?uploadABT=successful!");
                            exit();
                        }
                        // Check if the APP form is submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['image_title']) && isset($_FILES['file_name'])) {
                            // Retrieve form data
                            $imageTitle = $_POST['image_title'];
                            $fileName = $_FILES['file_name']['name'];

                            // Prepare and execute the SQL query for APP
                            $stmt = $pdo->prepare("INSERT INTO annual_procurement_plan (image_title, file_name) VALUES (?, ?)");
                            $stmt->execute([$imageTitle, $fileName]);
                            // Move uploaded file to desired location for APP
                            $targetDirectoryAPP = "annual-procurement-plan/";
                            $targetFileAPP = $targetDirectoryAPP . basename($_FILES['file_name']['name']);
                            move_uploaded_file($_FILES['file_name']['tmp_name'], $targetFileAPP);
                            // Redirect the user to a success page for APP
                            header("Location: transparency-seal.php?uploadAPP=successful!");
                            exit();
                        }
                        // Check if the AFR form is submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['AFR_title']) && isset($_FILES['AFR_file_name'])) {
                            // Retrieve form data
                            $AFRTitle = $_POST['AFR_title'];
                            $AFRFileName = $_FILES['AFR_file_name']['name'];
                            $year = $_POST['year'];
                            // Prepare and execute the SQL query for AFR
                            $stmt = $pdo->prepare("INSERT INTO annual_financial_reports (AFR_title, AFR_file_name, year) VALUES (?, ?, ?)");
                            $stmt->execute([$AFRTitle, $AFRFileName, $year]);
                            // Move uploaded file to desired location for AFR
                            $targetDirectoryAFR = "annual-financial-reports/";
                            $targetFileAFR = $targetDirectoryAFR . basename($_FILES['AFR_file_name']['name']);
                            move_uploaded_file($_FILES['AFR_file_name']['tmp_name'], $targetFileAFR);
                            // Redirect the user to a success page for AFR
                            header("Location: transparency-seal.php?uploadAFR=successful!");
                            exit();
                        }

                        // Check if the ARSI form is submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ARSI_title']) && isset($_FILES['ARSI_file_name'])) {
                            // Retrieve form data
                            $ARSITitle = $_POST['ARSI_title'];
                            $ARSIFileName = $_FILES['ARSI_file_name']['name'];
                            // Prepare and execute the SQL query for ARSI
                            $stmt = $pdo->prepare("INSERT INTO annual_reports_si (ARSI_title, ARSI_file_name) VALUES (?, ?)");
                            $stmt->execute([$ARSITitle, $ARSIFileName]);
                            // Move uploaded file to desired location for ARSI
                            $targetDirectoryARSI = "annual-reports/"; // Update the target directory
                            $targetFileARSI = $targetDirectoryARSI . basename($_FILES['ARSI_file_name']['name']);
                            move_uploaded_file($_FILES['ARSI_file_name']['tmp_name'], $targetFileARSI);
                            // Redirect the user to a success page for ARSI
                            header("Location: transparency-seal.php?uploadARSI=successful!");
                            exit();
                        }
                        
                        // Check if the CC form is submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['CC_title']) && isset($_FILES['CC_file_name'])) {
                          // Retrieve form data
                          $CCTitle = $_POST['CC_title'];
                          $CCFileName = $_FILES['CC_file_name']['name'];
                          // Prepare and execute the SQL query for CC
                          $stmt = $pdo->prepare("INSERT INTO citizen_charters (CC_title, CC_file_name) VALUES (?, ?)");
                          $stmt->execute([$CCTitle, $CCFileName]);
                          // Move uploaded file to desired location for CC
                          $targetDirectoryCC = "../../home/citizens-charter/";
                          $targetFileCC = $targetDirectoryCC . basename($_FILES['CC_file_name']['name']);
                          move_uploaded_file($_FILES['CC_file_name']['tmp_name'], $targetFileCC);
                          // Redirect the user to a success page for CC
                          header("Location: transparency-seal.php?uploadCC=successful!");
                          exit();
                      }
                        // Prepare and execute the SQL query to fetch the ABT data
                        $stmtABT = $pdo->prepare("SELECT ABT_title, ABT_file_name FROM approved_budget_targets");
                        $stmtABT->execute();
                        $resultABT = $stmtABT->fetchAll(PDO::FETCH_ASSOC);
                        // Prepare and execute the SQL query to fetch the APP data
                        $stmtAPP = $pdo->prepare("SELECT image_title, file_name FROM annual_procurement_plan");
                        $stmtAPP->execute();
                        $resultAPP = $stmtAPP->fetchAll(PDO::FETCH_ASSOC);
                        // Prepare and execute the SQL query to fetch the AFR data
                        $stmtAFR = $pdo->prepare("SELECT AFR_title, AFR_file_name, year FROM annual_financial_reports");
                        $stmtAFR->execute();
                        $resultAFR = $stmtAFR->fetchAll(PDO::FETCH_ASSOC);
                        // Prepare and execute the SQL query to fetch the ARSI data
                        $stmtARSI = $pdo->prepare("SELECT ARSI_title, ARSI_file_name FROM annual_reports_si");
                        $stmtARSI->execute();
                        $resultARSI = $stmtARSI->fetchAll(PDO::FETCH_ASSOC);
                        // Prepare and execute the SQL query to fetch the ABT data
                        $stmtABT = $pdo->prepare("SELECT CC_title, CC_file_name FROM citizen_charters");
                        $stmtABT->execute();
                        $resultABT = $stmtABT->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                    <div>
                        <h1>II. DBM Approved Budget and Targets</h1>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" name="ABT_title" placeholder="Description" required>
                        <input type="file" name="ABT_file_name" accept=".pdf" required>
                        <input type="submit" name="submitABT" value="Submit">
                    </form>
                    <div>
                        <h1>IV. Annual Procurement Plan</h1>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" name="image_title" placeholder="Description" required>
                        <input type="file" name="file_name" accept=".pdf" required>
                        <input type="submit" name="submitAPP" value="Submit">
                    </form>
                    <div>
                        <h1>VI. Annual Financial Reports</h1>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" name="AFR_title" placeholder="Description" required>
                        <input type="file" name="AFR_file_name" accept=".pdf" required>
                        <input type="number" name="year" placeholder="Year" required style="
                        width: 100%;
                        padding: 10px;
                        margin-bottom: 5px;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        font-size: 14px;">
                        <input type="submit" name="submitAFR" value="Submit">
                    </form>
                    <div>
                        <h1>VII. Off-budget Income Reports</h1>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" name="ARSI_title" placeholder="Description" required>
                        <input type="file" name="ARSI_file_name" accept=".pdf" required>
                        <input type="submit" name="submitARSI" value="Submit">
                    </form>
                </div>
              </div>
              <div class="second_half_con">
                <div class="one_whole textDesign tps-dsgn con-fix first">
                  <h2>
                    MSU-MSAT Compliance with Sec. 93 (Transparency Seal)
                    R. A. No. 10155 (General Appropriations Act FY 2012)
                  </h2>
                    <a>Source:&nbsp;<a href="http://www.dbm.gov.ph/?p=4331"><span>http://www.dbm.gov.ph</span></a>
                    <div class="con-fix">
                      <a>I. MSU- MSAT mandates and functions, names of officials with their positions and designations,
                      and contact information:</a>
                      <div class="child-tps ">
                        <ul>
                          <li>MSU-MSAT Mandate and Functions</li>
                            <ul>
                              <li class=""><a href="core-values.php">Mission, Vision, and Objectives</a></li>
                            </ul>
                        </ul>
                        <ul>
                          <li>Officials Positions & Contact</li>
                            <ul>
                              <li class=""><a href="../../offices-resources.php">Officials' Offices</a></li>
                              <li class=""><a href="../../home/campus-officials.php">Officials' Directory</a></li>
                            </ul>
                        </ul>
                      </div>
                    </div>            
                    <div class="con-fix"> 
                      <a>II. DBM Approved Budget and Targets
                      </a>
                      <div class="child-tps ">
                        <ul>
                            <?php
                                // Retrieve and display the data from the database
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "login_register";
                                // Create a new PDO instance
                                $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                // Check if the delete action is triggered
                                if (isset($_GET['action']) && $_GET['action'] === 'deleteABT') {
                                    $fileToDelete = urldecode($_GET['file']); // Decode the file name
                                    // Delete the file from the server
                                    $filePath = 'approved-budget-targets/' . $fileToDelete;
                                    if (file_exists($filePath)) {
                                        unlink($filePath);
                                        // Delete the corresponding record from the database
                                        $stmt = $pdo->prepare("DELETE FROM approved_budget_targets WHERE ABT_file_name = ?");
                                        $stmt->execute([$fileToDelete]);
                                    }
                                }
                                // Prepare and execute the SQL query to fetch the data
                                $stmt = $pdo->prepare("SELECT id, ABT_title, ABT_file_name FROM approved_budget_targets");
                                $stmt->execute();
                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                                <?php foreach ($result as $row): ?>
                                <li>
                                    <a href="approved-budget-targets/<?php echo $row['ABT_file_name']; ?>"><?php echo $row['ABT_title']; ?></a>
                                    <span>
                                        <a href="edit-ABT.php?id=<?php echo $row['id']; ?>&file=<?php echo urlencode($row['ABT_file_name']); ?>">Edit</a>
                                    </span>
                                    <span> | </span>
                                    <span>
                                        <a href="transparency-seal.php?action=deleteABT&file=<?php echo urlencode($row['ABT_file_name']); ?>">Delete</a>
                                    </span>
                                </li>
                                <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>            
                    <div class="con-fix">
                      <a>III. Modifications made pursuant to the general and special provisions in the FY 2022 GAA (Not Applicable)
                      </a>
                    </div>            
                    <div class="con-fix">
                      <a>IV. Annual Procurement Plan
                      </a>
                        <div class="child-tps ">
                            <ul>
                                <?php
                                    // Retrieve and display the data from the database
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "login_register";
                                    // Create a new PDO instance
                                    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
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
                                    $stmt = $pdo->prepare("SELECT id, image_title, file_name FROM annual_procurement_plan");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                ?>
                                <ul>
                                    <?php foreach ($result as $row): ?>
                                    <li>
                                        <a href="annual-procurement-plan/<?php echo $row['file_name']; ?>"><?php echo $row['image_title']; ?></a>
                                        <span>
                                            <a href="edit-APP.php?id=<?php echo $row['id']; ?>&file=<?php echo urlencode($row['file_name']); ?>">Edit</a>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            <a href="transparency-seal.php?action=deleteAPP&file=<?php echo urlencode($row['file_name']); ?>">Delete</a>
                                        </span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </ul>
                        </div>
                    </div>           
                    <div class="con-fix">
                      <a>V. Major Projects, Programs and Activities, Beneficiaries, and Status of 
                        Implementation for FY 2022 (Not Applicable)</a>
                    </div>            
                    <div class="con-fix">
                      <a>VI. Annual Financial Reports</a>
                      <div class="child-tps ">
                        <ul>
                            <?php
                                // Prepare and execute the SQL query to fetch the AFR data
                                $stmtAFR = $pdo->prepare("SELECT DISTINCT year FROM annual_financial_reports");
                                $stmtAFR->execute();
                                $resultAFR = $stmtAFR->fetchAll(PDO::FETCH_ASSOC);

                                // Check if the delete action is triggered for AFR
                                if (isset($_GET['action']) && $_GET['action'] === 'deleteAFR') {
                                    $fileToDelete = urldecode($_GET['file']); // Decode the file name

                                    // Delete the file from the server
                                    $filePath = 'annual-financial-reports/' . $fileToDelete;
                                    if (file_exists($filePath)) {
                                        unlink($filePath);

                                        // Delete the corresponding record from the database
                                        $stmt = $pdo->prepare("DELETE FROM annual_financial_reports WHERE AFR_file_name = ?");
                                        $stmt->execute([$fileToDelete]);
                                    }
                                }
                                // Check if the delete action is triggered for years
                                if (isset($_GET['action']) && $_GET['action'] === 'deleteYear') {
                                    $yearToDelete = $_GET['year'];
                                    // Retrieve the PDF files associated with the year
                                    $stmtAFRData = $pdo->prepare("SELECT AFR_file_name FROM annual_financial_reports WHERE year = ?");
                                    $stmtAFRData->execute([$yearToDelete]);
                                    $resultAFRData = $stmtAFRData->fetchAll(PDO::FETCH_ASSOC);
                                    // Delete the PDF files from the server
                                    foreach ($resultAFRData as $rowAFRData) {
                                        $fileToDelete = $rowAFRData['AFR_file_name'];
                                        $filePath = 'annual-financial-reports/' . $fileToDelete;
                                        if (file_exists($filePath)) {
                                            unlink($filePath);
                                        }
                                    }

                                    // Delete the corresponding records from the database
                                    $stmt = $pdo->prepare("DELETE FROM annual_financial_reports WHERE year = ?");
                                    $stmt->execute([$yearToDelete]);
                                }
                                // Loop through the years and display the AFR data
                                foreach ($resultAFR as $rowAFR) {
                                    $year = $rowAFR['year'];
                            ?>
                            <li>
                                <?php echo $year; ?>
                                <span>
                                    <a href="transparency-seal.php?action=deleteYear&year=<?php echo $year; ?>">Delete Year</a>
                                </span>
                            </li>
                            <ul>
                            <?php
                                // Prepare and execute the SQL query to fetch the AFR data for the current year
                                $stmtAFRData = $pdo->prepare("SELECT id, AFR_title, AFR_file_name FROM annual_financial_reports WHERE year = ?");
                                $stmtAFRData->execute([$year]);
                                $resultAFRData = $stmtAFRData->fetchAll(PDO::FETCH_ASSOC);
                                // Loop through the AFR data and display the AFR titles with links, edit, and delete buttons
                                foreach ($resultAFRData as $rowAFRData) {
                                    $AFRId = $rowAFRData['id'];
                                    $AFRTitle = $rowAFRData['AFR_title'];
                                    $AFRFileName = $rowAFRData['AFR_file_name'];
                                    $AFRFilePath = "annual-financial-reports/" . $AFRFileName;
                                ?>
                                <li>
                                    <a href="<?php echo $AFRFilePath; ?>" target="_blank"><?php echo $AFRTitle; ?></a>
                                    <span>
                                        <a href="edit-AFR.php?id=<?php echo $AFRId; ?>&file=<?php echo urlencode($AFRFileName); ?>">Edit</a>
                                    </span>
                                    <span> | </span>
                                    <span>
                                        <a href="transparency-seal.php?action=deleteAFR&file=<?php echo urlencode($AFRFileName); ?>">Delete</a>
                                    </span>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                            <?php
                            }
                            ?>
                        </ul>
                      </div>
                    </div>            
                    <div class="con-fix">
                      <a>VII. Annual Reports on the Status of Income authorized by law to be 
                        deposited outside the National Treasury</a>
                        <div class="child-tps ">
                            <ul>
                                <?php
                                    // Retrieve and display the data from the database
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "login_register";
                                    // Create a new PDO instance
                                    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    // Check if the delete action is triggered
                                    if (isset($_GET['action']) && $_GET['action'] === 'deleteARSI') {
                                        $fileToDelete = urldecode($_GET['file']); // Decode the file name
                                        // Delete the file from the server
                                        $filePath = 'annual-reports/' . $fileToDelete;
                                        if (file_exists($filePath)) {
                                            unlink($filePath);
                                            // Delete the corresponding record from the database
                                            $stmt = $pdo->prepare("DELETE FROM annual_reports_si WHERE ARSI_file_name = ?");
                                            $stmt->execute([$fileToDelete]);
                                        }
                                    }
                                    // Prepare and execute the SQL query to fetch the data
                                    $stmt = $pdo->prepare("SELECT id, ARSI_title, ARSI_file_name FROM annual_reports_si");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                ?>
                                <?php foreach ($result as $row): ?>
                                    <li>
                                        <a href="annual-reports/<?php echo $row['ARSI_file_name']; ?>"><?php echo $row['ARSI_title']; ?></a>
                                        <span>
                                            <a href="edit-ARSI.php?id=<?php echo $row['id']; ?>&file=<?php echo urlencode($row['ARSI_file_name']); ?>">Edit</a>
                                        </span>
                                        <span> | </span>
                                        <span>
                                            <a href="transparency-seal.php?action=deleteARSI&file=<?php echo urlencode($row['ARSI_file_name']); ?>">Delete</a>
                                        </span>
                                    </li>
                                    <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>            
                    <div class="con-fix">
                      <a>VIII. Major Projects, Programs and Activities, Beneficiaries, and Status of 
                        Implementation for FY 2022 (Not Applicable)</a>
                    </div><br>
                    <div class="con-fix">
                       <a>Citizens' Charter</a>
                      <div class="child-tps">
                        <ul>
                          <?php
                            // Retrieve and display the Citizen's Charter data
                            $stmtCC = $pdo->prepare("SELECT id, CC_title, CC_file_name FROM citizen_charters");
                            $stmtCC->execute();
                            $resultCC = $stmtCC->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($resultCC as $rowCC) {
                                $CCId = $rowCC['id'];
                                $CCTitle = $rowCC['CC_title'];
                                $CCFileName = $rowCC['CC_file_name'];
                                $CCFilePath = "../../home/citizens-charter/" . $CCFileName;
                          ?>
                          <li>
                              <a href="<?php echo $CCFilePath; ?>" target="_blank"><?php echo $CCTitle; ?></a>
                              <span>
                                  <a href="edit-CC.php?file=<?php echo urlencode($CCFileName); ?>">Edit</a>
                              </span>
                            </li>
                          <?php
                          }
                          ?>
                        </ul>
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
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://kit.fontawesome.com/c919db264e.js" crossorigin="anonymous"></script>
</body>
</html>