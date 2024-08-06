<?php include '../includes/admin_header.php'; 

include '../database.php';
include 'productfun.php';
include 'delete.php';
        

$selectquery = "SELECT * from productlists";
$resultselect = mysqli_query($dbconnect, $selectquery);








?>
<body>
    <!--DASHBOARD PANEL-->
    <?php include '../includes/admin_sidebar.php'; ?>


    <!--ADMIN PROFILE-->
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Product list</span>
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

        <!--ONGOING BIDDING-->
        <div class="home-content">
            <div class="ongoing-boxes">
                <div class="bid-ongoing box">
                    <div class="product-display">
                        <div class="top">
                            <button class="add_new" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#myModal">+ Add New</button>
                            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Add new products</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="checkout-modal">
                                                <form name="form1" enctype="multipart/form-data" action="" class="checkout-form" method="post">

                                                    <div class="checkout-row">

                                                        <div class="checkout-col">

                                                            <div class="checkout-inputBox">
                                                                <span>Product Name:</span>
                                                                <input type="text" 
                                                                    placeholder="Product Name" value=""
                                                                    name="productname"
                                                                    required id="prod" maxlength="80"
                                                                    onkeyup="validateProductname()" />
                                                                <span class="error-msg" id="product-validation"></span>
                                                            </div>

                                                            <div class="checkout-inputBox">
                                                                <span>Starting Price:</span>
                                                                <input type="number" 
                                                                    name="startprice"
                                                                    class="currency" min="0.00" max=""
                                                                    value="0" />
                                                            </div>
                                                            <div class="checkout-inputBox">
                                                                <span>Start Date</span>
                                                                <input type="date" 
                                                                    name="startdatee"
                                                                    placeholder="Enter the Date"
                                                                    id="currentdate" required>
                                                                <span>End Date (optional)</span>
                                                                <input type="date" 
                                                                    name="enddate"
                                                                    placeholder="Enter the Date"
                                                                    id="endofdate">
                                                                <span class="error-msg" id="Date-validation"></span>
                                                            </div>


                                                        </div>

                                                        <div class="checkout-col">

                                                            <div class="checkout-inputBox">
                                                                <span>Product picture</span>
                                                                <input type="file" 
                                                                    name="productpic"
                                                                    placeholder="Product picture"
                                                                    required>
                                                            </div>
                                                            <div class="checkout-inputBox">
                                                                <span>Category:</span>
                                                                <select class="d-flex">
                                                                    <option value="0"> All</option>
                                                                </select>
                                                            </div>
                                                            <div class="checkout-inputBox">
                                                                <span>Start time</span>
                                                                <input type="time" 

                                                                    name="starttime"
                                                                    placeholder="Enter the Time"
                                                                    id="start" required>
                                                                to
                                                                <input type="time" 
                                                                name="endtime"
                                                                placeholder="Enter the Time" id="end"
                                                                    required>
                                                                <span class="error-msg" id="time-validation"></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                            </div>  
                                            <span>Description</span>
                                            <span class="error-msg" id="dsc-validation"></span>
                                            <textarea name="content" id="descript" required></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <span class="error-msg" id="submit-validation"></span>
                                            <input type="reset" class="btn btn-warning" value="Reset">
                                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal"><i
                                                    class="fa-solid fa-xmark"></i> Close</button>
                                            <input type="submit" name="submit" class="btn btn-success" id="submit" 
                                            value="Add"onclick="valuevalidateForm()"></button>
                                        </div>
                                        </form>
                                    </div>      
                                </div>
                            </div>
                            <div class="selection">
                                <p>Category: </p>
                                <select class="flex">
                                    <option value="0"> All</option>
                                </select>
                            </div>
                        </div>
                        <table id="example" class="row-border cell-border" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Description</th>
                                    <th>Starting Price</th>
                                    <th>Start date</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tBody>
                                <?php while($row = mysqli_fetch_array($resultselect)) {?>
                                <tr>
                                    <td class="mb-0"><?php echo $row['product']; ?></td>
                                    <td><img src="../admin/images/<?=$row['prod_pic']?>" /><i class="fa-solid fa-pen-to-square edit"
                                            data-bs-toggle="modal" data-bs-target="#ViewModalPic"></i>
                                        <div class="modal fade" id="ViewModalPic" tabindex="-1"
                                            aria-labelledby="ViewModalLabel" role="dialog">
                                            <div class="modal-dialog ">
                                                <div class="modal-content"> 
                                                    <div class="modal-header">
                                                        <h5 class="modal-title fw-bold" id="ViewModalLabel">Clifton Bass
                                                            Guitar</h5>
                                                        <span class="close" data-bs-dismiss="modal" aria-label="Close"
                                                            aria-hidden="true" style="cursor: pointer;">&times;</span>

                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="checkout-inputBox">
                                                            <span>Product picture</span>
                                                            <input type="file" placeholder="Product picture" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"  data-bs-dismiss="modal"><i
                                                                class="fa-solid fa-xmark"></i> Close</button>
                                                        <button type="button" class="btn btn-success">Save Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><button class="btns" data-bs-toggle="modal" data-bs-target="#ViewModal"><i
                                                class="fa-solid fa-magnifying-glass"></i>View</button>
                                        <div class="modal fade" id="ViewModal" tabindex="-1"
                                            aria-labelledby="ViewModalLabel" role="dialog">
                                            <div class="modal-dialog ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title fw-bold" id="ViewModalLabel">Clifton Bass
                                                            Guitar</h5>
                                                        <span class="close" data-bs-dismiss="modal" aria-label="Close"
                                                            aria-hidden="true" style="cursor: pointer;">&times;</span>

                                                    </div>
                                                    <div class="modal-body">
                                                        this is a description
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-success" type="button" data-bs-dismiss="modal"><i
                                                                class="fa-solid fa-xmark"></i> Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>&#8369; <?php echo $row['start_price']; ?></td>
                                    <td>
                                        <h5 class="fw-bold mb-0"><?php echo $row['start_time']; ?> - <?php echo $row['end_time'];?></h5>
                                        <p class="text-muted mb-0"><?php echo $row['start_date']; ?></p>
                                    </td>
                                    
                                    <td><button class="btns" data-bs-toggle="modal" data-bs-target="#mModal"><i
                                                class="fa-solid fa-pen-to-square"></i> Edit</button>
                                        <form method="post" enctype="multipart/form-data">
                                        <input name="delete" type="submit" onclick="validateForm()" value="Delete">
                                        </form>
                                        <div class="modal fade" id="mModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title fw-bold" id="exampleModalLabel">Edit this
                                                            product</h5>
                                                        <button class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="checkout-modal">
                                                            <form action="" class="checkout-form" method="post">

                                                                <div class="checkout-row">

                                                                    <div class="checkout-col">

                                                                        <div class="checkout-inputBox">
                                                                            <span>Product Name:</span>
                                                                            <input type="text"
                                                                                
                                                                                placeholder="Product Name" value=""
                                                                                required id="prod" maxlength="80"
                                                                                onkeyup="validateProductname()" />
                                                                            <span class="error-msg"
                                                                                id="product-validation"></span>
                                                                        </div>

                                                                        <div class="checkout-inputBox">
                                                                            <span>Starting Price:</span>
                                                                            <input type="number" 
                                                                                   class="currency"
                                                                                   
                                                                                min="0.00" max="" value="0" />
                                                                        </div>
                                                                        <div class="checkout-inputBox">
                                                                            <span>Start Date</span>
                                                                            <input type="date"
                                                                                placeholder="Enter the Date"
                                                                                
                                                                                id="currentdate" required>
                                                                            <span>End Date (optional)</span>
                                                                            <input type="date"
                                                                                placeholder="Enter the Date"
                                                                                
                                                                                id="endofdate">
                                                                            <span class="error-msg"
                                                                                id="Date-validation"></span>
                                                                        </div>


                                                                    </div>

                                                                    <div class="checkout-col">

                                                                        <div class="checkout-inputBox">
                                                                            <span>Product picture</span>
                                                                            <input type="file"
                                                                                
                                                                                placeholder="Product picture" required>
                                                                        </div>
                                                                        <div class="checkout-inputBox">
                                                                            <span>Category:</span>
                                                                            <select class="d-flex">
                                                                                <option value="0"> All</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="checkout-inputBox">
                                                                            <span>Start time</span>
                                                                            <input type="time"
                                                                               
                                                                                placeholder="Enter the Time" id="start"
                                                                                required>
                                                                            to
                                                                            <input type="time"
                                                                                placeholder="Enter the Time" id="end"
                                                                                
                                                                                required>
                                                                            <span class="error-msg"
                                                                                id="time-validation"></span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                        </div>
                                                        <span>Description</span>
                                                        <span class="error-msg" id="dsc-validation"></span>
                                                        <textarea name="content1" id="descript" required></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <span class="error-msg" id="submit-validation"></span>
                                                        <input type="reset" class="btn btn-warning" value="Reset">
                                                        <button type="reset" class="btn btn-success" data-bs-dismiss="modal"><i
                                                        class="fa-solid fa-xmark"></i> Close</button>
                                                        <input type="submit" value="Add" class="btn btn-success" id="submit" onclick="validateForm()">
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>       
                                </tr>
                                
        
                            <?php } ?>
                            </tBody>
                        </table>
                    </div>
                </div>
            </div>
    </section>

  <!-- ===== SCRIPTS ===== -->
  <?php include '../includes/admin_scripts.php'; ?>

</body>

</html>