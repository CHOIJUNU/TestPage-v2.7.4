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
// ---------------------------------- 페이징 구현 ----------------------------------
if(isset($_GET['page'])){
  $page = $_GET['page'];
    }else{$page = 1;}
      $sql = query("select * from board");
      $row_num = mysqli_num_rows($sql); // 게시물 수
      $list = 5; // 리스트 개수
      $block_num = 5; // 블록 당 보여줄 페이지 개수

      $block = ceil($page/$block_num); // 현재 페이지 블록 구하기
      $block_start = (($block - 1) * $block_num) + 1; // 블록 시작 번호
      $block_end = $block_start + $block_num - 1; // 블록 마지막 번호

      $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
      if($block_end > $total_page) $block_end = $total_page; // 빈 페이지가 나오지 않게 총 페이지 수와 마지막 페이지를 같게 맞춰준다
      $total_block = ceil($total_page/$block_num); //블럭 총 개수
      $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다
// ----------------------------------------------------------------------------------

$sql2 = query("select * from board order by idx desc limit ".$start_num.", ".$list."");
// dbconn에 있는 query함수를 실행
while($board = $sql2->fetch_array()){ // board변수에 쿼리문을 통해 얻은 데이터를 배열로 정리
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
<hr>
</table>
<hr>
<form align="center">
<?php 

if($page <= 1){ 
  echo "[Front]";
  }else{
  echo "<a href='?page=1'>[Front]</a>";
  }

  if($block <= 1){ 
    echo "[Back]";
  }else{
  $pre = $block_start-1;
  echo "<a href='?page=$pre'>[Back]</a>";
  }
  

  for($i=$block_start; $i<=$block_end; $i++){ 
    if($page == $i){ 
    echo "[$i]";
    }else{
    echo "<a href='?page=$i'>[$i]</a>";
    }}
    

  if($block >= $total_block){
    echo "[Next]";
    }else{
    $next = $block_end+1;
    echo "<a href='?page=$next'>[Next]</a>";
    }
  
  
    if($page >= $total_page){ 
      echo "[End]";
      }else{
      echo "<a href='?page=$total_page'>[End]</a>";
    }
?>
</form>
<br>
<form align="center" action="search.php" method="get">
      <select name="cate">
        <option value="title">Title</option>
        <option value="name">Name</option>
        <option value="content">Content</option>
      </select>
      <input type="text" name="search" size="35" required="required">
      <button>Search</button>
    </form>
<hr>
<a href="../index.php"><button>Back</button></a>
<a href="write.php"><button>Write</button></a>
</body>

</html>
