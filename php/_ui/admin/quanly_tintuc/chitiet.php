<?php 
$root = $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates";
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include_once $root."/admin/admin_head.php" ?>
    <title>Admin - Homepage</title>
  </head>
  <body>
    <header class="border-bottom py-3 mb-3">
      <?php include_once $root."/page_logo.php" ?>
      <?php include_once $root."/admin/admin_head_navbar.php" ?>
    </header>

    <main>
      <?php include_once $root."/admin/admin_index.php" ?>
    </main> 

    <footer>
      READ - chi tiet
    </footer>
    <script src="../js/admin/admin_index.js"></script>
  </body>
</html>