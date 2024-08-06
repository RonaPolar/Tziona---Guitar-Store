<?php
  require('database.php');

  session_start();

  $name = $_SESSION['loginuser'];

  $readaccount = "SELECT * FROM registeraccount WHERE email = '$name'";
  $readquery = mysqli_query($dbconnect, $readaccount);
  $results = mysqli_fetch_array($readquery)

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





  <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="https://www.facebook.com/tzionamusicshop/ " target="_blank" class="social-link">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUxJREFUSEu1lYFNwzAQRV8nYATKBMAE7QgwAXQCYALoBLQTABMAGzAC3QA2gAlAP7Ktw7V9DlJOsiIl9r3z+ftnxsQxmzg/PYBLYAGchKGa3sN4AV5bRbYAZ8A9MHd2+QHcAILtRQ2wAa5Gtk9rBPoTJcB/ksekW+DaEnKA2vLcqPwzJLDtuANuzZpz264coH4eVgDf4ZA1x0YO0PejOMECpJaHRvVPgObEWAZ16alhI+3CAh6BiwZgDahahdfKVIwFSNvHnYC8Lfky5TrVSwv4cWRpd+ABUu4egHfb38JZ5PUN6+zimoI8wBdwkGXfRVvpOWQPUGpt8ZA9mY45gxUgVe65aeui9QJ025NBjrGKXkDTKrSrmtn1AFyzi2Io3WoPkFvJkMv74Wg30fxqgJLDJtV6EtREqUtmpgs1KKPyrmgEPQDHQdqfJwf8ArJlSRlOmzLXAAAAAElFTkSuQmCC" />
            </a>
          </li>

          <li>
            <a href="https://twitter.com/ShopTziona" target="_blank" class="social-link">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUdJREFUSEvdleExBEEQhb+LgAzIABEgAkTgRIAIEAEhyAARkAGXAREgAuq7mrmanZuZ29uq/XNTdX92ut/r97qnb8LIZzIyPptHsA38rLDNmEvgFNgHPoFH4C7k+f05YuQWGWzAR4PkDTgs3Jsj4TXwUCLw8j0oOAMEyk+MqfFLMgsE8yJzBX9JplUoO7VMdU8Ndb/BgUVxOYHenWQAfvOnfQfAfYPgJRAsQlICm7cbwHYGvg8V36a5OcH3QOCY1mlwqQfaMLR68bSwM4F5D5wSG7Q1QMlXsLiTWloVTsp53qwehEv2lCzy2xHw2gMwDbF61S9tgdqycxJu1iA5rjzM5jZ1bH1s2tU6F2EXFWNqCrQpLrQauK/2qgWe90BQK97rYY0vVnDHunlKCqah0TYtkrnAbGC6NlZhz+837x+tl+x1gka36B/CnzgZFPaBJAAAAABJRU5ErkJggg==" />
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/tzionamusic/" target="_blank" class="social-link">
              <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXRJREFUSEvFlbsuRFEUhr9pNFPQaDRDLy4vwLwBSokErQTxBHgDxNQukSh5AzyBywugVqmU5Je15WTZ+5x9ZnIyuztnr/X/a/3rsls0fFoN4zM0gjlgF+gCkxVZvgH3wDHw5G1jGWwAZ31KtwmcF309gSJ/7BM8uM0XM/EEYl+vQfAJLJuU++Z3AUiF3+MJpGcnQSBHaTxmdVEg+lbEIrkxP2FMpQi+I+DPBiDHcbv/ACSnMh41UhH/w/UZxAgUzQSwBiwCsnkAroCvRM3+cKsIgp49YMtldwpsA7fAkrvLJtgDLi3iaQfyAswCB0AocG2JDoET4A6YcQShwAMRBIk0pTuO4AhQhgNJJEy14QiwCiwYiYp8DbQtu+SGqCqyHNWeK5E9oz2l3i+2Z2UNygZNUoRlphnQcMWO5kb30UmuuypiBKWrQqv5NRFZ7u/SZSeQRtd1iFKZqL9VyNTyC7bv9uCobbMenFwpsuyG9iZnRZdj9AO5y0cZdyMG3QAAAABJRU5ErkJggg==" />
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

          <div class="action-btn action">
            <div class="profile-header" id="user-btn" onclick="toggleMenu();">
              <img src="./assets/images/images.jfif" alt="">
            </div>

            <div class="menu">
              <h3>
                Username

              </h3>
              <ul>
                <li>
                  <span class="material-icons material-symbols-outlined">person</span>
                  <a href="#">My Profile</a>
                </li>
                <li>
                  <span class="material-icons material-symbols-outlined">edit</span>
                  <a href="profile_view.html">Edit Profile</a>
                </li>
                <li>
                  <span class="material-icons material-symbols-outlined">receipt_long</span>
                  <a href="#">My Purchase</a>
                </li>
                <li>
                  <span class="material-icons material-symbols-outlined">logout</span>
                  <a href="login.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="action-btn act" onclick=" toggleNotifi();">
            <div class="notification-header">
              <i class='bx bx-bell'></i>
              <span class="count">2</span>
            </div>
            <div class="notifi-box" id="box">
              <div class="box">
                <div class="heads">
                  <h2 class="toptext">Notifications <span>2</span></h2>
                  <a href="notification_show_all.php" class="toptext">Show all notification</a>
                </div>
                <a href="">
                  <div class="notifi-item">
                    <img src="assets/images/products/Clifton-Bass.jpg" alt="img">
                    <div class="notify-info">
                      <h3>Joined in auction<span>Clifton guitar</span></h3>
                      <span class="notify-time">10 minutes ago</span>

                    </div>
                  </div>
                </a>
                <a href="">
                  <div class="notifi-item">
                    <img src="assets/images/products/Clifton-Bass.jpg" alt="img">
                    <div class="notify-info">
                      <h3>Joined in auction<span>Clifton guitar</span></h3>
                      <span class="notify-time">10 minutes ago</span>

                    </div>
                  </div>
                </a>
                <a href="">
                  <div class="notifi-item">
                    <img src="assets/images/products/Clifton-Bass.jpg" alt="img">
                    <div class="notify-info">
                      <h3>Joined in auction<span>Clifton guitar</span></h3>
                      <span class="notify-time">10 minutes ago</span>

                    </div>
                  </div>
                </a>
              </div>
            </div>

          </div>




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
            <a href="#" class="menu-title">Currently in bids <i class='bx bx-time-five'></i></a>

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
        <a href="userlogin.html" class="action-btn">
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
          <a href="userhome.php" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <a href="userlatest.php" class="menu-title">LATEST AUCTION</a>

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


    <div class="container">

      <div class="profile-box">

        <!--
            - profile
          -->
        <div class="profile">

          <div class="profile-card">
            <div class="picture">
              <img src="./assets/images/images.jfif" alt="alan doe" class="profile-picture">
            </div>

            <p class="profile-name"><?php echo $results['username']?></p>

            <p class="edit-profile"><i class='bx bx-edit-alt'></i>edit profile
              <input type="button" id="loadFileXml" class="change-btn" value="Change profile"
                onclick="document.getElementById('file').click();" />
              <input type="file" style="display:none;" id="file" name="file" /></p>


          </div>
          <div class="profile-card">
            <div class="side-icons">
              <ul class="tabs">
                <li class="tab is-active">
                  <a data-switcher data-tab="1"><i class='bx bxs-user'></i> My Account</a>
                </li>
                <li class="tab">
                  <a data-switcher data-tab="2"><i class='bx bxs-trophy'></i>Win auction</a>
                </li>
                <li class="tab">
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
          <div class="page is-active" data-page="1">
            <div class="profile-body">

              <div class="profile-container" action="">
                <div class="row">

                  <div class="col">

                    <form action="" method="post">
                      <h3 class="title">My profile</h3>


                      <div class="inputBox">
                        <span>Username:</span>
                        <input type="text" placeholder="username" value="<?php echo $results['username']?>">
                      </div>
                      <div class="inputBox">
                        <span>Email:</span>
                        <input type="text" value="<?php echo $results['email']?>">

                      </div>
                      <div class="inputBox">
                        <span>Phone number:</span>
                        <input type="text" value="<?php echo $results['phone_number']?>">
                      </div>
                      <div class="inputBox">
                        <span>address:</span>
                        <input type="address" placeholder="Your address" value="<?php echo $results['address']?>" required>
                      </div>
                      <div class="inputBox">
                        <span>city:</span>
                        <input type="text" placeholder="City" value="<?php echo $results['city']?>" required>
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
                      <button type="submit"> CHANGE DETAILS </button>

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
          <div class="page" data-page="3">
            <div class="profile-body">

              <div class="profile-container" action="">
                <div class="row">

                  <div class="col">
                    <h3 class="title">Notification</h3>
                    <a href="">
                      <li>
                        <div class="notify-item-full">
                          <div class="notify-img">
                            <img src="assets/images/products/Clifton-Bass.jpg" alt=""
                              style="width: 90px; margin-left: 10px;">
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
                            <img src="assets/images/products/Clifton-Bass.jpg" alt=""
                              style="width: 90px; margin-left: 10px;">
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
<?php include 'includes/user_footer.php'; ?>


<!-- ===== SCRIPTS ===== -->
<?php include 'includes/user_scripts.php'; ?>
</body>

</html>