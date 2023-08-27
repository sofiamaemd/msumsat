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
                        // Database connection (adjust these values according to your setup)
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'login_register';

                        // Create a new PDO instance for database connection
                        $dsn = "mysql:host=$servername;dbname=$dbname";
                        $pdo = new PDO($dsn, $username, $password);

                        // Function to handle file upload
                        function uploadImage($file)
                        {
                            $targetDirectory = 'featured-co/'; // Specify the target directory for storing images
                            $targetFile = $targetDirectory . basename($file['name']);
                            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                            // Check if the uploaded file is an image
                            $check = getimagesize($file['tmp_name']);
                            if ($check !== false) {
                                // Allow only certain image file formats (you can customize this list)
                                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                                if (in_array($imageFileType, $allowedExtensions)) {
                                    // Move the uploaded file to the target directory
                                    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
                                        return $targetFile; // Return the file path if the upload is successful
                                    }
                                }
                            }
                            return false; // Return false if the upload failed
                        }

                        // Check if the form was submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
                            $uploadedImage = uploadImage($_FILES['image']);
                            if ($uploadedImage) {
                                // File upload was successful
                                // Process the uploaded image and save the data to the database
                                $name = $_POST['name'];
                                $profession = $_POST['profession'];

                                // Prepare the SQL statement to insert data into the database
                                $stmt = $pdo->prepare("INSERT INTO featured_officials (image, name, profession) VALUES (?, ?, ?)");
                                $stmt->execute([$uploadedImage, $name, $profession]);

                                echo 'File uploaded successfully.';
                            } else {
                                // File upload failed
                                echo 'Invalid file. Please upload an image file (jpg, jpeg, png, gif).';
                            }
                        }
                    ?>
                    <center>
                        <div class="uploader">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="file" name="image" id="image" required placeholder="Profession">
                                <input type="text" name="name" id="name" required placeholder="Name:">
                                <input type="text" name="profession" id="profession" required placeholder="Profession">
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </center>
                </div>
                <div class="second_half_con">
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
                    <style>
                      .edit-delete-container a{padding:0 5px;margin: 5px}
                    </style>
                    <?php
                        echo '<div style="padding:20px 20px 20px 0px;" class="officials con-fix">';
                        echo '<center><h2 style="background-color: #122a6d;border: none;">Campus Officials</h2>';
                        echo '<div class=" con-fix">';
                        $counter = 0; // Track the number of officials
                        foreach ($formData as $data) {
                            if ($counter == 0) {
                                echo '<div class="official-one-whole">';
                                echo '<div class="official-row-1-col-1" id="respo-official">';
                                echo '<div class="edit-delete-container">';
                                echo '<a href="featured-co-edit.php?id=' . $data['id'] . '">Edit</a>';
                                echo '<a href="featured-co-delete.php?id=' . $data['id'] . '">Delete</a>';
                                echo '</div>';
                                echo '<img style="width:100%;"src="' . $data['image'] . '" alt="Uploaded Image">';
                                echo '<p>' . $data['name'] . '<br><span>' . $data['profession'] . '</span></p>';
                                echo '</div>';
                                echo '</div>';
                            } elseif ($counter <= 3) {
                                if ($counter == 1) {
                                    echo '<div class="official-one-whole">';
                                }
                                echo '<div class="official-row-2-col-3" id="respo-official">';
                                echo '<div class="edit-delete-container">';
                                echo '<a href="featured-co-edit.php?id=' . $data['id'] . '">Edit</a>';
                                echo '<a href="featured-co-delete.php?id=' . $data['id'] . '">Delete</a>';
                                echo '</div>';
                                echo '<img style="width:100%;" src="' . $data['image'] . '" alt="Uploaded Image">';
                                echo '<p>' . $data['name'] . '<br><span>' . $data['profession'] . '</span></p>';
                                echo '</div>';
                                if ($counter == 3) {
                                    echo '</div>';
                                }
                            } elseif ($counter <= 5) {
                                if ($counter == 4) {
                                    echo '<div class="official-one-whole">';
                                }
                                echo '<div class="official-row-3-col-2" id="respo-official">';
                                echo '<div class="edit-delete-container">';
                                echo '<a href="featured-co-edit.php?id=' . $data['id'] . '">Edit</a>';
                                echo '<a href="featured-co-delete.php?id=' . $data['id'] . '">Delete</a>';
                                echo '</div>';
                                echo '<img style="width:100%;" src="' . $data['image'] . '" alt="Uploaded Image">';
                                echo '<p>' . $data['name'] . '<br><span>' . $data['profession'] . '</span></p>';
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
                        echo '<a href="../../home/campus-officials.php">View All</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div></center>';
                        echo '</div>';
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

