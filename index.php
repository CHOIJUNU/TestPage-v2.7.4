<!DOCTYPE html>
<?php session_start(); // 받아올 세션을 시작
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php"; // DB접속
?>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>
        Hi! :)
    </h1>

<?php
if(isset($_SESSION['id'])) { // isset함수로 id세션이 null값인지 확인
$uid = $_SESSION['id']; 
echo "Welcome $uid!<br>";
echo "<a href=\"comm/community.php\"><button>Forum</button></a>\n"; // 로그인이 되어 있을 경우 게시판과 로그아웃을 활성화
echo "<a href=\"login/logout.php\"><button>Logout</button></a>"; 
} else { // id정보가 없을 경우
echo "Login please <a href=\"login/login.php\"><button>Login</button></a>"; // 로그인을 활성화
}
?>

</body>

</html>