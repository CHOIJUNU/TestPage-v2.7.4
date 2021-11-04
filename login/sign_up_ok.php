<?php
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php"; // DB접속

// 변수에 POST로 값 추가
$id = $_POST['id'];
$pwd = $_POST['pwd'];
$name = $_POST['name'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$phone = $_POST['phone'];



$query = "INSERT INTO member VALUE ('$id', '$pwd', '$name', '$birth', '$email', '$phone')";
$conn->query($query) or die ("INSERT Error : $conn->error");

echo "<script> alert('Success!!'); location.replace('login.php'); </script>";

?>