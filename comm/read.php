<?php
    if($_REQUEST['content']){
        $forum->reply_ok();
    }

    if($_REQUEST['read_del']){
        $forum->read_del();
    }

    if($_REQUEST['reply_del']){
        $forum->reply_del();
    }
?>
<!DOCTYPE html>
<link rel="stylesheet" href="comm/css/read.css">
<body>
<a href="?mode=forum"><button>Back</button></a><br>
	<?php
        $forum->read();
	?>
    <h3>Comment</h3>
	<?php
        $forum->reply();
    ?>
    <form action="?mode=read&idx=<?php $no = $_GET['idx']; echo $no; ?>" method="post">
		<textarea name="content"></textarea><br>
		<button>Comment</button>
	</form><br><br>
    <?php
        $forum->read_btn();
    ?>
</body>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
</html>
