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
<div class="container py-1 w-75" id="content-table">
  <div id="content">
    <div id="tab-chung-content">
      <div class="mb-3">
        <div class="d-flex">
          <span class="text-danger mx-1 p-1">
            01/01/0000
          </span>
          <span class="mx-1 p-1">
            <p><strong>Thong bao</strong></p>
          </span>
        </div>
        <div class="mx-1">
          <p class="p-1">Noi dung</p>
        </div>
      </div>
      <div class="mb-3">
        <div class="d-flex">
          <span class="text-danger mx-1 p-1">
            01/01/0000
          </span>
          <span class="mx-1 p-1">
            <p><strong>Thong bao</strong></p>
          </span>
        </div>
        <div class="mx-1">
          <p class="p-1">Noi dung</p>
        </div>
      </div>
      <div class="mb-3">
        <div class="d-flex">
          <span class="text-danger mx-1 p-1">
            01/01/0000
          </span>
          <span class="mx-1 p-1">
            <p><strong>Thong bao</strong></p>
          </span>
        </div>
        <div class="mx-1">
          <p class="p-1">Noi dung</p>
        </div>
      </div>
    </div>

    <div id="tab-khoahoc-content" class="d-none">
    <div class="mb-3">
        <div class="d-flex">
          <span class="text-danger mx-1 p-1">
            01/01/1111
          </span>
          <span class="mx-1 p-1">
            <p><strong>Thong bao</strong></p>
          </span>
        </div>
        <div class="mx-1">
          <p class="p-1">Noi dung</p>
        </div>
      </div>
      <div class="mb-3">
        <div class="d-flex">
          <span class="text-danger mx-1 p-1">
            01/01/1111
          </span>
          <span class="mx-1 p-1">
            <p><strong>Thong bao</strong></p>
          </span>
        </div>
        <div class="mx-1">
          <p class="p-1">Noi dung</p>
        </div>
      </div>
      <div class="mb-3">
        <div class="d-flex">
          <span class="text-danger mx-1 p-1">
            01/01/1111
          </span>
          <span class="mx-1 p-1">
            <p><strong>Thong bao</strong></p>
          </span>
        </div>
        <div class="mx-1">
          <p class="p-1">Noi dung</p>
        </div>
      </div>
  </div>
    
  <div class="container py-1 w-75 d-none" id="paging">
    <button>1</button>
    <button>2</button>
    <button>Last</button>
  </div>
</div>