<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo $username;
    // echo " ";
    // echo $password;
    // echo " ";

    $link = mysqli_connect("localhost", "root", "", "formdb");

    if($link == false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }

    $sql = "select * from admin";

    $query = mysqli_query($link, $sql);

    $row = mysqli_fetch_array($query);

    $username_db = $row['username'];
    $password_db = $row['password'];

    if($username == $username_db && $password == $password_db){
        echo "logged in successfully";
        include 'adminHomePage.php';
    }
    else{
        echo "login attempt failed";
    }
    

    $sql = "select * from userinfo";


    
    mysqli_close($link);


?>