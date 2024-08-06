<?php
include '../database.php';
session_start();

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = md5($_POST['password']);
$cpassword = md5($_POST['confpassword']);
$address = $_POST['address'];
$city = $_POST['city'];
$usertype = 'user';

if (!empty($fullname) && !empty($username) && !empty($email)
&& !empty($phonenumber) && !empty($password)&& !empty($cpassword)) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //checking if the email is already exist
    $sql =  mysqli_query($dbconnect, "SELECT email FROM registeraccount WHERE email ='{$email}'");
    if (mysqli_num_rows($sql) > 0) {
      echo "$email ~ Already Exists";
    } else {
      //password and confirm password match
      if ($password == $cpassword) {
        //check if user upload a file
        if (isset($_FILES['image'])) {
          $img_name = $_FILES['image']['name']; //image name
          $img_typ = $_FILES['image']['type'];  //image type
          $tmp_name = $_FILES['image']['tmp_name'];
          $img_explode = explode('.', $img_name);
          $img_extension = end($img_explode);
          $extensions = ['png', 'jpeg', 'jpg']; //valid extensions

          if (in_array($img_extension, $extensions) === true) {
            $time = time();
            $newimagename = $time . $img_name; //creating a unique name for image
            if (move_uploaded_file($tmp_name, "../assets/images/profiles/" . $newimagename))  //set the uploaded file store folder
            {
              $random_id = rand(time(), 10000000); //create a unique user id


              //insert data into database table
             //insert data into database table
             $regisquery = mysqli_query($dbconnect, "INSERT INTO registeraccount (unique_id, username, email, phone_number, password, fullname, address, city, image)
             VALUES ({$random_id},'{$username}','{$email}','{$phonenumber}','{$password}','{$fullname}','{$address}','{$city}','{$newimagename}')");
             $loginquery = "INSERT INTO loginaccounts (email, password)
             VALUES ('$email', '$password')";
             $resultlogin  = mysqli_query($dbconnect, $loginquery);
              if ($regisquery) {
                $sql3 = mysqli_query($dbconnect, "SELECT * FROM registeraccount WHERE email ='{$email}'");
                if (mysqli_num_rows($sql3) > 0) {
                  $row = mysqli_fetch_assoc($sql3); //fetching data
                  $_SESSION['unqiue_id'] = $row['unique_id'];
                  $_SESSION['email'] = $row['email'];
                  //$_SESSION['otp'] = $row['otp'];
                  header('location: login.php');
                  echo "Successfully Registered";

                }
              }
              else {
                echo "Something went wrong!";
              }
            }
          }
          else {
            echo "Please select image - JPG, PNG, JPEG";
          }

        } else {
          echo "Select profile image";
        }

      } else {
        echo "password don't match";
      }
    }
  } else {
    echo "$email ~ EMAIL IS NOT VALID";
  }
  } else {
    echo "ALL INPUTS ARE REQUIRED!";
}
?>