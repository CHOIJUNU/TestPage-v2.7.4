<!DOCTYPE html>
<?php session_start();
include $_SERVER['DOCUMENT_ROOT']."/dbconn.php"; // DB접속
?>
<body>
<h1>Forum</h1>
<h4>Community for users!</h4>
<table border='1'>
<thead>
<tr>
<th width="70">No.</th>
<th width="500">Title</th>
<th width="120">Name</th>
<th width="100">Date</th>
<th width="100">Hit</th>
</tr>
</thead>
<?php
$sql = query("select * from board order by idx desc limit 0,5");
// dbconn에 있는 query함수를 실행, 0부터 10까지 내림차순
while($board = $sql->fetch_array())
{ //board변수에 쿼리문을 통해 얻은 데이터를 배열로 정리
  $title=$board["title"]; 
  if(strlen($title)>30)
  { // title변수의 문자열길이가 30이상일 때
    $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
  } // 0부터 30까지는 utf-8형식으로 표현하고 그 뒤는 ...으로 출력
?>
<tbody>
<tr align="center">
<td width="70"><?php echo $board["idx"]; ?></td>
<td width="500"><a href="read.php?idx=<?php echo $board["idx"];?>"><?php echo $title;?></a></td>
<td width="120"><? echo $board["name"]; // 사용자 id 출력 ?></td>
<td width="200"><? echo $board["date"];?></td>
<td width="100"><? echo $board["hit"];?></td>
</tr>
</tbody>
<?php } ?>
</table>
<a href="../index.php"><button>Back</button></a>
<a href="write.php"><button>Write</button></a>
</body>

</html>
