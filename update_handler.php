<?php
if (isset($_POST['btn_update'])){
    require'db_conn.php';
    $update_name= mysqli_real_escape_string($conn,$_POST['pname']);
    $update_qtty= mysqli_real_escape_string($conn,$_POST['qtty']);
    $update_price= mysqli_real_escape_string($conn,$_POST['price']);
    $recieved_id= mysqli_real_escape_string($conn,$_POST['my_id']);

    // To implement the updating prepare the update query
    $update_query ="UPDATE `products` SET `name`='$update_name',`quantity`='$update_qtty',`price`='$update_price' WHERE id='$recieved_id'";
     $update=mysqli_query($conn,$update_query);
     if (!$update){
         die("updating failed");
     }else{
         header("location:product.php");
     }
}
