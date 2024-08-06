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

  <!--checkout modal-->
  <div class="pay-overlay" data-overlay></div>

  <div class="pay" pay-data-modal>

    <div class="pay-modal-close-overlay" pay-data-modal-overlay></div>

    <div class="pay-modal-content">

      <button class="pay-modal-close-btn" pay-data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="checkout-modal">

        <form name="form1" action="#" class="checkout-form">

          <div class="checkout-row">

            <div class="checkout-col">

              <h3 class="checkout-title">billing address</h3>

              <div class="checkout-inputBox">
                <span>full name:</span>
                <input type="text" placeholder="Username" value="Username" required>
              </div>
              <div class="checkout-inputBox">
                <span>email:</span>
                <input type="email" placeholder="example@example.com" required>
              </div>
              <div class="checkout-inputBox">
                <span>address:</span>
                <input type="text" placeholder="Address" required>
              </div>
              <div class="checkout-inputBox">
                <span>city:</span>
                <input type="text" placeholder="City" required>
              </div>
              <div class="checkout-inputBox">
                <span>Zip code</span>
                <input type="number" placeholder="Zip code" required>
              </div>


            </div>

            <div class="checkout-col">

              <h3 class="checkout-title">payment</h3>


              <div class="checkout-inputBox">
                <span>name</span>
                <input type="text" placeholder="Name" required>
              </div>
              <div class="checkout-inputBox">
                <span>Payment method: </span>
                <select>
                  <option value="0">Cash on Delivery</option>
                  <option value="1">Gcash</option>
                </select>
              </div>
              <div class="checkout-inputBox">
                <span>Phone number: </span>
                <input type="tel" id="phone" name='tel' placeholder="Phone Numner" required>
              </div>
              <div class="checkout-inputBox">
                <span>Payment method</span>
                <img src="assets/images/pay.png" alt="">
              </div>

            </div>

          </div>

          <button type="submit" value="proceed to checkout" class="checkout-submit-btn" onclick="phonenumber(document.form1.tel)">PLACE ORDER</button>

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
    <!-- ===== THIS DIV IS TO HIDE THE SIDEBAR CATEGORY ONLY!! PLEASE IGNORE ===== -->
    <div class="sidebar-hide has-scrollbar" data-mobile-menu>

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
                <img src="./assets/images/icons/electric-guitar.svg" alt="E.g" width="50" height="50" class="menu-title-img">

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
                <img src="./assets/images/icons/bass-guitar.svg" alt="b.g" class="menu-title-img" width="50" height="50">

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
                <img src="./assets/images/icons/ukulele.svg" alt="ukelele" class="menu-title-img" width="50" height="50">

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
                <img src="./assets/images/icons/drums.svg" alt="drums" class="menu-title-img" width="50" height="50">

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
    <!-- ===== END OF THIS DIV IS TO HIDE THE SIDEBAR CATEGORY ONLY!! PLEASE IGNORE ===== -->


    <!-- ===== CART ===== -->
    <div class="container cart">
      <table>
        <tr>

          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
        <tr>
          <td>
            <div class="cart-info">
              <a href="#"><i class="fa-solid fa-trash"></i></a>
              <img src="assets/images/products/capo.jpg" alt="" />
              <div>
                <h1>Guitar capo</h1>
                <span>Price: &#8369;150.00</span> <br />
                <span>Date: 06/06/2022</span> <br />
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td> &#8369;150.00</td>
        </tr>
      </table>
      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td> &#8369;150</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td> &#8369;10</td>
          </tr>
          <tr>
            <td>Total</td>
            <td> &#8369;160</td>
          </tr>
        </table>
        <button class="checkout" id="button1">Proceed To Checkout</button>
      </div>
    </div>


    <!--RELATED PRODUCS-->
    <div class="product-container">

      <div class="container">

        <div class="product-box" data-mobile-menu>
          <div class="product-main">

            <h2 class="title">Related products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="./assets/images/products/capo.jpg" alt="capo" width="300" class="product-img default">
                  <img src="./assets/images/products/capo2.jpg" alt="capo" width="300" class="product-img hover">

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

                  <a href="#" class="showcase-category">Fender Capo</a>

                  <a href="#">
                    <h3 class="showcase-title">Click to see info about this product</h3>
                  </a>

                  <a href="#" class="Participate-btn">Add to cart</a>
                  <div class="price-box">
                    <p class="price"><br>₱150.00</br></p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="./assets/images/products/thumbpick.jpg" alt="Clifton Base" class="product-img default" width="300">
                  <img src="./assets/images/products/thumbpick.jpg" alt="Clifton Base 1" class="product-img hover" width="300">

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

                    <button class="btn-action">
                      <i class='bx bx-shopping-bag'></i>
                    </button>

                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">10 pcs Thumb picks</a>

                  <h3>
                    <a href="#" class="showcase-title">Click to see info about this product</a>
                  </h3>

                  <a href="productDetail.html" class="Participate-btn">Add to cart</a>
                  <div class="price-box">
                    <p class="price"><br>₱80.00</br></p>
                  </div>

                </div>

              </div>


            </div>

          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- ===== FOOTER ===== -->
  <?php include 'includes/footer.php'; ?>


  <!-- ===== SCRIPTS ===== -->
  <?php include 'includes/scripts.php'; ?>

</body>

</html>