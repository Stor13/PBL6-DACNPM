<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/S_Student_Joined_Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Account.php";
$service_SJC = new S_Student_Joined_Course();
$service_account = new S_Account();
if (isset($_GET["UserID"]) && isset($_GET["CourseID"])) {
  $UserID = $_GET["UserID"];
  $CourseID = $_GET["CourseID"];
  $sjc = $service_SJC->getAll_CourseID($CourseID);
  $students = [];
  foreach($sjc as $rel) {
    $student = $service_account->getOne_UserID($rel["UserID"]);
    $students[] = $student;
  }
} else {
  $UserID = null;
  $CourseID = null;
  $students = [];
}
?>
<?php if (($UserID == null || empty($UserID)) || ($CourseID == null || empty($CourseID))) { ?>
  <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
    <h5 class="fs-2"><p class="text-decoration-underline text-danger">Lỗi</p><p class="text-danger">:</p>&nbsp;Người dùng không có quyền truy cập tài nguyên này.</h5>
  </div>
<?php } else { ?>
  <?php if (empty($students)) { ?>
    <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
    <h5 class="fs-2"><p class="text-decoration-underline text-danger">Lỗi</p><p class="text-danger">:</p>&nbsp;Khoá học không có học viên tham gia.</h5>
  </div>
  <?php } else { ?>
    <?php print_r($students); ?>
  <?php } ?>
<?php } ?>