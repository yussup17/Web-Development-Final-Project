<?php
if (isset($_POST['btn_submit'])){
    //connect to the db
    require "db_conn.php";
   // recive data from user
    $product_name=mysqli_real_escape_string($conn,$_POST['pname']);
    $product_qtty=mysqli_real_escape_string($conn,$_POST['qtty']);
    $product_price=mysqli_real_escape_string($conn,$_POST['price']);

    // to save the data prepare insert query
    $insert_query = "INSERT INTO `products`(`id`, `name`, `quantity`, `price`) VALUES (null,'$product_name',
                                                                  '$product_qtty','$product_price')";

    //Finally excute the query
    $save=mysqli_query($conn,$insert_query);

    //check if the data has been saved successfully
    if (!$save){
        echo "failed submiting product";
    }else{
        header("location:index.php");
    }

}