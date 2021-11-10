<?php session_start();
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";

$uname = $_SESSION['id']; // id는 세션에서 불러온다
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d-h-i'); // 년월일시분

$tmpfile =  $_FILES['imgfile']['tmp_name']; // 임시로 저장된 파일의 위치
$upfile = $_FILES['imgfile']['name']; // 사용자의 시스템에 있을 때의 파일 이름

$filename = iconv("UTF-8", "EUC-KR",$_FILES['imgfile']['name']); 
$folder = "upload/".$filename;

move_uploaded_file($tmpfile,$folder); // 서버에 파일을 업로드 해줌 

// 업로드 할 파일은 파일 권한 숫자값 777로 바꿔주기 (안하면 파일 다운로드 실패)                         

if($uname && $title && $content){
$sql = query("insert into board(name,title,content,date,file) values('".$uname."','".$title."','".$content."','".$date."','".$upfile."')"); 
echo "<script>alert('Success!');location.href='community.php';</script>";
}
?>
