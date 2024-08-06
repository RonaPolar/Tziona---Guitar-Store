<?php

include 'includes/database.php';

    session_start();

    if(isset($_POST['buttonLogin'])){

        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $_SESSION['loginuser'] = $email;
        $_SESSION['loginstart'] = true;
        $query = "SELECT * FROM loginaccounts WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($dbconnect, $query);

        $row = mysqli_fetch_array($result);

        if($row){
            if($email == $row['email'] && $password == $row['password'] && $row['usertype'] == "user"){

                header("location:profile_view.php");
            }
            else if($email == $row['email'] && $password == $row['password'] && $row['usertype'] == "admin"){
                header("location:admin/index.php");
            }
        }
        else {
            echo "<script>alert('Invalid username or password');</script>";

        }
    }
?>





<?php include 'includes/headerSignup.php'; ?>

<body>
  <div class="container">
    <!--LOGIN-FORM-->
    <div class="title">Login</div>
    <div class="login-form">
      <form action="" method="post">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required
              oninvalid="this.setCustomValidity('Enter your email')" oninput="this.setCustomValidity('')" />

          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" class="password" placeholder="Enter your password" required>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>

          <div class="checkbox-text">
            <div class="checkbox-content">
              <input type="checkbox" id="sigCheck">
              <label for="sigCheck" class="text">Remember me</label>
            </div>
          </div>
          <div class="forgotpass">
            <a href="forgotpassword.php" class="text">Forgot password?</a>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="buttonLogin" value="Login">
          <span class="error-msg" id="ConfirmPass-validation"></span>
        </div>
      </form>
      <!-- END LOGIN-FORM-->

      <!--REGISTRATION OPTION IN LOGIN-FORM-->
      <div class="login1">
        <span class="text">Not a member?
          <a href="register.php" class="text login-link">Register</a>
        </span>
      </div>
      <div class="back-home">
        <span class="icon"><i class='bx bx-home'></i>
          <a href="index.php" class="text">Back to Home</a>
        </span>
      </div>
    </div>
  </div>
  <script src="assets/js/login.js"></script>

</body>

</html>