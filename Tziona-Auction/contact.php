<?php
session_start();
$db = new mysqli("localhost", "root", "", "tzionashop");
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
  $username = $_POST["name"];
  $username = filter_var($username, FILTER_SANITIZE_STRING);
  $email = $_POST["email"];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $phone = $_POST["phone"];
  $message = $_POST["message"];
  $message  = filter_var($message , FILTER_SANITIZE_STRING);

  $is_insert = $db->query("INSERT INTO messages(username, email, phone, message) VALUES ('$username','$email','$phone','$message')");

    if(!isset($_SESSION['unique_id'])){

    echo "<script>alert('You Must Login To Send Message')</script>";

    echo "<script>window.open('index.php','_self')</script>";

    }

    else if ($is_insert == TRUE) {
      include 'includes/header.php';
      echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("Thank you","Message sent","success");';
      echo '}, 1000);</script>';

    }
    else{
      echo "SUCCESS";
    }



}

?>

<?php include 'includes/header.php'; ?>

<body>

  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->

  <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="338" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe To Tziona Music Auction!</h3>

            <p class="newsletter-desc">
              Subscribe to <b>Tziona</b> to get latest products and new arrival items for bidding.
              </a>
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>





  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/Winner.png" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Congratulations
      </p>

      <p class="toast-title">
        name of the bidder
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>


  <!-- ===== NAVBAR ===== -->
  <?php include 'includes/navbar.php'; ?>


  <!-- ===== MAIN CONTENT ===== -->
  <main>

    <!--
      -Contact box
    -->
    <div class="contact-box">
      <div class="container">
        <div class="form-container">
          <div class="contact-form">

            <form action="#" method="post" autocomplete="off">
              <span class="title">Contact us</span>
              <div class="input-container">
                <input type="text" id="name" name="name" class="input" placeholder="Username" required oninvalid="this.setCustomValidity('Enter Your Name')" oninput="this.setCustomValidity('')">
              </div>
              <div class="input-container">
                <input type="email" name="email" class="input" id="email" placeholder="Email Address" required oninvalid="this.setCustomValidity('Enter email')" oninput="this.setCustomValidity('')" />
              </div>
              <div class="input-container">
                <input type="number" name="phone" id="phone" class="input" placeholder="Mobile Number" required oninvalid="this.setCustomValidity('Enter Mobile Number')" oninput="this.setCustomValidity('')" />
              </div>
              <div class="input-container textarea">
                <textarea type="text" name="message" class="input" id="msg" placeholder="Message" required oninvalid="this.setCustomValidity('Field cannot be empty')" oninput="this.setCustomValidity('')"></textarea>
              </div>
              
              <input type="submit" name="submit" id="s" value="Send" class="btn-contact" />
              <input type="reset" value="Reset" class="btn-contact">
            </form>
          </div>
          <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
              Question about the product and in our store, you can leave
              us a message here!
            </p>

            <div class="info">
              <div class="information">
                <i class="fa-solid fa-location-dot"></i>
                <p>131 M.L. Quezon Street, Antipolo, 1870 Rizal</p>
              </div>
              <div class="information">
                <i class="fa-regular fa-envelope"></i>
                <p>tzionamusicshop@gmail.com</p>
              </div>
              <div class="information">
                <i class="fa-solid fa-phone"></i>
                <p>(+63)9065214162</p>
              </div>
            </div>

            <div class="contact-social-media">
            <button >Wanted to post your own auction
              <i class="fa-solid fa-question"></i>
            </button>
              <p>Connect with us :</p>
              <div class="social-icons">
              <a href="https://www.facebook.com/tzionamusicshop/" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/ShopTziona" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/tzionamusic/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div>
      <div class="container">
        <div class="google-map-box">
          <div class="contact-google-container">

            <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d61769.967018042706!2d121.10015611096266!3d14.62054298608657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d14.6635802!2d121.1137538!4m3!3m2!1d14.584169999999999!2d121.17572!5e0!3m2!1sen!2sph!4v1653923472191!5m2!1sen!2sph" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>

  </main>


  <!--
    - FOOTER
  -->

  <!-- ===== FOOTER ===== -->
  <?php include 'includes/footer.php'; ?>


  <!-- ===== SCRIPTS ===== -->
  <?php include 'includes/scripts.php'; ?>

</body>

</html>