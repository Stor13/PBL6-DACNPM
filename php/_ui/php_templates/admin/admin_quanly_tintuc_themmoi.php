<?php require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Notification.php" ?>
<div class="container">
  <h5 class="text-center fw-bold">Them tin tuc moi</h5>
</div>
<div class="container-fluid w-75 d-flex flex-wrap justify-content-between align-items-start">
  <div class="container py-1 w-75" id="content-table">
    <div id="content">
      <div class="container my-1">
        <form action="" method="post" id="themmoi_tintuc_form">
          <div class="form-group row mb-1">
            <p id="error-msg" class="text-center text-danger"></p>
          </div>
          <div class="form-group row mb-1">
            <label for="input_Label" class="col-sm-2 col-form-label">Tieu de</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="input_Label" id="input_Label">
            </div>
          </div>
          <div class="form-group row mb-1">
            <label for="input_Content" class="col-sm-2 col-form-label">Noi dung</label>
            <div class="col-sm-9">
              <textarea type="text" name="input_Content" id="input_Content" class="form-control" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row mb-1">
            <label for="input_IsToCourse" class="col-sm-2 col-form-label">Tin tuc cua khoa hoc?</label>
            <div class="container col-sm-9">
              <div class="form-check">
                <input type="radio" name="input_IsToCourse" id="input_IsToCourse1" class="form-check-input" value="true">
                <label for="input_IsToCourse1" class="form-check-label">Co</label>
              </div>
              <div class="form-check">
                <input type="radio" name="input_IsToCourse" id="input_IsToCourse2" class="form-check-input" value="false">
                <label for="input_IsToCourse2" class="form-check-label">Khong</label>
              </div>
            </div>
          </div>
          <div class="form-group row mb-1">
            <label for="input_CourseID" class="col-sm-2 col-form-label">ID cua khoa hoc</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="input_CourseID" id="input_CourseID">
            </div>
          </div>
          <div class="form-group row mb-1 d-flex justify-content-center">
            <button id="form-submitbutton" type="submit" class="btn w-50 fw-bold text-capitalize text-align-center align-items-center">
              Them moi
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="p-1 w-25 border-start border-bottom">
    <div class="row p-1">
      <a href="/pbl5/php/_ui/admin/quanly_tintuc" class="text-decoration-none text-center py-1 m-1" id="sidebar_button">Quay lai</a>
    </div>
  </div>
</div>
