<?php
    if($_REQUEST['id'] && $_REQUEST['pwd'] && $_REQUEST['name'] && $_REQUEST['birth'] && $_REQUEST['email'] && $_REQUEST['phone'])
    {
        $common->sign_up();
    }
?>
<!DOCTYPE html>
<link rel="stylesheet" href="login/css/sign.css">
<body>
    <form action="?mode=sign_up" method="post">
        <div class="login wrap">
            <h1>Sign Up</h1>

            <label>ID:</label>
            <input type="text" name="id"><br>

            <label>Password:</label>
            <input type="password" name="pwd"><br>

            <label>Name(Please enter your real name):</label>
            <input type="text" name="name"><br>

            <label>Birth(ex.990101):</label>
            <input type="text" name="birth"><br>

            <label>Email(Can be use to find pwd):</label>
            <input type="email" name="email"><br>

            <label>Phone(ex.010-0000-0000):</label>
            <input type="text" name="phone">
            <input type="submit" value="Submit">
        
        </div>
    </form>
</body>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
</html>
