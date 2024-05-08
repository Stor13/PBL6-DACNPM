<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Quản lý Tin Tức</h1>
</body>
<script>
    window.onload = function() {
      if (localStorage.getItem('token')) {
        let token = localStorage.getItem('token');
        // console.log('token: ', token);
        // console.log('url ', window.location.href.substring(16));
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '../services/process_validate_login_token.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
          if (xhr.status === 200) {
            // console.log('xhr response ', xhr.responseText);
            let response = JSON.parse(xhr.responseText);
            if (response.valid && response.token != null) {
              localStorage.setItem("token", response.token);
            } else {
              alert('Phiên đăng nhập đã hết, hay đăng nhập lại.');
              localStorage.removeItem('token');
              window.location.href = "/pbl5/php";
            }
          }
        }
        let data = JSON.stringify({
          token: token, url: "/pbl5/php/admin"
        });
        xhr.send(data);
      } else {
        alert("Bạn không có quyền thực hiện hành động này, hãy đăng nhập bằng tài khoản thích hợp.");
        window.location.href = "/pbl5/php";
      }
    }
    document.getElementById('logout-button').addEventListener('click', function() {
      localStorage.removeItem('credentials');
      localStorage.removeItem('token');
      window.location.href = "/pbl5/php";
    });
    // UserName
    // document.getElementById('profile').innerText = JSON.parse(localStorage.getItem('credentials')).Name;
    // document.getElementById('profile').innerText = "Cá nhân";
    function openTab(tabID) {
      let tabContents = document.getElementsByClassName('tab-content');
      for (let i = 0; i < tabContents.length; ++i) {
        tabContents[i].style.display = "none";
      }

      let tabs = document.getElementsByClassName('tab')
      for (let i = 0; i < tabs.length; ++i) {
        tabs[i].classList.remove('active');
      }

      document.getElementById(tabID).style.display = "block";
      event.currentTarget.classList.add("active");
    }

    document.querySelector('.tab').click();
  </script>
</html>