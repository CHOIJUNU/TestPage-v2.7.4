<?php
    if($_REQUEST['id'] && $_REQUEST['pwd']){
        $common->on_login();
    }

    if($_REQUEST['logout']){
        $common->logout();
    }
?>
<!DOCTYPE html>
<link rel="stylesheet" href="login/css/log.css">
<body>
<?php
    $common->logincheck_login();
?>
    <form action="?mode=login" method="post">
        <div class="login wrap">
            <input type="text" name="id" autofocus="true" required="true" placeholder="ID" autocomplete="off">
            <input type="password" name="pwd" id="password" required="true" placeholder="Password">
            <input type="submit" value="Let me in!">
            <input type="button" value="Sign up?" onclick="location.href='?mode=sign_up'">
        </div>
    </form>

</body>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
</html>
