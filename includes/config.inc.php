<?php
session_start();
$servername="localhost";
$username="root";
$dbpassword="";
$dbname="placement_portal";

//create connection
$conn=new mysqli($servername,$username,$dbpassword,$dbname);
if(mysqli_connect_errno()){
    echo 'failed to connect';
}

//check connection
if(!mysqli_select_db($conn,'placement_portal')){
    echo 'something went wrong';
}
?>