let tabChung_content = document.getElementById("tab-chung-content");
let tabKhoahoc_content = document.getElementById("tab-khoahoc-content");
let tabChung_button = document.getElementById("tab-chung-button");
let tabKhoahoc_button = document.getElementById("tab-khoahoc-button");
let errorMsg = document.getElementById("error-msg");

function tabChung_show() {
  tabChung_content.classList.remove("d-none");
}

function tabChung_hide() {
  tabChung_content.classList.add("d-none");
}

function tabKhoahoc_show() {
  tabKhoahoc_content.classList.remove("d-none");
}

function tabKhoahoc_hide() {
  tabKhoahoc_content.classList.add("d-none");
}

function tabChung_button_setActive() {
  tabChung_button.classList.add("active");
}

function tabChung_button_unsetActive() {
  tabChung_button.classList.remove("active");
}
function tabKhoahoc_button_setActive() {
  tabKhoahoc_button.classList.add("active");
}

function tabKhoahoc_button_unsetActive() {
  tabKhoahoc_button.classList.remove("active");
}

function openTabChung() {
  tabChung_button_setActive();
  tabKhoahoc_button_unsetActive();
  tabKhoahoc_hide();
  tabChung_show();
}

function openTabKhoahoc() {
  tabChung_button_unsetActive();
  tabKhoahoc_button_setActive();
  tabChung_hide();
  tabKhoahoc_show();
}

function validate_form() {
  var UserID = document.getElementById("input_UserID").value;
  var Password = document.getElementById("input_Password").value;
  if (UserID.trim() === "" || Password.trim() === "") {
    errorMsg.innerText = "Please enter your CREDENTIALS!";
    return false;
  }
  errorMsg.innerText = "";
  return true;
}

function redirect_true_indexPage(formData) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../views/get_account_index.php", true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // console.log('true_indexPage', xhr.responseText);
        let response = JSON.parse(xhr.responseText);
        // console.log('response', response);
        // console.log('win_location', window.location);
        window.location.href = response.data;
      } else {
        console.error("ERROR: ", xhr.statusText);
        errorMsg.innerText = "Unknown Connection Error!";
      }
    }
  }
  xhr.send(formData);
}

document.getElementById("login-form").addEventListener("submit", function(e) {
  e.preventDefault();
  if (validate_form()) {
    let formData = new FormData(this);
    console.log("formData", formData);
    let xhr = new XMLHttpRequest();
    // console.log(1);
    xhr.open("POST", "../views/check_login.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // console.log(2);
          // console.log(xhr.responseText);
          let response = JSON.parse(xhr.responseText);
          // console.log(3);
          if (response.success) {
            let data = response.data;
            let UserID = data["UserID"];
            localStorage.setItem("UserID", UserID);
            redirect_true_indexPage(formData);
          } else {
            errorMsg.innerText = response.message;
          }
          // console.log(4);
        } else {
          // console.log(5);
          console.error("ERROR: ", xhr.statusText);
          errorMsg.innerText = "Unknown Connection Error!";
        }
      }
    }
    xhr.send(formData);
  }
});