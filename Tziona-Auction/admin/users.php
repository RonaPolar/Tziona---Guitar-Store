<?php include '../includes/admin_header.php'; 

include '../database.php';

$userquery = "SELECT * from registeraccount";
$resultuser = mysqli_query($dbconnect, $userquery);

$usertypequery = "SELECT * from loginaccounts";
$resultusertype = mysqli_query($dbconnect, $usertypequery);



?>
<body>
    <!--DASHBOARD PANEL-->
    <?php include '../includes/admin_sidebar.php'; ?>

    <!--ADMIN PROFILE-->
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">User</span>
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
                    <div class="title">USERS</div>
                    <table id="recent" class="row-border cell-border" style="width:100%">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Username</th>
                                <th>Usertype</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($resultuser)) {?>
                            <tr>
                                <td>
                                    <img src="../assets/images/profiles/<?=$row['image']?>" alt="capo" style="width: 45px; height: 45px;"
                                        class="rounded-circle" /><i class="fa-solid fa-pen-to-square edit"></i>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-0"><?php echo $row['fullname']; ?></p>
                                            <p class="text-muted mb-0"><?php echo $row['email']; ?></p>
                                        </div>
                                    </div>
                                </td>
                                
                                <td>
                                    <span class="badge fw-bold bg-danger" style="color: white;"><?php echo $row['usertype']; ?></span>
                                </td>
                                
                            </tr>
                            <?php }?>
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