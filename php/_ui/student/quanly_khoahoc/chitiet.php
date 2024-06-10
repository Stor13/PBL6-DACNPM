<?php 
$root = $_SERVER["DOCUMENT_ROOT"]."/pbl5/php";
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include_once $root."/_ui/php_templates/student/student_head.php" ?>
    <title>student - Quan ly Khoa hoc</title>
  </head>
  <body>
    <header class="border-bottom py-3 mb-3">
      <?php include_once $root."/_ui/php_templates/page_logo.php" ?>
      <?php include_once $root."/_ui/php_templates/student/student_head_navbar.php" ?>
    </header>

    <main>
      <?php include_once $root."/_ui/php_templates/student/quanly_khoahoc/chitiet.php" ?>
    </main> 

    <footer>
    </footer>
    <!-- <script src="\pbl5\php\_ui\js\student\student_quanly_khoahoc_index.js"></script> -->
  </body>
</html>