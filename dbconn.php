<?php
$conn = mysqli_connect('localhost', 'junwoo', 'junwoo0306', 'junwoo'); // 호스트명, 사용자, 비밀번호, DB이름
// mysqli_set_charset($conn,"euckr"); // 문자열 세팅
if($conn -> connect_errno){
die('Connect Error : '.$conn->connect_error); // 접속 오류가 난다면 오류메시지를 출력
}

function query($query)
{
    global $conn;
    return $conn->query($query);
}
?>