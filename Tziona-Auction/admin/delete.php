<?php
    require("../database.php");

   

    if(isset($_POST['delete'])){
        $selectquery = "SELECT * from productlists";
        $resultselect = mysqli_query($dbconnect, $selectquery);
    
        $row = mysqli_fetch_array($resultselect);
        if($row){    
            $prod = $row['product'];
            $deleteid = "DELETE FROM productlists WHERE product = '$prod' ";
            $result = mysqli_query($dbconnect, $deleteid);
        }
        
    }


?>