<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/f11668ae58.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <header>
    <div class="head-logo">
      <h2><i>Hệ thống quản lý điểm và theo dõi tiến độ học tập</i></h2>
      <h3>SMPTS - Score Management and Progress Tracking System</h3>
    </div>
    <nav>
      <div class="nav-group">
        <a href="/pbl5/php">Trang chủ</a>
      </div>
    </nav>
  </header>
  <div class="body-login">
    <form id="login-form" class="container login" action="services/process_login_form.php" method="POST">
      <div class="content">
        <h3>Đăng Nhập</h3>
        <?php 
        ?>
        <div class="error-msg" id="error-msg"></div>
        <div class="form">
          <div class="inputBox">
            <input type="text" name="userID" id="userID" placeholder="   "><i class="label"><i class="fa-solid fa-user"></i>User ID</i>
          </div>
          <div class="inputBox">
            <input type="password" name="password" id="password" placeholder="   "><i class="label"><i class="fa-solid fa-lock"></i>Password</i>
          </div>
          <div class="links">
            <a href="./forgot_password.php">Quên mật khẩu?</a>
          </div>
          <div class="inputBox">
            <input type="submit" value="Đăng nhập">
          </div>
        </div>
      </div>
    </form>
  </div>
  <footer></footer>
  <script>
    function validateForm() {
      var userID = document.getElementById("userID").value;
      var password = document.getElementById("password").value;
      if (userID.trim() === "" || password.trim() === "") {
        document.getElementById('error-msg').innerText = "Please enter your credentials."
        return false;
      }
      return true;
    }

    document.getElementById("login-form").addEventListener('submit', function(e) {
      e.preventDefault();
      if (validateForm()) {
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "services/process_login_form.php", true);
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              // console.log('xhr_response: ', xhr.responseText);
              var response = JSON.parse(xhr.responseText);
              if (response.success) {
                // console.log('type ', typeof response.message);
                var account = response.message;
                var location = response.location;
                var token = response.token;
                
                // console.log(account);
                // localStorage.setItem('credentials', JSON.stringify(account));
                localStorage.setItem('token', token);
                window.location = location;
              } else {
                document.getElementById("error-msg").innerText = response.message;
              }
            } else {
              console.error('Error: ', xhr.statusText);
              document.getElementById("error-msg").innerText = "Unknown Connection Error!";
            }
          }
        };
        xhr.send(formData);
      }
    });
  </script>
</body>
</html>