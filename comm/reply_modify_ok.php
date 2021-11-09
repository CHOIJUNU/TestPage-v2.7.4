<?php
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";

$rno = $_POST['reply_no'];
$bno = $_POST['board_no'];
$date = date('Y-m-d-h-i');

$sql = query("update reply set content='".$_POST['content']."', date='".$date."' where idx = '".$rno."'");
?> 

<script>alert('Modified!'); location.replace("read.php?idx=<?php echo $bno; ?>");</script>
