<!DOCTYPE html>
<html>
<head>
<link rel="SHORTCUT ICON" href="images/1.ico"/>  
<title>Admissions | MSU Maigo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/footer.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/header.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/body.css" rel="stylesheet" type="text/css" media="all">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
<link href='https://fonts.googleapis.com/css?family=Source Sans Pro'>
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
             <li><a href="my.Account/login.php">My.Account</a></li>
          </ul>
        </div>
      </div>
        <div class="con-fix"></div>
    </div>
  </div>
  <div class="header-logo-outer-wrapper">
    <center>
      <a href="home.php">
      <img id="msat-seal-logo" src="images/header-img.png" alt="">
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
                    <a href="home.php">Home</a>
                    <input type="checkbox" id="drop-1"/>
                  <ul>
                      <li><a href="home/announcements.php">Announcements</a></li>                      
                      <li><a href="home/events.php">Events</a></li>
                      <li><a href="home/news.php">News</a></li>
                      <li><a href="home/newsletter.php">Newsletter</a></li>
                      <li><a href="home/campus-officials.php">Officials</a></li>
                  </ul>
                  </li>
                  <li>
                    <label for="drop-2" class="toggle">Admissions</label>
                    <a href="admissions.php" class="active">Admissions</a>
                    <input type="checkbox" id="drop-2"/>
                  <ul>
                      <li><a href="admissions/requirements.php">Requirements</a></li>
                      <li><a href="admissions/flowchart.php">Enrolment Flowchart</a></li>
                      <li><a id="link-disable-btn" href="">Scholarship & Grants</a></li>                      
                  </ul>
                  </li>
                  <li>
                    <label for="drop-3" class="toggle">Academics</label>
                    <a href="academics.php">Academics</a>
                    <input type="checkbox" id="drop-3"/>
                  <ul>
                      <li><a id="link-disable-btn" href="">Academic Calendar</a></li>
                          
                      <li><a href="academics/programs-offered.php">Programs Offered</a></li>
                      <li><a href="academics/prospectus.php">Prospectus</a></li>                   
                       
                  </ul>
                  </li>
                  <li>
                    <label for="drop-4" class="toggle">Campus Life</label>
                    <a href="campus-life.php">Campus Life</a>
                    <input type="checkbox" id="drop-4"/>
                  <ul>
                      <li><a href="campus-life/arts-culture.php">Arts & Culture</a></li>    
                      <li><a id="link-disable-btn" href="">Calendar of Events</a></li>
                      <li><a href="campus-life/sports-club.php">Sports Club</a></li>
                      <li><a href="campus-life/students-organization.php">Student Organizations</a></li>
                  </ul>
                  </li>
                  <li>
                    <label for="drop-5" class="toggle">Research</label>
                    <a href="research.php">Research</a>
                    <input type="checkbox" id="drop-5"/>
                  <ul>
                      <li><a href="research/faculty-research.php">Faculty Research</a></li>                      
                      <li><a href="research/student-research.php">Students Research</a></li>
                      <li><a href="research/libraries.php">Libraries</a></li>
                  </ul>
                  </li>
                  <li>
                    <label for="drop-6" class="toggle">Faculty & Staff</label>
                    <a href="faculty-staff.php">Faculty<span id="remove-1"> & Staff</span></a>
                    <input type="checkbox" id="drop-6"/>
                  <ul>
                      <li><a href="faculty-staff/faculty.php">Faculty</a></li>                      
                      <li><a href="faculty-staff/staff.php">Staff</a></li>
                      <li><a href="faculty-staff/departments.php">Departments</a></li>
                       
                  </ul>
                  </li>
                  <li>
                    <label for="drop-7" class="toggle">Offices & Resources</label>
                    <a href="offices-resources.php">Offices<span id="remove"> & Resources</span></a>
                    <input type="checkbox" id="drop-7"/>
                  <ul>
                      <li><a href="offices/administration.php">Administration</a></li>                      
                      <li><a href="offices/academics.php">Academics</a></li>
                      <li><a href="offices/semi-academics.php">Semi-Academics</a></li>
                      <li><a href="offices/research-extension.php">Research & Extension</a></li>
                    <li><a id="link-disable-btn" href="">Resources</a></li>
                  </ul>
                  </li>
                  <li>
                    <label for="drop-8" class="toggle">About</label>
                    <a href="about.php">About</a>
                    <input type="checkbox" id="drop-8"/>
                  <ul>
                      <li class="respo-btn-none" id="respo-btn-display"><a href="about.php">University</a></li>
                      <li><a href="about/information.php">Overview</a></li>
                      <li><a href="about/achievements.php">Achievements</a></li>
                      <li><a href="about/facts.php">Facts & History</a></li>
                      <li><a href="about/leadership.php">Leadership</a></li>
                      <li><a href="about/msat-maigo.php">Maigo</a></li>
                  </ul>
                  </li>   
              </ul>
        </nav>
    </div>
  </div>
<div class="body-outer-wrapper">
  <div class="body-inner-wrapper">
    <main>
      <h2 class="page-header">Admissions</h2>
      <div class="two_third first">
        <p class="textDesign">
          MSU-MSAT is composed of students coming from different cultures and religions from Mindanao 
          and all over the country as well as from other countries. We are committed to gearing up students 
          through education regardless of race, gender, religion, and financial capacity.
        </p> 
       
        <div class="section-col-1">
          <div class="section-card-1 con-fix">
            <div class="one_half-1 first">
              <img id="img-size" src="images/body-img/Undergraduate-img.jpg" alt="">
            </div>
            <div class="one_half">
              <a>Undergraduate</a>
              <p>
                We offers undergraduate programs in various fields, providing students with a comprehensive 
                education and practical experience to prepare them for their chosen careers.
              </p>
              <ul class="col-card first">
                <ul>
                  <li><a id="link-disable">Apply</a></li> 
                  <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfvlHQvgfdxWhM_g3e87tq5xMfn11hNCRCbD5thGeglzhkueg/viewform">Scholarships</a></li>
                  <li><a href="admissions/flowchart.php">Enrolment Flowchart</a></li>
                </ul>
              </ul>
              <ul class="col-card">
                <ul >
                  <li><a href="offices/semi-academics/guidance-counseling-office.php">Admission Office</a></li>
                  <li><a href="academics.php">Departments</a></li>
                  <li><a href="admissions/requirements.php">Requirements</a></li>
                </ul>
              </ul>
            </div>
          </div>
          <div class="section-card-2 con-fix">
            <div class="one_half-1 first">
              <img id="img-size" src="images/body-img/Graduate-img.jpg" alt="">
            </div>
            <div class="one_half">
              <a>Graduate</a>
              <p>
                We offers graduate programs across various fields, providing advanced education and research 
                opportunities to students looking to further their careers and expertise in their respective fields.
              </p>
              <ul>
                <ul>
                  <li><a id="link-disable">Apply</a></li>
                  <li><a href="academics/programs-offered/graduate-programs.php">Graduate Programs</a></li>
                  <li><a href="admissions/requirements.php">Requirements</a></li>
                </ul>
            </ul>
            </div>
          </div>  
          <div class="section-card-3 con-fix">
            <div class="one_half-1 first">
              <img id="img-size" src="images/body-img/SASE-img.jpg" alt="">
            </div>
            <div class="one_half">
              <a id="hover-a-1" href="admissions/sase-guidelines-results.php">SASE Guidelines and Results</a>
              <p>
                The MSU System Admission and Scholarship Examination is conducted annually every September 
                for incoming freshmen. Here you will find the results and guidelines/requirements for the exam.
              </p>
              <ul>
                <ul>
                  <li><a href="admissions/sase-guidelines-results/sase-results.php">SASE Results</a></li>
                  <li><a href="admissions/sase-guidelines-results/sase-application-guidelines.php">SASE Application Guidelines</a></li>
                  <li><a href="admissions/requirements.php">Requirements</a></li>
                </ul>
              </ul>
            </div>
          </div>
          <div class="section-card-4 con-fix">
            <div class="one_half-1 first">
              <img id="img-size" src="images/body-img/Examination-Results-img.png" alt="">
            </div>
            <div class="one_half">
              <a>Examination and Results</a>
              <p>
                The examination results of the Integrated Developmental School (IDS) admission 
                are listed here as well as the requirements.
              </p>
              <ul>
                <ul>
                  <li><a href="admissions/requirements.php">Requirements</a></li>
                  <li><a id="link-disable">Results (Junior High)</a></li>
                  <li><a id="link-disable">Results (Senior High)</a></li>
                </ul>
            </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="one_third">
        <div class="section-col-2 rounded ">
          <img id="admission-size" src="images/semi-header-img/admission-img.png"> 
          <div class="board-1">
            <h1>ADMISSIONS: BRIEF INFO</h1>
            <h3>CONTACT</h3>
              <ul>
                <li>                
                  <i class='bi bi-envelope-fill'></i>
                  <a id="link-hover" href="#">admissions@g.msumsat.edu.ph</a></li>
                <li>
                  ☎<a>+63 (063) 223 8641</a></li>
              </ul>
            <h3>STUDENT ENROLLMENT</h3>
              <ul>
                <li><a>Undergraduate: 1003</a></li>
                <li><a>Graduate: 46</a></li>
                <li><a>Secondary Graduate: 500</a></li>

              </ul>
            <h3>UNDERGRADUATE ADMISSION</h3>
              <ul id="ul-adjust">
                <li><a>High School graduates seeking admission to degree and non-degree 
                  education must pass the MSU-SASE.</a></li>
                <li><a>MSU-SASE will be held every September or November, results will 
                  be posted sometime in January or February next year.</a></li>
                <li><a>Transferees from within the MSU System can be automatically admitted 
                  if his/her SASE rating is above 70, otherwise he/she has to take the MSU-MSAT College 
                  Admission Test (MCAT).</a></li>
              </ul>
              <p><a href="">
                <i class='fas fa-chevron-circle-right'></i>
                LEARN MORE</a>
              </p>
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
                  <a href="faculty-staff/faculty-resources/faculty-directory.php">Faculty</a>,
                  <a href="faculty-staff/staff-resources/staff-directory.php">Staff</a>,
                  <a href="home/campus-officials.php">Officials</a>,
                  <a href="faculty-staff/departments/dse.php">Secondary</a>
                  <a href="faculty-staff/departments.php">Departments</a>,
                  <a href="offices-resources.php">Offices</a>,
                  <a href="research/libraries.php">eLibrary</a>
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
            <center><a href="home.php"><img id="msu-seal" src="images/msu-footer-seal.png" alt="Image 1"></a></center>
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
                <li><a href="about/facts-and-history/transparency-seal.php">Transparency Seal</a></li>
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
                              $CCFilePath = "home/citizens-charter/" . $CCFileName;
                  ?>
                        <li><a href="<?php echo $CCFilePath; ?>"><?php echo $CCTitle; ?></a></li>
                        <?php
                        }
                        ?>
              </div>
              <div class="col-1-65-ftr">
                <div class="col-1-50-ftr">
                    <center><a href="about/facts-and-history/transparency-seal.php"><img id="ftr-col-4-img-2" src="images/transparency-seal.png" alt=""></a></center>

                </div>
                <div class="col-1-50-ftr">
                    <center><a href="<?php echo $CCFilePath; ?>"><img id="ftr-col-4-img-2" src="images/cc_logo.png" alt=""></a></center>
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
<script src="https://kit.fontawesome.com/c919db264e.js" crossorigin="anonymous"></script>
<script src="layout/scripts/script.js"></script>
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