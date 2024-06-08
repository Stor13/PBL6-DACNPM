<?php 
$root = $_SERVER["DOCUMENT_ROOT"]."/pbl5/php";
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include_once $root."/_ui/php_templates/admin/admin_head.php" ?>
    <title>Admin - Quan ly Khoa hoc</title>
  </head>
  <body>
    <header class="border-bottom py-3 mb-3">
      <?php include_once $root."/_ui/php_templates/page_logo.php" ?>
      <?php include_once $root."/_ui/php_templates/admin/admin_head_navbar.php" ?>
    </header>

    <main>
      <?php include_once $root."/_ui/php_templates/admin/admin_quanly_khoahoc_themmoi.php" ?>
    </main> 

    <footer>
    </footer>
    <script src="\pbl5\php\_ui\js\admin\admin_quanly_khoahoc_index.js"></script>
  </body>
</html>