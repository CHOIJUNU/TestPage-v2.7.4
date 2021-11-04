<?php
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php"; // DB접속

if(isset($_POST['id']) && isset($_POST['pwd'])){ 
// isset함수로 id와 pwd에 POST로 불러온 값이 있는 지 확인 

$uid=$_POST['id'];
$upwd=$_POST['pwd'];

$sql = "SELECT * FROM member WHERE id='$uid'&&pwd='$upwd'";

if(mysqli_fetch_array(mysqli_query($conn, $sql))){ 
// mysqli_fetch_array 함수로 mysql을 array형태로 가져온다
// mysqli_free_result로 닫아주는 게 좋음

session_start(); // 세션 시작
$_SESSION['id'] = $uid;
echo "<script>alert('Success!!');location.replace('../index.php');</script>";

}else{
echo "<script> alert('Retry!!'); location.replace('login.php'); </script>";
}

}
?>