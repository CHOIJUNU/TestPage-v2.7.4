<?php
session_start();
session_destroy(); // ���� ����
echo "<script>alert('Going to main page...');location.replace('../index.php');</script>";
?>