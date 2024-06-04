<div class="mt-4 container w-75 d-flex justify-content-center align-items-center bg-light-gray rounded-2">
  <div class="container my-1">
    <form action="" method="post" id="login-form">
      <div class="label mt-1 mb-1 border-bottom row">
        <h5 class="fw-bolder fs-1 text-center text-uppercase">Dang Nhap</h5>
      </div>
      <div class="form-group row mb-1">
        <p id="error-msg" class="text-center text-danger"></p>
      </div>
      <div class="form-group row mb-1">
        <label for="input-UserID" class="col-sm-2 col-form-label me-2">UserID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="input_UserID" id="input_UserID" value="">
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="input-Password" class="col-sm-2 col-form-label me-2">Password</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" name="input_Password" id="input_Password" value="">
        </div>
      </div>
      <div class="form-group mb-3 d-flex justify-content-start">
        <a href="./forgot_password.php" class="text-decoration-none text-dark">Quen mat khau?</a>
      </div>
      <div class="form-group row mb-1 d-flex justify-content-center">
        <button id="loginform-submitbutton" type="submit" class="btn w-50 bg-light-green fw-bold text-capitalize text-align-center align-items-center">
          Dang Nhap
        </button>
      </div>
    </form>
  </div>
</div>