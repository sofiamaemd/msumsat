<!DOCTYPE html>
<html lang="en">
<head>
<link rel="SHORTCUT ICON" href="../images/1.ico"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mindanao State University - Maigo School of Arts & Trades</title>
<link href="../layout/styles/creative.css" rel="stylesheet">
<link rel="stylesheet" href="../layout/styles/log-in-reg.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head> 
<body>
  <style>
    #myVideo {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }
    #myAudio {
            display:none;
            width: 100%;
            background-color: transparent;
            padding:0 10px;
            height:40px;
            border-radius:0;
            margin-top:40px;
        }
  </style>
  <video autoplay muted loop id="myVideo">
    <source src="../videos/video.op.mp4" type="video/mp4">
  </video>
    <section class="user">
      <div class="user_options-container">
        <style>
          .user_registered-text{font-size:15px;padding: 35px 0;}
        </style>
        <div class="user_options-text">
          <div class="user_options-unregistered"><!-- Signup CONTAINER -->
            <h2 class="user_registered-title">Dont have an account?</h2>
            <p class="user_registered-text">Just click the button here!!</p>
            <button class="user_unregistered-signup" id="signup-button">Sign up</button>
          </div>
          <div class="user_options-registered"><!-- Signup CONTAINER -->
            <h2 class="user_registered-title">Have an account?</h2>
            <p class="user_registered-text">Just click the button here!!</p>
            <button class="user_registered-login" id="login-button">Login</button>
          </div>
        </div>
        <div class="user_options-forms" id="user_options-forms">
          <div class="user_forms-login thefront">
            <h2 class="forms_title">Login</h2>
              <?php
                        if (isset($_POST["login"])) {
                          $username = $_POST["username"];
                          $password = $_POST["password"];
                          require_once "database.php";
                          $sql = "SELECT * FROM users WHERE username = '$username'";
                          $result = mysqli_query($db, $sql);
                          $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                          if ($user) {
                              if (password_verify($password, $user["password"])) {
                                  session_start();
                                  $_SESSION["user"] = "yes";
                                  $_SESSION["role"] = $user["role"]; // Store the role in the session
                                  $role = $user["role"]; // Assuming the role is stored in the "role" column of the users table
                                  if ($username === 'admin123' && $password === 'admin123x1') {
                                      redirectByRole('admin');
                                      die();
                                  } else {
                                      redirectByRole($role);
                                      die();
                                  }
                              } else {
                                  echo "<div class='alert alert-danger'>Password does not match</div>";
                              }
                          } else {
                              echo "<div class='alert alert-danger'>Username does not match</div>";
                          }
                        }
                          function redirectByRole($role) {
                            switch ($role) {
                                case 'student':
                                    header("Location: student/index.php");
                                    break;
                                case 'alumni':
                                    header("Location: alumni/index.php");
                                    break;
                                case 'admin':
                                  header("Location: admin.php");

                                    break;
                                default:
                                    header("Location: login.php");
                                    break;
                            }
                            exit(); // Make sure to exit after redirection
                          }    
              ?>
            <form action="login.php" method="post">
              <fieldset class="forms_fieldset">
                <div class="forms_field">
                  <input type="username" placeholder="Username" class="forms_field-input" name="username"/>
                </div>
                <div class="forms_field" id="lab">
                    <input type="password" name="password" placeholder="Password" class="forms_field-input" autocomplete="current-password" required="" id="id_password">
                    <span class="eye-icon"><i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                    </span>
                  <a href="">Forgot password?</a>
                </div>
              </fieldset>
              <div class="forms_buttons" id="login_btn_repo">
                <input type="submit" value="Login" class="forms_buttons-action" name="login" id="float">
              </div>
            </form>
          </div>
          <div class="thecard login-content">
            <div class="user_forms-signup thefront"><!-- student-signup CONTAINER -->
              <h2 class="forms_title">Students</h2>
                <?php
                                if (isset($_POST["student_submit"])) {
                                  $firstName = $_POST["first_name"];
                                  $middleName = $_POST["middle_name"];
                                  $surname = $_POST["surname"];
                                  $username = $_POST["username"];
                                  $idNo = $_POST["id_no"];
                                  $email = $_POST["email"];
                                  $password = $_POST["password"];
                                  $passwordRepeat = $_POST["repeat_password"];
                                  $role = $_POST["role"]; // Added role field
                                  $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                                  $errors = array();
                                  if (empty($firstName) || empty($middleName) || empty($surname) || empty($username) || empty($idNo) || empty($email) || empty($password) || empty($passwordRepeat) || empty($role)) {
                                  array_push($errors,"All fields are required");
                                  }
                                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                  array_push($errors, "Email is not valid");
                                  }
                                  if (strlen($password) < 8) {
                                  array_push($errors,"Password must be at least 8 characters long");
                                  }
                                  if ($password !== $passwordRepeat) {
                                  array_push($errors,"Passwords do not match");
                                  }
                                  require_once "database.php";
                                  $sql = "SELECT * FROM users WHERE email = '$email'";
                                  $result = mysqli_query($db, $sql);
                                  $rowCount = mysqli_num_rows($result);
                                  if ($rowCount > 0) {
                                  array_push($errors,"Email already exists!");
                                  }
                                  if (count($errors) > 0) {
                                  foreach ($errors as $error) {
                                      echo "<div class='alert alert-danger'>$error</div>";
                                  }
                                  } else {
                                  $sql = "INSERT INTO users (first_name, middle_name, surname, username, id_no, email, password, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                                  $stmt = mysqli_stmt_init($db);
                                  $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                                  if ($prepareStmt) {
                                      mysqli_stmt_bind_param($stmt,"ssssssss", $firstName, $middleName, $surname, $username, $idNo, $email, $passwordHash, $role);
                                      mysqli_stmt_execute($stmt);
                                      echo "<div class='alert alert-success'>You are registered successfully.</div>";
                                  } else {
                                      die("Something went wrong");
                                  }
                                  }
                                }       
                ?>
                <form method="POST" action="login.php">
                  <fieldset class="forms_fieldset">
                    <div class="one_whole">
                      <div class="col-3-placeholder">
                        <div class="forms_field-1">
                          <div class="input-div one">
                            <div class="i">
                            </div>
                            <div class="div">
                                <h5>First Name</h5>
                                <input type="text" class="input" name="first_name">
                            </div>
                          </div>                  
                        </div>
                      </div>
                      <div class="col-3-placeholder">
                        <div class="forms_field-1">
                          <div class="input-div one">
                            <div class="i">
                            </div>
                            <div class="div">
                                <h5>Middle Name</h5>
                                <input type="text" class="input" name="middle_name">
                            </div>
                          </div>                  
                        </div>
                      </div>
                      <div class="col-3-placeholder">
                        <div class="forms_field-1">
                          <div class="input-div one">
                            <div class="i">
                            </div>
                            <div class="div">
                                <h5>Surname</h5>
                                <input type="text" class="input" name="surname">
                            </div>
                          </div>                  
                        </div>
                      </div>
                    </div>
                    <div class="one_whole">
                      <div class="col-2-placeholder-reg">
                        <div class="forms_field-1">
                          <div class="input-div one">
                            <div class="i">
                            </div>
                            <div class="div">
                                <h5>Username</h5>
                                <input type="text" class="input" name="username">
                            </div>
                          </div>                  
                        </div>
                      </div>
                      <div class="col-2-placeholder-reg">
                        <div class="forms_field-1">
                          <div class="input-div one">
                            <div class="i">
                            </div>
                            <div class="div">
                                <h5>ID No.</h5>
                                <input type="text" class="input" name="id_no">
                            </div>
                          </div>                  
                        </div>
                      </div>
                    </div>
                    <div class="one_whole">
                      <div class="col-2-placeholder-reg">
                        <div class="forms_field-1">
                          <div class="input-div one">
                            <div class="i">
                            </div>
                            <div class="div">
                                <h5>Email</h5>
                                <input type="text" class="input" name="email">
                            </div>
                          </div>                  
                        </div>
                      </div>
                      <div class="col-2-placeholder-reg">
                        <div class="selection">
                          <div class="forms_field-1">
                            <div class="input-div one">
                              <div class="i">
                              </div>
                              <div class="div">
                                  <h5>courseselection</h5>
                                  <input type="text" class="input" name="course_select">
                              </div>
                            </div>                  
                          </div>
                        </div>
                        <div class="selection">
                          <div class="forms_field-1">
                            <div class="input-div one">
                              <div class="i">
                              </div>
                              <div class="div">
                                  <h5>genderselection</h5>
                                  <input type="text" class="input" name="gender_select">
                              </div>
                            </div>                  
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="one_whole padding">
                      <div class="forms_field-1">
                        <div class="input-div one">
                          <div class="i">
                          </div>
                          <div class="div">
                              <h5>Password</h5>
                              <input type="text" class="input" name="password">
                          </div>
                        </div>                  
                      </div>
                    </div>
                    <div class="one_whole padding">
                      <div class="forms_field-1">
                        <div class="input-div one">
                          <div class="i">
                          </div>
                          <div class="div">
                              <h5>Confirm Password</h5>
                              <input type="text" class="input" name="repeat_password">
                          </div>
                        </div>                  
                      </div>
                    </div>
                  </fieldset>
                   <input type="hidden" name="role" value="student"> <!-- Default role value for student -->
                    <div class="reg-selection">
                      <span><a id="active-reg" class="btnflip" onclick="setRole('student')">Students</a></span> /
                      <span><a id="btn2" class="btnflip" onclick="setRole('alumni')">Alumni</a></span>
                    </div>
                    <div class="forms_buttons">
                      <input type="submit" value="Sign up" class="forms_buttons-action" name="student_submit">
                    </div>
                </form>
            </div><!-- student-signup CONTAINER -->
            <div class="theback"><!-- alumni-signup CONTAINER -->
              <h2 class="forms_title">Alumni & Friends</h2>
                <?php
                        if (isset($_POST["alumni_submit"])) {
                          $firstName = $_POST["first_name"];
                          $middleName = $_POST["middle_name"];
                          $surname = $_POST["surname"];
                          $username = $_POST["username"];
                          $email = $_POST["email"];
                          $password = $_POST["password"];
                          $passwordRepeat = $_POST["repeat_password"];
                          $role = $_POST["role"]; // Added role field

                          $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                          $errors = array();
                          
                          if (empty($firstName) || empty($middleName) || empty($surname) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat) || empty($role)) {
                          array_push($errors,"All fields are required");
                          }
                          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                          array_push($errors, "Email is not valid");
                          }
                          if (strlen($password) < 8) {
                          array_push($errors,"Password must be at least 8 characters long");
                          }
                          if ($password !== $passwordRepeat) {
                          array_push($errors,"Passwords do not match");
                          }
                          require_once "database.php";
                          $sql = "SELECT * FROM users WHERE email = '$email'";
                          $result = mysqli_query($db, $sql);
                          $rowCount = mysqli_num_rows($result);
                          if ($rowCount > 0) {
                          array_push($errors,"Email already exists!");
                          }
                          if (count($errors) > 0) {
                          foreach ($errors as $error) {
                              echo "<div class='alert alert-danger'>$error</div>";
                          }
                          } else {
                          
                          $sql = "INSERT INTO users (first_name, middle_name, surname, username, email, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
                          $stmt = mysqli_stmt_init($db);
                          $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                          if ($prepareStmt) {
                              mysqli_stmt_bind_param($stmt,"sssssss", $firstName, $middleName, $surname, $username, $email, $passwordHash, $role);
                              mysqli_stmt_execute($stmt);
                              echo "<div class='alert alert-success'>You are registered as an alumni successfully.</div>";
                          } else {
                              die("Something went wrong");
                          }
                          }
                        }
                ?>
                <form method="POST" action="login.php">
                  <fieldset class="forms_fieldset">
                    <div class="one_whole">
                      <div class="col-3-placeholder">
                        <div class="forms_field-1">
                          <div class="input-div one">
                            <div class="i">
                            </div>
                            <div class="div">
                                <h5>First Name</h5>
                                <input type="text" class="input" name="first_name">
                            </div>
                          </div>                  
                        </div>
                      </div>
                      <div class="col-3-placeholder">
                        <div class="forms_field-1">
                          <div class="input-div one">
                            <div class="i">
                            </div>
                            <div class="div">
                                <h5>Middle Name</h5>
                                <input type="text" class="input" name="middle_name">
                            </div>
                          </div>                  
                        </div>
                      </div>
                      <div class="col-3-placeholder">
                        <div class="forms_field-1">
                          <div class="input-div one">
                            <div class="i">
                            </div>
                            <div class="div">
                                <h5>Surname</h5>
                                <input type="text" class="input" name="surname">
                            </div>
                          </div>                  
                        </div>
                      </div>
                    </div>
                    <div class="one_whole padding">
                      <div class="forms_field-1">
                        <div class="input-div one">
                          <div class="i">
                          </div>
                          <div class="div">
                              <h5>Username</h5>
                              <input type="text" class="input" name="username">
                          </div>
                        </div>                  
                      </div>
                    </div>
                    <div class="one_whole padding">
                      <div class="forms_field-1">
                        <div class="input-div one">
                          <div class="i">
                          </div>
                          <div class="div">
                              <h5>Email</h5>
                              <input type="text" class="input" name="email">
                          </div>
                        </div>                  
                      </div>
                    </div>
                    <div class="one_whole padding">
                      <div class="forms_field-1">
                        <div class="input-div one">
                          <div class="i">
                          </div>
                          <div class="div">
                              <h5>Password</h5>
                              <input type="text" class="input" name="password">
                          </div>
                        </div>                  
                      </div>
                    </div>
                    <div class="one_whole padding">
                      <div class="forms_field-1">
                        <div class="input-div one">
                          <div class="i">
                          </div>
                          <div class="div">
                              <h5>Confirm Password</h5>
                              <input type="text" class="input" name="repeat_password">
                          </div>
                        </div>                  
                      </div>
                    </div>
                  </fieldset>
                  <input type="hidden" name="role" value="alumni"> <!-- Default role value for student -->
                  <div class="reg-selection">
                    <span><a id="btn4" class="btnflip" onclick="setRole('student')">Students</a></span> /
                    <span><a id="active-reg" class="btnflip" onclick="setRole('alumni')">Alumni</a></span>
                  </div>
                  <div class="forms_buttons">
                    <input type="submit" value="Alumni Sign up" class="forms_buttons-action" name="alumni_submit" id="alumni_submit">
                  </div>
                </form>
            </div><!-- akumni-signup CONTAINER -->
          </div>
        </div>
      </div>
    </section>
    <audio autoplay loop id="myAudio" controls>
        <source src="../audio/video.op.ogg" type="audio/ogg">
        <source src="../audio/video.op.mp3" type="audio/mp3">
    </audio>
<script src="script/log-reg.js"></script>
<script>
        // Autoplay audio after a user action
        function playAudio() {
            var audio = document.getElementById("myAudio");
            audio.play();
        }
        // Trigger audio playback on button click
        document.addEventListener("DOMContentLoaded", function () {
            var button = document.getElementById("playButton");
            button.addEventListener("click", playAudio);
        });
    </script>
</body>
</html>