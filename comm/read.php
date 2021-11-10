<!DOCTYPE html>
<?php session_start();
	include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";
    header("Content-Type:text/html; charset=utf-8");
?>
<body>
	<?php
		$no = $_GET['idx']; // 현재 글의 번호를 no에 저장
		$hit = mysqli_fetch_array(query("select * from board where idx ='".$no."'")); 
        // 쿼리문이 문자열로 되어있으므로 .으로 연결시켜줌
		$hit = $hit['hit'] + 1; // 버튼 클릭 시 조회수 증가
		$update = query("update board set hit = '".$hit."' where idx = '".$no."'");
        // 현재 글의 번호에 해당하는 테이블에 증가한 조회수 값 업데이트
		$sql = query("select * from board where idx='".$no."'"); 
		$board = $sql->fetch_array(); // 업데이트된 값을 다시 넣어줌
	?>

	<h2><?php echo $board['title']; ?></h2>
		ID: <?php echo $board['name']; echo "<br>";?> 
        Date: <?php echo $board['date']; echo "<br>";?> 
        Hit: <?php echo $board['hit']; //echo "<br>";?>
        <!-- File: <a href="upload/<?php //echo $board['file'];?>" download><?php //echo "<img src='upload/$board[file]'><br>"; echo $board['file'];?></a> -->
        <!-- 파일  다운로드 코드 -->
		<?php
        echo "<br><hr>";
        if(!empty($board['file'])){ // 만약 파일을 업로드 했을 경우 파일을 출력
        echo "<img src='upload/$board[file]'><br>";}
        echo nl2br("$board[content]"); // n12br로 문자열 띄어쓰기 활성화
        echo "<br><hr>";
        ?>

        <h3>Comment</h3>
		<?php
			$sql = query("select * from reply where num='".$no."' order by idx desc");
			while($reply = $sql->fetch_array()){?>
		    ID: <?php echo $reply['name']; echo "<br>";?>
			Date: <?php echo $reply['date']; echo "<br>";?>
            <?php 
            echo nl2br("$reply[content]");
            ?> 
            <?php
            if($_SESSION['id'] == $reply['name']){ // isset함수로 작성자 id와 일치하는 지 확인
            echo "<br>";
            echo "<a href=\"reply_modify.php?idx=".$reply['idx']."\";><button>Modify</button></a>\n"; // 로그인이 되어 있을 경우 게시판과 로그아웃을 활성화
            echo "<a href=\"reply_delete.php?idx=".$reply['idx']."\";><button>Delete</button></a>";
            echo "<br><hr>";
            }else{
                echo "<br><hr>";
            }}?>

            <form action="reply.php?idx=<?php echo $no; ?>" method="post">
				<textarea name="content"></textarea><br>
				<button>Comment</button>
		    </form>
            <hr>
        <a href="community.php"><button>Back</button></a>

        <?php
        if($_SESSION['id'] == $board['name']){ // isset함수로 작성자 id와 일치하는 지 확인
        echo "<a href=\"modify.php?idx=".$board['idx']."\";><button>Modify</button></a>\n"; // 로그인이 되어 있을 경우 게시판과 로그아웃을 활성화
        echo "<a href=\"delete.php?idx=".$board['idx']."\";><button>Delete</button></a>";
        }
?>
</body>
</html>
