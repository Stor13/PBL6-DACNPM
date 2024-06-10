<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/S_Lecturer_Joined_Course.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Account.php";
if (isset($_GET["CourseID"])) {
  $CourseID = $_GET["CourseID"];
  $services = new S_Lecturer_Joined_Course();
  $accounts = new S_Account();
  $lecturers_ID = $services->getAll_CourseID($CourseID);
  $lecturers = [];
  foreach ($lecturers_ID as $pair) {
    // $pair = [<UserID>, <CourseID>]
    $lecturers[] = $accounts->getOne_UserID($pair["UserID"]);
  }
} else {
  $lecturers = [];
}
?>
<!-- <?php print_r($lecturers); ?> -->
<div class="container">
  <h5 class="text-center fw-bold">Danh sach Giang vien cua Khoa hoc</h5>
</div>
<div class="container w-75 mb-3 d-flex flex-wrap justify-content-around align-items-center">
  <label for="input_Search" >Tim kiem</label>
  <input type="text" class="form-control w-75" id="input_Search" name="input_Search">
  <button class="btn bg-light-green text-center">Tim</button>
</div>
<div class="container w-75 d-flex flex-wrap justify-content-between align-items-start">
  <?php if (empty($lecturers)) { ?>
    <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
      <h5 class="fs-2"><p class="text-decoration-underline text-danger">Lỗi</p><p class="text-danger">:</p>p{ Không tồn tại bản ghi nào về giảng viên giảng dạy khoá học này.}</h5>
    </div>
  <?php } else { ?>
    <div class="container py-1 w-75" id="content-table">
      <table class="table">
        <thead>
          <tr class="bg-light-gray">
            <th scope="col" class="col-sm-4 text-center border-end">Mã Giảng viên</th>
            <th scope="col" class="col-sm-7 text-center">Họ & tên</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lecturers as $lecturer) { ?>
          <tr>
            <td class="col-sm-4 text-center border-end">
              <?php echo $lecturer["UserID"] ?>
            </td>
            <td class="col col-sm-7">
              <?= $lecturer["Name"] ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  <?php } ?>
  <div class="p-1 w-25 border-start border-bottom">
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/danhsach_giangvien/themmoi.php?CourseID=<?= $CourseID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">Them moi</a>
    </div>
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc/chitiet.php?CourseID=<?= $CourseID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">Quay lai</a>
    </div>
  </div>
</div>
