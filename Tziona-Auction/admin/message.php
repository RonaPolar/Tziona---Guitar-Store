<?php
include '../includes/database.php';

session_start();

$query = "SELECT * from messages";
$result = mysqli_query($dbconnect, $query);

?>

<?php include '../includes/admin_header.php'; ?>

<body>
  <!--DASHBOARD PANEL-->
  <?php include '../includes/admin_sidebar.php'; ?>

  <!--ADMIN SECTION-->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Messages</span>
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
    <div class="home-content">
      <div class="boxes">
        <div class="boxes-total box">
          <div class="title">Messages</div>
          <table id="recent" class="row-border cell-border" style="width:100%">
            <thead>
              <tr>
                <th>Username</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Message</th>
              </tr>
            </thead>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
              <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><button data-id='<?php echo $row['id']; ?>' id="usersz" class="userinfo btn btn-success">Info</button></td>
              </tr>
            <?php } ?>

            <div class="modal fade" id="empModal" role="dialog">
              <div class="modal-dialog modal-dialog-scrollable"  role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">MESSAGE</h4>
                    <span class="close" data-bs-dismiss="modal" aria-label="Close" aria-hidden="true" style="cursor: pointer;">&times;</span>
                  </div>
                  <div class="modal-body">
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Close</button>
                  </div>
                </div>
              </div>
            </div>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== SCRIPTS ===== -->
  <?php include '../includes/admin_scripts.php'; ?>

</body>

</html>