<!DOCTYPE html>
<?php session_start();
	include $_SERVER['DOCUMENT_ROOT']."/dbconn.php";
?>
<body>
	<?php
		$no = $_GET['idx']; // ���� ���� ��ȣ�� no�� ����
		$hit = mysqli_fetch_array(query("select * from board where idx ='".$no."'")); 
        // �������� ���ڿ��� �Ǿ������Ƿ� .���� ���������
		$hit = $hit['hit'] + 1; // ��ư Ŭ�� �� ��ȸ�� ����
		$update = query("update board set hit = '".$hit."' where idx = '".$no."'");
        // ���� ���� ��ȣ�� �ش��ϴ� ���̺� ������ ��ȸ�� �� ������Ʈ
		$sql = query("select * from board where idx='".$no."'"); 
		$board = $sql->fetch_array(); // ������Ʈ�� ���� �ٽ� �־���
	?>

	<h2><?php echo $board['title']; ?></h2>
		ID: <?php echo $board['name']; echo "<br>";?> 
        Date: <?php echo $board['date']; echo "<br>";?> 
        Hit: <?php echo $board['hit']; ?>
		<?php
        echo "<br><hr>";
        echo nl2br("$board[content]"); 
        echo "<br><hr>";
        ?>

        <a href="community.php"><button>Back</button></a>

        <?php
        if($_SESSION['id'] == $board['name']){ // isset�Լ��� �ۼ��� id�� ��ġ�ϴ� �� Ȯ��
        echo "<a href=\"modify.php?idx=".$board['idx']."\";><button>Modify</button></a>\n"; // �α����� �Ǿ� ���� ��� �Խ��ǰ� �α׾ƿ��� Ȱ��ȭ
        echo "<a href=\"delete.php?idx=".$board['idx']."\";><button>Delete</button></a>";
        }
?>
</body>
</html>