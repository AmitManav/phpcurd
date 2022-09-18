<?php
    include("config.php");

    $id=$_GET['id'];

    $data = "DELETE FROM `posts` WHERE `id` = '$id'";

    $query =  mysqli_query($conn, $data);

    if($query){
        header("location:post-display.php");
    }clear

?>