<?php include '../includes/admin_header.php'; 
    include '../database.php';        
    require("productfun.php");

    $selectid = "SELECT * FROM productlists";
    $selectquery = mysqli_query($dbconnect, $selectid);

    $row = mysqli_fetch_array($selectquery);

    
?>
<body>
    <!--DASHBOARD PANEL-->
    <?php include '../includes/admin_sidebar.php'; ?>
    <!--ADMIN SECTION-->
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search Here">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                aria-expanded="false">
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

        <!--SUMMARY BOXES-->
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Order</div>
                        <div class="number"><?php 
                        if($row == null){
                            echo "0";
                            }else{
                                echo $row['id'];
                            }
                            ?>
                        
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Sales</div>
                        <div class="number">0</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bxs-cart-add cart two'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Profit</div>
                        <div class="number">&#8369;0</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bxs-cart-add cart three'></i>
                </div>
            </div>

            <!--BID WINNERS-->
            <div class="boxes">
                <div class="boxes-total box">
                    <div class="title">Bid Winners</div>
                    <table id="winn" class="row-border cell-border" style="width:100%">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Product</th>
                                <th>Date</th>
                                <th>Last Bid</th>
                                <th>Tools</th>
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
                                    <div class="d-flex align-items-center">
                                        <img src="images/Ukelele.jpg" alt="Ukelele" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-0">Ukelele</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-bold mb-0">10:00 PM</p>
                                    <p class="text-muted mb-0">Sunday, 19-06-2022</p>
                                </td>
                                <td>&#8369;12,000</td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/profile.jpg" alt="capo" style="width: 45px; height: 45px;"
                                            class="rounded-circle">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-0">Haildreil Escalera</p>
                                            <p class="text-muted mb-0">hail@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/Clifton-Bass.jpg" alt="Ukelele"
                                            style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-0">Clifton Bass</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-bold mb-0">1:00 PM</p>
                                    <p class="text-muted mb-0">Tuesday, 7-06-2022</p>
                                </td>
                                <td>&#8369;25,000</td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>

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
                                    <div class="d-flex align-items-center">
                                        <img src="images/drums.jpg" alt="Ukelele" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-0">Drums</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-bold mb-0">1:00 AM</p>
                                    <p class="text-muted mb-0">Wednesday, 8-06-2022</p>
                                </td>
                                <td>&#8369;22,000</td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/download.png" alt="capo" style="width: 45px; height: 45px;"
                                            class="rounded-circle">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-0">Miguel Joshua Miranda</p>
                                            <p class="text-muted mb-0">mj@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/drums1.jpg" alt="Ukelele" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-0">Drums</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-bold mb-0">1:00 PM</p>
                                    <p class="text-muted mb-0">Saturday, 11-06-2022</p>
                                </td>
                                <td>&#8369;22,000</td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>

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
                                    <div class="d-flex align-items-center">
                                        <img src="images/Guitar-Global.jpg" alt="Ukelele"
                                            style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-0">Guitar</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-bold mb-0">12:00 AM</p>
                                    <p class="text-muted mb-0">Thursday, 9-06-2022</p>
                                </td>
                                <td>&#8369;32,000</td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>

                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>

            <!--RECENT SALES BOXES-->
            <div class="boxes">
                <div class="boxes-total box">
                    <div class="title">Recent sales</div>
                    <table id="recent" class="row-border cell-border" style="width:100%">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Full Details</th>
                                <th>Tools</th>
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
                                <td>
                                    <span class="badge fw-bold bg-danger">Returned</span>
                                </td>
                                <td>&#8369;1,000</td>
                                <td><button class="btns"><i class="fa-solid fa-magnifying-glass"></i>View</button></td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/profile.jpg" alt="capo" style="width: 45px; height: 45px;"
                                            class="rounded-circle">
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
                                <td>
                                    <span class="badge fw-bold bg-danger">Returned</span>
                                </td>
                                <td>&#8369;3,000</td>
                                <td><button class="btns"><i class="fa-solid fa-magnifying-glass"></i>View</button></td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>

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

                                <td>
                                    <span class="badge fw-bold bg-warning">Pending</span>
                                </td>
                                <td>&#8369;1,200</td>
                                <td><button class="btns"><i class="fa-solid fa-magnifying-glass"></i>View</button></td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/download.png" alt="capo" style="width: 45px; height: 45px;"
                                            class="rounded-circle">
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
                                <td>
                                    <span class="badge fw-bold bg-success">Delivered</span>
                                </td>
                                <td>&#8369;1,000</td>
                                <td><button class="btns"><i class="fa-solid fa-magnifying-glass"></i>View</button></td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>

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

                                <td>
                                    <span class="badge fw-bold bg-success">Delivered</span>
                                </td>
                                <td>&#8369;1,000</td>
                                <td><button class="btns"><i class="fa-solid fa-magnifying-glass"></i>View</button></td>
                                <td><button class="btnss"><i class="fa-solid fa-trash"></i> Delete</button></td>

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