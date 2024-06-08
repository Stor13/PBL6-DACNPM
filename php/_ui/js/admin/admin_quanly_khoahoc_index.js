let logout_button = document.getElementById("logout_href");

logout_button.addEventListener('click', function(e) {
  e.preventDefault();
  localStorage.removeItem("UserID");
  window.location.href = "/pbl5/php/_ui";
});

function validate_CourseID(CourseID) {
  return /^[0-9.]+$/.test(CourseID);
}

document.addEventListener(
  "DOMContentLoaded",
  function() {
    const cells = document.querySelectorAll(".get_khoahoc_click");
    cells.forEach(cell => {
      cell.addEventListener('click', function() {
        const href = cell.getAttribute('data-href');
        if (href) {
          window.location.href = href;
        }
      });
    });
  }
)