<?php include '../includes/admin_header.php'; 

  include "productfun.php";

  $selectquery = "SELECT * from productlists";
  $resultselect = mysqli_query($dbconnect, $selectquery);

  
  $bidselectquery = "SELECT * from currentbid";
  $resultbid = mysqli_query($dbconnect, $bidselectquery);
  
?>
<body>
    <!--DASHBOARD PANEL-->
    <?php include '../includes/admin_sidebar.php'; ?>

  <!--ADMIN PROFILE-->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Bidding Events</span>
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

    <!--ONGOING BIDDING-->
    <div class="home-content">
      <div class="ongoing-boxes">
        <div class="bid-ongoing box">
          <div class="ongoing-display">
            <div class="title">Ongoing Auction</div>
            <table id="example" class="row-border cell-border" style="width:100%">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Start Date</th>
                  <th>Remaining Time</th>
                  <th>Starting Price</th>
                  <th>Current Bid</th>
                  <th>Tools</th>
                </tr>
              </thead>
              <tbody>
              <?php while($row = mysqli_fetch_array($resultselect)) {?>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../admin/images/<?=$row['prod_pic']?>" alt="Guitar" style="width: 45px; height: 45px;">
                      <div class="ms-3">
                        <p class="fw-bold mb-0"><?php echo $row['product']; ?></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5 class="fw-bold mb-0"><?php echo $row['start_time']; ?> - <?php echo $row['end_time'];?></h5>
                    <p class="text-muted mb-0"><?php echo $row['start_date']; ?></p>
                  </td>
                  <td><?php 
                    $datetimestart = date($row['start_time']);
                    $datetimeend = date($row['end_time']);
                    $timestampstart = strtotime($datetimestart);
                    $timestampend = strtotime($datetimeend);
                    $time = $timestampstart - $timestampend;
                    date($time);
                    echo $time; 
                  ?></td>
                  <td>&#8369;<?php echo $row['start_price']; ?></td>
                  <td>
                    <?php while($row2 = mysqli_fetch_array($resultbid)) {?>
                    <p class="fw-bold mb-0">&#8369; <?php echo $row2['bid'];?></p>
                    
                      <?php }?>
                  </td>

                  <td><button class="btns"><i  class="fa-solid fa-pen-to-square"></i> Edit</button>
                    <button class="btns"><i class="fa-solid fa-trash"></i> Delete</button></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- ===== SCRIPTS ===== -->
    <?php include '../includes/admin_scripts.php'; ?>
</body>

</html>