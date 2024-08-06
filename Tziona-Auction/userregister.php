<?php

include 'includes/database.php';

?>



<?php include 'includes/headerSignup.php'; ?>

<body>
  <!--REGISTRATION-->
  <div class="container">
    <div class="title">Registration</div>
    <div class="login-form">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" placeholder="Enter your Full Name" id="fullname" onkeyup="validatefullname()" required oninvalid="this.setCustomValidity('Enter Your Full Name')" oninput="this.setCustomValidity('')" />
           <span id="fullname-validation"></span>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" id="username" onkeyup="validateUsername()" required oninvalid="this.setCustomValidity('Enter Your username')" oninput="this.setCustomValidity('')" />
            <span id="username-validation"></span>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" id="contact-email" onkeyup="validateEmail()" required oninvalid="this.setCustomValidity('Enter your email')" oninput="this.setCustomValidity('')">
           <span id="email-validation"></span>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter your Address" id="address" onkeyup="validateAddress()" required oninvalid="this.setCustomValidity('Enter Your Address')" oninput="this.setCustomValidity('')" />
           <span id="address-validation"></span>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" name="city" placeholder="Enter your City" id="city" onkeyup="validateAddress()" required oninvalid="this.setCustomValidity('Enter Your City')" oninput="this.setCustomValidity('')" />
            <span id="city-validation"></span>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name="phonenumber" id="no" onkeyup="validatephonenum()" placeholder="Enter your number" required oninvalid="this.setCustomValidity('Enter Mobile Number')" oninput="this.setCustomValidity('')" />
            <span id="phonenumber-validation"></span>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" class="password" placeholder="Enter your password" id="pass" onkeyup="validate(); return false;" required>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="confpassword" class="password" placeholder="Confirm your password" id="passconfirm" onkeyup="validate(); return false;" required>

          </div>
          <div class="input-box">
            <span class="details">Profile picture</span>
            <input type="file" class="file" id="myFile" name="image" placeholder="file" id="pic" required oninvalid="this.setCustomValidity('This field is required')" oninput="this.setCustomValidity('')" />
            <span id="profile-validation"></span>
          </div>

         <span id="ConfirmPass-validation"></span>
        </div>
        <span class="error-msg"></span>
        <div class="button" id="reg">
          <input type="submit" name="buttonSign" onclick=" validateForm()" value="Register">
          <span  id="submit-validation"></span>
        </div>

      </form>
      <!--END REGISTRATION-->

      <!--LOGIN OPTION IN REGISTRATION-->
      <div class="login1">
        <span class="text">Already have an account?
          <a href="login.php" class="text login-link">Log-in</a>
        </span>
      </div>
      <div class="back-home">
        <span class="icon"><i class='bx bx-home'></i>
          <a href="index.php" class="text">Back to Home</a>
        </span>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="assets/js/login.js"></script>
  <script src="assets/js/validate.js"></script>

</body>

</html>