<?php
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php"; // DB����

if(isset($_POST['id']) && isset($_POST['pwd'])){ 
// isset�Լ��� id�� pwd�� POST�� �ҷ��� ���� �ִ� �� Ȯ�� 

$uid=$_POST['id'];
$upwd=$_POST['pwd'];

$sql = "SELECT * FROM member WHERE id='$uid'&&pwd='$upwd'";

if(mysqli_fetch_array(mysqli_query($conn, $sql))){ 
// mysqli_fetch_array �Լ��� mysql�� array���·� �����´�
// mysqli_free_result�� �ݾ��ִ� �� ����

session_start(); // ���� ����
$_SESSION['id'] = $uid;
echo "<script>alert('Success!!');location.replace('../index.php');</script>";

}else{
echo "<script> alert('Retry!!'); location.replace('login.php'); </script>";
}

}
?>