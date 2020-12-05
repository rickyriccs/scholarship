<?php
session_start();

require 'connect.php';
if (!$connect) {
    die('Could not connect: ' . mysqli_error());
}
$data = $_POST;
if(empty($data)){
    die('Form submission required...');
}
$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$message = $data['message'];
$subject = $data['subject'];
$create_time = date('Y-m-d h:i:s');

$query = "INSERT INTO `enquiries`(name, phone, email, subject, message, created_on) VALUES ('$name','$phone','$email','$subject','$message','$create_time') ";
$res = mysqli_query($connect, $query);
if (!$res) {
    die('Could not insert: ' . mysqli_error($connect));
} else {
//    header("Location: http://example.com/myOtherPage.php");
    echo "Enquiry Submitted Successfully..We will call you";
}
?>