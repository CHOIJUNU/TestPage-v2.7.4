<!DOCTYPE html>
<?php session_start(); 
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php"; // DB접속
?>

<head>
    <h3>Login</h3>
</head>

<body>

    <?php if(isset($_SESSION['id'])) { // iseet함수로 로그인 정보가 있는 지 확인
$uid = $_SESSION['id'];
echo "$uid already login.";
echo "<a href=\"../index.php\"><button>Back</button></a> "; // 뒤로가기와 로그아웃 버튼 활성화
echo "<a href=\"logout.php\"><button>Logout</button></a>";    
}
?>

    <form method="post" action="common.php">
        <input type="text" name="id" autofocus="true" required="true" placeholder="ID">
        <input type="password" name="pwd" required="true" placeholder="Password">
        <input type="submit" value="Login">
    </form>

    <a href="password.php"><button>Forgot pwd?</button></a>
    <a href="sign_up.php"><button>Sign up</button></a>

</body>

</html>
