<?php
 include('connection.php');

 $title = $_POST['title'];
 $query = "INSERT INTO categories(title) VALUES ('$title')";
 if(mysqli_query($conn,$query)){
     $msg = "successfully saved";
     header('Location:../categories.php?msg='.$msg);
 }else{
    $msg = "error occured:-".mysqli_error($conn);
    header("Location:../add-category.php?errmsg=".$msg);
 }