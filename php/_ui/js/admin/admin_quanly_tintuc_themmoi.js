let logout_button = document.getElementById("logout_href");
let errorMsg = document.getElementById("error-msg");
logout_button.addEventListener('click', function(e) {
  e.preventDefault();
  localStorage.removeItem("UserID");
  window.location.href = "/pbl5/php/_ui";
});

function get_currentDate() {
  var currentDate = new Date();

  var year = currentDate.getFullYear(); // Get the year (four digits)
  var month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Get the month (zero-based index, so add 1)
  var day = currentDate.getDate().toString().padStart(2, '0'); // Get the day of the month

  var formattedDate = year + '-' + month + '-' + day;
  return formattedDate;
}

function is_CourseID_valid(CourseID) {
  if (/^[\d.]+$/.test(CourseID) === false) return false;
  // check if there is a course of this CourseID value
  return true;
}

function validate_form(formData) {
  errorMsg.innerText = "";
  let Label = formData.get("input_Label");
  let Content = formData.get("input_Content");
  let IsToCourse = formData.get("input_IsToCourse");
  let CourseID = formData.get("input_CourseID");

  if (Label.trim() === "" || Content.trim() === "" || IsToCourse.trim() === "") {
    errorMsg.innerText = "Khong duoc de trong thong tin!";
    return false;
  }

  if (IsToCourse === "false" && CourseID.trim() !== "") {
    errorMsg.innerText = "Tin tức này không phải là của một khoá học?";
    return false;
  }
  if (IsToCourse === "true" && CourseID.trim() === "") {
    errorMsg.innerText = "ID của khoá học không được bỏ trống!";
    return false;
  }
  if (IsToCourse === "true" && is_CourseID_valid(CourseID) === false) {
    errorMsg.innerText = "CourseID khong hop le.";
    return false;
  }

  return true;
}

let capnhat_form = document.getElementById("themmoi_tintuc_form");
capnhat_form.addEventListener("submit", function(e) {
  e.preventDefault();
  let formData = new FormData(this);
  if (validate_form(formData)) { 
    console.log("validated: ", true);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/pbl5/php/views/admin/themmoi_tintuc.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // console.log(xhr.responseText);
          let response = JSON.parse(xhr.responseText);
          // console.log(response);
          if (response.success) {
            window.location.href = "/pbl5/php/_ui/admin/quanly_tintuc";
          } else {
            errorMsg.innerText = response.message;
          }
        }
      }
    }
    xhr.send(formData);
  } else {
    console.log("validated: ", false);
  }
});