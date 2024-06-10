<?php 
if (isset($_GET["UserID"])) {
  $UserID = $_GET["UserID"];
} else {
  $UserID = null;
}
?>
<div id="header-navbar" class="bg-light-green">
  <div class="w-75 container d-flex align-items-center flex-wrap justify-content-center justify-content-md-between py-3">
    <a class="align-items-center" href="/pbl5/php/_ui/student/?UserID=<?= $UserID ?>">Trang chủ</a>
    <div class="d-flex justify-content-around align-items-center w-50">
      <a href="/pbl5/php/_ui/student/quanly_khoahoc/?UserID=<?= $UserID ?>" class="align-items-center text-nowrap" id="btn_student_qlkhoahoc">Danh sách Khoá học tham gia</a>
      <a href="/pbl5/php/_ui/student/danhsach_diem/?UserID=<?= $UserID ?>" class="align-items-center text-nowrap" id="btn_student_qlkhoahoc">Danh sách Điểm</a>
    </div>
    <a class="align-items-center" href="/pbl5/php/_ui/" id="logout_href">Đăng xuất</a>
  </div>
</div>