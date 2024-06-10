<!DOCTYPE html>
<html>
  <head>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates/student/student_head.php" ?>
    <title>Admin - Homepage</title>
  </head>
  <body>
    <header class="border-bottom py-3 mb-3">
      <?php include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates/page_logo.php" ?>
      <?php include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates/student/student_head_navbar.php" ?>
    </header>

    <main>
      <?php include_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/_ui/php_templates/student/index.php" ?>
    </main> 

    <footer>
    </footer>
    <script src="../js/student/student_index.js"></script>
  </body>
</html>