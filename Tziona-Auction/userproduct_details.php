<?php include 'includes/user_header.php'; 
  
  include 'includes/database.php';
  
  $selectquery = "SELECT * from productlists";
  $resultselect = mysqli_query($dbconnect, $selectquery);
  
  
  $row = mysqli_fetch_array($resultselect);
  
  if(isset($_POST['submitbid'])){
    $getbid = $_POST['betuser'];

    $insertquery = "INSERT INTO currentbid(bid)
                  VALUES ($getbid)";
    $resinsert = mysqli_query($dbconnect, $insertquery);

    echo "<script>alert('Successfully Bid');</script>";
  }
  
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


  <div class="pay-overlay" data-overlay></div>

  <!--
    - PAY-MODAL
  -->

  <div class="pay" pay-data-modal>

    <div class="pay-modal-close-overlay" pay-data-modal-overlay></div>

    <div class="pay-modal-content">

      <button class="pay-modal-close-btn" pay-data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="pay-form">

        <form action="" method="post">

          <div class="newsletter-header">
            <p class="topoftoptext">
              The highest bidder will get the item.
             </p>
            <p class="topoftoptext">
             In order to win the <b> product </b> your bet must remain at the top.
             </p>
            <p class="item-desc">
             Enter the bet for this <b>product</b>
            </p>

          </div>
          <span class="currency"> Current bid: &#8369; <?php echo $row['start_price']; ?></span>
          <input name="betuser" type="number" class="bet-field" placeholder="Enter your bet" autocomplete="off" required>

          <input type="submit" name="submitbid"value="submit"class="btn-newsletter">

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

    <div class="product-container">

      <div class="container">

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/electric-guitar.svg" alt="E.g" width="50" height="50"
                      class="menu-title-img">

                    <p class="menu-title">Electric Guitar</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Stratocaster</p>
                      <!--<data value="300" class="stock" title="Available Stock"></data>-->
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Telecaster</p>
                      <!--<data value="60" class="stock" title="Available Stock">60</data>-->
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Super strat</p>
                      <!--<data value="50" class="stock" title="Available Stock">50</data>-->
                    </a>
                  </li>
                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/bass-guitar.svg" alt="b.g" class="menu-title-img" width="50"
                      height="50">

                    <p class="menu-title">Bass Guitars</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Clifton</p>
                      <!--<data value="45" class="stock" title="Available Stock">45</data>-->
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/ukulele.svg" alt="ukelele" class="menu-title-img" width="50"
                      height="50">

                    <p class="menu-title">Ukelele</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Ukelele beachman</p>
                      <!--<data value="46" class="stock" title="Available Stock">46</data>-->
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Clifton Ukelele</p>
                      <!--<data value="73" class="stock" title="Available Stock">73</data>-->
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Victory Ukelele</p>
                      <!--<data value="61" class="stock" title="Available Stock">61</data>-->
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kokolele</p>
                      <!--<data value="61" class="stock" title="Available Stock">61</data>-->
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/Guitar.svg" alt="G" class="menu-title-img" width="50" height="50">

                    <p class="menu-title">Acoustic Guitar</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Global</p>
                      <!--<data value="12" class="stock" title="Available Stock">12 pcs</data>-->
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Arena</p>
                      <!--<data value="60" class="stock" title="Available Stock">60 pcs</data>-->
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Calao</p>
                      <!--<data value="50" class="stock" title="Available Stock">50 pcs</data>-->
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Lumanog</p>
                      <!--<data value="87" class="stock" title="Available Stock">87 pcs</data>-->
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/drums.svg" alt="drums" class="menu-title-img" width="50"
                      height="50">

                    <p class="menu-title">Drum set</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Global drums</p>
                      <!--<data value="68" class="stock" title="Available Stock">68</data>-->
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/Piano.svg" alt="b.g" class="menu-title-img" width="50" height="50">

                    <p class="menu-title">Piano</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Global</p>
                      <!--<data value="45" class="stock" title="Available Stock">45</data>-->
                    </a>
                  </li>

                </ul>

              </li>
            </ul>

          </div>

        </div>


        <div class="product-box">

          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">


            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="admin/images/<?=$row['prod_pic']?>"  class="showcase-img" id="zoom">
                  </div>

                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <a href="userhome.php"> Home </a>
                      <p class="bracket">></p>
                      <a href="userlatestauction.php">Latest </a>
                      <p class="bracket">></p>
                      <a href="#">Clifton</a>
                    </div>

                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title"><?php echo $row['product']; ?></a>
                    </h3>
                    <span>Product details</span>
                    <p class="showcase-desc">
                      Bass Guitar good for Band
                    </p>

                    <div class="price-box">
                      <span>Starting price: </span>
                      <p class="price">&#8369;<?php echo $row['start_price']; ?></p>
                    </div>

                    <input type="submit" value="PARTICIPATE "class="add-cart-btn" id="button1">


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



          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">Related products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="./assets/images/products/Guitar-Global.jpg" alt="Global Guitar" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/Guitar-Global-Back.jpg" alt="Global Guitar back" width="300"
                    class="product-img hover">

                  <!--<p class="showcase-badge">15%</p>-->

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <i class='bx bxs-show'></i>
                    </button>

                    <button class="btn-action">
                      <i class='bx bx-heart'></i>
                    </button>

                    <button class="btn-action">
                      <i class='bx bx-shopping-bag'></i>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">Global electric Guitar</a>

                  <a href="#">
                    <h3 class="showcase-title">Click to see info about this product</h3>
                  </a>

                  <a href="#" class="Participate-btn">Bid now</a>
                  <div class="price-box">
                    <p class="price"><br>Starting Price: ₱5,000</br></p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/Clifton-Bass.jpg" alt="Clifton Base" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/Clifton-Bass1.jpg" alt="Clifton Base 1" class="product-img hover"
                    width="300">

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <i class='bx bxs-show'></i>
                    </button>

                    <button class="btn-action">
                      <i class='bx bx-heart'></i>
                    </button>

                    <button class="btn-action">
                      <i class='bx bx-shopping-bag'></i>
                    </button>

                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Clifton Electric Bass Guitar</a>

                  <h3>
                    <a href="#" class="showcase-title">Click to see info about this product</a>
                  </h3>

                  <a href="productDetail.html" class="Participate-btn">Bid now</a>
                  <div class="price-box">
                    <p class="price"><br>Starting Price: ₱7,000</br></p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/drums.jpg" alt="drums" class="product-img default" width="300">
                  <img src="./assets/images/products/drums1.jpg" alt="drums1" class="product-img hover" width="300">

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <i class='bx bxs-show'></i>
                    </button>

                    <button class="btn-action">
                      <i class='bx bx-heart'></i>
                    </button>

                    <button class="btn-action">
                      <i class='bx bx-shopping-bag'></i>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Acoustic Global Drum set</a>

                  <h3>
                    <a href="#" class="showcase-title">Click to see info about this product</a>
                  </h3>

                  <a href="#" class="Participate-btn">Bid now</a>
                  <div class="price-box">
                    <p class="price"><br>Starting Price: ₱10,000</br></p>
                  </div>

                </div>

              </div>

            </div>

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
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/profile-user.png" alt="alan doe" class="testimonial-banner" width="80"
                height="80">

              <p class="testimonial-name">Ray Cagaanan</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>


          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/banner-1.jpg" alt="summer collection" class="cta-banner">

            <a href="Latest.html" class="cta-content">

              <p class="discount">Bet the highest you can</p>

              <h2 class="cta-title">Latest Products</h2>

              <p class="cta-text">Starting @ &#8369;5,000</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



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