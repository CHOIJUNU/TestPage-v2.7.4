<?php
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";

$rno = $_GET['idx']; 

$sql = query("select * from reply where idx='".$rno."'");
$reply = $sql->fetch_array();

$sql = query("delete from reply where idx='".$rno."'"); ?>
<script>alert('Deleted!'); location.replace("read.php?idx=<?php echo $reply['num']; ?>");</script>