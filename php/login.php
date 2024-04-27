<?php 
  include_once "./mysql_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/f11668ae58.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/index.css">
</head>
<body class="body-login">
  <header></header>
  <form id="login-form" class="container login" action="process_login_form.php" method="POST">
    <div class="content">
      <h3>Đăng Nhập</h3>
      <?php 
        // if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //   $userID = $_POST["userId"];
        //   $password = $_POST["password"];
        //   $errors = array();
        //   if (empty($userID)) {
        //     $errors[] = "UserID is required.";
        //   }
        //   if (empty($password)) {
        //     $errors[] = "Password is required.";
        //   }

        //   if (empty(($errors))) {

        //   } else {
        //     foreach($errors as $error) {
        //       echo "<p>".$error."</p>";
        //     }
        //   }
        // }
      ?>
      <div class="error-msg" id="error-msg"></div>
      <div class="form">
        <div class="inputBox">
          <input type="text" name="userID" id="userID" placeholder="   "><i class="label"><i class="fa-solid fa-user"></i>User ID</i>
        </div>
        <div class="inputBox">
          <input type="text" name="password" id="password" placeholder="   "><i class="label"><i class="fa-solid fa-lock"></i>Password</i>
        </div>
        <div class="links">
          <a href="#">Quên mật khẩu?</a>
        </div>
        <div class="inputBox">
          <input type="submit" value="Đăng nhập">
        </div>
      </div>
    </div>
  </form>
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
        xhr.open("POST", "process_login_form.php", true);
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              var response = JSON.parse(xhr.responseText);
              if (response.success) {
                console.log('Form submitted');
              } else {
                document.getElementById("error-msg").innerText = response.message;
              }
            } else {
              console.error('Error: ', xhr.statusText);
            }
          }
        };
        xhr.send(formData);
      }
    });
  </script>
</body>
</html>