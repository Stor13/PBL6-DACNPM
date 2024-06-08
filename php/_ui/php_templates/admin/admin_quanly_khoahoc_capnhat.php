<?php require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Course.php" ?>
<?php
$service_course = new S_Course();
?>
<div class="container">
  <h5 class="text-center fw-bold">Cap nhat Khoa hoc</h5>
</div>
<?php
$course = $service_course->getOne($_GET["CourseID"]);
if ($course == null || empty($course) || $course["CourseID"] == null) {
  $course = null;
}
?>
<div class="container w-75 d-flex flex-wrap justify-content-between align-items-start">
  <div class="container py-1 w-75" id="content-table">
    <div id="content">
      <?php if ($course == null) {?>
        <p class="fs-2"><span class="text-danger fw-bold"><span class="text-decoration-underline">Lỗi</span>: </span> Không tìm thấy bản ghi dữ liệu.</p>
      <?php } else { ?>
        <div class="container my-1">
          <form action="" method="post" id="capnhat_khoahoc_form">
            <div class="form-group row mb-1">
              <p id="error-msg" class="text-center text-danger"></p>
            </div>
            <div class="form-group row mb-1">
              <label for="input_CourseID" class="fw-bold col-sm-4 col-form-label">Ma Khoa hoc</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" name="input_CourseID" id="input_CourseID" value="<?= $course["CourseID"]?>" disabled>
              </div>
            </div>
            <div class="form-group row mb-1">
              <label for="input_CourseName" class="fw-bold col-sm-4 col-form-label">Ten Khoa hoc</label>
              <div class="col-sm-7">
                <input type="text" name="input_CourseName" id="input_CourseName" class="form-control" value="<?= $course["CourseName"] ?>">
              </div>
            </div>
            <div class="form-group row mb-1">
              <label for="input_ProgressRatio" class="fw-bold col-sm-4 col-form-label">Trong so Diem qua trinh</label>
              <div class="col-sm-7">
                <input type="text" name="input_ProgressRatio" id="input_ProgressRatio" class="form-control" value="<?= $course["ProgressRatio"] ?>">
              </div>
            </div><div class="form-group row mb-1">
              <label for="input_MidtermRatio" class="fw-bold col-sm-4 col-form-label">Trong so Diem thi giua ky</label>
              <div class="col-sm-7">
                <input type="text" name="input_Content" id="input_MidtermRatio" class="form-control" value="<?= $course["MidtermRatio"] ?>">
              </div>
            </div><div class="form-group row mb-1">
              <label for="input_FinalRatio" class="fw-bold col-sm-4 col-form-label">Trong so Diem thi cuoi ky</label>
              <div class="col-sm-7">
                <input type="text" name="input_FinalRatio" id="input_FinalRatio" class="form-control" value="<?= $course["FinalRatio"] ?>">
              </div>
            </div>
            <div class="form-group row mt-2 mb-1 d-flex justify-content-center">
              <button id="form-submitbutton" type="submit" class="btn w-50 fw-bold text-capitalize text-align-center align-items-center">
                Cap nhat
              </button>
            </div>
          </form>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="p-1 w-25 border-start border-bottom">
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/chitiet.php?CourseID=<?= $course["CourseID"] ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">Quay lai</a>
    </div>
  </div>
</div>
