<?php
$conn = mysqli_connect('localhost', 'junwoo', 'junwoo0306', 'junwoo'); // ȣ��Ʈ��, �����, ��й�ȣ, DB�̸�
// mysqli_set_charset($conn,"euckr"); // ���ڿ� ����
if($conn -> connect_errno){
die('Connect Error : '.$conn->connect_error); // ���� ������ ���ٸ� �����޽����� ���
}

function query($query)
{
    global $conn;
    return $conn->query($query);
}
?>