<?php session_start();
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";

$uname = $_SESSION['id']; // id는 세션에서 불러온다
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d-h-i'); // 년월일시분

if($uname && $title && $content){
$sql = query("insert into board(name,title,content,date) values('".$uname."','".$title."','".$content."','".$date."')"); 
echo "<script>alert('Success!');location.href='community.php';</script>";
}
?>