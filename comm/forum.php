<?php
$where = " ";

if($_REQUEST['search_type'] && $_REQUEST['search']){
    $where .= " where ".$_REQUEST['search_type']." like '%".$_REQUEST['search']."%' ";
}
?>
<!DOCTYPE html>
<link rel="stylesheet" href="comm/css/comm.css">
    <body>
        <h1>Forum</h1>
        <h4>Community for users!</h4>
        <a href="?mode=main"><button class=button>Back</button></a>
        <a href="?mode=write"><button class=button>Write</button></a>
        <table align="center" class="comm_table">
            <thead>
                <tr>
                    <th width="400">Title</th>
                    <th width="120">Name</th>
                    <th width="100">Date</th>
                    <th width="100">Hit</th>
                </tr>
            </thead>
            <?php
                $forum->paging($where);
            ?>
        </table>
        <br>

        <form align="center">
            <?php
                $forum->paging_num($where, $_REQUEST['search_type'], $_REQUEST['search']);
            ?>
        </form>
        <br>

        <form align="center" action="?mode=forum" method="get">
        <input type = "hidden" name = "mode" value = "<?=$_REQUEST['mode']?>">
            <select name="search_type">
                <option value="title">Title</option>
                <option value="name">Name</option>
                <option value="content">Content</option>
            </select>
            <input type="text" name="search" size="35" required="required">
            <button>Search</button>
        </form>

    </body>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
</html>