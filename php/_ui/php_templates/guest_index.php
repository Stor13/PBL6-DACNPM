<?php require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Notification.php"; ?>
<div class="container py-1 w-75 d-flex flex-wrap justify-content-center align-items-center bg-light-gray">
  <h5 class="my-auto py-1">Thong Bao</h5>
</div>
<div class="container my-2 py-1 w-75 d-flex flex-wrap justify-content-center align-items-center">
  <!-- <div class="row w-100"> -->
    <input class="w-50 p-1 mx-2" type="text" name="" id="guest-index-input">
    <button class="w-25 p-1 mx-2 btn" id="guest-index-searchbutton">Tim kiem</button>
  <!-- </div> -->
</div>
<div class="container py-1 mb-1 w-75 d-flex flex-wrap justify-content-center align-items-center bg-light-gray" id="tab-thongbao">
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

<div class="container py-1 w-75" id="content-table">
  <div id="content">
    <div id="tab-chung-content">
      <?php 
      foreach ($tabChung_content as $item) {
        if (isset($item["CreatedDate"]) && isset($item["Label"]) && isset($item["Content"])) {
          echo "<div class='mb-3'>";
          echo "  <div class='d-flex'>";
          echo "    <span class='text-danger mx-1 p-1'>";
          echo "      ".$item["CreatedDate"];
          echo "    </span>";
          echo "    <span class='mx-1 p-1'>";
          echo "      <p><strong>".$item["Label"]."</strong></p>";
          echo "    </span>";
          echo "  </div>";
          echo "  <div class='mx-1'>";
          echo "    <p class='p-1'>".$item["Content"]."</p>";
          echo "  </div>";
          echo "</div>";
        }
      }
      ?>
    </div>

    <div id="tab-khoahoc-content" class="d-none">
      <?php 
      foreach ($tabKhoahoc_content as $item) {
        if (isset($item["CreatedDate"]) && isset($item["Label"]) && isset($item["Content"])) {
          echo "<div class='mb-3'>";
          echo "  <div class='d-flex'>";
          echo "    <span class='text-danger mx-1 p-1'>";
          echo "      ".$item["CreatedDate"];
          echo "    </span>";
          echo "    <span class='mx-1 p-1'>";
          echo "      <p><strong>".$item["Label"]."</strong></p>";
          echo "    </span>";
          echo "  </div>";
          echo "  <div class='mx-1'>";
          echo "    <p class='p-1'>".$item["Content"]."</p>";
          echo "  </div>";
          echo "</div>";
        }
      }
      ?>
    </div>
    
  <div class="container py-1 w-75 d-none" id="paging">
    <button>1</button>
    <button>2</button>
    <button>Last</button>
  </div>
</div>