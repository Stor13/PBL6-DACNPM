<?php require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Notification.php" ?>
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
$service_notification = new S_Notification();
$limit = 1;
$tabChung_content = $service_notification->get_NotificationToAll();
$tabKhoahoc_content = $service_notification->get_NotificationToCourse();
?>
<div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
  <div class="container py-1 w-75" id="content-table">
    <div id="content">
      <div id="tab-chung-content">
        <?php foreach ($tabChung_content as $item) { ?>
          <?php if (isset($item["CreatedDate"]) && isset($item["Label"]) && isset($item["Content"])) { ?>
            <div class="container d-flex flex-wrap justify-content-between align-items-center mb-3">
              <div class='w-75'>
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
              <div class="w-25">
                <div class="mx-0 row h-100 d-flex flex-wrap justify-content-around align-items-center">
                  <div class="col mh-100">
                    <a class="btn bg-light-green w-100 h-100" href="/pbl5/php/_ui/admin/quanly_tintuc/capnhat.php?id=<?php echo $item["NotificationID"] ?>">
                      Cap nhat
                    </a>
                  </div>
                  <div class="col mh-100">
                    <a class="btn btn-danger w-100 h-100" onclick="xoa_tintuc('<?php echo $item["NotificationID"] ?>')">
                      Xoa
                    </a>
                  </div>
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
              <div class='w-75'>
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
              <div class="w-25">
                <div class="mx-0 row h-100 d-flex flex-wrap justify-content-around align-items-center">
                  <div class="col mh-100">
                    <a class="btn bg-light-green w-100 h-100" href="/pbl5/php/_ui/admin/quanly_tintuc/capnhat.php?id=<?php echo $item["NotificationID"] ?>">
                      Cap nhat
                    </a>
                  </div>
                  <div class="col mh-100">
                    <a class="btn btn-danger w-100 h-100">
                      Xoa
                    </a>
                  </div>
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
      <a href="/pbl5/php/_ui/admin/quanly_tintuc/themmoi.php" class="text-decoration-none text-center py-1 m-1" id="sidebar_button">Them moi</a>
    </div>
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin" class="text-decoration-none text-center py-1 m-1" id="sidebar_button">Quay lai</a>
    </div>
  </div>
</div>
