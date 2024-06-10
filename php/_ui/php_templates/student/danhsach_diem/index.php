<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/S_Student_Joined_Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Account.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/S_Account_Course_Point.php";
$service_account = new S_Account();
$service_acp = new S_Account_Course_Point();
$service_course = new S_Course();

$UserID = (isset($_GET["UserID"])) ? $_GET["UserID"] : null;
if ($UserID !== null && empty($UserID) === false) {
  $account_course_points = $service_acp->getAll_UserID($UserID);
} else {
  $account_course_points = [];
}
?>
<div class="container w-75 d-flex flex-wrap justify-content-between align-items-start">
  <?php if ($UserID == null || empty($UserID)) { ?>
    <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
      <h5 class="fs-2"><span class="text-decoration-underline text-danger">Lỗi</span><span class="text-danger">:</span>&nbsp;Người dùng không có quyền truy cập tài nguyên này.</h5>
    </div>
  <?php } else { ?>
    <?php if (empty($account_course_points)) { ?>
      <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
        <h5 class="fs-2"><span class="text-decoration-underline text-danger">Lỗi</span><span class="text-danger">:</span> Không tồn tại bản ghi nào về khoá học</h5>
      </div>
    <?php } else { ?>
      <div class="container py-1 w-75" id="content-table">
        <table class="table">
          <thead>
            <tr class="bg-light-gray">
              <th scope="col" class="col-sm-2 text-center border-end">Mã Khoá học</th>
              <th scope="col" class="col-sm-3 text-center border-end">Tên Khoá học</th>
              <th scope="col" class="col-sm-2 text-center border-end">Điểm quá trình</th>
              <th scope="col" class="col-sm-2 text-center border-end">Điểm giữa kỳ</th>
              <th scope="col" class="col-sm-2 text-center">Điểm cuối kỳ</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($account_course_points as $rel) { ?>
            <tr>
              <td class="col-sm-2 text-center border-end">
                <?php echo $rel["CourseID"] ?>
              </td>
              <td class="col-sm-3 text-center border-end">
                <?php 
                  $course = $service_course->getOne($rel["CourseID"]);
                  echo $course["CourseName"];
                ?>
              </td>
              <td class="col-sm-2 text-center border-end">
                <?php echo $rel["ProgressPoint"]; ?>
              </td>
              <td class="col-sm-2 text-center border-end">
                <?php echo $rel["MidtermPoint"]; ?>
              </td>
              <td class="col-sm-2 text-center">
                <?php echo $rel["FinalPoint"]; ?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    <?php } ?>
  <?php } ?>
  <div class="p-1 w-25 border-start border-bottom">
    <div class="row p-1">
      <a href="/pbl5/php/_ui/student/?UserID=<?= $UserID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Mục tiêu đã đặt
      </a>
    </div>
    <div class="row p-1">
      <a href="/pbl5/php/_ui/student/?UserID=<?= $UserID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Quay lại
      </a>
    </div>
  </div>
</div>