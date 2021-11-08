<?php
    session_start();
	include_once $_SERVER['DOCUMENT_ROOT']."/dbconn.php";
    
    $reply_num = $_GET['idx'];

    $sql = query("select num from reply where idx='".$reply_num."'");
	$board_num = $sql->fetch_array();

    $sql2 = query("select content from reply where idx='".$reply_num."'");
    $reply = $sql2->fetch_array();
 ?>
<!DOCTYPE html>
<body>
    <h1>Forum</h1>
        <h4>Modify your comments!</h4>
            <form action="reply_modify_ok.php" method="post">
            <input type="hidden" name="reply_no" value="<?php echo $reply_num; ?>">
            <input type="hidden" name="board_no" value="<?php echo $board_num['num']; ?>">
                <textarea name="content" placeholder="Content" required><?php echo $reply['content']; ?></textarea><br>
                <button type="submit">Submit</button>
        </form>
    </body>
</html>