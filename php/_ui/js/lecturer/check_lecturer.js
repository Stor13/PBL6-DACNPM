window.onload = function() {
  let UserID = localStorage.getItem("UserID");
  if (UserID === null) {
    alert("Hay dang nhap!");
    window.location.href = "/pbl5/php/_ui";
  }
}