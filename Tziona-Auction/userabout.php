<?php
  include 'database.php';
  session_start();
  

  $name = $_SESSION['loginuser'];

  $readaccount = "SELECT * FROM registeraccount WHERE email = '$name'";
  $readquery = mysqli_query($dbconnect, $readaccount);
  $results = mysqli_fetch_array($readquery);

  

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tziona Auction | About</title>

  <!-- ===== FAV ICON ===== -->
  <link rel="shortcut icon" href="./assets/images/logo/auctionlogo.ico" type="image/x-icon">
  <!-- ===== CUSTOM CSS ===== -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">
  <!-- ===== BOXICON ===== -->
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <!-- ===== FONTAWESOME ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- ===== SWIPER ===== -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <!-- ===== GOOGLE FONT LINK ===== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

</html>

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





  <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="https://www.facebook.com/tzionamusicshop/ " target="_blank" class="social-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUxJREFUSEu1lYFNwzAQRV8nYATKBMAE7QgwAXQCYALoBLQTABMAGzAC3QA2gAlAP7Ktw7V9DlJOsiIl9r3z+ftnxsQxmzg/PYBLYAGchKGa3sN4AV5bRbYAZ8A9MHd2+QHcAILtRQ2wAa5Gtk9rBPoTJcB/ksekW+DaEnKA2vLcqPwzJLDtuANuzZpz264coH4eVgDf4ZA1x0YO0PejOMECpJaHRvVPgObEWAZ16alhI+3CAh6BiwZgDahahdfKVIwFSNvHnYC8Lfky5TrVSwv4cWRpd+ABUu4egHfb38JZ5PUN6+zimoI8wBdwkGXfRVvpOWQPUGpt8ZA9mY45gxUgVe65aeui9QJ025NBjrGKXkDTKrSrmtn1AFyzi2Io3WoPkFvJkMv74Wg30fxqgJLDJtV6EtREqUtmpgs1KKPyrmgEPQDHQdqfJwf8ArJlSRlOmzLXAAAAAElFTkSuQmCC" />
            </a>
          </li>

          <li>
            <a href="https://twitter.com/ShopTziona" target="_blank" class="social-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUdJREFUSEvdleExBEEQhb+LgAzIABEgAkTgRIAIEAEhyAARkAGXAREgAuq7mrmanZuZ29uq/XNTdX92ut/r97qnb8LIZzIyPptHsA38rLDNmEvgFNgHPoFH4C7k+f05YuQWGWzAR4PkDTgs3Jsj4TXwUCLw8j0oOAMEyk+MqfFLMgsE8yJzBX9JplUoO7VMdU8Ndb/BgUVxOYHenWQAfvOnfQfAfYPgJRAsQlICm7cbwHYGvg8V36a5OcH3QOCY1mlwqQfaMLR68bSwM4F5D5wSG7Q1QMlXsLiTWloVTsp53qwehEv2lCzy2xHw2gMwDbF61S9tgdqycxJu1iA5rjzM5jZ1bH1s2tU6F2EXFWNqCrQpLrQauK/2qgWe90BQK97rYY0vVnDHunlKCqah0TYtkrnAbGC6NlZhz+837x+tl+x1gka36B/CnzgZFPaBJAAAAABJRU5ErkJggg==" />
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/tzionamusic/" target="_blank" class="social-link">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXRJREFUSEvFlbsuRFEUhr9pNFPQaDRDLy4vwLwBSokErQTxBHgDxNQukSh5AzyBywugVqmU5Je15WTZ+5x9ZnIyuztnr/X/a/3rsls0fFoN4zM0gjlgF+gCkxVZvgH3wDHw5G1jGWwAZ31KtwmcF309gSJ/7BM8uM0XM/EEYl+vQfAJLJuU++Z3AUiF3+MJpGcnQSBHaTxmdVEg+lbEIrkxP2FMpQi+I+DPBiDHcbv/ACSnMh41UhH/w/UZxAgUzQSwBiwCsnkAroCvRM3+cKsIgp49YMtldwpsA7fAkrvLJtgDLi3iaQfyAswCB0AocG2JDoET4A6YcQShwAMRBIk0pTuO4AhQhgNJJEy14QiwCiwYiYp8DbQtu+SGqCqyHNWeK5E9oz2l3i+2Z2UNygZNUoRlphnQcMWO5kb30UmuuypiBKWrQqv5NRFZ7u/SZSeQRtd1iFKZqL9VyNTyC7bv9uCobbMenFwpsuyG9iZnRZdj9AO5y0cZdyMG3QAAAABJRU5ErkJggg==" />
            </a>
          </li>


        </ul>



      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="userhome.php" class="header-logo">
          <img src="./assets/images/logo/StoreLogo1.png" alt="Tziona" width="120" height="80">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

        <button class="action-btn">
          <div class="profile-header" id="user-btn" onclick="toggleMenu();">
            <a href="userlogin.php" class="action-btn">
              <img src= "assets/images/profiles/<?=$results['image']?>" class="profile-picture"/>
            </a>
          </div>
        </button>

          <button class="action-btn">
            <i class='bx bx-bell'></i>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <i class='bx bx-shopping-bag'></i>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu" id="desktop-navigation-menu">

      <div class="container">
        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="userhome.php" class="menu-title-active">Home</a>

          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories<i class='plus'></i></a>
            <ul class="dropdown-menu">
              <li class="dropdown-item"><a href="#">Electric Guitar</a></li>
              <li class="dropdown-item"><a href="#">Bass Guitar</a></li>
              <li class="dropdown-item"><a href="#">Drum set</a></li>
              <li class="dropdown-item"><a href="#">Ukelele</a></li>
              <li class="dropdown-item"><a href="#">Acoustic Guitar</a></li>
              <li class="dropdown-item"><a href="#">Piano</a></li>
              <li class="dropdown-item"><a href="#">Accessories »</a>
                <ul class="submenu">
                  <li class="dropdown-item"><a href="#">Guitar capo</a></li>
                  <li class="dropdown-item"><a href="#">Guitar Strings</a></li>
                  <li class="dropdown-item"><a href="#">Guitar picks</a></li>
                  <li class="dropdown-item"><a href="#">Guitar straps</a></li>
                  <li class="dropdown-item"><a href="#">Guitar bag</a></li>
                  <li class="dropdown-item"><a href="#">Guitar tuner</a></li>
                  <li class="dropdown-item"><a href="#">Guitar amplifier</a></li>
                </ul>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <a href="userlatestauction.php" class="menu-title">Latest Auction</a>

          </li>

          <li class="menu-category">
            <a href="usercurrentbids.php" class="menu-title">Currently in bids <i class='bx bx-time-five'></i></a>

          <li class="menu-category">
            <a href="userabout.php" class="menu-title">About US</a>

          </li>
          <li class="menu-category">
            <a href="usercontact.php" class="menu-title">Contact us</a>
          </li>
        </ul>
      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <i class='bx bx-shopping-bag'></i>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <a href="userhome.php" class="action-btn">
          <i class='bx bx-home'></i>
        </a>
      </button>

      <button class="action-btn">
        <i class='bx bx-bell'></i>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <i class='bx bx-grid-alt'></i>
      </button>

      <button class="action-btn">
        <a href="userlogin.php" class="action-btn">
          <i class="bx bx-user"></i>
        </a>

      </button>
    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <a href="latest.php" class="menu-title">LATEST AUCTION</a>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">CURRENTLY IN BIDS</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>


          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-social-container">

          <li>
            <a href="https://www.facebook.com/tzionamusicshop/ " target="_blank" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>



  <!--
    - MAIN
  -->

  <main>
    <div class="contact-box">
      <div class="container">
        <div class="form-container">
          <div class="contact-form">
            <div class="inner">
              <span class="title1">About us </span>
              <p class="inner-text">
                Tziona is the e-commerce website of Tziona Music Shop located in the KS13 Victory Park and Shop, M.L.
                Quezon Cor T. Oldan, San Isidro Antipolo, owned by Mrs. Ma. Louisa Theresa B. Cagaanan.
              </p>
              <span class="title">Our Business </span>
              <p class="inner-text">
                Launched in 2022, a platform that sells and auctions musical instruments to customers looking for valuable or
                rare items with the freedom of pricing based on the starter price declared.
              </p>
              <span class="title">Our Purpose </span>
              <p class="inner-text">
                We believe online shopping should be accessible and enjoyable, providing customers with an easy, secure,
                and fast online shopping experience through online and physical payment and fulfillment support.
              </p>
            </div>
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
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>

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

              <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Rey Cagaanan</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                You must stay stronger than you in yesterday.
              </p>

            </div>

          </div>


          <!--
            - CTA
          -->

          <!--<div class="cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ $10</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>-->



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

              <!--<a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>

                </div>

              </a>-->

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 10AM - 8PM</p>

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