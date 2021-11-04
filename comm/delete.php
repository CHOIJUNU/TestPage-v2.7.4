<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";
	
	$no = $_GET['idx'];
	$sql = query("delete from board where idx='$no';");
?>
<script>alert("Deleted!");</script>
<meta http-equiv="refresh" content="0 url=community.php">