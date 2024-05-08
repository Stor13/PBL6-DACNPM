function check_token() {
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