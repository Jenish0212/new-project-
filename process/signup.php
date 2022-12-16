<?php
include 'connection.php';
$name=$_POST["name"];
$email=$_POST["email"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];

if($pass1 == $pass2){
    $encrypted_password = md5($pass1);
   $query = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$encrypted_password')";
   if(mysqli_query($conn,$query)){
    echo "Inserted";
   }else{
    echo "error".mysqli_error($conn);
   }

}else{
    echo "password does not match";
}

?>