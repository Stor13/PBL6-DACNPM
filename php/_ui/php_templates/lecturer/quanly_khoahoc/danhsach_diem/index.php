<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/S_Student_Joined_Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Account.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/S_Account_Course_Point.php";

$service_acp = new S_Account_Course_Point();

$UserID = (isset($_GET["UserID"])) ? $_GET["UserID"] : null;
$CourseID = (isset($_GET["CourseID"])) ? $_GET["CourseID"] : null;
$account_course_points = [];
if ($CourseID !== null && empty($CourseID) === false) {
  $account_course_points = $service_acp->getAll_CourseID($CourseID);
}

?>
<?php if (($UserID == null || empty($UserID)) || ($CourseID == null || empty($CourseID))) { ?>
  <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
    <h5 class="fs-2"><p class="text-decoration-underline text-danger">Lỗi</p><p class="text-danger">:</p>&nbsp;Người dùng không có quyền truy cập tài nguyên này.</h5>
  </div>
<?php } else { ?>
  <?php if (empty($account_course_points)) { ?>
    <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
    <h5 class="fs-2"><p class="text-decoration-underline text-danger">Lỗi</p><p class="text-danger">:</p>&nbsp;Khoá học không có học viên tham gia.</h5>
  </div>
  <?php } else { ?>
    <?php print_r($account_course_points); ?>
  <?php } ?>
<?php } ?>