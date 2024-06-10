<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/S_Student_Joined_Course.php";
if (isset($_GET["UserID"])) {
  $UserID = $_GET["UserID"];
  $service_course = new S_Course();
  $service_LJC = new S_Student_Joined_Course();
  $ljc = $service_LJC->getAll_UserID($UserID);
  $courses = [];
  foreach ($ljc as $rel) {
    $CourseID = $rel["CourseID"];
    $course = $service_course->getOne($CourseID);
    $courses[] = $course;
  }
} else {
  $UserID = null;
  $ljc = [];
  $courses = [];
}
?>
<?php if ($UserID == null || empty($UserID)) { ?>
  <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
    <h5 class="fs-2"><span class="text-decoration-underline text-danger">Lỗi</span><span class="text-danger">:</span>&nbsp;Người dùng không có quyền truy cập tài nguyên này.</h5>
  </div>
<?php } else { ?>
<div class="container">
  <h5 class="text-center fw-bold">Danh sach Khoa hoc</h5>
</div>
<div class="container w-75 mb-3 d-flex flex-wrap justify-content-around align-items-center">
  <label for="input_Search" >Tim kiem</label>
  <input type="text" class="form-control w-75" id="input_Search" name="input_Search">
  <button class="btn bg-light-green text-center">Tim</button>
</div>
<div class="container w-75 d-flex flex-wrap justify-content-between align-items-start">
  <?php if (empty($courses)) { ?>
    <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
      <h5 class="fs-2"><p class="text-decoration-underline text-danger">Lỗi</p><p class="text-danger">:</p>&nbsp;Học viên chưa được thêm vào khoá học nào.</h5>
    </div>
  <?php } else { ?>
    <div class="container py-1 w-75" id="content-table">
      <table class="table">
        <thead>
          <tr class="bg-light-gray">
            <th scope="col" class="col-sm-2 text-center border-end">Mã khoá học</th>
            <th scope="col" class="col-sm-9 text-center">Tên khoá học</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($courses as $course) { ?>
          <tr>
            <td class="col-sm-2 text-center border-end">
              <?php echo $course["CourseID"] ?>
            </td>
            <td class="col col-sm-9 get_khoahoc_click cursor-pointer text-hover-color-light-green" data-href="/pbl5/php/_ui/student/quanly_khoahoc/chitiet.php?UserID=<?= $UserID ?>&CourseID=<?= $course["CourseID"] ?>">
              <?= $course["CourseName"] ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <div class="p-1 w-25 border-start border-bottom">
    <div class="row p-1">
      <a href="/pbl5/php/_ui/student/?UserID=<?= $UserID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">Quay lai</a>
    </div>
  </div>
</div>
<?php } ?>