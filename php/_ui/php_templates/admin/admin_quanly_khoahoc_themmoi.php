<?php require_once $_SERVER["DOCUMENT_ROOT"]."/pbl5/php/services/Course.php" ?>
<div class="container">
  <h5 class="text-center fw-bold">Them moi Khoa hoc</h5>
</div>
<div class="container w-75 d-flex flex-wrap justify-content-between align-items-start">
  <div class="container py-1 w-75" id="content-table">
    <div id="content">
      <div class="container my-1">
        <form action="" method="post" id="themmoi_khoahoc_form">
          <div class="form-group row mb-1">
            <p id="error-msg" class="text-center text-danger"></p>
          </div>
          <div class="form-group row mb-1">
            <label for="input_CourseID" class="col-sm-4 col-form-label">Ma Khoa hoc</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="input_CourseID" id="input_CourseID">
            </div>
          </div>
          <div class="form-group row mb-1">
            <label for="input_CourseName" class="col-sm-4 col-form-label">Ten Khoa hoc</label>
            <div class="col-sm-7">
              <input type="text" name="input_CourseName" id="input_CourseName" class="form-control" rows="3"></input>
            </div>
          </div>
          <div class="form-group row mb-1">
            <label for="input_ProgressRatio" class="col-sm-4 col-form-label">Trong so Diem qua trinh</label>
            <div class="col-sm-7">
              <input type="text" name="input_ProgressRatio" id="input_ProgressRatio" class="form-control" rows="3"></input>
            </div>
          </div><div class="form-group row mb-1">
            <label for="input_MidtermRatio" class="col-sm-4 col-form-label">Trong so Diem thi giua ky</label>
            <div class="col-sm-7">
              <input type="text" name="input_Content" id="input_MidtermRatio" class="form-control" rows="3"></input>
            </div>
          </div><div class="form-group row mb-1">
            <label for="input_FinalRatio" class="col-sm-4 col-form-label">Trong so Diem thi cuoi ky</label>
            <div class="col-sm-7">
              <input type="text" name="input_FinalRatio" id="input_FinalRatio" class="form-control" rows="3"></input>
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
      <a href="/pbl5/php/_ui/admin/quanly_khoahoc" class="text-decoration-none text-center py-1 m-1 sidebar_button">Quay lai</a>
    </div>
  </div>
</div>
