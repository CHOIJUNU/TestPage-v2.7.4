<?php
session_start();
session_destroy(); // 세션 제거
echo "<script>alert('Going to main page...');location.replace('../index.php');</script>";
?>