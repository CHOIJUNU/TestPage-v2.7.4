<!DOCTYPE html>
<?php session_start(); // �޾ƿ� ������ ����
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php"; // DB����
?>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>
        Hi! :)
    </h1>

<?php
if(isset($_SESSION['id'])) { // isset�Լ��� id������ null������ Ȯ��
$uid = $_SESSION['id']; 
echo "Welcome $uid!<br>";
echo "<a href=\"comm/community.php\"><button>Forum</button></a>\n"; // �α����� �Ǿ� ���� ��� �Խ��ǰ� �α׾ƿ��� Ȱ��ȭ
echo "<a href=\"login/logout.php\"><button>Logout</button></a>"; 
} else { // id������ ���� ���
echo "Login please <a href=\"login/login.php\"><button>Login</button></a>"; // �α����� Ȱ��ȭ
}
?>

</body>

</html>