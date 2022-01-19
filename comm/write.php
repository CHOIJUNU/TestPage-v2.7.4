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
    <a href="?mode=forum"><button class="button">Back</button></a>
    <form action="?mode=write" method="post" enctype="multipart/form-data">
    <table align="center">
    <tbody>
        <th>Posting</th>
        <tr><td><textarea name="title" rows="2" cols="60" style="font-size:15px;" placeholder="Title" maxlength="100" required="required"></textarea></td></tr>
        <tr><td><textarea name="content" rows="6" cols="60" style="font-size:15px;" placeholder="Content" required="required"></textarea></td></tr>
        <tr><td><input type="file" name="imgfile"></td></tr>
        <tr><td align="right"><button type="submit" class="button2">Write</button></td></tr>
    </tbody>
    </table>
    </form>
</body>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
</html>
