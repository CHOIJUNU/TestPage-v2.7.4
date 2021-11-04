<?php
    session_start();
	include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";
   	$no = $_GET['idx'];
	$sql = query("select * from board where idx='$no';");
	$board = $sql->fetch_array();
 ?>
<!DOCTYPE html>
<body>
    <h1>Forum</h1>
        <h4>Modify your contents!</h4>
            <form action="modify_ok.php?idx=<?php echo $no; ?>" method="post">
                <textarea name="title" rows="1" cols="40" placeholder="Title" maxlength="100" required><?php echo $board['title']; ?></textarea><br>
                <textarea name="content" placeholder="Content" required><?php echo $board['content']; ?></textarea>
                    <button type="submit">Submit</button>
        </form>
    </body>
</html>