<?php
require_once "constant.php";

$fname =$_POST['fullname']
$email =$_POST['email_address']
$pass =$_POST['password']
$gender =$_POST['gender']
$Add =$_POST['Address']

$insert_qry = "INSERT INTO users(fullname,email.gender,password,address)VALUES( '$fname', '$email','$gender', '$pass','$Add')";
















$dbConn = new mysqli($hostname, $hostuser, $hostpass, $dbname);

if($dbConn->connect_error){
    print "Connection Failed" . connect_error;
}else{
    print "Connected Successfully";
}

?>