<?php
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";

$rno = $_POST['reply_no'];
$bno = $_POST['board_no'];

$sql3 = query("update reply set content='".$_POST['content']."' where idx = '".$rno."'");
?> 

<script>alert('Modified!'); location.replace("read.php?idx=<?php echo $bno; ?>");</script>