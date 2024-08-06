<?php include 'includes/user_header.php'; 
  include 'database.php';
?>

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
  <?php include 'includes/user_navbar.php'; ?>


  <!-- ===== MAIN CONTENT ===== -->
  <main>

    <!--
      - PRODUCT
    -->


    <div class="container">

      <div class="product-featured">



        <div class="showcase-wrapper has-scrollbar">

          <div class="showcase-container">

            <div class="showcase">

              <div class="showcase-banner">
                <img src="assets/images/products/Clifton-Bass.jpg" alt="RClifton" class="showcase-img" id="zoom">
              </div>

              <div class="showcase-content">

                <div class="showcase-rating">
                  <a href="index.html"> Home </a>
                  <p class="bracket">></p>
                  <a href="Latest.html">Featured </a>

                </div>

                <h3 class="showcase-title">
                  <a href="#" class="showcase-title">Clifton Bass Guitar</a>
                </h3>
                <span>Product details</span>
                <p class="showcase-desc">
                  Lorem ipsum dolor sit amet consectetur Lorem ipsum
                  dolor dolor sit amet consectetur Lorem ipsum dolor
                  Lorem ipsum dolor sit amet consectetur Lorem ipsum
                  dolor dolor sit amet consectetur Lorem ipsum dolor
                  Lorem ipsum dolor sit amet consectetur Lorem ipsum
                  dolor dolor sit amet consectetur Lorem ipsum dolor
                  Lorem ipsum dolor sit amet consectetur Lorem ipsum
                  dolor dolor sit amet consectetur Lorem ipsum dolor
                </p>

                <div class="price-box">
                  <span>Starting price: </span>
                  <p class="price">&#8369;15,000</p>
                </div>




                <div class="countdown-box">

                  <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                  <div class="countdown">

                    <div class="countdown-content">
                      <p class="display-number">3</p>
                      <p class="display-text">Hours</p>
                    </div>

                    <div class="countdown-content">
                      <p class="display-number">00</p>
                      <p class="display-text">Min</p>
                    </div>

                    <div class="countdown-content">
                      <p class="display-number">00</p>
                      <p class="display-text">Sec</p>
                    </div>
                  </div>

                </div>

              </div>

            </div>

          </div>
        </div>

      </div>
      <div>

        <div class="container">

          <div class="current-box">

            <!-- ===== CURRENTLY HIGH BET ===== -->

            <div class="current-price">

              <h2 class="title">Current bid price</h2>

              <div class="current-card">

                <p class="edits">Current bid price <span class="price">&#8369;16,000</span> by</p>
                <p class="edits">Username</p>

              </div>

            </div>
            <!-- ===== END CURRENTLY HIGH BET ===== -->

            <!-- ===== ENTER YOUR BET ===== -->
            <div class="User-bet">

              <h2 class="title">Your bet</h2>

              <div class="user-card">

                <h3 class="title">Bid wisely :)</h3>
                <div class="forms">
                  <form action="#">
                    <div class="input-boxes">
                      <div class="input-box">
                        <input type="text" placeholder="Enter your bet" required>
                      </div>
                      <div class="button input-box">
                        <input type="submit" value="Sumbit">
                      </div>
                    </div>
                  </form>
                </div>

              </div>

            </div>
            <!-- ===== END ENTER YOUR BET ===== -->

            <!-- ===== RECENT BIDS ===== -->
            <div class="recent-price">

              <h2 class="title">Recent bids on this item</h2>

              <div class="recent-card">
                <a href="">
                  <div class="recent-box">
                    <img src="assets/images/images.jfif" alt="img">
                    <div class="recent-info">
                      <h3>&#8369;16,000<span>by username</span></h3>
                      <span class="recent-time">10 minutes ago</span>

                    </div>
                  </div>
                </a>

              </div>

            </div>
            <!-- ===== END RECENT BIDS ===== -->

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