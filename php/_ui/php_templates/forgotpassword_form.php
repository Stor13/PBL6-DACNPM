<div class="mt-4 container w-75 d-flex justify-content-center align-items-center bg-light-gray rounded-2">
  <div class="container my-1">
    <form action="" method="post" id="forgot_password_form">
      <div class="container">
        <h5 class="text-center fw-bold">Quên Mật Khẩu</h5>
      </div>
      <div class="form-group row mb-1">
        <p id="error-msg" class="text-center text-danger"></p>
      </div>
      <div class="form-group row my-1">
        <label for="input-UserID" class="col-form-label me-2 text-center fs-2">Nhập UserID</label>
      </div>
      <div class="form-group row my-2">
        <div>
          <input type="text" class="form-control" name="input_UserID" id="input-UserID" value="">
        </div>
      </div>
      <div class="form-group mb-3 d-flex justify-content-start">
        <a href="/pbl5/php/_ui/login.php" class="text-decoration-none text-dark">Đăng nhập?</a>
      </div>
      <div class="form-group row mb-1 d-flex justify-content-center">
        <button id="loginform-submitbutton" type="submit" class="btn w-50 bg-light-green fw-bold text-capitalize text-align-center align-items-center">
          Xác nhận.
        </button>
      </div>
    </form>
  </div>
</div>