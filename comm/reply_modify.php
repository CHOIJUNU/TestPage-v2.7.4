<?php
    if($_REQUEST['content']){
        $forum->reply_mod_ok();
    }
?>
<!DOCTYPE html>
<link rel="stylesheet" href="css/comm.css">
<body>
    <h1>Forum</h1>
        <h4>Modify your comments!</h4>
            <form action="?mode=reply_mod" method="post">
            <?php
                $forum->reply_mod();
            ?>
                <button type="submit">Submit</button>
            </form>
</body>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
</html>
