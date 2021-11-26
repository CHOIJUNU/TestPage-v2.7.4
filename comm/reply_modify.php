<?php
    if($_REQUEST['content']){
        $forum->reply_mod_ok();
    }
?>
<!DOCTYPE html>
<body>
        <form action="?mode=reply_mod" method="post">
            <?php
                $forum->reply_mod();
            ?>
            <button type="submit">Submit</button>
            </form><br><br>
</body>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
</html>
