<?php
    include '../database.php';
    session_start();
    
    
    if(isset($_POST['submit'])){
        $productname = $_POST['productname'];
        $startprice = $_POST['startprice'];
        $startdate = $_POST['startdatee'];
        $enddate = $_POST['enddate'];   
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];
        if($productname){
            if(isset($_FILES['productpic'])){
                $img_name = $_FILES['productpic']['name']; //image name
                $img_typ = $_FILES['productpic']['type'];  //image type
                $tmp_name = $_FILES['productpic']['tmp_name'];
                $img_explode = explode('.', $img_name);
                $img_extension = end($img_explode);
                $extensions = ['png', 'jpeg', 'jpg']; //valid extensions

                if(in_array($img_extension, $extensions) === true){
                    $time = time();
                    $newimagename = $time . $img_name; //creating a unique name for image
                    if(move_uploaded_file($tmp_name, "../admin/images/" . $newimagename)){
                        $random_id = rand(time(), 10000000); //create a unique user id
                            // insert in the database of productlists
                            
                            $productquery = "INSERT INTO productlists (unique_id, product, prod_pic, start_price, start_date, end_date, start_time, end_time)
                            VALUES ('$random_id', '$productname', '$newimagename', '$startprice', '$startdate', '$enddate', '$starttime', '$endtime')";

                            $resultproduct = mysqli_query($dbconnect, $productquery);
                            header("location:Productlist.php");
                    }
                }
                else{
                    echo "Please select image - JPG, PNG, JPEG";    
                }
            }
            else {
                echo "Select profile image";
            }
        }
        
    }
    else if(!empty($productname) && !empty($startprice) && !empty($startdate)
         && !empty($enddate) && !empty($starttime) && !empty($endtime)){
            echo "ALL INPUTS ARE REQUIRED!";
    }
?>