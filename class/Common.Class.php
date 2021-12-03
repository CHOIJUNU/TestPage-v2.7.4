<?php

class Common
{
    //# DB접속 및 세선 시작
    function dbconn()
    {
        $db = mysqli_connect('localhost', 'junwoo', 'junwoo0306', 'junwoo');
        if($db -> connect_errno)
        {
        die('Connect Error : '.$db->connect_error);
        }

        session_start();
        header("Content-Type:text/html;charset=EUC-KR");
        return $db;
    }

    //# DB연결 함수
    function __construct()
    {
        $this->dbconn();
    }

    //# 메인 페이지에서 로그인 확인
    function logincheck_main()
    {
        if(isset($_SESSION['id']))
        { 
            $uid = $_SESSION['id'];
            $sql = "select * from member where id='".$_SESSION['id']."' ";
            $result = mysqli_query($this->dbconn(), $sql);
            $name = mysqli_fetch_array($result);
            echo "Welcome ".$name['name']." [ $uid ]<br><br>";
            echo "<a href=\"?mode=forum\"><button class=button>Forum</button></a><br>"; 
            echo "<form action=\"?mode=logout method=\"post\">
            <input type = \"hidden\" name = \"logout\" value = \"logout\"><button class=button2>Logout</button></form>";
            } else { 
            echo "<b>Come in quickly!!<b/><BR><BR> <a href=\"?mode=login\"><button>GO</button></a>";
        }
    }

    //# 로그인 후 로그인 확인
    function logincheck_login()
    {
        if(isset($_SESSION['id']))
        {
            $uid = $_SESSION['id'];
            echo "$uid already login.";
            echo "<a href=\"?mode=main\"><button>Back</button></a> ";
            echo "<form action=\"?mode=logout method=\"post\">
            <input type = \"hidden\" name = \"logout\" value = \"logout\"><button class=button2>Logout</button></form>";
        }
    }

    //# 로그아웃
    function logout()
    {
        session_start();
        session_destroy();
        echo "<script>alert('Going to main page...');location.replace('?mode=main');</script>";
    }

    //# 로그인 절차
    function on_login()
    {
        if(isset($_POST['id']) && isset($_POST['pwd'])){ 

            $uid=$_POST['id'];
            $upwd=$_POST['pwd'];
            
            $sql = "SELECT * FROM member WHERE id='$uid'&&pwd='$upwd'";
            
            if(mysqli_fetch_array(mysqli_query($this->dbconn(), $sql))){ 
            
            session_start(); 
            $_SESSION['id'] = $uid;
            echo "<script>alert('Success!!".$uuu."');location.replace('?mode=main');</script>";
            
            }else{
            echo "<script> alert('Retry!!'); location.replace('?mode=login'); </script>";
            }
        }
    }

    //# 회원가입
    function sign_up()
    {
        $id = $_REQUEST['id'];
        $pwd = $_REQUEST['pwd'];
        $name = $_REQUEST['name'];
        $birth = $_REQUEST['birth'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];

        $sql = "INSERT INTO member VALUE ('$id', '$pwd', '$name', '$birth', '$email', '$phone')";
        $result = mysqli_query($this->dbconn(), $sql);

        echo "<script> alert('Success!!'); location.replace('?mode=login'); </script>";
    }

}
