<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Notification.php";
$service_notification = new S_Notification();
if (isset($_GET["UserID"])) {
  $UserID = $_GET["UserID"];
} else {
  $UserID = null;
}
?>
<div class="container">
  <h5 class="text-center fw-bold">Danh sach tin tuc</h5>
</div>
<div class="container w-75 d-flex flex-wrap justify-content-around align-items-center">
  <label for="input_Search" >Tim kiem</label>
  <input type="text" class="form-control w-75" id="input_Search" name="input_Search">
  <button class="btn bg-light-green text-center">Tim</button>
</div>
<div class="container w-75 d-flex flex-wrap justify-content-center align-items-center bg-light-gray" id="tab-thongbao">
  <div class="row w-100">
    <button id="tab-chung-button" class="col tab-button mx-5 my-1 py-1 px-1 active" onclick="openTabChung()">Thong bao chung</button>
    <button id="tab-khoahoc-button" class="col tab-button mx-5 my-1 py-1 px-1" onclick="openTabKhoahoc()">Thong bao toi khoa hoc</button>
  </div>
</div>
<?php 
$tabChung_content = $service_notification->get_NotificationToAll();
$tabKhoahoc_content = $service_notification->get_NotificationToCourse();
?>
<div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
  <?php if (empty($UserID) || $UserID == null) { ?>
    <div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
      <h5 class="fs-2"><span class="text-decoration-underline text-danger">Lỗi</span><span class="text-danger">:</span>&nbsp;Người dùng không có quyền truy cập.</h5>
    </div>
    </div>
  <?php } else { ?>
  <div class="container py-1 w-75" id="content-table">
    <div id="content">
      <div id="tab-chung-content">
        <?php foreach ($tabChung_content as $item) { ?>
          <?php if (isset($item["CreatedDate"]) && isset($item["Label"]) && isset($item["Content"])) { ?>
            <div class="container d-flex flex-wrap justify-content-between align-items-center mb-3">
              <div class="">
                <div class='d-flex'>
                  <span class='text-danger mx-1 p-1'>
                    <?= $item["CreatedDate"] ?>
                  </span>
                  <span class='mx-1 p-1'>
                    <p><strong>
                      <?= $item["Label"] ?>
                    </strong></p>
                  </span>
                </div>
                <div class='mx-1'>
                  <p class='p-1'>
                    <?= $item["Content"] ?>
                  </p>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
  
      <div id="tab-khoahoc-content" class="d-none">
        <?php foreach ($tabKhoahoc_content as $item) { ?>
          <?php if (isset($item["CreatedDate"]) && isset($item["Label"]) && isset($item["Content"])) { ?>
            <div class="container d-flex flex-wrap justify-content-between align-items-center mb-3">
              <div class="">
                <div class='d-flex'>
                  <span class='text-danger mx-1 p-1'>
                    <?= $item["CreatedDate"] ?>
                  </span>
                  <span class='mx-1 p-1'>
                    <p><strong>
                      <?= $item["Label"] ?>
                    </strong></p>
                  </span>
                </div>
                <div class='mx-1'>
                  <p class='p-1'>
                    <?= $item["Content"] ?>
                  </p>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="p-1 w-25 border-start border-bottom">
    <div class="row p-1">
      <a href="/pbl5/php/_ui/student/?UserID=<?= $UserID ?>" class="text-decoration-none text-center py-1 m-1 sidebar_button">Quay lai</a>
    </div>  
  </div>
  <?php } ?>
</div>
