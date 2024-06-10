<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/S_Student_Joined_Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Account.php";
if (isset($_GET["CourseID"])) {
  $CourseID = $_GET["CourseID"];
  $services = new S_Student_Joined_Course();
  $accounts = new S_Account();
  $students_ID = $services->getAll_CourseID($CourseID);
  $students = [];
  foreach ($students_ID as $pair) {
    // $pair = [<UserID>, <CourseID>]
    $students[] = $accounts->getOne_UserID($pair["UserID"]);
  }
} else {
  $students = [];
}
?>
<!-- <?php print_r($students); ?> -->
<div class="container">
  <h5 class="text-center fw-bold">Danh sách Học viên của Khoá học</h5>
</div>
<div class="container w-75 mb-3 d-flex flex-wrap justify-content-around align-items-center">
  <label for="input_Search" >Tim kiếm</label>
  <input type="text" class="form-control w-75" id="input_Search" name="input_Search">
  <button class="btn bg-light-green text-center">Tìm</button>
</div>
<div class="container w-75 d-flex flex-wrap justify-content-between align-items-start">
  <?php if (empty($students)) { ?>
    <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
      <h5 class="fs-2"><p class="text-decoration-underline text-danger">Lỗi</p><p class="text-danger">:</p>p{ Không tồn tại bản ghi nào về học viên đang học khoá học này.}</h5>
    </div>
  <?php } else { ?>
    <div class="container py-1 w-75" id="content-table">
      <table class="table">
        <thead>
          <tr class="bg-light-gray">
            <th scope="col" class="col-sm-4 text-center border-end">Mã Học viên</th>
            <th scope="col" class="col-sm-7 text-center">Họ & tên</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($students as $student) { ?>
          <tr>
            <td class="col-sm-4 text-center border-end">
              <?php echo $student["UserID"] ?>
            </td>
            <td class="col col-sm-7">
              <?= $student["Name"] ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <div class="p-1 w-25 border-start border-bottom">
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/danhsach_hocvien/themmoi.php?CourseID=<?= $CourseID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">Thêm mới</a>
    </div>
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/chitiet.php?CourseID=<?= $CourseID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">Quay lại</a>
    </div>
  </div>
</div>
