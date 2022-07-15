<?php
// ป้องกันการเข้าถึงโฟลเดอร์ โดยให้ดีดกลับไปหน้า Index
 if(stristr(htmlentities($_SERVER['PHP_SELF']), 'index.php')){
     header("location: ../index.php");
     die;
 }
?>