<?php
    if($_REQUEST['content']){
        $forum->reply_ok();
    }

    if($_REQUEST['read_del']){
        $forum->read_del();
    }

    if($_REQUEST['reply_del']){
        $forum->reply_del();
    }
?>
<!DOCTYPE html>
<link rel="stylesheet" href="comm/css/read.css">
<body><br>
<a href="?mode=forum"><button>Back</button></a><br><br><br><br>
    <?php
        $forum->read();
	?>
    <h3>Comment</h3>
	<?php
        $forum->reply();
    ?>
    <form action="?mode=read&idx=<?php $no = $_GET['idx']; echo $no; ?>" method="post">
		<textarea name="content"></textarea><br>
		<button>Comment</button>
	</form><br><br>
    <?php
        $forum->read_btn();
    ?>
</body>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script>
    $(function(){
        $('.btn_read_mod').click(function(){
            var content = $('#readcon').val();
            $.ajax({
                type:"POST",
                data:{"content":content},
                dataType:"html",
                url:"?mode=read_mod&idx=<?php $no = $_GET['idx']; echo $no; ?>",
                success:function(data){
                    console.log(data);
                    $('#readmodPopup').show().html(data);
                },error:function(){
                    console.log('error');
                }
            });
        });
        $('.btn_reply_mod').click(function(){
            var content = $('#replycon').val();
            $.ajax({
                type:"POST",
                data:{"content":content},
                dataType:"html",
                url:"?mode=reply_mod&idx=<?php echo $forum->reply_no(); ?>",
                success:function(data){
                    console.log(data);
                    $('#replymodPopup').show().html(data);
                },error:function(){
                    console.log('error');
                }
            });
        });
	});
</script>
</html>
