<?php
include_once 'db_connection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$mail = $_POST['email'];
$discipline = $_POST['discipline'];
$username = $_POST['username'];
$password = $_POST['password'];
$project = $_POST['project'];



$sql = "INSERT INTO employee (firstname, lastname, dob, address, email, phone, discipline, username, password) VALUES ('$firstname', '$lastname', '$dob', '$address', '$mail', '$phone', '$discipline', '$username', '$password');";

mysqli_query($conn, $sql);


header("Location: index?signup=success");



