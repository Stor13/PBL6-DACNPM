<?php 
if (isset($_GET["UserID"])) {
  $UserID = $_GET["UserID"];
} else {
  $UserID = null;
}
?>
<div id="header-navbar" class="bg-light-green">
  <div class="w-75 container d-flex align-items-center flex-wrap justify-content-center justify-content-md-between py-3">
    <a class="align-items-center" href="/pbl5/php/_ui/lecturer/?UserID=<?= $UserID ?>">Trang chủ</a>
    <div class="d-flex justify-content-around align-items-center w-50">
      <a href="/pbl5/php/_ui/lecturer/quanly_khoahoc?UserID=<?= $UserID ?>" class="align-items-center" id="btn_lecturer_qlkhoahoc">QL Khoa hoc</a>
    </div>
    <a class="align-items-center" href="/pbl5/php/_ui/" id="logout_href">Đăng xuất</a>
  </div>
</div>