<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tziona Auction | Login</title>

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--Box icon-->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet"/>

    <!--Custom css-->
    <link rel="stylesheet" href="assets/css/style.css"/>
   </head>
<body>
  <div class="container">
    <div class="title">Recover your account</div>
    <div class="login-form">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required
            oninvalid="this.setCustomValidity('Enter Your Name')"
            oninput="this.setCustomValidity('')"/>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" required
            oninvalid="this.setCustomValidity('Enter your email')"
            oninput="this.setCustomValidity('')"/>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Login">
        </div>
      </form>
            <div class="login1">

                    <a href="login.php" class="text login-link">I remember my password</a>

            </div>
            <div class="back-home">
                <span class="icon"><i class='bx bx-home'></i>
                <a href="index.php"class="text">Back to Home</a>
                </span>
            </div>
    </div>
  </div>
  <script src="login.js"></script>

</body>
</html>
