<?php
    include("config.php");

    $id=$_GET['id'];

    $data = "DELETE FROM `users` WHERE `id` = '$id'";

    $query =  mysqli_query($conn, $data);

    if($query){
        header("location:index.php");
    }

?>