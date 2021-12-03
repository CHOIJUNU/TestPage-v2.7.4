<!DOCTYPE html>

<?php
    include $_SERVER['DOCUMENT_ROOT'].'/class/Common.Class.php';
    $common = new Common;
    include $_SERVER['DOCUMENT_ROOT'].'/class/Forum.Class.php';
    $forum = new Forum($common);

    switch($_GET['mode']){
		case 'login' :
			include $_SERVER['DOCUMENT_ROOT'].'/login/login.php';
			break;
        case 'logout' :
            include $_SERVER['DOCUMENT_ROOT'].'/login/logout.php';
            break;
        case 'sign_up' :
            include $_SERVER['DOCUMENT_ROOT'].'/login/sign_up.php';
            break;
        case 'forum' :
            include $_SERVER['DOCUMENT_ROOT'].'/comm/forum.php';
            break;
        case 'read' :
            include $_SERVER['DOCUMENT_ROOT'].'/comm/read.php';
            break;
        case 'read_mod' :
            include $_SERVER['DOCUMENT_ROOT'].'/comm/modify.php';
            break;
        case 'write' :
            include $_SERVER['DOCUMENT_ROOT'].'/comm/write.php';
            break;
        case 'reply_mod' :
            include $_SERVER['DOCUMENT_ROOT'].'/comm/reply_modify.php';
            break;
		case 'main' :
		default :
            include $_SERVER['DOCUMENT_ROOT'].'/main.php';
			break;
		}
?>

</html>
