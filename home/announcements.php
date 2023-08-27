<?php require_once("../my.Account/database.php");?>
<!DOCTYPE html>
<html>
<head>
<link rel="SHORTCUT ICON" href="../images/1.ico"/>
<title>Announcements | Home | MSU Maigo</title><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/footer.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/header.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/body.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="../layout/styles/submenu.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
<link href='https://fonts.googleapis.com/css?family=Source Sans Pro'>
</head>
<body id="top">
<div class="header-top-outer-wrapper">
  <div class="header-top-inner-wrapper">
    <div class="col-1-50-hdr first">
        <div class="datetime">
          <div class="time"></div>
          <div class="date"></div>
        </div>
    </div>
    <div class="col-1-50-hdr ">
        <div class="top-row">
          <ul>
            <li><a href="../my.Account/login.php">My.Account</a></li>
          </ul>
      </div>
    </div>
      <div class="con-fix"></div>
  </div>
</div>
<div class="header-logo-outer-wrapper">
  <center>
    <a href="../home.php">
    <img id="msat-seal-logo" src="../images/header-img.png" alt="">
    </a>
  </center>
    <div class="header-logo-inner-wrapper">
    </div>
</div>
<div class="nav-outer-wrapper">
  <div class="nav-inner-wrapper">
      <nav>
        <label style="text-align: end;" for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
                <li>
                  <label for="drop-1" class="toggle">Home</label>
                  <a href="../home.php" class="active">Home</a>
                  <input type="checkbox" id="drop-1"/>
                <ul>
                    <li><a href="../home/announcements.php">Announcements</a></li>                      
                    <li><a href="../home/events.php">Events</a></li>
                    <li><a href="../home/news.php">News</a></li>
                    <li><a href="../home/newsletter.php">Newsletter</a></li>
                    <li><a href="../home/campus-officials.php">Officials</a></li>
                </ul>
                </li>
                <li>
                  <label for="drop-2" class="toggle">Admissions</label>
                  <a href="../admissions.php">Admissions</a>
                  <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="../admissions/requirements.php">Requirements</a></li>
                    <li><a href="../admissions/flowchart.php">Enrolment Flowchart</a></li>
                    <li><a id="link-disable-btn" href="">Scholarship & Grants</a></li>                      
                </ul>
                </li>
                <li>
                  <label for="drop-3" class="toggle">Academics</label>
                  <a href="../academics.php">Academics</a>
                  <input type="checkbox" id="drop-3"/>
                <ul>
                    <li><a id="link-disable-btn" href="">Academic Calendar</a></li>
                    <li><a href="../academics/programs-offered.php">Programs Offered</a></li>
                    <li><a href="../academics/prospectus.php">Prospectus</a></li>                   
                     
                </ul>
                </li>
                <li>
                  <label for="drop-4" class="toggle">Campus Life</label>
                  <a href="../campus-life.php">Campus Life</a>
                  <input type="checkbox" id="drop-4"/>
                <ul>
                    <li><a href="../campus-life/arts-culture.php">Arts & Culture</a></li>    
                    <li><a id="link-disable-btn" href="">Calendar of Events</a></li>
                    <li><a href="../campus-life/sports-club.php">Sports Club</a></li>
                    <li><a href="../campus-life/students-organization.php">Student Organizations</a></li>
                </ul>
                </li>
                <li>
                  <label for="drop-5" class="toggle">Research</label>
                  <a href="../research.php">Research</a>
                  <input type="checkbox" id="drop-5"/>
                <ul>
                    <li><a href="../research/faculty-research.php">Faculty Research</a></li>                      
                    <li><a href="../research/student-research.php">Students Research</a></li>
                    <li><a href="../research/libraries.php">Libraries</a></li>
                </ul>
                </li>
                <li>
                  <label for="drop-6" class="toggle">Faculty & Staff</label>
                  <a href="../faculty-staff.php">Faculty<span id="remove-1"> & Staff</span></a>
                  <input type="checkbox" id="drop-6"/>
                <ul>
                    <li><a href="../faculty-staff/faculty.php">Faculty</a></li>                      
                    <li><a href="../faculty-staff/staff.php">Staff</a></li>
                    <li><a href="../faculty-staff/departments.php">Departments</a></li>
                </ul>
                </li>
                <li>
                  <label for="drop-7" class="toggle">Offices & Resources</label>
                  <a href="../offices-resources.php">Offices<span id="remove"> & Resources</span></a>
                  <input type="checkbox" id="drop-7"/>
                <ul>
                    <li><a href="../offices/administration.php">Administration</a></li>                      
                    <li><a href="../offices/academics.php">Academics</a></li>
                    <li><a href="../offices/semi-academics.php">Semi-Academics</a></li>
                    <li><a href="../offices/research-extension.php">Research & Extension</a></li>
                    <li><a id="link-disable-btn" href="">Resources</a></li>
                </ul>
                </li>
                <li>
                  <label for="drop-8" class="toggle">About</label>
                  <a href="../about.php">About</a>
                  <input type="checkbox" id="drop-8"/>
                <ul>
                    <li class="respo-btn-none" id="respo-btn-display"><a href="about.php">University</a></li>
                    <li><a href="../about/information.php">Overview</a></li>
                    <li><a href="../about/achievements.php">Achievements</a></li>
                    <li><a href="../about/facts.php">Facts & History</a></li>
                    <li><a href="../about/leadership.php">Leadership</a></li>
                    <li><a href="../about/msat-maigo.php">Maigo</a></li>
                </ul>
                </li>   
            </ul>
      </nav>
  </div>
</div>
<div class="body-outer-wrapper">
  <div class="body-inner-wrapper">
    <main>
      <h2 class="page-header-1">Announcement</h2>
      <div id="submenu" class="select-menu">
        <h2 id="page-header"><div class="select-btn burger-btn"  onclick="myBurger(this)">
          Announcement
              <i>
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </i>
          </div></h2>
          <ul class="options">
            <a href="../home.php"><li class="option"><span class="option-text">Home</span></li></a>
            <a href="announcements.php"><li class="option"><span class="option-text">Overview</span></li></a>
            <a href="announcements/all-a.php"><li class="option"><span class="option-text">Compiled Announcement</span></li></a>
          </ul>
      </div>
      <div class="col-1-con first">
            <div class="sidebar-col">
              <a href="announcements.php"><ul id="active-sbar">Overview</ul></a>
              <a href="announcements/all-announcements.php"><ul>Compiled Announcements</ul></a>
              <a href="../home.php"><ul id="sbar-back">« Back to Home</ul></a>
            </div>
      </div>
      <div class="col-2-con">
      <img id="prospectus-img-size" src="../about/about-img/announcement.jpg" alt="">
        <div class="col-2-2" id="responsive">
          <div class="col-1-subp">
            <img class="max-img" src="../about/about-img/underconstruction.jpg" alt="">
            <div id="announcements-link">
              <h1>Featured Announcements</h1>
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
$stmt = $pdo->query("SELECT * FROM items ORDER BY id DESC");
$newsCount = 0; // Counter for tracking the number of news items displayed

echo '<div class="announcement-grid">'; // Start of grid container

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if ($newsCount >= 4) {
        // Hide the oldest posted news after the fourth upload
        continue;
    }
    
    echo '<div class="featured_announcement announcements-col-1-2 con-fix">'; // Start of grid item

    $image_file = $row['image'];
    $pdf_file = $row['pdf'];
    $title = $row['title'];

    echo '<h1>';
    if (!empty($pdf_file)) {
        $pdf_title = pathinfo($pdf_file, PATHINFO_FILENAME); // Extract the filename without extension
        echo '<a href="../home/announcements/all-announcements/' . $pdf_file . '" target="_blank">' . $pdf_title . '</a>';
    }
    echo '</h1>';

    // Display the image within a container
    if (!empty($image_file)) {
        echo '<div class="image-container" style="max-height: 200px; overflow: hidden;">';
        echo '<img src="../home/announcements/all-announcements/' . $image_file . '" style="max-height: 100%;">';
        echo '</div>';
    }

    echo '</div>'; // End of grid item
    $newsCount++; // Increment the news count
}

echo '</div>'; // End of grid container
?>


            </div>
          </div>
        </div>
        <div class="col-2-3" id="responsive">
          <div class="col-2-subp">
            <h1>Related Links</h1>
            <div class="col-3-links">
              <p><a href="../about.php">About</a></p>
              <p><a href="https://www.facebook.com/MSUMaigoCIPP">Campus Information</a></p>
              <p><a href="https://www.facebook.com/MsumsatBuzz">Student Affairs</a></p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="con-fix"></div>
  </div>
</div>
<div class="ftr-border">
  <div class="ftr-header-in">
     
<div class="btn-con">
      <a href="#" id="backBtn"><i class='fas'>&#xf30a;</i>Back</a>
      <a href="#" id="topBtn">Top<i class='fas'>&#xf3bf;</i></a>
    </div>
  </div>
</div>
<div class="outFtrContainer-I">
  <div class="inFtrContainer-I ">
    <div class="msu-msat-footer ">
      <div class="col-design">
        <div class="ftr-col-1"> 
          <div class="ftr-col1-5">
            <ul id="ftr-header"><a>Directory</a></ul>
            <p>
              <a href="../faculty-staff/faculty-resources/faculty-directory.php">Faculty</a>,
              <a href="../faculty-staff/staff-resources/staff-directory.php">Staff</a>,
              <a href="../home/campus-officials.php">Officials</a>,
              <a href="../faculty-staff/departments/dse.php">Secondary</a>
              <a href="../faculty-staff/departments.php">Departments</a>,
               <a href="../offices-resources.php">Offices</a>,
              <a href="../research/libraries.php">eLibrary</a>
                </p>
          </div>
          <div class="ftr-col1-5 ">
            <ul id="ftr-header"><a>Social Network</a></ul> 
            <p>
              <a href="https://www.facebook.com/MSUMaigoCIPP">Campus Information,Press<br>and Publication</a>, &
              <a href="https://www.facebook.com/MsumsatBuzz">SSC</a>
            </p>
          </div>
          <div class="ftr-col1-5 ">
            <ul id="ftr-header"><a>Admissions</a></ul>
            <p><i class='bi bi-envelope-fill'></i>&nbsp;&nbsp;<a href="mailto:daisuke.cs19@gmail.com">admissions@g.msumsat.edu.ph</a></p>
            <p href="#">☎ +63 (063) 223 8641</p>
          </div>
          <div class="ftr-col1-5 ">
            <ul id="ftr-header"><a>Registrar</a></ul>
          <p><i class='bi bi-envelope-fill'></i>&nbsp;&nbsp;<a href="mailto:daisuke.cs19@gmail.com">registrar@g.msumsat.edu.ph</a></p>
          <p href="#">☎ +63 (063) 223 3794</p>
          </div>
          <div class="ftr-col1-5 ">
            <ul id="ftr-header"><a>Guidance Counselors</a></ul>
            <p><i class='bi bi-envelope-fill'></i>&nbsp;&nbsp;<a href="maillto:daisuke.cs19@gmail.com">guidance@g.msumsat.edu.ph</a></p>
            <p href="#">☎ +63 (063) 225 4634</p>
          </div>
        </div> 
      </div>
    </div>
    <div class="con-fix"></div>
  </div>
</div>
<div class="outFtrContainer-II">
  <div class="inFtrContainer-II">
    <div class="row">
      <div class="msu-system-footer ">       
        <div id="respo-seal" class="footer-one_quarter first ">
          <div  class="one_whole">
            <center><a href="https://www.msu.edu.ph/about-msu-seal-hymn.php"><img id="msu-seal" src="../images/msu-footer-seal.png" alt="Image 1"></a></center>
             </div>
        </div>
        <div class="footer-one_quarter ">
          <div class="one_whole">
            <h1>MINDANAO STATE UNIVERSITY</h1>
              <p>Founded on September 1, 1961 through Republic Act 1387 and Republic Act 1893,has evolved over the years in keeping with National and Local developments.</p>
          </div>
        </div>      
        <div class="footer-one_quarter ">
          <h1>ABOUT MSU SYSTEM</h1>
            <p class="btmspace-10">Learn more about the Mindanao State University System, its structure, how university works and the people behind it.</p>
            <a href="https://www.msu.edu.ph/about.php">MSU.EDU.PH</a>
        </div>
        <div class="footer-one_quarter ">
          <div class="one_whole">
            <h1>MSU-MSAT</h1>
            <p class="btmspace-20"> Poblacion 9206 Maigo,<br> Lanao del Norte, Philippines</p>
              <div class="col-1-35-ftr first">
                <li><a href="../about/facts-and-history/transparency-seal.php">Transparency Seal</a></li>
                <?php
// Retrieve and display the data from the database
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "login_register";

                  // Create a new PDO instance
                  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);                          // Retrieve and display the Citizen's Charter data
                          $stmtCC = $pdo->prepare("SELECT CC_title, CC_file_name FROM citizen_charters");
                          $stmtCC->execute();
                          $resultCC = $stmtCC->fetchAll(PDO::FETCH_ASSOC);

                          // Check if a new Citizen's Charter was successfully uploaded
                          if (isset($_POST['submitCC'])) {
                              // Retrieve the uploaded Citizen's Charter file name
                              $uploadedCCFileName = $_FILES['CC_file_name']['name'];

                          }
                          foreach ($resultCC as $rowCC) {
                              $CCTitle = $rowCC['CC_title'];
                              $CCFileName = $rowCC['CC_file_name'];
                              $CCFilePath = "../home/citizens-charter/" . $CCFileName;
                  ?>
                        <li><a href="<?php echo $CCFilePath; ?>"><?php echo $CCTitle; ?></a></li>
                        <?php
                        }
                        ?>
              </div>
              <div class="col-1-65-ftr">
                <div class="col-1-50-ftr">
                    <center><a href="../about/facts-and-history/transparency-seal.php"><img id="ftr-col-4-img-2" src="../images/transparency-seal.png" alt=""></a></center>
                </div>
                <div class="col-1-50-ftr">
                    <center><a href="<?php echo $CCFilePath; ?>"><img id="ftr-col-4-img-2" src="../images/cc_logo.png" alt=""></a></center>
                </div>
              </div>
          </div>
        </div>
      </div>       
    </div>  
  </div>
</div>
<div class="outFtrContainer-III">
  <div class="inFtrContainer-III">
    <div class="Footer-Group-I row">
          <p>&copy;2023 MSU-Maigo School of Arts and Trades</p>
    </div>       
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://kit.fontawesome.com/c919db264e.js" crossorigin="anonymous"></script>
<script src="../layout/scripts/real-time.js"></script>
<script>
  const backBtn = document.getElementById('backBtn');
  const topBtn = document.getElementById('topBtn');
  // Back Button
  backBtn.addEventListener('click', () => {
    window.history.back();
  });
  // Top Button
  topBtn.addEventListener('click', () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  });
</script>

</body>
</html>