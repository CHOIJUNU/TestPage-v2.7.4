<?php
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";

$no = $_GET['idx'];
$title = $_POST['title'];
$content = $_POST['content'];
$sql = query("update board set title='".$title."',content='".$content."' where idx='".$no."'"); ?>

<script>alert("Modified!"); </script>
<meta http-equiv="refresh" content="0 url=community.php">