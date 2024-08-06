<?php include '../includes/admin_header.php'; ?>
<body>
    <!--DASHBOARD PANEL-->
    <?php include '../includes/admin_sidebar.php'; ?>

    <!--ADMIN PROFILE-->
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Category</span>
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
        <!--SALES--->
        <div class="home-content">
            <div class="boxes">
                <div class="boxes-total box">
                    <div class="top">
                        <button class="add_new" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#AddModal">+ Add New</button>
                        <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="exampleModalLabel">Add new category</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="">
                                        <div class="modal-body">
                                            <div class="checkout-modal">
                                                <div class="checkout-row">
                                                    <div class="checkout-col">

                                                        <div class="checkout-inputBox">
                                                            <span>CATEGORY Name:</span>
                                                            <input type="text" placeholder="Product Name" value=""
                                                                required id="prod" maxlength="80" />
                                                            <span class="error-msg" id="product-validation"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <span class="error-msg"></span>
                                            <input type="reset" class="btn btn-warning" value="Reset">
                                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal"><i
                                                    class="fa-solid fa-xmark"></i> Close</button>
                                            <button type="submit" class="btn btn-success">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="recent" class="row-border cell-border" style="width:100%">
                        <thead>
                            <tr>
                                <th>Category Name</th>

                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Acoustic Guitar</td>
                                <td><button class="btns"><i class="fa-solid fa-pen-to-square btns"></i> Edit</button>
                                    <button class="btns"><i class="fa-solid fa-trash"></i> Delete</button>
                                </td>
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