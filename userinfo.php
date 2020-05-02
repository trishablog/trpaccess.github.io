<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'trpuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = " insert into userinfodata (user, email, mobile, subject, message)
values ('$user', '$email', '$mobile', '$subject', '$message') ";

mysqli_query($con,$query );


echo "$query";

mysqli_query($con, $query);
header('location:index.php');

?>