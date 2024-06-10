<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/S_Student_Joined_Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Course.php";
if (isset($_GET["CourseID"])) {
  $CourseID = $_GET["CourseID"];
  $services = new S_Student_Joined_Course();
  $service_course = new S_Course();
  $course = $service_course->getOne($CourseID);
} else {
  $course = null;
}
?>
<div class="container">
  <h5 class="text-center fw-bold">Thêm Học viên mới</h5>
</div>
<div class="container w-75 d-flex flex-wrap justify-content-between align-items-start">
  <?php if (empty($course) || $course == null) { ?>
  <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
    <h5 class="fs-2"><p class="text-decoration-underline text-danger">Lỗi</p><p class="text-danger">:</p>&nbsp;Khoá học không tồn tại.</h5>
  </div>
  <?php } else { ?>
  <div class="container py-1 w-75" id="content-table">
    <div id="content">
      <div class="container my-1">
        <form action="" method="post" id="themmoi_giangvien_khoahoc_form">
          <div class="form-group row mb-1">
            <p id="error-msg" class="text-center text-danger"></p>
          </div>
          <div class="form-group row mb-1">
            <label for="input_CourseID" class="col-sm-4 col-form-label">Mã Khoá học</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="input_CourseID" id="input_CourseID" disabled value="<?= $course["CourseID"] ?>">
            </div>
          </div>
          <div class="form-group row mb-1">
            <label for="input_UserID" class="col-sm-4 col-form-label">Mã Học viên</label>
            <div class="col-sm-7">
              <input type="text" name="input_UserID" id="input_UserID" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-1 d-flex justify-content-center">
            <button id="form-submitbutton" type="submit" class="btn w-50 fw-bold text-capitalize text-align-center align-items-center">
              Thêm Học viên
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="p-1 w-25 border-start border-bottom">
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/danhsach_giangvien/themmoi.php?CourseID=<?= $CourseID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">Thêm mới</a>
    </div>
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/danhsach_hocvien/index.php?CourseID=<?= $CourseID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">Quay lại</a>
    </div>
  </div>
</div>
