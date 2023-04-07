<?php
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    $name = $_POST ['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $descr = $_POST['descr'];

    $sql="INSERT INTO `trip2` ( `name`, `gender`, `email`, `phone`, `descr`, `date`) VALUES ( '$name', '$gender', '$email', '$phone', '$descr', current_timestamp())";

    echo $sql;

?>