<?php
include 'includes/database.php';

$selectquery = "SELECT * from productlists";
$resultselect = mysqli_query($dbconnect, $selectquery);


?>









<?php include 'includes/user_header.php'; ?>

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
        <img src="../admin/images/<?=$row['prod_pic']?>"  alt="subscribe newsletter" width="338" height="400">
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
        Name of the Bidder
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>

  <!-- ===== NAVBAR ===== -->
  <?php include 'includes/user_navbar.php'; ?>


  <!-- ===== MAIN CONTENT ===== -->
  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="./assets/images/banner-1.jpg" alt="banner1" class="banner-img"></div>
            <div class="swiper-slide"><img src="./assets/images/banner-2.jpg" alt="banner2" class="banner-img"></div>
            <div class="swiper-slide"><img src="./assets/images/banner-1.jpg" alt="banner1" class="banner-img"></div>

          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>


        </div>
      </div>

    </div>

    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">

      <!-- ===== SIDE BAR ===== -->
      <?php include 'includes/user_sidebar.php'; ?>

        <div class="product-box">

          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">All Products</h2>

            <div class="product-grid">

              <?php while($row = mysqli_fetch_array($resultselect)) {?>
              <div class="showcase">

                <div class="showcase-banner">
                  <img src="admin/images/<?=$row['prod_pic']?>" alt="Clifton Base" class="product-img default" width="300">
                  <img src="admin/images/<?=$row['prod_pic']?>"  alt="Clifton Base 1" class="product-img hover" width="300">

                  <!--<p class="showcase-badge angle black">sale</p>-->

                  <div class="showcase-actions">
                    <!--<button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>-->

                    <button class="btn-action">
                      <i class='bx bxs-show'></i>
                    </button>

                    <button class="btn-action">
                      <i class='bx bx-heart'></i>
                    </button>

                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category"><?php echo $row['product']; ?></a>

                  <h3>
                    <a href="#" class="showcase-title">Click to see info about this product</a>
                  </h3>

                  <a href="userproduct_details.php" class="Participate-btn">Bid now</a>
                  <div class="price-box">
                    <p class="price"><br>Starting Price: <?php echo $row['start_price']; ?></br></p>
                  </div>

                </div>

              </div>

              

            </div>
            <?php }?>

          </div>

        </div>

      </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <i class='bx bx-wallet'></i>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Payment Method</h3>
                  <p class="service-desc">See the method of payment we support</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="newspaper-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Rules and Regulations</h3>
                  <p class="service-desc">Before bidding read this first!</p>

                </div>

              </a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>


  <!-- ===== FOOTER ===== -->
  <?php include 'includes/user_footer.php'; ?>


  <!-- ===== SCRIPTS ===== -->
  <?php include 'includes/user_scripts.php'; ?>

</body>

</html>