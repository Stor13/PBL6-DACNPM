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