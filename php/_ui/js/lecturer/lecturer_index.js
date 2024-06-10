let logout_button = document.getElementById("logout_href");

logout_button.addEventListener('click', function(e) {
  e.preventDefault();
  localStorage.removeItem("UserID");
  window.location.href = "/pbl5/php/_ui";
});

let tabChung_content = document.getElementById("tab-chung-content");
let tabKhoahoc_content = document.getElementById("tab-khoahoc-content");
let tabChung_button = document.getElementById("tab-chung-button");
let tabKhoahoc_button = document.getElementById("tab-khoahoc-button");

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

// function redirect_true_indexPage(formData) {
//   let xhr = new XMLHttpRequest();
//   xhr.open("POST", "../views/get_account_index.php", true);
//   xhr.onreadystatechange = function() {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         console.log('true_indexPage', xhr.responseText);
//         let response = JSON.parse(xhr.responseText);
//         console.log('response', response);
//         console.log('win_location', window.location);
//         window.location.href = response.data;
//       } else {
//         console.error("ERROR: ", xhr.statusText);
//         // errorMsg.innerText = "Unknown Connection Error!";
//       }
//     }
//   }
//   xhr.send(formData);
// }

// window.onload = function() {
//   console.log(localStorage.getItem("UserID"));
//   let UserID = localStorage.getItem("UserID");
//   if (UserID === null) {
//     window.location.href = "/pbl5/php/_ui";
//   } else {
//     let formData = new FormData();
//     let obj = {
//       "input_UserID": UserID
//     };
//     for (const key in obj) {
//       formData.append(
//         key, obj[key]
//       )
//     };
//     return redirect_true_indexPage(formData);
//   }
// }
