<?php
    if($_REQUEST['title'] && $_REQUEST['content']){
        $forum->write();
    }
?>
<!DOCTYPE html>
<link rel="stylesheet" href="comm/css/comm.css">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Forum</h1>
    <h4>Community for users!</h4>
    <form action="?mode=write" method="post" enctype="multipart/form-data">
        <textarea name="title" rows="1" cols="40" placeholder="Title" maxlength="100" required="required"></textarea><br>
        <textarea name="content" cols="40" placeholder="Content" required="required"></textarea><br>
        <input type="file" name="imgfile"><br>
        <button type="submit">Write</button>
    </form>
</body>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
</html>
