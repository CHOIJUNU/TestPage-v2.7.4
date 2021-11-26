<?php
    if($_REQUEST['title'] && $_REQUEST['content']){
        $forum->read_mod_ok();
    }
?>
<!DOCTYPE html>
<link rel="stylesheet" href="comm/css/mod.css">
<body>
    <br>
    <form action="?mode=read_mod&idx=<?php $no = $_GET['idx']; echo $no; ?>" method="post">
        <?php
   	        $forum->read_mod();
        ?>
        <br>
        <button type="submit">Submit</button>
    </form>
    <br><br>
</body>
</html>
