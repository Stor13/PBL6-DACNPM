<?php require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Course.php" ?>
<?php
$service_course = new S_Course();
?>
<div class="container">
  <h5 class="text-center fw-bold">Them moi Khoa hoc</h5>
</div>
<div class="container w-75 d-flex flex-wrap justify-content-between align-items-start">
  <div class="container py-1 w-75" id="content-table">
  <div id="content">
    <?php
      $course = $service_course->getOne($_GET["CourseID"]);
    ?>
    <?php if ($course == null) {?>
      <p class="fs-2"><span class="text-danger fw-bold"><span class="text-decoration-underline">Lỗi</span>: </span> Không tìm thấy bản ghi dữ liệu.</p>
    <?php } else { ?>
      <div class="container my-1">
        <div class="form-group row mb-1">
          <p id="error-msg" class="text-center text-danger"></p>
        </div>
        <div class="form-group row mb-1">
          <label for="output_CourseID" class="fw-bold col-sm-4 col-form-label">Ma Khoa hoc</label>
          <div class="col-sm-7 d-flex align-items-center">
            <p class="m-0 p-0 w-100" id="output_CourseID"><?= $course["CourseID"] ?></p>
          </div>
        </div>
        <div class="form-group row mb-1">
          <label for="output_CourseName" class="fw-bold col-sm-4 col-form-label">Ten Khoa hoc</label>
          <div class="col-sm-7 d-flex align-items-center">
            <p class="m-0 p-0 w-100" id="output_CourseName"><?= $course["CourseName"] ?></p>
          </div>
        </div>
        <div class="form-group row mb-1">
          <label for="output_ProgressRatio" class="fw-bold col-sm-4 col-form-label">Trong so Diem qua trinh</label>
          <div class="col-sm-7 d-flex align-items-center">
            <p class="m-0 p-0 w-100" id="output_ProgressRatio"><?= $course["ProgressRatio"] ?></p>
          </div>
        </div><div class="form-group row mb-1">
          <label for="output_MidtermRatio" class="fw-bold col-sm-4 col-form-label">Trong so Diem thi giua ky</label>
          <div class="col-sm-7 d-flex align-items-center">
            <p class="m-0 p-0 w-100" id="output_MidtermRatio"><?= $course["MidtermRatio"] ?></p>
          </div>
        </div><div class="form-group row mb-1">
          <label for="output_FinalRatio" class="fw-bold col-sm-4 col-form-label">Trong so Diem thi cuoi ky</label>
          <div class="col-sm-7 d-flex align-items-center">
            <p class="m-0 p-0 w-100" id="output_FinalRatio"><?= $course["FinalRatio"] ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
  <div class="p-1 w-25 border-start border-bottom">
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/capnhat.php?CourseID=<?= $course["CourseID"] ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Cập nhật thông tin khoá học
      </a>
    </div>
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/danhsach_giangvien/index.php?CourseID=<?= $course["CourseID"] ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Danh sách Giảng viên
      </a>
    </div>
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/danhsach_hocvien/index.php?CourseID=<?= $course["CourseID"] ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Danh sách Học viên
      </a>
    </div>
    <div class="row p-1">
      <a href="" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Danh sách Bài giảng
      </a>
    </div>
    <div class="row p-1">
      <a href="" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Danh sách Tin tức
      </a>
    </div>
    <div class="row p-1">
      <a href="" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Danh sách Điểm
      </a>
    </div>
    <div class="row p-1">
      <a href="" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Danh sách tiến độ học tập
      </a>
    </div>
    <div class="row p-1">
      <a href="" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Xoá khoá học?
      </a>
    </div>
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/" class="text-decoration-none text-center py-1 m-1 sidebar_button">
        Quay lai
      </a>
    </div>
  </div>
</div>
