<?php include '../includes/admin_header.php'; ?>
<body>
    <!--DASHBOARD PANEL-->
    <?php include '../includes/admin_sidebar.php'; ?>

  <!--ADMIN PROFILE-->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Total SALES</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search Here">
        <i class='bx bx-search'></i>
      </div>
      <div class="profile-details" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name" href="#"> Admin</span>
        <i class='bx bx-chevron-down'></i>
      </div>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Edit Profile</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="../login.php">Logout</a></li>
      </ul>
    </nav>

    <!--SALES--->
    <div class="home-content">
      <div class="boxes">
        <div class="boxes-total box">
          <div class="title">SALES</div>
          <table id="example" class="row-border cell-border" style="width:100%">
            <thead>
              <tr>
                <th>Username</th>
                <th>Date</th>
                <th>Transaction</th>
                <th>Status</th>
                <th>Total</th>
                <th>Full Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="images/profile-3.jfif" alt="capo" style="width: 45px; height: 45px;"
                      class="rounded-circle">
                    <div class="ms-3">
                      <p class="fw-bold mb-0">Ralf Baltero</p>
                      <p class="text-muted mb-0">ralf@gmail.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-bold mb-0">4:00 PM</p>
                  <p class="text-muted mb-0">Sunday, 19-06-2022</p>
                </td>
                <td></td>
                <td>
                  <span class="badge fw-bold bg-danger">Returned</span>
                </td>
                <td>&#8369;23,000</td>
                <td><button class="btns" data-bs-toggle="modal" data-bs-target="#ViewDesctModal"><i
                      class="fa-solid fa-magnifying-glass"></i>View</button>
                  <!--MODAL VIEW FULL DESCRIPTION-->
                  <div class="modal fade" id="ViewDesctModal" tabindex="-1" aria-labelledby="ViewModalLabel"
                    role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title fw-bold" id="ViewModalLabel">Ralf Baltero</h5>
                          <span class="close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true"
                            style="cursor: pointer;">&times;</span>

                        </div>
                        <div class="modal-body">
                          <table id="" class="  table-bordered" style="width:100%;">
                            <thead>
                              <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Anything</td>
                                <td>&#8369; 12,000</td>
                                <td>1</td>
                                <td>&#8369; 12,000</td>
                              </tr>
                              <tr>
                                <td>Anything</td>
                                <td>&#8369; 11,000</td>
                                <td>1</td>
                                <td>&#8369; 11,000</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th></th>
                                <th></th>
                                <th class="text-end">Total: </th>
                                <th>&#8369; 23,000</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-success" type="button" data-bs-dismiss="modal"><i
                              class="fa-solid fa-xmark"></i> Close</button>

                        </div>
                      </div>
                    </div>
                  </div>

                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="images/profile.jpg" alt="capo" style="width: 45px; height: 45px;" class="rounded-circle">
                    <div class="ms-3">
                      <p class="fw-bold mb-0">Haildreil Escalera</p>
                      <p class="text-muted mb-0">hail@gmail.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-bold mb-0">10:00 PM</p>
                  <p class="text-muted mb-0">Sunday, 19-06-2022</p>

                </td>
                <td></td>
                <td>
                  <span class="badge fw-bold bg-danger">Returned</span>
                </td>
                <td>&#8369;3,000</td>
                <td><button class="btns"><i class="fa-solid fa-magnifying-glass"></i>View</button></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="images/profile-1.jfif" alt="capo" style="width: 45px; height: 45px;"
                      class="rounded-circle">
                    <div class="ms-3">
                      <p class="fw-bold mb-0">Ronaliza Polar</p>
                      <p class="text-muted mb-0">ron@gmail.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-bold mb-0">1:00 AM</p>
                  <p class="text-muted mb-0">Tuesday, 7-06-2022</p>

                </td>
                <td></td>
                <td>
                  <span class="badge fw-bold bg-warning">Pending</span>
                </td>
                <td>&#8369;1,200</td>
                <td><button class="btns"><i class="fa-solid fa-magnifying-glass"></i>View</button></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="images/download.png" alt="capo" style="width: 45px; height: 45px;" class="rounded-circle">
                    <div class="ms-3">
                      <p class="fw-bold mb-0">Miguel Joshua Miranda</p>
                      <p class="text-muted mb-0">mj@gmail.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-bold mb-0">1:00 PM</p>
                  <p class="text-muted mb-0">Saturday, 11-06-2022</p>

                </td>
                <td></td>
                <td>
                  <span class="badge fw-bold bg-success">Delivered</span>
                </td>
                <td>&#8369;1,000</td>
                <td><button class="btns"><i class="fa-solid fa-magnifying-glass"></i>View</button></td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="images/profile-2.jfif" alt="capo" style="width: 45px; height: 45px;"
                      class="rounded-circle">
                    <div class="ms-3">
                      <p class="fw-bold mb-0">Roger Rosal</p>
                      <p class="text-muted mb-0">rog@gmail.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-bold mb-0">12:00 AM</p>
                  <p class="text-muted mb-0">Thursday, 9-06-2022</p>

                </td>
                <td></td>
                <td>
                  <span class="badge fw-bold bg-success">Delivered</span>
                </td>
                <td>&#8369;1,000</td>
                <td><button class="btns"><i class="fa-solid fa-magnifying-glass"></i>View</button></td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </section>

   <!-- ===== SCRIPTS ===== -->
   <?php include '../includes/admin_scripts.php'; ?>

</body>

</html>