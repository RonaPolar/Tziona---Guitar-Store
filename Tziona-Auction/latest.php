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

        <div class="header-alert-news">
          <p>
            <b>Welcome to tziona music auction shop</b>

          </p>
        </div>

        <div class="wrapper">
          <div class="display">
            <div id="time"></div>
          </div>

        </div>


      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="index.php" class="header-logo">
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
            <a href="login.php" class="action-btn">
              <i class="bx bx-user"></i>
            </a>
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
            <a href="index.php" class="menu-title-active">Home</a>

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
            <a href="latest.php" class="menu-title">Latest Auction</a>

            <!--<ul class="dropdown-list">

                <li class="dropdown-item"><a href="#">Ano d2</a></li>
                <li class="dropdown-item"><a href="#">Diko alam hahaha</a></li>
                <li class="dropdown-item"><a href="#">Mga items na kakapost pa lang for auction</a></li>
                <li class="dropdown-item"><a href="#">gg na</a></li>

              </ul>-->
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Currently in bids <i class='bx bx-time-five'></i></a>

            <!--<ul class="dropdown-list">

                <li class="dropdown-item"><a href="#">Dito naman yung ni-joinan ni bidder</a></li>

              </ul>
            </li>-->

          <li class="menu-category">
            <a href="about.php" class="menu-title">About US</a>

            <!--<ul class="dropdown-list">
                <li class="dropdown-item"><a href="#">mainit</a></li>-->
          </li>
          <li class="menu-category">
            <a href="contact.php" class="menu-title">Contact us</a>

            <!--<ul class="dropdown-list">
                <li class="dropdown-item"><a href="#">mainit</a></li>-->
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
        <a href="index.php" class="action-btn">
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
        <a href="login.php" class="action-btn">
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

            <!--<li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>-->

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

            <!--<li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>-->

          </ul>

        </li>

        <!--<li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>-->

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <!--<ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>-->

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

    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/electric-guitar.svg" alt="Electric" width="25">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Electric Guitars</h3>

                <p class="category-item-amount"></p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/bass-guitar.svg" alt="Bass" width="20">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Bass Guitars</h3>

                <p class="category-item-amount"></p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/ukulele.svg" alt="ukelele" width="22">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Ukelele</h3>

                <p class="category-item-amount"></p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/drums.svg" alt="drums" width="90">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Drum set</h3>

                <p class="category-item-amount"></p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/Guitar.svg" alt="Guitar" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Guitar</h3>

                <p class="category-item-amount"></p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

        </div>

      </div>

    </div>



    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">

        <!--
          - SIDEBAR
        -->

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

            </ul>

          </div>

        </div>

        <div class="product-box">


          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">Latest products for bidding</h2>

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

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">Global electric Guitar</a>

                  <a href="#">
                    <h3 class="showcase-title">Click to see info about this product</h3>
                  </a>

                  <a href="#" class="Participate-btn">Bid now</a>
                  <div class="price-box">
                    <p class="price"><br>Starting Price: &#8369;5,000</br></p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/Clifton-Bass.jpg" alt="Clifton Base" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/Clifton-Bass1.jpg" alt="Clifton Base 1" class="product-img hover"
                    width="300">

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
                  <a href="product_details.html" class="showcase-category">Clifton Electric Bass Guitar</a>

                  <h3>
                    <a href="#" class="showcase-title">Click to see info about this product</a>
                  </h3>

                  <a href="product_details.html" class="Participate-btn">Bid now</a>
                  <div class="price-box">
                    <p class="price"><br>Starting Price: &#8369;7,000</br></p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/drums.jpg" alt="drums" class="product-img default" width="300">
                  <img src="./assets/images/products/drums1.jpg" alt="drums1" class="product-img hover" width="300">

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
                  <a href="#" class="showcase-category">Acoustic Global Drum set</a>

                  <h3>
                    <a href="#" class="showcase-title">Click to see info about this product</a>
                  </h3>

                  <a href="#" class="Participate-btn">Bid now</a>
                  <div class="price-box">
                    <p class="price"><br>Starting Price: &#8369;10,000</br></p>
                  </div>

                </div>

              </div>

              <!-- ITO YUNG IBANG PART NUNG MGA ITEMS PRE-->
              <!--<div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/clothes-3.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/clothes-4.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover"
                    width="300">

                  <p class="showcase-badge angle pink">new</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">skirt</a>

                  <h3>
                    <a href="#" class="showcase-title">Black Floral Wrap Midi Skirt</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$25.00</p>
                    <del>$35.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/shoe-2.jpg" alt="Casual Men's Brown shoes" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/shoe-2_1.jpg" alt="Casual Men's Brown shoes" class="product-img hover"
                    width="300">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">casual</a>

                  <h3>
                    <a href="#" class="showcase-title">Casual Men's Brown shoes</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$99.00</p>
                    <del>$105.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/watch-3.jpg" alt="Pocket Watch Leather Pouch" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/watch-4.jpg" alt="Pocket Watch Leather Pouch" class="product-img hover"
                    width="300">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">watches</a>

                  <h3>
                    <a href="#" class="showcase-title">Pocket Watch Leather Pouch</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$150.00</p>
                    <del>$170.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/watch-1.jpg" alt="Smart watche Vital Plus" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/watch-2.jpg" alt="Smart watche Vital Plus" class="product-img hover" width="300">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">watches</a>

                  <h3>
                    <a href="#" class="showcase-title">Smart watche Vital Plus</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$100.00</p>
                    <del>$120.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/party-wear-1.jpg" alt="Womens Party Wear Shoes" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/party-wear-2.jpg" alt="Womens Party Wear Shoes" class="product-img hover"
                    width="300">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">party wear</a>

                  <h3>
                    <a href="#" class="showcase-title">Womens Party Wear Shoes</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$25.00</p>
                    <del>$30.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/jacket-1.jpg" alt="Mens Winter Leathers Jackets" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/jacket-2.jpg" alt="Mens Winter Leathers Jackets" class="product-img hover"
                    width="300">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">jacket</a>

                  <h3>
                    <a href="#" class="showcase-title">Mens Winter Leathers Jackets</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$32.00</p>
                    <del>$45.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/sports-2.jpg" alt="Trekking & Running Shoes - black" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/sports-4.jpg" alt="Trekking & Running Shoes - black" class="product-img hover"
                    width="300">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">sports</a>

                  <h3>
                    <a href="#" class="showcase-title">Trekking & Running Shoes - black</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$58.00</p>
                    <del>$64.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/shoe-1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/shoe-1_1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img hover"
                    width="300">

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">formal</a>

                  <h3>
                    <a href="#" class="showcase-title">Men's Leather Formal Wear shoes</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$50.00</p>
                    <del>$65.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/shorts-1.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img default" width="300">
                  <img src="./assets/images/products/shorts-2.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img hover" width="300">

                  <p class="showcase-badge angle black">sale</p>

                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">shorts</a>

                  <h3>
                    <a href="#" class="showcase-title">Better Basics French Terry Sweatshorts</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$78.00</p>
                    <del>$85.00</del>
                  </div>

                </div>

              </div>-->

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

          <!--<div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Alan Doe</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>-->


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





    <!--
      - BLOG
    -->

    <!--<div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Fashion</a>

              <a href="#">
                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
              </a>

              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Clothes</a>

              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>

              <p class="blog-meta">
                By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Shoes</a>

              <h3>
                <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
              </h3>

              <p class="blog-meta">
                By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Electronics</a>

              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>

              <p class="blog-meta">
                By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
              </p>

            </div>

          </div>

        </div>

      </div>

    </div>-->

  </main>


  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-category">

      <div class="container">

        <h2 class="footer-category-title">Brand directory</h2>

        <div class="footer-category-box">

          <h3 class="category-box-title">Electric Guitar :</h3>

          <a href="#" class="footer-category-link">Clifton Electric Guitar</a>
          <a href="#" class="footer-category-link">Knight Electric Guitar</a>
          <a href="#" class="footer-category-link">Global Electric Guitar</a>
          <!--<a href="#" class="footer-category-link">jacket</a>
            <a href="#" class="footer-category-link">dress & frock</a>
            <a href="#" class="footer-category-link">innerwear</a>
            <a href="#" class="footer-category-link">hosiery</a>-->

        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Electric Bass Guitar :</h3>

          <a href="#" class="footer-category-link">Clifton Bass Guitar</a>
          <a href="#" class="footer-category-link">Global Bass Guitar</a>
          <a href="#" class="footer-category-link">Knight Bass Guitar</a>
          <!--<a href="#" class="footer-category-link">casual</a>
            <a href="#" class="footer-category-link">cowboy shoes</a>
            <a href="#" class="footer-category-link">safety shoes</a>
            <a href="#" class="footer-category-link">Party wear shoes</a>
            <a href="#" class="footer-category-link">Branded</a>
            <a href="#" class="footer-category-link">Firstcopy</a>
            <a href="#" class="footer-category-link">Long shoes</a>-->
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Acoustic Drums :</h3>

          <a href="#" class="footer-category-link">Global Drum set</a>
          <!--<a href="#" class="footer-category-link">Earrings</a>
            <a href="#" class="footer-category-link">Couple rings</a>
            <a href="#" class="footer-category-link">Pendants</a>
            <a href="#" class="footer-category-link">Crystal</a>
            <a href="#" class="footer-category-link">Bangles</a>
            <a href="#" class="footer-category-link">bracelets</a>
            <a href="#" class="footer-category-link">nosepin</a>
            <a href="#" class="footer-category-link">chain</a>
            <a href="#" class="footer-category-link">Earrings</a>
            <a href="#" class="footer-category-link">Couple rings</a>-->
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Acoustic Guitar :</h3>

          <a href="#" class="footer-category-link">Global Acoustic Guitar</a>
          <a href="#" class="footer-category-link">Arena Acoustic Guitar</a>
          <a href="#" class="footer-category-link">Calao Acoustic Guitar</a>
          <a href="#" class="footer-category-link">Lumanog Acoustic Guitar</a>
          <!--<a href="#" class="footer-category-link">liner</a>
            <a href="#" class="footer-category-link">lipstick</a>
            <a href="#" class="footer-category-link">prefume</a>
            <a href="#" class="footer-category-link">Body soap</a>
            <a href="#" class="footer-category-link">scrub</a>
            <a href="#" class="footer-category-link">hair gel</a>
            <a href="#" class="footer-category-link">hair colors</a>
            <a href="#" class="footer-category-link">hair dye</a>
            <a href="#" class="footer-category-link">sunscreen</a>
            <a href="#" class="footer-category-link">skin loson</a>
            <a href="#" class="footer-category-link">liner</a>
            <a href="#" class="footer-category-link">lipstick</a>-->
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Ukelele :</h3>

          <a href="#" class="footer-category-link">Ukelele Beachman</a>
          <a href="#" class="footer-category-link">Clifton Ukelele</a>
          <a href="#" class="footer-category-link">Victor Ukelele</a>
          <a href="#" class="footer-category-link">Kokolele</a>
          <!--<a href="#" class="footer-category-link">liner</a>
            <a href="#" class="footer-category-link">lipstick</a>
            <a href="#" class="footer-category-link">prefume</a>
            <a href="#" class="footer-category-link">Body soap</a>
            <a href="#" class="footer-category-link">scrub</a>
            <a href="#" class="footer-category-link">hair gel</a>
            <a href="#" class="footer-category-link">hair colors</a>
            <a href="#" class="footer-category-link">hair dye</a>
            <a href="#" class="footer-category-link">sunscreen</a>
            <a href="#" class="footer-category-link">skin loson</a>
            <a href="#" class="footer-category-link">liner</a>
            <a href="#" class="footer-category-link">lipstick</a>-->
        </div>
      </div>
    </div>

    <div class="footer-nav">
      <div class="container">
        <div class="footer-container">
          <div class="footer-wrapper">
            <h4>OUR COMPANY</h4>
            <a href="#">Legal Notice</a>
            <a href="#">Terms and Condition</a>
            <a href="About.html">About us</a>
            <a href="#">FAQs</a>
          </div>
          <div class="footer-wrapper">
            <h4>SERVICES</h4>
            <a href="#">Payment methods</a>
            <a href="contact.html">Contact us</a>
            <a href="#">About us</a>
          </div>

          <div class="footer-wrapper">
            <h4>Explore</h4>
            <a href="index.html">home</a>
            <a href="Latest.html">Latest Auction</a>
            <a href="#">Currently in bid</a>
          </div>


          <div class="footer-wrapper">
            <h4>CONTACT</h4>
            <li class="footer-nav-item flex">
              <div class="icon-box">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <a href="https://goo.gl/maps/Nuo3sdrn59uAiiGS7" target="_blank">
                <address class="content">
                  131 M.L. Quezon Street, Antipolo, 1870 Rizal
                </address>
              </a>
            </li>
            <li class="footer-nav-item flex">
              <div class="icon-box">
                <i class="fa-solid fa-phone"></i>
              </div>
              <a href="tel:+639568270291" class="footer-nav-link">(+63)9065214162</a>
            </li>
            <li class="footer-nav-item flex">
              <div class="icon-box">
                <i class="fa-regular fa-envelope"></i>
              </div>
              <a href="mailto:example@gmail.com" class="footer-nav-link">tzionamusicshop@gmail.com</a>
            </li>
          </div>
          <div class="footer-wrapper">
            <h4>follow us on </h4>
            <div class="social-media">
              <a href="https://www.facebook.com/tzionamusicshop/" target="_blank"
                class='bx bxl-facebook-circle bx-tada'></a>
              <a href="https://www.instagram.com/tzionamusic/" target="_blank" class='bx bxl-instagram-alt bx-tada'></a>
              <a href="https://twitter.com/ShopTziona" target="_blank" class='bx bxl-twitter bx-tada'></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/Gcash.jpg" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">Tziona Music shop</a> all rights reserved.
        </p>

      </div>
    </div>

  </footer>


  <!--
    - swiper link
  -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>


  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>