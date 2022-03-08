<?php
if (isset($_GET['products_id'])){
    // connect to the db
    require 'db_conn.php';
    //Receive the product id
    $recieve_id=$_GET['products_id'];

    // To implement the deletion,prepare the delete query
    $delete_query="DELETE FROM products WHERE id='$recieve_id'";
    $delete=mysqli_query($conn,$delete_query);
    if (!$delete){
        die("Deletion_faild");
    }else{
        header('location:product.php');
    }
}
