let forgot_password_form = document.getElementById("forgot_password_form");
let errorMSG = document.getElementById("error-msg");

function validate_form() {
  let UserID = document.getElementById("input-UserID").value.trim();
  return /^\d{9}$/.test(UserID);
}

forgot_password_form.addEventListener("submit", function(e) {
  e.preventDefault();
  if (validate_form()) {
    let formData = new FormData(this);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/pbl5/php/views/forgot_password.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState = XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log(xhr.responseText);
          let response = JSON.parse(xhr.responseText);
          if (response.success) {
            alert("Mật khẩu mới: " + response.data);
            window.location.href = "/pbl5/php/_ui";
          } else {
            errorMSG.innerText = response.message;
          }
        }
      }
    }
    xhr.send(formData);
  }
});
