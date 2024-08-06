<?php include 'includes/headerSignup.php'; ?>

<body>
  <div class="container" >
    <!--LOGIN-FORM-->
    <div class="title">Verify your account</div>
    <div class="login-form">
      <form action="" method="post">

          <p><span class="title2">We emailed your 4 digit OTP. Please check your email</span></p>
          <span class="details">OTP</span>
          <div class="fields-input" style="text-align: center;">
            <input type="number" name="otp1" class="otp-field" min="0" max="9" placeholder="0" required onpaste="false">
            <input type="number" name="otp2" class="otp-field" min="0" max="9" placeholder="0" required onpaste="false">
            <input type="number" name="otp3" class="otp-field" min="0" max="9" placeholder="0" required onpaste="false">
            <input type="number" name="otp4" class="otp-field" min="0" max="9" placeholder="0" required onpaste="false">
            <span class="error-msg" id="verify-validation"></span>
          </div>
        <div class="button">
          <input type="submit" name="buttonLogin" value="Verify now">
          <span class="error-msg" id="ConfirmPass-validation"></span>
        </div>
      </form>
      <!-- END LOGIN-FORM-->

    </div>
  </div>
  <script src="assets/js/login.js"></script>
  <script src="assets/js/verify.js"></script>
</body>

</html>