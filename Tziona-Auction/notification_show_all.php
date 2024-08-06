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


    <div class="container">

      <div class="profile-box">

        <!-- ===== PROFILE ===== -->

        <div class="profile">

          <div class="profile-card">
            <div class="picture">
              <img src="assets/images/images.jfif" alt="alan doe" class="profile-picture">
            </div>
            <p class="profile-name">Username</p>

            <p class="edit-profile"><i class='bx bx-edit-alt'></i>edit profile
              <input type="button" id="loadFileXml" class="change-btn" value="Change profile" onclick="document.getElementById('file').click();" />
              <input type="file" style="display:none;" id="file" name="file" />
            </p>

          </div>
          <div class="profile-card">
            <div class="side-icons">
              <ul class="tabs">
                <li class="tab ">
                  <a data-switcher data-tab="1"><i class='bx bxs-user'></i> My Account</a>
                </li>
                <li class="tab">
                  <a data-switcher data-tab="2"><i class='bx bxs-trophy'></i>Win auction</a>
                </li>
                <li class="tab is-active">
                  <a data-switcher data-tab="3"><i class='bx bxs-bell'></i> Notification</a>
                </li>
                <li class="tab">
                  <a data-switcher data-tab="4"><i class='bx bxs-credit-card-front'></i> Transaction</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <section class="pages">
          <div class="page " data-page="1">
            <div class="profile-body">

              <div class="profile-container" action="">
                <div class="row">

                  <div class="col">

                    <form action="">
                      <h3 class="title">My profile</h3>

                      <div class="inputBox">
                        <span>Username:</span>
                        <input type="text" placeholder="username" value="Ralf Baltero" required>
                      </div>
                      <div class="inputBox">
                        <span>Email:</span>
                        <p type="text">ad***********@gmail.com</p>
                        <a href="#" class="change flex">change</a>
                      </div>
                      <div class="inputBox">
                        <span>Phone number:</span>
                        <p type="text">**********91</p>
                        <a href="#" class="change flex">change</a>
                      </div>
                      <div class="inputBox">
                        <span>address:</span>
                        <input type="address" placeholder="Your address" value="31 bagong silang st." required>
                      </div>
                      <div class="inputBox">
                        <span>city:</span>
                        <input type="text" placeholder="City" value="Quezon city" required>
                      </div>
                      <div class="gender-details">
                        <input type="radio" name="gender" id="dot-1">
                        <input type="radio" name="gender" id="dot-2">
                        <input type="radio" name="gender" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                          <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                          </label>
                          <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                          </label>
                          <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                          </label>
                        </div>
                      </div>
                      <button type="submit"> SAVE PROFILE </button>

                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page" data-page="2">
            <div class="profile-body">

              <div class="profile-container" action="">
                <div class="row">

                  <div class="col">
                    <h3 class="title">Item that you've won</h3>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page is-active" data-page="3">
            <div class="profile-body">

              <div class="profile-container" action="">
                <div class="row">

                  <div class="col">
                    <h3 class="title">Notification</h3>
                    <a href="">
                      <li>
                        <div class="notify-item-full">
                          <div class="notify-img">
                            <img src="assets/images/products/Clifton-Bass.jpg" alt="" style="width: 90px; margin-left: 10px;">
                          </div>
                          <div class="notify-info">
                            <p>Joined in auction<span>Currently joined in auction. The item is clifton electric bass
                                guitar</span></p>
                            <span class="notify-time">10 minutes ago</span>
                          </div>
                        </div>
                      </li>
                    </a>
                    <a href="">
                      <li>
                        <div class="notify-item-full">
                          <div class="notify-img">
                            <img src="assets/images/products/Clifton-Bass.jpg" alt="" style="width: 90px; margin-left: 10px;">
                          </div>
                          <div class="notify-info">
                            <p>Joined in auction<span>Currently joined in auction. The item is clifton electric bass
                                guitar</span></p>
                            <span class="notify-time">10 minutes ago</span>
                          </div>
                        </div>
                      </li>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page" data-page="4">
            <div class="profile-body">

              <div class="profile-container" action="">
                <div class="row">

                  <div class="col">
                    <h3 class="title">Transaction</h3>

                  </div>
                </div>
              </div>
            </div>
        </section>


      </div>
    </div>

  </main>

  <!-- ===== FOOTER ===== -->
  <?php include 'includes/footer.php'; ?>


  <!-- ===== SCRIPTS ===== -->
  <?php include 'includes/scripts.php'; ?>
</body>

</html>