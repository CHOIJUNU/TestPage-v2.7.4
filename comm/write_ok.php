<?php session_start();
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";

$uname = $_SESSION['id']; // id�� ���ǿ��� �ҷ��´�
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d-h-i'); // ����Ͻú�

if($uname && $title && $content){
$sql = query("insert into board(name,title,content,date) values('".$uname."','".$title."','".$content."','".$date."')"); 
echo "<script>alert('Success!');location.href='community.php';</script>";
}
?>