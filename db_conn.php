<?php
$_host="localhost";
$_user="root";
$password="";
$db="our_shop";

$conn=mysqli_connect($_host,$_user,$password,$db);
if (!$conn){
    die("DB_connection_faild");
}