<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/index.css">
  </head>
  <body>
    <header>
      <div class="head-logo">
        <h2><i>Hệ thống quản lý điểm và theo dõi tiến độ học tập</i></h2>
        <h3>SMPTS - Score Management and Progress Tracking System</h3>
      </div>
      <nav>
        <div class="nav-group">
          <a href="/pbl5/php">Trang chủ</a>
        </div>
        <div class="nav-group">
          <a href="#">Đăng nhập</a>
        </div>
      </nav>
    </header>
    <main>
      <div class="main-label">
        <p>Thông Báo</p>
      </div>
      <div class="search-bar">
        <input type="text" name="search_value" id="search_value">
        <button type="submit">Tìm kiếm</button>
      </div>
      <div class="main-table">
        <div class="tabs">
          <button id="tabs-tab1" class="tab" onclick="openTab('tab1')">Thông báo chung</button>
          <button id="tabs-tab2" class="tab" onclick="openTab('tab2')">Thông báo tới khoá học</button>
        </div>
        <div id="tab1" class="tab-content container">
          <div class="tab-notification">
            <div id="noti-1" class="notification">
              <div class="notification-header">
                <span class="date">27/04/2024</span>
                <span class="label">Kết quả thi tiếng Anh chuẩn đầu ra ngày 07.04.2024</span>
              </div>
              <div class="notification-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              </div>
            </div>
          </div>
        </div>
        <div id="tab2" class="tab-content container" style="display: none;">
          <div id="noti-2" class="notification">
            <div class="notification-header">
              <span class="date">27/04/2024</span>
              <span class="label">Thầy Nguyen Van A thông báo đến lớp: TT HCM [1234.56.789]</span>
            </div>
            <div class="notification-body">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer></footer>
  </body>
  <script>
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