<?php
    $username = $_POST['username'];
    $email = $_POST['email'];

    $dbconnect = mysqli_connect('localhost','root','','form');
    $sql = "INSERT INTO basis_info(username,email) values ('$username' , '$email')";

    $run = mysqli_query($dbconnect,$sql);
    if($run == TRUE){
        echo "Inserted";
    }else{
        echo "Error";
    }
?>
