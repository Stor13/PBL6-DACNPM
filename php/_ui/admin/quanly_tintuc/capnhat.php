<?php 
$root = $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates";
$id = (isset($_GET["id"])) ? $_GET["id"] : null;
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include_once $root."/admin/admin_head.php" ?>
    <title>Admin - Homepage</title>
    <script>
      // console.log('ID: ', "<?php echo $id ?>");
    </script>
  </head>
  <body>
    <header class="border-bottom py-3 mb-3">
      <?php include_once $root."/page_logo.php" ?>
      <?php include_once $root."/admin/admin_head_navbar.php" ?>
    </header>

    <main>
      <?php include_once $root."/admin/admin_quanly_tintuc_capnhat.php" ?>
    </main> 

    <footer>
    </footer>
    <script src="/pbl5/php/_ui/js/admin/admin_quanly_tintuc_capnhat.js"></script>
  </body>
</html>