<?php
    if($_REQUEST['title'] && $_REQUEST['content']){
        $forum->read_mod_ok();
    }
?>
<!DOCTYPE html>
<body>
    <h1>Forum</h1>
        <h4>Modify your contents!</h4>
            <form action="?mode=read_mod&idx=<?php $no = $_GET['idx']; echo $no; ?>" method="post">
                <?php
   	                $forum->read_mod();
                ?>
                <br><button type="submit">Submit</button>
            </form>
    </body>
</html>
