<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    echo $fname;
    echo " ";
    echo $lname;
    echo " ";

    $link = mysqli_connect("localhost", "root", "", "formdb");

    if($link == false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }

    $sql = "INSERT INTO userinfo(firstName, lastName) Values('$fname', '$lname')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    }
    else{
        echo "ERROR: Could not able to excute $sql". mysql_error($link);

    }

    mysqli_close($link);

    ?>