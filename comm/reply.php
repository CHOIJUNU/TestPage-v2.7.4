<?php session_start();
	include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";

    $no = $_GET['idx'];
    $uname = $_SESSION['id'];
    $date = date('Y-m-d-h-i');
    
    if($no && $uname && $_POST['content']){
        $sql = query("insert into reply(num,name,content,date) values('".$no."','".$uname."','".$_POST['content']."','".$date."')");
        echo "<script>alert('Success!');location.href='read.php?idx=$no';</script>";
    }
?>