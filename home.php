<?php require_once("my.Account/database.php");?>
<?php
  // Check if the username and password are submitted
  if (isset($_POST['username']) && isset($_POST['password'])) {
      // Database configuration
      $servername = "localhost"; // Replace with your server name
      $username = "root"; // Replace with your database username
      $password = ""; // Replace with your database password
      $dbname = "login_register"; // Replace with your database name

      // Create a new MySQLi instance
      $mysqli = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
      }

      // Retrieve the login credentials
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Prepare the query to fetch the user's role based on the provided username and password
      $query = "SELECT role FROM users WHERE username = ? AND password = ?";
      $stmt = $mysqli->prepare($query);
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      $stmt->bind_result($role);

      // Check if a matching user is found
  if ($stmt->fetch()) {
    // Display the welcome message based on the user's role
    if ('student' === $role) {
        echo "Welcome, student!";
    } elseif ($role === 'alumni') {
        echo "Welcome, alumni!";
    } elseif ($role === 'admin') {
        echo "You are an admin. Welcome!";
    } else {
        echo "Unknown role. Access denied.";
    }
  } else {
    echo "Invalid login credentials.";
  }
  } 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="SHORTCUT ICON" href="images\1.ico"/>
<title>Home | MSU Maigo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/footer.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/header.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/body.css" rel="stylesheet" type="text/css" media="all">
<link href="my.Account/style/style.css" rel="stylesheet" type="text/css" media="all">
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
                        <label for="drop-1" class="toggle toggle-1">Home</label>
                        <a href="home.php" class="active">Home</a>
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
                      <a href="admissions.php">Admissions</a>
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
  <div id="respo-wrapper" class="wrapper">
      <!-- Slideshow -->
        <div class="slideshow-container">
            <?php
            // Assuming you have already established a database connection
            $mysqli = new mysqli("localhost", "root", "", "login_register");

            // Check if the connection was successful
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                exit();
            }
            // Fetch the 8 latest banner images from the database
            $selectQuery = "SELECT * FROM banner ORDER BY id DESC LIMIT 8";
            $result = $mysqli->query($selectQuery);
            if (!$result) {
                echo "Error fetching banner images: " . $mysqli->error;
                exit();
            }
            while ($row = $result->fetch_assoc()) {
                echo '<div class="slides fade">';
                echo '<img id="slide-img-size" src="my.Account/admin/' . $row['image_path'] . '" alt="' . $row['title'] . '">';
                echo '</div>';
            }
            ?>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div id="respo-img"></div>
      <!-- DOTS -->
        <div style="text-align:center">
            <?php
            // Get the total number of banner images
            $countQuery = "SELECT COUNT(*) AS total FROM banner";
            $countResult = $mysqli->query($countQuery);
            if (!$countResult) {
                echo "Error getting total banner count: " . $mysqli->error;
                exit();
            }
            $countRow = $countResult->fetch_assoc();
            $totalBanners = $countRow['total'];

            // Display the dots for each banner image
            for ($i = 1; $i <= min(8, $totalBanners); $i++) {
                echo '<span class="dot" onclick="currentSlide(' . $i . ')"></span>';
            }
            ?>
        </div>
  </div>
    <div class="body-outer-wrapper">
      <div class="body-inner-wrapper">
        <main class="Body-Contents con-fix"> 
          <div class="1st-row">
            <div class="Directives con-fix">
              <div class="col-1-5 first">
                <em class="heading">Prospective Students</em>
                <div class="one_whole d-con fix-height">
                  <div class="first-row_one-third first ">
                    <center><img id="first-row-img" src="images/1st-Row-img/pros-student-img.png" alt=""></center>
                  </div>
                  <div class="first-row_two-third">
                    <a href="admissions.php">Undergraduate</a><br>
                    <a href="admissions.php">Graduate</a><br>
                    <a href="#">MSU SASE</a><br>
                    <a href="about/information.php">Visit MSAT</a><br>
                    <a href="faculty-staff/departments.php">Departments</a><br>
                  </div>
                <div class="con-fix"></div>
                </div>
              </div>
              <div class="col-1-5"> 
                <em class="heading">Current Students</em>
                <div class="one_whole d-con fix-height">
                  <div class="first-row_one-third first">
                    <center><img id="first-row-img-1" src="images/1st-Row-img/cur-student-img.png" alt=""></center>
                  </div>
                  <div class="first-row_two-third">
                    <a href="academics/programs-offered.php">Programs Offered</a><br>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfvlHQvgfdxWhM_g3e87tq5xMfn11hNCRCbD5thGeglzhkueg/viewform">Scholarships & Grants</a><br>
                    <a href="academics/prospectus.php">Prospectus</a><br>
                    <a href="research/libraries/elibrary.php">eLibraries</a><br>
                    <a>Downloads</a><br>
                  </div>
                  <div class="con-fix"></div>
                </div>
              </div>
              <div class="col-1-5"> 
                <em class="heading">Faculty & Staff</em>
                <div class="one_whole d-con fix-height">
                  <div class="first-row_one-third first">
                    <center><img id="first-row-img-2" src="images/1st-Row-img/fac-staff-img.png" alt=""></center>
                  </div>
                  <div class="first-row_two-third">
                    <a href="offices/administration.php">Administration</a><br>
                    <a href="faculty-staff/faculty.php">Faculty Directory</a><br>
                    <a href="faculty-staff/staff.php">Staff Directory</a><br>
                    <a href="offices-resources.php">Offices</a><br>
                    <a>Downloads</a><br>
                  </div>
                  <div class="con-fix"></div>
                </div>
              </div>
              <div id="respo-af"class="col-1-5"> 
                  <em class="heading">Alumni & Friends</em><!-- Disable this link & Add to Recommendation -->
                  <div class="one_whole d-con fix-height">
                    <div class="first-row_one-third first">
                      <center><img id="first-row-img-3" src="images/1st-Row-img/alum-friends-img.png" alt=""></center>
                    </div>
                    <div class="first-row_two-third">
                      <a>Documents & Records</a><br><!-- Disable this link & Add to Recommendation -->
                      <a href="my.Account/login.php">Alumni Registry</a><br><!-- Disable this link & Add to Recommendation -->
                      <a>Jobs Database</a><br><!-- Disable this link & Add to Recommendation -->
                      <a>Donation</a><br><!-- Disable this link & Add to Recommendation --> 
                      <a>Downloads</a>
                    </div>
                    <div class="con-fix"></div>
                  </div>
              </div>
              <div id="respo-services" class="col-1-5"> 
                  <em class="heading">Online Services System</em>
                  <div class="one_whole d-con fix-height">
                    <div class="first-row_one-third first">
                      <center><img id="first-row-img-4" src="images/1st-Row-img/onli-services-img.png" alt=""></center>
                    </div>
                    <div class="first-row_two-third respo-row">
                    <a>Online Appointment</a><br>
                    <a>Hotel Management</a><br>
                    <a>Medical Healthcare</a><br>
                    <a href="my.Account/login.php">Student Portal</a><br>
                    <a>Grading System</a><br>
                    </div>
                    <div class="con-fix"></div>
                  </div>
              </div>
            </div>
          </div>
          <div class="2nd-row one_whole">
            <div class="events first" > 
              <h3>Events</h3>
                <div class="Event-Section">
                  <div class="EDesign" id="eventscrollable-div">
                        <?php
                            // Retrieve event details from the database
                            $sql = "SELECT * FROM event_schedule ORDER BY id DESC";
                            $result = $db->query($sql);
                            if ($result) {
                                if ($result->num_rows > 0) {
                                    // Loop through each row of data
                                    while ($row = $result->fetch_assoc()) {
                                        // Display event details using the provided HTML design
                                        echo '<div class="row-border btmspace-10 con-fix">';
                                        echo '<div id="e-adjust-1" class="event-col-1 first">';
                                        echo '<a href="#">';
                                        echo '<div class="eventName-Day">';
                                        echo $row['day'];
                                        echo '</div>';
                                        echo '<div class="eventNo-Date">';
                                        echo $row['date'];
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</div>';
                                        echo '<div id="e-adjust-2" class="event-col-2">';
                                        echo '<a href="my.Account/admin/' . $row['pdf_path'] . '" target="_blank">';
                                        echo $row['event_name'];
                                        echo '</a>';
                                        echo '<h1>';
                                        echo $row['start_time'] . ' - ' . $row['end_time'];
                                        echo '</h1>';
                                        echo '<h2>';
                                        echo $row['location'];
                                        echo '</h2>';
                                        echo '</div>';
                                        echo '<div class="delete-event">';
                                        echo '<form method="POST" action="">';
                                        echo '<input type="hidden" name="eventId" value="' . $row['id'] . '">';
                                        echo '</form>';
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
                        ?> 
                      <div id="respo-events" class="con-fix"></div>
                  </div>
                </div>
            </div>
            <div class="announcement" > 
             <h2>Announcement</h2>
                <div class="a-row-design" id="announcementscrollable-div"> 
                    <div class="row-1-1">
                      <?php
                        $res = mysqli_query($db, "SELECT * FROM items ORDER BY id DESC");
                        while ($row = mysqli_fetch_array($res)) {
                            echo '<div class="item">';
                            
                            $image_file = $row['image'];
                            $pdf_file = $row['pdf'];
                            $title = $row['title'];

                            echo '<h1>';
                            if (!empty($pdf_file)) {
                                $pdf_title = pathinfo($pdf_file, PATHINFO_FILENAME); // Extract the filename without extension
                                echo '<a href="home/announcements/all-announcements/' . $pdf_file . '" target="_blank">' . $pdf_title . '</a>';
                            }
                            echo '</h1>';

                            echo '<h2>' . $title . '</h2>';

                            // Display the image
                            if (!empty($image_file)) {
                                echo '<img src="home/announcements/all-announcements/' . $image_file . '">';
                            }
                            echo '</div>';
                        }
                      ?>
                    </div>
                </div>
            </div>
            <div class="con-fix"></div>
            <div class="news">
                <h2>News</h2>
                <div class="news-row con-fix">
                    <div class="respo-news">
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

                        // Retrieve data from the news table
                        $stmt = $pdo->query("SELECT * FROM news ORDER BY id DESC");
                        $newsCount = 0; // Counter for tracking the number of news items displayed
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            if ($newsCount >= 4) {
                                // Hide the oldest posted news after the fourth upload
                                continue;
                            }

                            $imagePath = $row['image_path'];
                            $pdfPath = $row['pdf_path'];
                            $pdfTitle = pathinfo($pdfPath, PATHINFO_FILENAME);

                            echo '<div class="news-col-1-4">';
                            echo '<a href="news/all-news/' . (isset($row['pdf_path']) ? $row['pdf_path'] : '#') . '">';
                            echo '<img id="img-size-news" src="news/all-news/' . $imagePath . '" alt="">';
                            echo '<div class="news-title">';
                            echo '<p>' . $pdfTitle . '</p>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';

                            $newsCount++; // Increment the news count
                        }
                      ?>
                    </div>
                </div>
            </div>
            <div class="news-letter con-fix">
              <h2>Newsletter</h2>
              <div class="news-letter-row con-fix">
                <?php
                  // Assuming you have already established a database connection
                  $mysqli = new mysqli("localhost", "root", "", "login_register");

                  // Check if the connection was successful
                  if ($mysqli->connect_errno) {
                      echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                      exit();
                  }
                  // Retrieve newsletter information from the database, sorted by ID in descending order
                  $result = $mysqli->query("SELECT id, newsletter_img, newsletter_pdf, newsletter_title FROM newsletters ORDER BY id DESC");
                  if ($result && $result->num_rows > 0) {
                      $counter = 0; // Counter variable
                      while ($row = $result->fetch_assoc()) {
                          if ($counter >= 3) {
                              break; // Break the loop after the 3rd iteration
                          }
                          echo '<div class="">';
                          echo '<a href="?id=' . $row['id'] . '" </a>';
                          echo '<div id="respo-newsletter" class="news-letter-col-1-3">';
                          echo '<a href="home/newsletter/all-newsletter/' . $row['newsletter_pdf'] . '" download>';
                          echo '<img id="img-size-newsletter" src="home/newsletter/all-newsletter/' . $row['newsletter_img'] . '" alt=""></a>';
                          echo '<div class="download-section">';
                          echo '<h1 style="color:maroon;"><a href="home/newsletter/all-newsletter/' . $row['newsletter_pdf'] . '" download>' . basename($row['newsletter_pdf'], ".pdf") . '</a></h1>';
                          echo '<p>' . $row['newsletter_title'] . '</p>';
                          echo '<div id="respo-d-btn" class="button-position">';
                          echo '<a href="home/newsletter/all-newsletter/' . $row['newsletter_pdf'] . '" download><button id="download-button">Download<span id="d-icon">↩</span></button></a>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';

                          $counter++; // Increment the counter
                      }
                  } else {
                      echo "No newsletters found.";
                  }
                  $result->free_result();
                  $mysqli->close();
                ?>
              </div>
            </div>
            <div class="campus_officials">
              <?php
                  // Database connection (adjust these values according to your setup)
                  $servername = 'localhost';
                  $username = 'root';
                  $password = '';
                  $dbname = 'login_register';

                  // Create a new PDO instance for database connection
                  $dsn = "mysql:host=$servername;dbname=$dbname";
                  $pdo = new PDO($dsn, $username, $password);

                  // Retrieve the form data from the database
                  $stmt = $pdo->prepare("SELECT * FROM featured_officials");
                  $stmt->execute();
                  $formData = $stmt->fetchAll(PDO::FETCH_ASSOC);
              ?>
              <?php
                echo '<div class="officials con-fix">';
                echo '<center><h2>Campus Officials</h2>';
                echo '<div class="news-letter-row con-fix">';

                $counter = 0; // Track the number of officials

                foreach ($formData as $data) {
                    if ($counter == 0) {
                        echo '<div class="official-one-whole">';
                        echo '<div class="official-row-1-col-1" id="respo-official">';
                        echo '<img src="my.Account/admin/' . $data['image'] . '" alt="Uploaded Image">';
                        echo '<p>' . $data['name'] . '<br><span>' . $data['profession'] . '</span></p>';
                        echo '<div class="official-actions">';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    } elseif ($counter <= 3) {
                        if ($counter == 1) {
                            echo '<div class="official-one-whole">';
                        }
                        echo '<div class="official-row-2-col-3" id="respo-official">';
                        echo '<img src="my.Account/admin/' . $data['image'] . '" alt="Uploaded Image">';
                        echo '<p>' . $data['name'] . '<br><span>' . $data['profession'] . '</span></p>';
                        echo '<div class="official-actions">';
                        echo '</div>';
                        echo '</div>';
                        if ($counter == 3) {
                            echo '</div>';
                        }
                    } elseif ($counter <= 5) {
                        if ($counter == 4) {
                            echo '<div class="official-one-whole">';
                        }
                        echo '<div class="official-row-3-col-2" id="respo-official">';
                        echo '<img src="my.Account/admin/' . $data['image'] . '" alt="Uploaded Image">';
                        echo '<p>' . $data['name'] . '<br><span>' . $data['profession'] . '</span></p>';
                        echo '<div class="official-actions">';
                        echo '</div>';
                        echo '</div>';
                        if ($counter == 5) {
                            echo '</div>';
                        }
                    } else {
                        break; // Stop iterating after the first 5 officials
                    }

                    $counter++;
                }
                echo '<div class="official-one-whole">';
                echo '<div class="link-view-all">';
                echo '<a href="home/campus-officials.php">View All</a>';
                echo '</div>';
                echo '</div>';

                echo '</div></center>';
                echo '</div>';
              ?>
            </div>
            <div class="map-outer-wrapper">
              <div class="map-inner-wrapper">
                  <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3090.617275455752!2d123.95812780114801!3d8.161607679285128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3255af4c40add5a3%3A0xdeea30d97c53dad6!2sMindanao%20State%20University%20-%20Maigo%20School%20of%20Arts%20and%20Trades!5e1!3m2!1sen!2sus!4v1685295811918!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <style>
      .download-section a{color:#941a1e;}
    </style>
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
          <div class="msu-msat-footer">
            <div class="col-design">
              <div class="ftr-col-1"> 
                <div class="ftr-col1-5 ">
                  <ul id="ftr-header"><a id="ftr-link-disable">Directory</a></ul>
                  <p>
                    <a href="faculty-staff/faculty-resources/faculty-directory.php">Faculty</a>,
                    <a href="faculty-staff/staff-resources/staff-directory.php">Staff</a>,
                    <a href="home/campus-officials.php">Officials</a>,
                    <a href="faculty-staff/departments/dse.php">Secondary</a>
                    <a href="faculty-staff/departments.php">Departments</a>,
                     <a href=".offices-resources.php">Offices</a>,
                    <a href="research/libraries.php">eLibrary</a>
                  </p>
                </div>
                <div class="ftr-col1-5 ">
                  <ul id="ftr-header"><a id="ftr-link-disable">Social Network</a></ul> 
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
              <div class="con-fix"></div>
            </div>
          </div>
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
                          // Retrieve and display the Citizen's Charter data
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
            <div class="con-fix"></div>
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
  <script src="layout/scripts/script.js"></script>
  <script src="layout/scripts/real-time.js"></script>
  <script src="https://kit.fontawesome.com/c919db264e.js" crossorigin="anonymous"></script>
  <!-- Announcemnts Scroll js --> 
  <script>
  let div = document.getElementById("announcementscrollable-div");
    div.addEventListener("mouseenter", 
    function(){
      div.style.overflow = "auto";});
    div.addEventListener("mouseleave", 
    function(){
      div.style.overflow = "hidden";});
  </script>    
  <!-- Events Scroll js --> 
  <script>
    let div3 = document.getElementById("eventscrollable-div");
      div3.addEventListener("mouseenter", 
      function(){
        div3.style.overflow = "auto";});
      div3.addEventListener("mouseleave", 
      function(){
        div3.style.overflow = "hidden";});
  </script>    
  <!-- News Scroll js --> 
  <script>
  let div1 = document.getElementById("scrollable");
    div1.addEventListener("mouseenter", 
    function(){
      div1.style.overflow = "auto";});
    div1.addEventListener("mouseleave", 
    function(){
      div1.style.overflow = "hidden";});
  </script>
  <!-- Sticky Header js --> 
  <script>
    window.onscroll = function() {myFunction()};
     var header = document.getElementById("myStickyHeader");
     var sticky = header.offsetTop;
    function myFunction() {
      if (window.pageYOffset > sticky){
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");}}
  </script>
  <!-- Slideshow js --> 
  <script>
   var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" dot-active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " dot-active";
}

// Autoslides function
var intervalID = setInterval(function() {
  plusSlides(1);
}, 6500);

// Stop autoslides when the user interacts with the slider
var slider = document.getElementById("slider");
slider.addEventListener("touchstart", pauseAutoslides);
slider.addEventListener("mousedown", pauseAutoslides);

function pauseAutoslides() {
  clearInterval(intervalID);
}

  </script>
  </body>
  </html>