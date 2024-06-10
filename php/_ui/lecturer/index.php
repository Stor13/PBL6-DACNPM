<!DOCTYPE html>
<html>
  <head>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates/lecturer/lecturer_head.php" ?>
    <title>Admin - Homepage</title>
  </head>
  <body>
    <header class="border-bottom py-3 mb-3">
      <?php include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates/page_logo.php" ?>
      <?php include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates/lecturer/lecturer_head_navbar.php" ?>
    </header>

    <main>
      <?php include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates/lecturer/index.php" ?>
    </main> 

    <footer>
    </footer>
    <script src="../js/lecturer/lecturer_index.js"></script>
  </body>
</html>