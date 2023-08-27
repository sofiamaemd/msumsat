<!DOCTYPE html>
<html>
<head>
<link rel="SHORTCUT ICON" href="../../../images/1.ico"/>
<title>Staff Directory | Home | MSU Maigo</title><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../../../layout/styles/footer.css" rel="stylesheet" type="text/css" media="all">
<link href="../../../layout/styles/header.css" rel="stylesheet" type="text/css" media="all">
<link href="../../../layout/styles/body.css" rel="stylesheet" type="text/css" media="all">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
<link href='https://fonts.googleapis.com/css?family=Source Sans Pro'>
<link rel="stylesheet" href="../../../layout/styles/submenu.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
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
            <li><a href="../../../my.Account/login.php">My.Account</a></li>
          </ul>
      </div>
    </div>
      <div class="con-fix"></div>
  </div>
</div>
<div class="header-logo-outer-wrapper">
  <center>
    <a href="../../../home.php">
    <img id="msat-seal-logo" src="../../../images/header-img.png" alt="">
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
                  <a href="../../../home.php" class="active">Home</a>
                  <input type="checkbox" id="drop-1"/>
                <ul>
                    <li><a href="../../../home/announcements.php">Announcements</a></li>                      
                    <li><a href="../../../home/events.php">Events</a></li>
                    <li><a href="../../../home/news.php">News</a></li>
                    <li><a href="../../../home/newsletter.php">Newsletter</a></li>
                    <li><a href="../../../home/campus-officials.php">Officials</a></li>
                </ul>
                </li>
                <li>
                  <label for="drop-2" class="toggle">Admissions</label>
                  <a href="../../../admissions.php">Admissions</a>
                  <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="../../../admissions/requirements.php">Requirements</a></li>
                    <li><a href="../../../admissions/flowchart.php">Enrolment Flowchart</a></li>
                    <li><a id="link-disable-btn" href="">Scholarship & Grants</a></li>                      
                </ul>
                </li>
                <li>
                  <label for="drop-3" class="toggle">Academics</label>
                  <a href="../../../academics.php">Academics</a>
                  <input type="checkbox" id="drop-3"/>
                <ul>
                    <li><a id="link-disable-btn" href="">Academic Calendar</a></li>
                        
                    <li><a href="../../../academics/programs-offered.php">Programs Offered</a></li>
                    <li><a href="../../../academics/prospectus.php">Prospectus</a></li>                   
                     
                </ul>
                </li>
                <li>
                  <label for="drop-4" class="toggle">Campus Life</label>
                  <a href="../../campus-life.php">Campus Life</a>
                  <input type="checkbox" id="drop-4"/>
                <ul>
                    <li><a href="../../campus-life/arts-culture.php">Arts & Culture</a></li>    
                    <li><a id="link-disable-btn" href="">Calendar of Events</a></li>
                    <li><a href="../../../campus-life/sports-club.php">Sports Club</a></li>
                    <li><a href="../../../campus-life/students-organization.php">Student Organizations</a></li>
                </ul>
                </li>
                <li>
                  <label for="drop-5" class="toggle">Research</label>
                  <a href="../../../research.php">Research</a>
                  <input type="checkbox" id="drop-5"/>
                <ul>
                    <li><a href="../../../research/faculty-research.php">Faculty Research</a></li>                      
                    <li><a href="../../../research/student-research.php">Students Research</a></li>
                    <li><a href="../../../research/libraries.php">Libraries</a></li>
                </ul>
                </li>
                <li>
                  <label for="drop-6" class="toggle">Faculty & Staff</label>
                  <a href="../../faculty-staff.php">Faculty<span id="remove-1"> & Staff</span></a>
                  <input type="checkbox" id="drop-6"/>
                <ul>
                    <li><a href="../../../faculty-staff/faculty.php">Faculty</a></li>                      
                    <li><a href="../../../faculty-staff/staff.php">Staff</a></li>
                    <li><a href="../../../faculty-staff/departments.php">Departments</a></li>
                     
                </ul>
                </li>
                <li>
                  <label for="drop-7" class="toggle">Offices & Resources</label>
                  <a href="../../../offices-resources.php">Offices<span id="remove"> & Resources</span></a>
                  <input type="checkbox" id="drop-7"/>
                <ul>
                    <li><a href="../../../offices/administration.php">Administration</a></li>                      
                    <li><a href="../../../offices/academics.php">Academics</a></li>
                    <li><a href="../../../offices/semi-academics.php">Semi-Academics</a></li>
                    <li><a href="../../../offices/research-extension.php">Research & Extension</a></li>
                    <li><a id="link-disable-btn" href="">Resources</a></li>
                </ul>
                </li>
                <li>
                  <label for="drop-8" class="toggle">About</label>
                  <a href="../../../about.php">About</a>
                  <input type="checkbox" id="drop-8"/>
                <ul>
                    <li class="respo-btn-none" id="respo-btn-display"><a href="about.php">University</a></li>
                    <li><a href="../../../about/information.php">Overview</a></li>
                    <li><a href="../../../about/achievements.php">Achievements</a></li>
                    <li><a href="../../../about/facts.php">Facts & History</a></li>
                    <li><a href="../../../about/leadership.php">Leadership</a></li>
                    <li><a href="../../../about/msat-maigo.php">Maigo</a></li>
                </ul>
                </li>   
            </ul>
      </nav>
  </div>
</div>
<div class="campus-head-con-out">
  <div class="campus-head-con-in">
    <div class="campus-head-one-whole">
      <div class="campus-head-col-1">
        <center><img id="max-img" src="../../../home/campus-officials/campus-officials-img/chancellor-img.png" alt=""></center>
          <ul>
            <h1>Atty. Jamaloden A. Basar</h1>
            <h2>Campus Head</h2>
            <ul>
              <p>Telephone: xxx - xxxx / xxx - xxxx</p>
              <p>Email Add: campus_head.msat@msu.edu.ph</p>
            </ul>
          </ul>
      </div>
      <div class="campus-head-col-2">
        <div class="details-design">
          <p>
            <span>Attorney Jamaloden A. Bazar</span>'s journey to becoming the<span>Chancellor</span>of Mindanao State University - 
            Maigo School of Arts and Trades (MSU-MSAT) is marked by his passion for education and his commitment 
            to serving his community.
          </p>
          <p> 
            After completing his Bachelor of Laws degree at <span>San Beda University</span> and passing the Bar Exam in 2014, 
            with a remarkable rating of <span>86.90%</span>. Atty. Bazar worked as a litigation associate at the Quasha 
            Ancheta Pena & Nolasco Law Office and then as an associate at the Bengzon Negre Untalan Law Offices. 
            In 2017, he decided to pursue a master's degree in business administration (MBA) at MSU-MSAT in Marawi City, 
            Lanao del Sur, where he excelled academically and socially.
          </p>
          <p> 
            After completing his MBA in 2019,<span>Atty. Bazar</span> continued to pursue his passion for education and became 
            an adjunct faculty member at <span>MSU-MSAT</span>, where he taught business law and ethics. He also served as a legal consultant 
            for the Office of the Vice President of the Philippines and as the president of the Integrated Bar of the 
            Philippines (IBP) Lanao del Sur Chapter.
          </p>
          <p>
            In 2020,<span>Atty. Bazar</span> was appointed as the Campus Head of MSU-MSAT's satellite campus in the municipality 
            of Maigo, Lanao del Norte. As the <span>Chancellor</span>, he is responsible for the overall administration 
            of the campus, including academic affairs, student services, and community engagement. He is also tasked 
            with implementing the school's vision and mission and ensuring that it aligns with the needs and 
            aspirations of the community.
          </p>
          <p>
            Under his leadership, <span>MSU-MSAT</span> has undergone significant improvements, including the 
            renovation of its facilities, the acquisition of new equipment and supplies, and the expansion of its 
            academic programs. He has also initiated several community outreach projects, including a scholarship 
            program for underprivileged students and a legal aid clinic for the community.
          </p>
          <p>
            His passion for education and community service has not gone unnoticed. In 2021, he was 
            recognized by the <span>Regional Development Council of Region X</span> as one of the Outstanding 
            Young Leaders in Northern Mindanao. He was also awarded the prestigious <span>Ten Outstanding Young Men (TOYM)</span> award in 
            2022, which recognizes individuals who have made significant contributions to their respective fields 
            and communities.
          </p>
          <p>
            Overall, <span>Atty. Jamaloden A. Bazar</span>'s journey to becoming the Chancellor of MSU-MSAT is a 
            testament to his commitment to education, community service, and leadership. His dedication and 
            hard work have brought significant positive change to the campus and the community it serves.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="body-outer-wrapper">
  <div class="body-inner-wrapper">
    <main>
        <div id="submenu" class="select-menu">
            <h2 id="page-header"><div class="select-btn burger-btn"  onclick="myBurger(this)">
              Campus Officials
                   
                  <i><div class="bar1"></div><div class="bar2"></div><div class="bar3"></div></i>
              </div></h2>
              <ul class="options">
                <a href="../../campus-officials.php"><li class="option"><span class="option-text">Campus Officials</span></li></a>
                <a href="overall-directory.php"><li class="option"><span class="option-text">Overall Directory</span></li></a>
                <a href="board-of-regents.php"><li class="option"><span class="option-text">Board of Regents</span></li></a>
                <a href="msu-system-officials.php"><li class="option"><span class="option-text">MSU System Officials</span></li></a>
                <a href="department-heads.php"><li class="option"><span class="option-text">Department Heads</span></li></a>
                <a href="faculty-directory.php"><li class="option"><span class="option-text">Faculty Directory</span></li></a>
                <a href="staff-directory.php"><li class="option"><span class="option-text">Staff Directory</span></li></a>
              </ul>
          </div>
          <div class="col-1-con first">
                <div class="sidebar-col">
                  <a href="overall-directory.php"><ul>Overall Directory </ul></a>
                  <a href="board-of-regents.php"><ul>Board of Regents</ul></a>
                  <a href="msu-system-officials.php"><ul>MSU System Officials</ul></a>
                  <a href="department-heads.php"><ul>Department Heads</ul></a>
                  <a href="faculty-directory.php"><ul>Faculty Directory</ul></a>
                  <a href="staff-directory.php"><ul id="active-sbar">Staff Directory</ul></a>
                  <a href="../../campus-officials.php"><ul id="sbar-back">« Back to Campus Officials</ul></a>
                </div>
          </div>
          <div class="col-2-con">
            <div class="col-2-2" id="responsive">
              <div class="col-1-subp">
                <div class="slider">
                    <div class="slider-wrapper">
                      <?php
                        // Assuming you have already established a database connection
                        $mysqli = new mysqli("localhost", "root", "", "login_register");

                        // Check if the connection was successful
                        if ($mysqli->connect_errno) {
                            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                            exit();
                        }

                        // Retrieve employee information from the database
                        $result = $mysqli->query("SELECT id, fullname, position, title, comment, image FROM staff_directory");
                        if ($result && $result->num_rows > 0) {
                            $count = 0;

                            echo '<div class="slide">';
                            echo '<div class="collapse-con">';

                            while ($row = $result->fetch_assoc()) {
                                if ($count % 10 === 0 && $count > 0) {
                                    echo '</div>'; // Close the previous collapse-con
                                    echo '</div>'; // Close the previous slide

                                    echo '<div class="slide">';
                                    echo '<div class="collapse-con">';
                                }

                                echo '<div class="collapse">';
                                echo '<button class="collapse-btn" onclick="toggleCollapse(this)">' . $row['fullname'] . '</button>';
                                echo '<div class="collapse-content">';
                                echo '<div class="pair con-fix">';
                                echo '<div class="collapse-1-whole">';
                                echo '<div class="img-con">';
                                echo '<img src="../../../my.Account/admin/' . $row['image'] . '" alt="">';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="collapse-1-whole">';
                                echo '<div class="official-contents">';
                                echo '<h1>' . $row['fullname'] . '</h1>';
                                echo '<h2>' . $row['position'] . '</h2>';
                                echo '<h3>' . $row['title'] . '</h3>';
                                echo '<h4>' . $row['comment'] . '</h4>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';

                                $count++;
                            }

                            echo '</div>'; // Close the last collapse-con
                            echo '</div>'; // Close the last slide
                        } else {
                            echo "No employee information found.";
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
            <div class="col-2-3" id="responsive">
              <div class="col-2-subp">
                <h1>Related Links</h1>
                <div class="col-3-links">
                    <p><a href="../../../about/facts-and-history/msu-system.php">MSU System</a></p>
                    <p><a href="../../../about/achievements/recognitions.php">Recognitions</a></p>
                    <p><a href="../../../faculty-staff.php">Faculty & Staff</a></p>
                    <p><a href="../../../offices-resources.php">Offices & Resources</a></p>
                    <p><a href="../../../academics/departments.php">Departments</a></p>
                    <p><a href="../../../faculty-staff/departments/dse.php">Secondary</a></p>
                  </div>
              </div>
            </div>
          </div>
    </main>
    <div class="con-fix"></div>
  </div>
</div>
<div class="footer-group">
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
                  <a href="../../../faculty-staff/faculty-resources/faculty-directory.php">Faculty</a>,
                  <a href="../../../faculty-staff/staff-resources/staff-directory.php">Staff</a>,
                  <a href="../../../home/campus-officials.php">Officials</a>,
                  <a href="../../../faculty-staff/departments/dse.php">Secondary</a>
                  <a href="../../../faculty-staff/departments.php">Departments</a>,
                   <a href="../../../offices-resources.php">Offices</a>,
                  <a href="../../../research/libraries.php">eLibrary</a>
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
              <center><a href="https://www.msu.edu.ph/about-msu-seal-hymn.php"><img id="msu-seal" src="../../../images/msu-footer-seal.png" alt="Image 1"></a></center>
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
                  <li><a href="../../../about/facts-and-history/transparency-seal.php">Transparency Seal</a></li>
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
                              $CCFilePath = "../../../home/citizens-charter/" . $CCFileName;
                  ?>
                        <li><a href="<?php echo $CCFilePath; ?>"><?php echo $CCTitle; ?></a></li>
                        <?php
                        }
                        ?>
                </div>
                <div class="col-1-65-ftr">
                  <div class="col-1-50-ftr">
                      <center><a href="../../../about/facts-and-history/transparency-seal.php"><img id="ftr-col-4-img-2" src="../../../images/transparency-seal.png" alt=""></a></center>
                  </div>
                  <div class="col-1-50-ftr">
                      <center><a href="<?php echo $CCFilePath; ?>"><img id="ftr-col-4-img-2" src="../../../images/cc_logo.png" alt=""></a></center>
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
</div>
<!-- JAVASCRIPTS --> 
<script src="../../../layout/scripts/jquery.min.js"></script> 
<script src="https://kit.fontawesome.com/c919db264e.js" crossorigin="anonymous"></script>
<script src="../../../layout/scripts/real-time.js"></script>
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
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<!-- Collapse Campus Officials --> 
<script>
// collapses

function toggleCollapse(button) {
var collapseContent = button.nextElementSibling;
var container = button.closest(".collapse-con");
var allCollapses = container.querySelectorAll(".collapse");
// close all other collapses
  for (var i = 0; i < allCollapses.length; i++) {
    if (allCollapses[i] !== collapseContent.parentElement) {
      allCollapses[i].querySelector(".collapse-content").classList.remove("expanded");
    }
  }
// toggle the clicked collapse
collapseContent.classList.toggle("expanded");}
</script>
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