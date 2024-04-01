# UC001
## Tên UC
Đăng nhập
## Tác nhân
Khách
## Mô tả
Tác nhân đăng nhập vào hệ thống để sử dụng chức năng của hệ thống
## Sự kiện kích hoạt
Click vào nút "Đăng nhập" trên giao diện website
## Tiền điều kiện
Tác nhân đã có tài khoản trên hệ thống
## Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Đăng nhập". |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Đăng nhập". |
| 3 | Tác nhân | Nhập thông tin đăng nhập, yêu cầu đăng nhập. |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của người dùng. |
| 5 | Hệ thống | Hiển thị giao diện chức năng tương ứng với quyền được cấp cho tài khoản |
## Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo lỗi "Thông tin đăng nhập không chính xác" nếu thông tin đăng nhập do tác nhân cung cấp không khớp với thông tin được lưu trong hệ thống |
## Hậu điều kiện
Tác nhân đăng nhập được vào hệ thống
## Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | UserID | Input text field | Có | 9 kí tự số | 123456789 |
| 2 | Mật khẩu | Password field | Có | 6 - 20 kí tự, chỉ chứa các kí tự alphabet, kí tự số hoặc kí tự đặc biệt !@#$%^&*() | 123456 |
-----
# UC002
## Tên UC
Thiết lập lại mật khẩu
## Tác nhân
Khách
## Mô tả
Tác nhân muốn thiết lập lại mật khẩu do quên mật khẩu
## Sự kiện kích hoạt
Click vào liên kết "Quên mật khẩu?" trên giao diện "Đăng nhập".
## Tiền điều kiện
Tồn tại tài khoản cần thiết lập lại mật khẩu
## Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Thiết lập lại mật khẩu" |
| 2 | Hệ thống | Hiển thị giao diện "Thiết lập lại mật khẩu" |
| 3 | Tác nhân | Nhập thông tin "UserID" tương ứng với tài khoản cần thiết lập lại mật khẩu, yêu cầu thiết lập lại mật khẩu |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của người dùng |
| 5 | Hệ thống | Thiết lập lại mật khẩu cho tài khoản tương ứng, gửi mail chứa mật khẩu mới đến địa chỉ email của tài khoản |
| 6 | Hệ thống | Thông báo "Mật khẩu đã được đặt lại"
## Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo "Không tìm thấy tài khoản" nếu "UserID" do tác nhân cung cấp không được sử dụng cho bất kỳ tài khoản nào trong hệ thống |
| 6a | Hệ thống | Thông báo "Đặt lại mật khẩu không thành công" nếu không thể thiết lập lại mật khẩu cho tài khoản được yêu cầu |
| 6b | Hệ thống | Thông báo "Không thể gửi mail chứa mật khẩu mới đến email của tài khoản" nếu việc gửi mail chứa mật khẩu mới đến địa chỉ email tương ứng của tài khoản không thành công.
## Hậu điều kiện
Tác nhân sử dụng mật khẩu mới trong mail được hệ thống gửi đến để đăng nhập thành công.
## Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ | 
|---|---|---|---|---|---|
| 1 | UserID | Input text field | Có | 9 kí tự số | 123456789 |

-----

# UC003
## Tên UC
Xem thông tin tài khoản cá nhân
## Tác nhân
Quản trị viên, Giảng viên, Học viên
## Mô tả
Tác nhân muốn xem thông tin chi tiết của tài khoản cá nhân
## Sự kiện kích hoạt
Click vào liên kết "My Profile" trên giao diện website
## Tiền điều kiện
Tác nhân đã đăng nhập thành công vào hệ thống
## Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Yêu cầu "Xem thông tin tài khoản cá nhân" |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin tài khoản cá nhân" |
## Hậu điều kiện
Không

-----

# UC004
## Tên UC
Đổi mật khẩu của tài khoản cá nhân
## Tác nhân
Quản trị viên, Giảng viên, Học viên
## Mô tả
Tác nhân muốn thay đổi mật khẩu của tài khoản cá nhân
## Sự kiện kích hoạt
Click vào liên kết "Thay đổi mật khẩu" trên giao diện "Thông tin tài khoản cá nhân"
## Tiền điều kiện
Tác nhân đã đăng nhập thành công vào hệ thống
## Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Thay đổi mật khẩu tài khoản cá nhân" |
| 2 | Hệ thống | Hiển thị giao diện "Thay đổi mật khẩu tài khoản cá nhân" |
| 3 | Tác nhân | Nhập thông tin "Mật khẩu cũ", "Mật khẩu mới" và "Nhập lại mật khẩu mới"; yêu cầu thay đổi mật khẩu tài khoản cá nhân |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thay đổi mật khẩu tài khoản của tác nhân | 
| 6 | Hệ thống | Thông báo "Đã thay đổi mật khẩu của tài khoản", đăng xuất người dùng khỏi hệ thống |
## Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo "Mật khẩu cũ không chính xác" nếu "Mật khẩu cũ" do tác nhân cung cấp không khớp với mật khẩu hiện tại của tài khoản của tác nhân |
| 5c | Hệ thống | Thông báo "Nhập lại mật khẩu mới" nếu "Nhập lại mật khẩu mới" và "Mật khẩu mới" có giá trị khác nhau |
| 6a | Hệ thống | Thông báo "Không thể thay đổi mật khẩu của tài khoản" nếu việc thay đổi mật khẩu cho tài khoản của tác nhân được thực hiện không thành công |
## Hậu điều kiện
Tác nhân sử dụng mật khẩu mới được thay đổi để đăng nhập thành công vào hệ thống
## Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Mật khẩu cũ | Password field | Có | 6 - 20 kí tự, chỉ chứa các kí tự alphabet, kí tự số và các kí tự đặc biệt !@#$%^&*() | 123456 |
| 2 | Mật khẩu mới | Password field | Có | 6 - 20 kí tự, chỉ chứa các kí tự alphabet, kí tự số và các kí tự đặc biệt !@#$%^&*() | 123456 |
| 3 | Nhập lại mật khẩu mới | Password field | Có | Có giá trị giống với "Mật khẩu mới" | |

-----
# UC005
## Tên UC
Cập nhật thông tin tài khoản cá nhân
## Tác nhân
Quản trị viên, Giảng viên, Học viên
## Mô tả
Tác nhân muốn cập nhật/chỉnh sửa thông tin của tài khoản cá nhân
## Sự kiện kích hoạt
Tại giao diện "Thông tin tài khoản cá nhân", click vào liên kết "Cập nhật thông tin cá nhân"
## Tiền điều kiện
Tác nhân đã đăng nhập thành công vào hệ thống
## Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Cập nhật thông tin tài khoản cá nhân |
| 2 | Hệ thống | Hiển thị giao diện "Cập nhật thông tin tài khoản cá nhân" |
| 3 | Tác nhân | Nhập thông tin cần cập nhật, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới cho tài khoản của tác nhân | 
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới cho tài khoản" |
## Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật thông tin mới cho tài khoản" nếu việc cập nhật thông tin mới cho tài khoản của tác nhân không thể diễn ra thành công |
## Hậu điều kiện
Thông tin mới được lưu vào dữ liệu hệ thống
## Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Họ tên | Input text field | Có | Tối đa 255 kí tự, chỉ chứa kí tự alphabet và dấu cách | Nguyen Van A |
| 2 | Ngày sinh | DatePicker | Có | Ngày tháng hợp lệ | 01/01/2020|
| 3 | Số điện thoại | Input text field | Có | 10 - 12 kí tự số | 0123456789 |

-----
# UC006
## Tên UC
Đăng xuất
## Tác nhân
Quản trị viên, Giảng viên, Học viên
## Mô tả
Tác nhân muốn đăng xuất khỏi hệ thống
## Sự kiện kích hoạt
Tại giao diện "Thông tin tài khoản cá nhân", click vào liên kết "Đăng xuất"
## Tiền điều kiện
Tác nhân đã đăng nhập thành công vào hệ thống
## Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Yêu cầu đăng xuất |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận đăng xuất |
| 3 | Tác nhân | Xác nhận đăng xuất |
| 4 | Hệ thống | Xoá bỏ thông tin về phiên đăng nhập của người dùng |
## Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
| 3a | Tác nhân | Xác nhận không đăng xuất |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận đăng xuất |
## Hậu điều kiện
Thông tin phiên đăng nhập của người dùng được xoá bỏ. Người dùng phải đăng nhập lại để tiếp tục sử dụng các chức năng của hệ thống.

-----
# UC007
## Tên UC
Quản lý Giảng viên
## Tác nhân
Quản trị viên
## Mô tả
Tác nhân muốn thực hiện các thao tác để quản lý giảng viên của hệ thống
## Tiền điều kiện
Tác nhân đã đăng nhập thành công vào hệ thống

## UC007.1
### Tên UC
Xem danh sách giảng viên
### Mô tả
Tác nhân muốn xem danh sách giảng viên của hệ thống
### Sự kiện kích hoạt
Tại giao diện website, click vào "Quản lý giảng viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động | 
|---|---|---|
| 1 | Tác nhân | Yêu cầu "Xem danh sách giảng viên" | 
| 2 | Hệ thống | Hiển thị danh sách giảng viên |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 2a | Hệ thống | Hiển thị danh sách trống nếu không tìm thấy giảng viên nào |
### Hậu điều kiện
Danh sách giảng viên được hiển thị lên giao diện người dùng

## UC007.2
### Tên UC
Tìm kiếm giảng viên
### Mô tả
Tác nhân muốn tìm kiếm giảng viên dựa trên tiêu chí nào đó
### Sự kiện kích hoạt
Click vào search bar trên giao diện chức năng "Xem danh sách giảng viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Tìm kiếm giảng viên" | 
| 2 | Tác nhân | Nhập thông tin, yêu cầu tìm kiếm |
| 3 | Hệ thống | Tìm kiếm các giảng viên thoả mãn tiêu chí tìm kiếm do tác nhân đưa ra |
| 4 | Hệ thống | Hiển thị danh sách giảng viên tìm được |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động | 
|---|---|---|
| 4a | Hệ thống | Hiển thị danh sách trống nếu không tìm được giảng viên nào thoả mãn tiêu chí tìm kiếm |
### Hậu điều kiện
Hiển thị danh sách giảng viên thoả mãn tiêu chí tìm kiếm do tác nhân đưa ra
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Thông tin tìm kiếm | Input text field | Không | Dài tối đa 255 kí tự, chỉ gồm kí tự số, kí tự alphabet, dấu cách | Nguyen Van A |

## UC007.3
### Tên UC
Xem thông tin chi tiết của giảng viên
### Mô tả
Tác nhân muốn xem thông tin chi tiết của một giảng viên
### Sự kiện kích hoạt
Click vào record của giảng viên trong danh sách giảng viên trên giao diện chức năng "Xem danh sách giảng viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động | 
|---|---|---|
| 1 | Tác nhân | Yêu cầu "Xem thông tin chi tiết của giảng viên" |
| 2 | Hệ thống | Hiển thị giao diện thông tin chi tiết của giảng viên |
### Hậu điều kiện
Thông tin chi tiết của tài khoản mục tiêu được hiển thị lên giao diện

## UC007.4
### Tên UC
Thêm giảng viên mới vào hệ thống
### Mô tả
Tác nhân muốn thêm một giảng viên mới vào hệ thống
### Sự kiện kích hoạt
Click vào liên kết "Thêm giảng viên mới" trên giao diện "Xem danh sách giảng viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động | 
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Thêm giảng viên mới vào hệ thống " |
| 2 | Hệ thống | Hiển thị giao diện "Thêm giảng viên mới vào hệ thống" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm mới |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm giảng viên mới vào hệ thống |
| 6 | Hệ thống | Thông báo "Đã thêm giảng viên mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Mã giảng viên đã được sử dụng" nếu mã giảng viên do tác nhân cung cấp đã được sử dụng cho một tài khoản khác |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm giảng viên mới" nếu việc thêm mới giảng viên diễn ra không thành công |
### Hậu điều kiện
Dữ liệu về giảng viên mới được lưu vào hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Mã giảng viên | Input text field | Có | 9 kí tự số | 203456789 |
| 2 | Mật khẩu | Password field | Có | 6 - 20 kí tự, chỉ chứa kí tự alphabet, kí tự số và các kí tự đặc biệt !@#$%^&*() | 123456 |
| 3 | Họ tên | Input text field | Có | Tối đa 255 kí tự, chỉ chứa kí tự alphabet và dấu cách | Nguyen Van A |
| 4 | Ngày sinh | DatePicker | Có | Ngày tháng hợp lệ | 01/01/2000 |
| 5 | Số điện thoại | Input text field | Có | 10 - 12 kí tự số | 0123456789 |

## UC007.5
### Tên UC
Cập nhật thông tin tài khoản giảng viên
### Mô tả
Tác nhân muốn cập nhật thông tin tài khoản của giảng viên
### Sự kiện kích hoạt
Click vào liên kết "Cập nhật thông tin" trong giao diện "Xem thông tin chi tiết giảng viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Cập nhật thông tin tài khoản giảng viên" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Cập nhật thông tin tài khoản giảng viên" |
| 3 | Tác nhân | Nhập thông tin mới, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới cho tài khoản mục tiêu |
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới cho tài khoản của giảng viên" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân nhập vào không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Mã giảng viên đã được sử dụng" nếu mã giảng viên do tác nhân nhập vào đã được sử dụng cho một tài khoản khác |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật thông tin mới" nếu việc cập nhật diễn ra không thành công |
### Hậu điều kiện
Thông tin mới của tài khoản mục tiêu được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Mã giảng viên | Input text field | Có | 9 kí tự số | 123456789|
| 2 | Họ tên | Input text field | Có | Tối đa 255 kí tự, chỉ chứa kí tự alphabet và dấu cách | Nguyen Van A |
| 2 | Ngày sinh | DatePicker | Có | Ngày tháng hợp lệ | 01/01/2000 |
| 3 | Số điện thoại | Input text field | Có | 10 - 12 kí tự số | 0123456789 |

## UC007.6
### Tên UC
Thiết lập lại mật khẩu cho tài khoản giảng viên
### Mô tả
Tác nhân muốn thiết lập lại mật khẩu cho tài khoản của giảng viên
### Sự kiện kích hoạt
Trên giao diện chức năng "Xem thông tin chi tiết giảng viên", click vào liên kết "Thiết lập lại mật khẩu"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Yêu cầu thiết lập lại mật khẩu cho tài khoản giảng viên |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận thiết lập lại mật khẩu |
| 3 | Tác nhân | Xác nhận thiết lập lại mật khẩu cho tài khoản giảng viên |
| 4 | Hệ thống | Thiết lập lại mật khẩu cho tài khoản giảng viên |
| 5 | Hệ thống | Gửi mail chứa mật khẩu mới đến email tương ứng với tài khoản của giảng viên |
| 6 | Hệ thống | Thông báo "Đã thiết lập lại mật khẩu cho tài khoản giảng viên" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 3a | Tác nhân | Xác nhận không thiết lập lại mật khẩu cho hệ thống |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận thiết lập lại mật khẩu |
| 5a | Hệ thống | Thông báo lỗi "Không thể thiết lập lại mật khẩu" nếu hệ thống không thành công thiết lập lại mật khẩu cho tài khoản mục tiêu |
| 6a | Hệ thống | Thông báo lỗi "Không thể gửi mail" nếu hệ thống không thành công gửi mail chứa mật khẩu mới đến địa chỉ email tương ứng với tài khoản mục tiêu |
### Hậu điều kiện
Sử dụng mật khẩu mới đăng nhập thành công vào tài khoản mục tiêu.

## UC007.7
### Tên UC
Khoá tài khoản giảng viên
### Mô tả
Tác nhân muốn khoá tài khoản để hạn chế quyền sử dụng các chức năng hệ thống của tài khoản.
### Sự kiện kích hoạt
Tại giao diện chức năng "Xem thông tin chi tiết tài khoản giảng viên", click vào "Khoá tài khoản"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Yêu cầu khoá tài khoản giảng viên |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận khoá tài khoản |
| 3 | Tác nhân | Xác nhận khoá tài khoản |
| 4 | Hệ thống | Khoá tài khoản mục tiêu |
| 5 | Hệ thống | Thông báo "Đã khoá tài khoản" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 3a | Tác nhân | Xác nhận không khoá tài khoản |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá tài khoản |
| 5a | Hệ thống | Thông báo lỗi "Không thể khoá tài khoản" nếu hệ thống không thành công khoá tài khoản mục tiêu |
### Hậu điều kiện
Tài khoản giảng viên mục tiêu bị huỷ quyền sử dụng các chức năng của hệ thống, ngoại trừ các chức năng xem.

## UC007.8
### Tên UC
Mở khoá tài khoản giảng viên
### Mô tả
Tác nhân muốn mở khoá tài khoản của giảng viên để khôi phục các quyền sử dụng chức năng hệ thống của tài khoản đó
### Sự kiện kích hoạt
Trên giao diện chức năng "Xem thông tin chi tiết tài khoản giảng viên", click vào "Mở khoá tài khoản"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Yêu cầu mở khoá tài khoản của giảng viên |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận mở khoá tài khoản của giảng viên |
| 3 | Tác nhân | Xác nhận mở khoá tài khoản của giảng viên |
| 4 | Hệ thống | Mở khoá tài khoản mục tiêu |
| 5 | Hệ thống | Thông báo "Đã mở khoá tài khoản" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 3a | Tác nhân | Xác nhận không mở khoá tài khoản |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận mở khoá tài khoản |
| 5a | Hệ thống | Thông báo lỗi "Không thể mở khoá tài khoản" nếu hệ thống không thành công mở khoá tài khoản mục tiêu |
### Hậu điều kiện
Tài khoản giảng viên sau khi được mở khoá sẽ khôi phục quyền sử dụng các chức năng của hệ thống.

## UC007.9
### Tên UC
Thêm giảng viên vào một khoá học
### Mô tả
Tác nhân muốn thêm giảng viên vào danh sách giảng viên của một khoá học nào đó
### Sự kiện kích hoạt
Trên giao diện "Xem thông tin chi tiết giảng viên", click vào "Thêm giảng viên vào khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Thêm giảng viên vào khoá học" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Thêm giảng viên vào khoá học" |
| 3 | Tác nhân | Nhập thông tin khoá học, yêu cầu thêm |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm giảng viên vào danh sách giảng viên của khoá học |
| 6 | Hệ thống | Thông báo "Đã thêm giảng viên vào danh sách giảng viên của khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Không tìm thấy khoá học" nếu không có khoá học nào phù hợp với thông tin do tác nhân cung cấp |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm giảng viên vào danh sách giảng viên của khoá học" nếu hệ thống không thành công thêm giảng viên vào danh sách giảng viên của khoá học mục tiêu |
### Hậu điều kiện
Giảng viên được thêm thành công vào danh sách giảng viên của khoá học mục tiêu
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Mã khoá học | Input text field | Có | Dài 6 - 20 kí tự, chỉ chứa kí tự số và dấu chấm | 1234.56.789|

-----
# UC008
## Tên UC
Quản lý tài khoản học viên
## Tác nhân
Quản trị viên
## Mô tả
Tác nhân muốn thực hiện các chức năng để quản lý tài khoản học viên
## Tiền điều kiện
Tác nhân đã đăng nhập thành công vào hệ thống

## UC008.1
### Tên UC
Xem danh sách học viên
### Mô tả
Tác nhân muốn xem danh sách học viên của hệ thống
### Sự kiện kích hoạt
Trên giao diện website, click vào "Quản lý học viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách học viên" |
| 2 | Hệ thống | Hiển thị giao diện danh sách học viên |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 2 | Hệ thống | Hiển thị danh sách trống nếu không có học viên nào |
### Hậu điều kiện
Danh sách tất cả các học viên của hệ thống được hiển thị lên giao diện

## UC008.2
### Tên UC
Tìm kiếm học viên
### Mô tả
Tác nhân muốn tìm kiếm học viên dựa trên tiêu chí nào đó
### Sự kiện kích hoạt
Trên giao diện "Xem danh sách học viên", click vào search bar
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Tìm kiếm học viên" |
| 2 | Tác nhan | Nhập thông tin, yêu cầu tìm kiếm |
| 3 | Hệ thống | Tìm kiếm các học viên phù hợp với tiêu chí tìm kiếm do tác nhân cung cấp |
| 4 | Hệ thống | Hiển thị danh sách học viên tìm được |
### Luồng sự kiện thay thế
| 4a | Hệ thống | Hiển thị danh sách trống nếu không tìm thấy học viên nào thoả mãn tiêu chí tìm kiếm do tác nhân cung cấp |
### Hậu điều kiện
Tất cả các học viên thoả mãn tiêu chí tìm kiếm được hiển thị lên giao diện
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Thông tin tìm kiếm | Input text field | Có | 6 - 20 kí tự, chỉ chứa kí tự alphabet, kí tự số và dấu cách | Nguyen Van A |

## UC008.3
### Tên UC
Xem thông tin chi tiết tài khoản học viên
### Mô tả
Tác nhân muốn xem thông tin chi tiết của học viên
### Sự kiện kích hoạt
Trên giao diện "Xem danh sách học viên", click vào record của một học viên bất kỳ.
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Yêu cầu xem thông tin chi tiết của tài khoản học viên |
| 2 | Hệ thống | Hiển thị giao diện "Xem thông tin chi tiết tài khoản của học viên" |
### Hậu điều kiện
Thông tin chi tiết của tài khoản mục tiêu được hiển thị lên giao diện

## UC008.4
### Tên UC
Thêm tài khoản học viên mới vào hệ thống
### Mô tả
Tác nhân muốn thêm một tài khoản học viên mới vào hệ thống
### Sự kiện kích hoạt
Trên giao diện "Xem danh sách học viên", click vào "Thên học viên mới"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Thêm tài khoản học viên mới vào hệ thống" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Thêm tài khoản học viên mới vào hệ thống" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm mới |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm tài khoản học viên mới |
| 6 | Hệ thống | Thông báo "Đã thêm tài khoản học viên mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Mã học viên đã được sử dụng" nếu thông tin "Mã học viên" do tác nhân cung cấp đã được sử dụng cho một tài khoản khác |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm mới học viên" nếu hệ thống không thành công thêm tài khoản học viên mới |
### Hậu điều kiện
Sử dụng tài khoản học viên mới đăng nhập thành công vào hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Mã học viên | Input text field | Có | 9 kí tự số | 123456789 |
| 2 | Mật khẩu | Password field | Có | 6 - 20 kí tự, chỉ chứa kí tự alphabet, kí tự số và các kí tự đặc biệt !@#$%^&*() | 123456 |
| 3 | Họ tên | Input text field | Có | Dài tối đa 255 kí tự, chỉ chứa kí tự alphabet và dấu cách | Nguyen Van A |
| 4 | Ngày sinh | DatePicker | Có | Ngày tháng hợp lệ | 01/01/2000 |
| 5 | Số điện thoại | Input text field | Có | 10 - 12 kí tự số | 0123456789 |

## UC008.5
### Tên UC
Cập nhật thông tin cho tài khoản học viên
### Mô tả
Tác nhân muốn cập nhật thông tin cho tài khoản của học viên
### Sự kiện kích hoạt
Trên giao diện "Xem thông tin chi tiết tài khoản học viên", click vào "Cập nhật thông tin tài khoản"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Cập nhật thông tin cho tài khoản học viên" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Cập nhật thông tin cho tài khoản học viên" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới cho tài khoản của học viên |
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới cho tài khoản của học viên |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin mới do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Mã học viên đã được sử dụng" nếu thông tin "Mã học viên" mới do tác nhân cung cấp đã được sử dụng cho một tài khoản khác |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật thông tin mới cho tài khoản học viên" nếu hệ thống không thành công cập nhật thông tin mới cho tài khoản học viên mục tiêu |
### Hậu điều kiện
Thông tin mới của tài khoản học viên mục tiêu được lưu vào hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiệu hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Mã học viên | Input text field | Có | 9 kí tự số | 123456789 |
| 2 | Họ tên | Input text field | Có | Dài tối đa 255 kí tự, chỉ chứa kí tự alphabet và dấu cách | Nguyen Van A |
| 3 | Ngày sinh | DatePicker | Có | Ngày tháng hợp lệ | 01/01/2000 |
| 4 | Số điện thoại | Input text field | gồm 10 - 12 kí tự số | 0123456789 |

## UC008.6
### Tên UC
Thiết lập lại mật khẩu cho tài khoản học viên
### Mô tả
Tác nhân muốn thiết lập lại mật khẩu cho tài khoản học viên
### Sự kiện kích hoạt
Trên giao diện "Xem thông tin chi tiết tài khoản học viên", click vào "Thiết lập lại mật khẩu"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Yêu cầu thiết lập lại mật khẩu cho tài khoản của học viên |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận thiết lập lại mật khẩu cho tài khoản của học viên |
| 3 | Tác nhân | Xác nhận thiết lập lại mật khẩu cho tài khoản mục tiêu |
| 4 | Hệ thống | Thiết lập lại mật khẩu cho tài khoản mục tiêu |
| 5 | Hệ thống | Gửi mail chứa mật khẩu mới đến email tương ứng với tài khoản mục tiêu |
| 6 | Hệ thống | Thông báo "Đã thiết lập lại mật khẩu" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 3a | Tác nhân | Xác nhận không thiết lập lại mật khẩu |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận thiết lập lại mật khẩu |
| 5a | Hệ thống | Thông báo lỗi "Không thể thiết lập lại mật khẩu" nếu hệ thống không thành công thiết lập lại mật khẩu cho tài khoản mục tiêu |
| 6a | Hệ thống | Thông báo "Không thể gửi mail" nếu hệ thống không thành công gửi mail chứa mật khẩu mới đến địa chỉ email tương ứng với tài khoản mục tiêu |
### Hậu điều kiện
Sử dụng mật khẩu mới đăng nhập thành công vào hệ thống

## UC008.7
### Tên UC
Khoá tài khoản học viên
### Mô tả
Tác nhân muốn khoá tài khoản của học viên nào đó
### Sự kiện kích hoạt
Trên giao diện "Xem thông tin chi tiết tài khoản học viên", click vào "Khoá tài khoản"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Yêu cầu khoá tài khoản học viên |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận khoá tài khoản |
| 3 | Tác nhân | Xác nhận khoá tài khoản |
| 4 | Hệ thống | Khoá tài khoản mục tiêu |
| 5 | Hệ thống | Thông báo "Đã khoá tài khoản" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 3a | Tác nhân | Xác nhận không khoá tài khoản |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá tài khoản |
| 5a | Hệ thống | Thông báo lỗi "Không thể khoá tài khoản" nếu hệ thống không thành công khoá tài khoản mục tiêu |
### Hậu điều kiện
Tài khoản học viên mục tiêu bị huỷ quyền sử dụng các chức năng của hệ thống, ngoại trừ các chức năng xem.

## UC008.8
### Tên UC
Mở khoá tài khoản học viên
### Mô tả
Tác nhân muốn mở khoá tài khoản của học viên để khôi phục các quyền sử dụng chức năng hệ thống của tài khoản đó
### Sự kiện kích hoạt
Trên giao diện chức năng "Xem thông tin chi tiết tài khoản học viên", click vào "Mở khoá tài khoản"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Yêu cầu mở khoá tài khoản của học viên |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận mở khoá tài khoản của học viên |
| 3 | Tác nhân | Xác nhận mở khoá tài khoản mục tiêu |
| 4 | Hệ thống | Mở khoá tài khoản mục tiêu |
| 5 | Hệ thống | Thông báo "Đã mở khoá tài khoản" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 3a | Tác nhân | Xác nhận không mở khoá tài khoản |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận mở khoá tài khoản |
| 5a | Hệ thống | Thông báo lỗi "Không thể mở khoá tài khoản" nếu hệ thống không thành công mở khoá tài khoản mục tiêu |
### Hậu điều kiện
Tài khoản học viên sau khi được mở khoá sẽ khôi phục quyền sử dụng các chức năng của hệ thống.

## UC008.9
### Tên UC
Thêm học viên vào một khoá học
### Mô tả
Tác nhân muốn thêm học viên vào danh sách học viên của một khoá học nào đó
### Sự kiện kích hoạt
Trên giao diện "Xem thông tin chi tiết học viên", click vào "Thêm học viên vào khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Thêm học viên vào khoá học" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Thêm học viên vào khoá học" |
| 3 | Tác nhân | Nhập thông tin khoá học, yêu cầu thêm |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm học viên vào danh sách học viên của khoá học |
| 6 | Hệ thống | Thông báo "Đã thêm học viên vào danh sách học viên của khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Không tìm thấy khoá học" nếu không có khoá học nào phù hợp với thông tin do tác nhân cung cấp |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm học viên vào danh sách học viên của khoá học" nếu hệ thống không thành công thêm học viên vào danh sách học viên của khoá học mục tiêu |
### Hậu điều kiện
Học viên được thêm thành công vào danh sách học viên của khoá học mục tiêu
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Mã khoá học | Input text field | Có | Dài 6 - 20 kí tự, chỉ chứa kí tự số và dấu chấm | 1234.56.789|

## UC008.10
### Tên UC
Xem danh sách điểm của học viên
### Mô tả
Tác nhân muốn xem danh sách điểm của một học viên
### Sự kiện kích hoạt
Trên giao diện "Xem thông chi tiết tài khoản học viên", click vào "Danh sách điểm"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách điểm của học viên" |
| 2 | Hệ thống | Hiển thị danh sách điểm của học viên |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 2a | Hệ thống | Hiển thị danh sách trống nếu học viên chưa tham gia vào bất kỳ khoá học nào |
### Hậu điều kiện
Danh sách điểm của tất cả các khoá học mà học viên tham gia được thể hiện lên giao diện

## UC008.11
### Tên UC
Chỉnh sửa điểm của học viên
### Mô tả
Tác nhân muốn chỉnh sửa điểm học tập của học viên
### Sự kiện kích hoạt
Trên giao diện "Xem danh sách điểm của học viên", click vào "Chỉnh sửa"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 1 | Tác nhân | Chọn chức năng "Chỉnh sửa điểm của học viên" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Chỉnh sửa điểm của học viên" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu chỉnh sửa |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật danh sách điểm số mới của học viên |
| 6 | Hệ thống | Thông báo "Đã cập nhật danh sách điểm mới của học viên" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|---|---|---|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật điểm số mới của học viên" nếu hệ thống không thành công cập nhật danh sách điểm mới cho học viên |
### Hậu điều kiện
Danh sách điểm số mới của học viên được lưu vào dữ liệu hệ thống.
### Dữ liệu đầu vào
Dữ liệu đầu vào gồm nhiều dòng tương ứng với các khoá học, mỗi dòng lại có dữ liệu đầu vào như sau
| Thứ tự | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|---|---|---|---|---|---|
| 1 | Điểm quá trình của khoá học thứ 1 | Input number field | Không | Số thập phân trong khoảng từ 0 đến 10, làm tròn đến 2 chữ số phía sau dấu phẩy | 5.00 |
| 2 | Điểm giữa kỳ của khoá học thứ 1 | Input number field | Không | Số thập phân trong khoảng từ 0 đến 10, làm tròn đến 2 chữ số phía sau dấu phẩy | 5.00 |
| 3 | Điểm cuối kỳ của khoá học thứ 1 | Input number field | Không | Số thập phân trong khoảng từ 0 đến 10, làm tròn đến 2 chữ số phía sau dấu phẩy | 5.00 |

# UC009
## Tên UC
Quản trị viên quản lý khoá học
## Tác nhân
Quản trị viên
## Mô tả
Tác nhân thực hiện các chức năng để quản lý khoá học
## Tiền điều kiện
Tác nhân đăng nhập thành công vào hệ thống

## UC009.1
### Tên UC
Xem danh sách khoá học
### Mô tả
Tác nhân muốn xem danh sách khoá học đang có trong dữ liệu hệ thống
### Sự kiện kích hoạt
Trên giao diện website, click vào "Quản lý khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách khoá học" |
| 2 | Hệ thống | Hiển thị danh sách khoá học trong hệ thống |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu hệ thống không có thông tin nào về khoá học |
### Hậu điều kiện
Toàn bộ khoá học trong hệ thống được hiển thị trong danh sách

## UC009.2
### Tên UC
Tìm kiếm khoá học
### Mô tả
Tác nhân muốn tìm kiếm khoá học dựa trên một tiêu chí nào đó
### Sự kiện kích hoạt
Trên giao diện "Xem danh sách khoá học", click vào search bar
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Tìm kiếm khoá học" |
| 2 | Tác nhân | Nhập thông tin, yêu cầu tìm kiếm |
| 3 | Hệ thống | Tìm kiếm các khoá học thoả mãn tiêu chí tìm kiếm |
| 4 | Hệ thống | Hiển thị danh sách khoá học thoả mãn tiêu chí tìm kiếm lên giao diện "Xem danh sách khoá học |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 4a | Hệ thống | Hiển thị danh sách trống nếu không tìm thấy khoá học nào thoả mãn tiêu chí tìm kiếm |
### Hậu điều kiện
Tất cả khoá học thoả mãn tiêu chí tìm kiếm được hiển thị lên danh sách khoá học
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Thông tin tìm kiếm | Input text field | Không | Dài tối đa 255 kí tự, chỉ bao gồm kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt .,()&- | 1234.56.789 |

## UC009.3
### Tên UC
Xem thông tin chi tiết của khoá học
### Mô tả
Tác nhân muốn xem thông tin chi tiết của một khoá học
### Sự kiện kích hoạt
Trên giao diện "Xem danh sách khoá học", click vào record của một khoá học bất kỳ
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xem thông tin chi tiết của khoá học |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin chi tiết của khoá học" |
### Hậu điều kiện
Thông tin chi tiết của khoá học được hiển thị lên giao diện

## UC009.4
### Tên UC
Thêm khoá học mới
### Mô tả
Tác nhân muốn thêm khoá học mới vào danh sách khoá học của hệ thống
### Sự kiện kích hoạt
Trên giao diện "Xem danh sách khoá học", click vào "Thêm khoá học mới"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Thêm khoá học mới" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Thêm khoá học mới" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm mới |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm khoá học mới |
| 6 | Hệ thống | Thông báo "Đã thêm khoá học mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Mã khoá học đã được sử dụng" nếu "Mã khoá học" do tác nhân cung cấp đã được sử dụng cho một khoá học khác |
| 5c | Hệ thống | Thông báo lỗi "Hệ số điểm không phù hợp" nếu tổng giá trị của "Hệ số điểm quá trình", "Hệ số điểm giữa kỳ" và "Hệ số điểm cuối kỳ" trong thông tin do tác nhân cung cấp có tổng khác 1 |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm mới khoá học" nếu hệ thống không thành công thêm khoá học mới |
### Hậu điều kiện
Thông tin của khoá học mới được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Mã khoá học | Input text field | Có | 6 - 20 kí tự, chỉ chứa kí tự số và dấu chấm | 1234.56.789
| 2 | Tên khoá học | Input text field | Có | Tối đa 255 kí tự, chỉ chứa kí tự số, kí tự alphabet, dấu cách và các kí tự đặc biệt :()&,.- | TTHCM |
| 3 | Hệ số điểm quá trình | Input number Field | Có | Trong khoảng từ 0 đến 0.2, làm tròn đến 1 chữ số thập phân sau dấu phẩy | 0.2 |
| 4 | Hệ số điểm giữa kỳ | Input number field | Có | Trong khoảng từ 0.2 đến 0.4, làm tròn đến 1 chữ số thập phân sau dấu phẩy | 0.3 |
| 5 | Hệ số điểm cuối kỳ | Input number field | Có | Trong khoảng từ 0.5 đến 1, làm tròn đến 1 chữ số thập phân sau dấu phẩy | 0.5 |

## UC009.5
### Tên UC
Cập nhật thông tin của khoá học
### Mô tả
Tác nhân muốn cập nhật thông tin mới cho khoá học
### Sự kiện kích hoạt
Trên giao diện "Xem thông tin chi tiết của khoá học", click vào "Cập nhật thông tin"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Cập nhật thông tin của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Cập nhật thông tin của khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới cho khoá học |
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới cho khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Mã khoá học đã được sử dụng" nếu thông tin "Mã khoá học" mới do tác nhân cung cấp đã được sử dụng cho một khoá học khác |
| 5c | Hệ thống | Thông báo lỗi "Hệ số điểm không phù hợp" nếu tổng giá trị của "Hệ số điểm quá trình", "Hệ số điểm giữa kỳ" và "Hệ số điểm cuối kỳ" trong thông tin do tác nhân cung cấp có tổng khác 1 |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật thông tin mới cho khoá học" nếu hệ thống không thành công cập nhật thông tin mới của khoá học |
### Hậu điều kiện
Thông tin mới cập nhật của khoá học được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Mã khoá học | Input text field | Có | 6 - 20 kí tự, chỉ chứa kí tự số và dấu chấm | 1234.56.789 |
| 2 | Tên khoá học | Input text field | Có | Tối đa 255 kí tự, chỉ chứa kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt ()-:&,. | TTHCM |
| 3 | Hệ số điểm quá trình | Input number Field | Có | Trong khoảng từ 0 đến 0.2, làm tròn đến 1 chữ số thập phân sau dấu phẩy | 0.2 |
| 4 | Hệ số điểm giữa kỳ | Input number field | Có | Trong khoảng từ 0.2 đến 0.4, làm tròn đến 1 chữ số thập phân sau dấu phẩy | 0.3 |
| 5 | Hệ số điểm cuối kỳ | Input number field | Có | Trong khoảng từ 0.5 đến 1, làm tròn đến 1 chữ số thập phân sau dấu phẩy | 0.5 |

## UC009.6
### Tên UC
Xem danh sách giảng viên của khoá học
### Mô tả
Tác nhân muốn xem danh sách giảng viên của khoá học
### Sự kiện kích hoạt
Trên giao diện "Xem thông tin chi tiết khoá học", click vào "Danh sách giảng viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách giảng viên của khoá học" |
| 2 | Hệ thống | Hiển thị danh sách giảng viên của khoá học |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có giảng viên |
### Hậu điều kiện
Tất cả giảng viên của khoá học được hiển thị lên giao diện

## UC009.7
### Tên UC
Thêm giảng viên vào danh sách giảng viên của khoá học
### Mô tả
Tác nhân muốn thêm giảng viên vào danh sách giảng viên của khoá học
### Sự kiện kích hoạt
Trên màn hình "Xem danh sách giảng viên của khoá học", click vào "Thêm giảng viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Thêm giảng viên mới vào khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thêm giảng viên mới vào khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm giảng viên vào danh sách giảng viên của khoá học |
| 6 | Hệ thống | Thông báo "Đã thêm giảng viên vào khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Không tìm thấy giảng viên" nếu thông tin "Mã giảng viên" do tác nhân cung cấp không tương ứng với tài khoản Giảng viên nào trong hệ thống |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm giảng viên vào khoá học" nếu hệ thống không thành công thêm giảng viên vào danh sách giảng viên của khoá học |
### Hậu điều kiện
Giảng viên mới được thêm vào danh sách giảng viên của khoá học trong dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Mã giảng viên | Input text field | Có | 9 kí tự số | 123456789 |

## UC009.8
### Tên UC
Xoá giảng viên khỏi danh sách giảng viên của khoá học
### Mô tả
Tác nhân muốn xoá giảng viên khỏi danh sách giảng viên của khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách giảng viên của khoá học", click vào "Xoá giảng viên" trên record của giảng viên cần xoá
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xoá giảng viên khỏi danh sách giảng viên |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận xoá |
| 3 | Tác nhân | Xác nhận xoá |
| 4 | Hệ thống | Xoá giảng viên khỏi danh sách giảng viên của khoá học |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 3a | Tác nhân | Xác nhận không xoá |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá |
### Hậu điều kiện 
Thông tin về giảng viên bị xoá không còn hiển thị trong danh sách giảng viên của khoá học nữa.

## UC009.9
### Tên UC
Xem danh sách học viên
### Mô tả
Tác nhân muốn xem danh sách học viên của khoá học
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết của khoá học", click vào "Danh sách học viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách học viên của khoá học |
| 2 | Hệ thống | Hiển thị danh sách học viên của khoá học|
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có học viên |
### Hậu điều kiện
Toàn bộ học viên của khoá học được hiển thị lên giao diện

## UC009.10
### Tên UC
Thêm học viên vào danh sách học viên của khoá học
### Mô tả
Tác nhân muốn thêm học viên vào danh sách học viên của khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách học viên của khoá học", click vào "Thêm học viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Thêm học viên vào danh sách học viên của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Thêm học viên vào danh sách học viên của khoá học" |
| 3 | Tác nhân | Nhập thông tin, xác nhận thêm |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm học viên vào danh sách học viên của khoá học |
| 6 | Hệ thống | Thông báo "Đã thêm học viên" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Không tìm thấy học viên" nếu thông tin "Mã học viên" do tác nhân cung cấp không thuộc về một tài khoản học viên nào trong hệ thống |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm học viên vào khoá học" nếu hệ thống không thành công thêm học viên vào danh sách học viên của khoá học |
### Hậu điều kiện
Thông tin của học viên mới được lưu trong danh sách học viên của khoá học trên hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Mã học viên | Input text field | Có | 9 kí tự số | 123456789 |

## UC009.11
### Tên UC
Xoá học viên khỏi danh sách học viên của khoá học
### Mô tả
Tác nhân muốn xoá một học viên khỏi danh sách học viên của khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách học viên của khoá học", click vào "Xoá học viên" trên record của học viên cần xoá trong danh sách
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xoá học viên khỏi danh sách học viên |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận xoá |
| 3 | Tác nhân | Xác nhận xoá |
| 4 | Hệ thống | Xoá học viên khỏi danh sách học viên của khoá học |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 3a | Tác nhân | Xác nhận không xoá học viên |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá học viên |
| 4a | Hệ thống | Thông báo "Không thể xoá học viên" nếu hệ thống không thành công xoá học viên khỏi danh sách học viên của khoá học |
### Hậu điều kiện
Thông tin về học viên được xoá khỏi danh sách học viên của khoá học

## UC009.12
### Tên UC
Xem danh sách bài giảng của khoá học
### Mô tả
Tác nhân muốn xem danh sách bài giảng của khoá học
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết về khoá học", click vào "Danh sách bài giảng"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu chức năng "Xem danh sách bài giảng của khoá học |
| 2 | Hệ thống | Hiển thị danh sách bài giảng của khoá học |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có bài giảng |
### Hậu điều kiện
Tất cả bài giảng của khoá học được hiển thị lên danh sách

## UC009.13
### Tên UC
Xem thông tin chi tiết của bài giảng
### Mô tả
Tác nhân muốn xem chi tiết thông tin của bài giảng trong danh sách bài giảng
### Sự kiện kích hoạt
Trên giao diện "Danh sách bài giảng", click vào bản ghi của bài giảng
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu chức năng "Xem thông tin chi tiết bài giảng" |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin chi tiết của bài giảng" |
### Hậu điều kiện
Thông tin chi tiết của bài giảng được hiển thị lên giao diện

## UC009.14
### Tên UC
Thêm bài giảng vào danh sách bài giảng của khoá học
### Mô tả
Tác nhân muốn thêm bài giảng mới vào danh sách bài giảng của khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách bài giảng", click vào "Thêm bài giảng mới"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Thêm bài giảng mới vào danh sách bài giảng của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thêm bài giảng mới vào danh sách bài giảng của khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của người dùng |
| 5 | Hệ thống | Thêm bài giảng mới |
| 6 | Hệ thống | Thông báo "Đã thêm bài giảng mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Không thể thêm bài giảng" nếu hệ thống không thành công thêm bài giảng mới vào danh sách bài giảng của khoá học |
### Hậu điều kiện
Thông tin bài giảng mới được lưu trong danh sách bài giảng của khoá học 
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tên bài giảng | Input text field | Có | 60 kí tự, chỉ gồm kí tự alphabet, dấu cách và các kí tự đặc biệt ,.()-& | Chương 1: Khái niệm tư tưởng và tư tưởng Hồ Chí Minh |
| 2 | Nội dung | Input text field | Có | Dài tối đa 4095 kí tự, chỉ chứa các kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt (),.+-=*&;! | test |
| 3 | Bài tập | Input text field | Có | Dài tối đa 255 kí tự, chỉ chứa các kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt (),.+-=*&;! | Bài 1: abc?, Bài 2: def? |

## UC009.15
### Tên UC
Cập nhật thông tin cho bài giảng trong khoá học
### Mô tả
Tác nhân muốn chỉnh sửa thông tin của bài giảng nằm trong danh sách bài giảng của khoá học
### Sự kiện kích hoạt
Click vào "Cập nhật" trên record của bài giảng trong "Danh sách bài giảng của khoá học" hoặc trên giao diện "Thông tin chi tiết bài giảng"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Cập nhật thông tin cho bài giảng" |
| 2 | Hệ thống | Hiển thị giao diện "Cập nhật thông tin bài giảng " |
| 3 | Tác nhân | Nhập thông tin, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới của bài giảng |
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới của bài giảng" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật bài giảng" nếu hệ thống không thành công cập nhật thông tin mới của bài giảng |
### Hậu điều kiện
Thông tin mới của bài giảng được cập nhật vào dữ liệu của hệ thống
### Dữ liệu đầu vào
| STT | Trường dư liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tên bài giảng | Input text field | Có | 60 kí tự, chỉ gồm kí tự alphabet, dấu cách và các kí tự đặc biệt ,.()-& | Chương 1: Khái niệm tư tưởng và tư tưởng Hồ Chí Minh |
| 2 | Nội dung | Input text field | Có | Dài tối đa 4095 kí tự, chỉ chứa các kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt (),.+-=*&;! | test |
| 3 | Bài tập | Input text field | Có | Dài tối đa 255 kí tự, chỉ chứa các kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt (),.+-=*&;! | Bài 1: abc?, Bài 2: def? |

## UC009.16
### Tên UC
Xoá bài giảng khỏi danh sách bài giảng của khoá học
### Mô tả
Tác nhân muốn xoá bài giảng khỏi danh sách bài giảng của hệ thống
### Sự kiện kích hoạt
Trên giao diện "Danh sách bài giảng của khoá học", click vào "Xoá bài giảng" trên record của bài giảng trong danh sách
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xoá bài giảng khỏi danh sách bài giảng của khoá học |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận xoá bài giảng |
| 3 | Tác nhân | Xác nhận xoá bài giảng |
| 4 | Hệ thống | Xoá bài giảng |
| 5 | Hệ thống | Thông báo "Đã xoá bài giảng" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 3a | Tác nhân | Xác nhận không xoá bài giảng |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá bài giảng |
| 5a | Hệ thống | Thông báo lỗi "Không thể xoá bài giảng" nếu hệ thống không thành công xoá bài giảng khỏi danh sách bài giảng của hệ thống |
### Hậu điều kiện
Thông tin về bài giảng bị xoá khỏi danh sách bài giảng trong dữ liệu của hệ thống

## UC009.17
### Tên UC
Xem danh sách tiến độ học tập của học viên trong khoá học
### Mô tả
Tác nhân muốn xem tiến độ hoàn thành bài giảng của các học viên trong khoá học
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết về khoá học", click vào "Tiến độ học tập"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách tiến độ học tập khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách tiến độ học tập khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có học viên |
### Hậu điều kiện
Tiến độ học tập của tất cả các học viên của khoá học được hiển thị lên danh sách

## UC009.18
### Tên UC
Cập nhật danh sách tiến độ hoàn thành bài giảng của học viên trong khoá học
### Mô tả
Tác nhân muốn chỉnh sửa tiến độ học tập của học viên trong khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách tiến độ học tập của học viên trong khoá học", click vào "Cập nhật"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Cập nhật danh sách tiến độ học tập khoá học" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Cập nhật danh sách tiến độ học tập khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin danh sách tiến độ học tập mới |
| 6 | Hệ thống | Thông báo "Đã cập nhật danh sách tiến độ học tập khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật danh sách" nếu hệ thống không thành công cập nhật danh sách tiến độ học tập khoá học mới |
### Hậu điều kiện
Thông tin danh sách tiến độ học tập khoá học mới được cập nhật thành công vào dữ liệu của hệ thống
### Dữ liệu đầu vào
Dữ liệu đầu vào là một bảng, mỗi dòng của bảng tương ứng với một học viên của khoá học, mỗi cột của bảng tương ứng với mỗi bài giảng của khoá học. Mỗi ô trong miển dữ liệu của bảng tương ứng với việc học viên đã hoàn thành bài giảng hay chưa.
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Đã hoàn thành bài giảng? | Checkbox input | Không | Chọn hoặc không chọn | Chọn |

## UC009.19
### Tên UC
Xem danh sách điểm của học viên trong khoá học
### Mô tả
Tác nhân muốn xem danh sách điểm học tập của học viên của khoá học
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết của khoá học", click vào "Danh sách điểm"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xem danh sách điểm của học viên tham gia khoá học |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách điểm học viên của khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có học viên |
### Hậu điều kiện
Điểm số của tất cả các học viên tham gia khoá học được liệt kê vào danh sách điểm

## UC009.20
### Tên UC
Cập nhật danh sách điểm của học viên trong khoá học
### Mô tả
Tác nhân muốn chỉnh sửa danh sách điểm của học viên của khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách điểm của học viên trong khoá học", click vào "Chỉnh sửa"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Cập nhật danh sách điểm của học viên của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Cập nhật danh sách điểm của học viên của khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật danh sách điểm mới |
| 6 | Hệ thống | Thông báo "Đã cập nhật dánh sách điểm mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật danh sách điểm" nếu hệ thống không thành công cập nhật danh sách điểm mới của học viên của khoá học |
### Hậu điều kiện
Danh sách điểm mới của khoá học được lưu vào dữ liệu của hệ thống
### Dữ liệu đầu vào
Dữ liệu đầu vào là một bảng, mỗi hàng tương ứng với một học viên tham gia khoá học và mang các trường dữ liệu sau
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Điểm quá trình | Input number field | Không | Trong khoảng từ 0 đến 10, làm tròn đến 2 chữ số thập phân sau dấu phẩy | 5 |
| 2 | Điểm giữa kỳ | Input number field | Không | Trong khoảng từ 0 đến 10, làm tròn đến 2 chữ số thập phân sau dấu phẩy | 8 |
| 3 | Điểm cuối kỳ | Input number field | Không | Trong khoảng từ 0 đến 10, làm tròn đến 2 chữ số thập phân sau dấu phẩy | 7 |

## UC009.21
### Tên UC
Xem danh sách tin tức của khoá học
### Mô tả
Tác nhân muốn xem danh sách tin tức của khoá học
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết của khoá học", click vào "Danh sách tin tức"
### Luồng sự kiện chính 
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách tin tức của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách tin tức của khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có tin tức nào |
### Hậu điều kiện
Tất cả tin tức của khoá học được hiển thị trong danh sách

## UC009.22
### Tên UC
Thêm tin tức mới về khoá học
### Mô tả
Tác nhân muốn thêm tin tức mới về khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách tin tức của khoá học", click vào "Thêm tin tức mới"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Thêm tin tức mới về khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thêm tin tức mới về khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm tin tức mới |
| 6 | Hệ thống | Thông báo "Đã thêm tin tức mới cho khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn các điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm tin tức mới" nếu hệ thống không thành công thêm mới tin tức vào danh sách tin tức của khoá học |
### Hậu điều kiện
Thông tin tin tức mới của khoá học được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tiêu đề | Input text field | Có | Dài tối đa 255 kí tự, không được chứa các kí tự "' | 30/03: Lớp nghỉ |
| 2 | Nội dung | Input text field | Không | Dài tối đa 255 kí tự, không được chứa các kí tự "' | Giảng viên họp đột xuất, lịch học bù sẽ được thông báo sau |

## UC009.23
### Tên UC
Xem thông tin chi tiết về tin tức thuộc khoá học
### Mô tả
Tác nhân muốn xem thông tin chi tiết tin tức của khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách tin tức của khoá học", click vào record của tin tức bất kỳ
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem thông tin chi tiết tin tức của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin chi tiết tin tức của khoá học" |
### Hậu điều kiện
Thông tin chi tiết của tin tức được hiển thị lên giao diện

## UC009.24
### Tên UC
Chỉnh sửa thông tin của tin tức
### Mô tả
Tác nhân muốn chỉnh sửa thông tin của tin tức
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết tin tức của khoá học", click vào "Chỉnh sửa"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Chỉnh sửa tin tức của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Chỉnh sửa tin tức" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu chỉnh sửa |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới của tin tức |
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới cho tin tức" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn các điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật thông tin mới cho tin tức" nếu hệ thống không thành công chỉnh sửa thông tin của tin tức |
### Hậu điều kiện
Thông tin mới của tin tức được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tiêu đề | Input text field | Có | Dài tối đa 255 kí tự, không chứa các kí tự sau "' | 31/03: Lớp đi học bù tiết 6 - 8 |
| 2 | Nội dung | Input text field | Không | Dài tối đa 255 kí tự, không chứa các kí tự sau "' | Phòng E305 |

## UC009.25
### Tên UC
Xoá tin tức khỏi danh sách tin tức của khoá học
### Mô tả
Tác nhân muốn xoá tin tức khỏi danh sách tin tức của hệ thống
### Sự kiện kích hoạt
Click vào nút "Xoá tin tức" trên giao diện "Thông tin chi tiết tin tức của khoá học" hoặc trên record của một tin tức trong giao diện "Danh sách tin tức của khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xoá tin tức |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận xoá tin tức |
| 3 | Tác nhân | Xác nhận xoá tin tức |
| 4 | Hệ thống | Xoá tin tức |
| 5 | Hệ thống | Thông báo "Đã xoá tin tức" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 3a | Tác nhân | Xác nhận không xoá tin tức |
| 3a.4 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá tin tức |
| 5a | Hệ thống | Thông báo lỗi "Không thể xoá tin tức" nếu hệ thống không thành công xoá tin tức |
### Hậu điều kiện
Tin tức bị xoá bỏ khỏi danh sách tin tức

## UC009.26
### Tên UC
Xoá khoá học khỏi danh sách khoá học của hệ thống
### Mô tả
Tác nhân muốn xoá bỏ khoá học khỏi hệ thống
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết về khoá học", click vào "Xoá khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xoá khoá học |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận xoá khoá học |
| 3 | Tác nhân | Xác nhận xoá khoá học |
| 4 | Hệ thống | Xoá khoá học |
| 5 | Hệ thống | Thông báo "Đã xoá khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 3a | Tác nhân | Xác nhận không xoá khoá học |
| 3a.4 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá khoá học |
| 5a | Hệ thống | Thông báo lỗi "Không thể xoá khoá học" nếu hệ thống không thành công xoá khoá học |
### Hậu điều kiện
Khoá học bị xoá bỏ khỏi danh sách khoá học.

-----

# UC010
## Tên UC
Giảng viên quản lý khoá học
## Tác nhân
Giảng viên
## Mô tả
Tác nhân muốn thực hiện các chức năng quản lý khoá học

## UC010.1
### Tên UC
Xem danh sách khoá học mà giảng viên được thêm vào
### Sự kiện kích hoạt
Trên giao diện website, click vào "Danh sách khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách khoá học của giảng viên" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu giảng viên chưa được thêm vào khoá học nào |
### Hậu điều kiện
Tất cả các khoá học mà giảng viên đã được thêm vào được hiển thị trong danh sách

## UC010.2
### Tên UC
Xem thông tin chi tiết khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách khoá học của giảng viên", click vào record của một khoá học bất kỳ trong danh sách
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem thông tin chi tiết khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin chi tiết khoá học" |
### Hậu điều kiện
Thông tin chi tiết của khoá học được hiển thị lên giao diện

## UC010.3
### Tên UC
Cập nhật thông tin của khoá học
### Sự kiện kích hoạt 
Trên giao diện "Thông tin chi tiết khoá học", click vào "Cập nhật"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Cập nhật thông tin của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Cập nhật thông tin của khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới cho khoá học |
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới cho khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Mã khoá học đã được sử dụng" nếu thông tin "Mã khoá học" mới do tác nhân cung cấp đã được sử dụng cho một khoá học khác |
| 5c | Hệ thống | Thông báo lỗi "Hệ số điểm không phù hợp" nếu tổng giá trị của "Hệ số điểm quá trình", "Hệ số điểm giữa kỳ" và "Hệ số điểm cuối kỳ" trong thông tin do tác nhân cung cấp có tổng khác 1 |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật thông tin mới cho khoá học" nếu hệ thống không thành công cập nhật thông tin mới của khoá học |
### Hậu điều kiện
Thông tin mới cập nhật của khoá học được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Mã khoá học | Input text field | Có | 6 - 20 kí tự, chỉ chứa kí tự số và dấu chấm | 1234.56.789 |
| 2 | Tên khoá học | Input text field | Có | Tối đa 255 kí tự, chỉ chứa kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt ()-:&,. | TTHCM |
| 3 | Hệ số điểm quá trình | Input number Field | Có | Trong khoảng từ 0 đến 0.2, làm tròn đến 1 chữ số thập phân sau dấu phẩy | 0.2 |
| 4 | Hệ số điểm giữa kỳ | Input number field | Có | Trong khoảng từ 0.2 đến 0.4, làm tròn đến 1 chữ số thập phân sau dấu phẩy | 0.3 |
| 5 | Hệ số điểm cuối kỳ | Input number field | Có | Trong khoảng từ 0.5 đến 1, làm tròn đến 1 chữ số thập phân sau dấu phẩy | 0.5 |

## UC010.4
### Tên UC
Xem danh sách bài giảng của khoá học
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết về khoá học", click vào "Danh sách bài giảng"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu chức năng "Xem danh sách bài giảng của khoá học |
| 2 | Hệ thống | Hiển thị danh sách bài giảng của khoá học |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có bài giảng |
### Hậu điều kiện
Tất cả bài giảng của khoá học được hiển thị lên danh sách

## UC010.5
### Tên UC
Xem chi tiết bài giảng thuộc danh sách bài giảng của khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách bài giảng", click vào bản ghi của bài giảng
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu chức năng "Xem thông tin chi tiết bài giảng" |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin chi tiết của bài giảng" |
### Hậu điều kiện
Thông tin chi tiết của bài giảng được hiển thị lên giao diện

## UC010.6
### Tên UC
Cập nhật thông tin bài giảng
### Sự kiện kích hoạt
Click vào "Cập nhật" trên record của bài giảng trong "Danh sách bài giảng của khoá học" hoặc trên giao diện "Thông tin chi tiết bài giảng"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Cập nhật thông tin cho bài giảng" |
| 2 | Hệ thống | Hiển thị giao diện "Cập nhật thông tin bài giảng " |
| 3 | Tác nhân | Nhập thông tin, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới của bài giảng |
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới của bài giảng" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật bài giảng" nếu hệ thống không thành công cập nhật thông tin mới của bài giảng |
### Hậu điều kiện
Thông tin mới của bài giảng được cập nhật vào dữ liệu của hệ thống
### Dữ liệu đầu vào
| STT | Trường dư liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tên bài giảng | Input text field | Có | 60 kí tự, chỉ gồm kí tự alphabet, dấu cách và các kí tự đặc biệt ,.()-& | Chương 1: Khái niệm tư tưởng và tư tưởng Hồ Chí Minh |
| 2 | Nội dung | Input text field | Có | Dài tối đa 4095 kí tự, chỉ chứa các kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt (),.+-=*&;! | test |
| 3 | Bài tập | Input text field | Có | Dài tối đa 255 kí tự, chỉ chứa các kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt (),.+-=*&;! | Bài 1: abc?, Bài 2: def? |

## UC010.7
### Tên UC
Thêm bài giảng mới vào khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách bài giảng", click vào "Thêm bài giảng mới"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Thêm bài giảng mới vào danh sách bài giảng của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thêm bài giảng mới vào danh sách bài giảng của khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của người dùng |
| 5 | Hệ thống | Thêm bài giảng mới |
| 6 | Hệ thống | Thông báo "Đã thêm bài giảng mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 5b | Hệ thống | Thông báo lỗi "Không thể thêm bài giảng" nếu hệ thống không thành công thêm bài giảng mới vào danh sách bài giảng của khoá học |
### Hậu điều kiện
Thông tin bài giảng mới được lưu trong danh sách bài giảng của khoá học 
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tên bài giảng | Input text field | Có | 60 kí tự, chỉ gồm kí tự alphabet, dấu cách và các kí tự đặc biệt ,.()-& | Chương 1: Khái niệm tư tưởng và tư tưởng Hồ Chí Minh |
| 2 | Nội dung | Input text field | Có | Dài tối đa 4095 kí tự, chỉ chứa các kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt (),.+-=*&;! | test |
| 3 | Bài tập | Input text field | Có | Dài tối đa 255 kí tự, chỉ chứa các kí tự alphabet, kí tự số, dấu cách và các kí tự đặc biệt (),.+-=*&;! | Bài 1: abc?, Bài 2: def? |

## UC010.8
### Tên UC
Xoá bài giảng khỏi danh sách bài giảng của khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách bài giảng của khoá học", click vào "Xoá bài giảng" trên record của bài giảng trong danh sách
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xoá bài giảng khỏi danh sách bài giảng của khoá học |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận xoá bài giảng |
| 3 | Tác nhân | Xác nhận xoá bài giảng |
| 4 | Hệ thống | Xoá bài giảng |
| 5 | Hệ thống | Thông báo "Đã xoá bài giảng" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 3a | Tác nhân | Xác nhận không xoá bài giảng |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá bài giảng |
| 5a | Hệ thống | Thông báo lỗi "Không thể xoá bài giảng" nếu hệ thống không thành công xoá bài giảng khỏi danh sách bài giảng của hệ thống |
### Hậu điều kiện
Thông tin về bài giảng bị xoá khỏi danh sách bài giảng trong dữ liệu của hệ thống

## UC010.9
### Tên UC
Xem danh sách học viên của khoá học
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết của khoá học", click vào "Danh sách học viên"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách học viên của khoá học |
| 2 | Hệ thống | Hiển thị danh sách học viên của khoá học|
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có học viên |
### Hậu điều kiện
Toàn bộ học viên của khoá học được hiển thị lên giao diện

## UC010.10
### Tên UC
Xem danh sách tiến độ hoàn thành bài giảng của học viên
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết về khoá học", click vào "Tiến độ học tập"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách tiến độ học tập khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách tiến độ học tập khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có học viên |
### Hậu điều kiện
Tiến độ học tập của tất cả các học viên của khoá học được hiển thị lên danh sách

## UC010.11
### Tên UC
Cập nhật danh sách tiến độ hoàn thành bài giảng của học viên
### Sự kiện kích hoạt
Trên giao diện "Danh sách tiến độ học tập của học viên trong khoá học", click vào "Cập nhật"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Cập nhật danh sách tiến độ học tập khoá học" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Cập nhật danh sách tiến độ học tập khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin danh sách tiến độ học tập mới |
| 6 | Hệ thống | Thông báo "Đã cập nhật danh sách tiến độ học tập khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật danh sách" nếu hệ thống không thành công cập nhật danh sách tiến độ học tập khoá học mới |
### Hậu điều kiện
Thông tin danh sách tiến độ học tập khoá học mới được cập nhật thành công vào dữ liệu của hệ thống
### Dữ liệu đầu vào
Dữ liệu đầu vào là một bảng, mỗi dòng của bảng tương ứng với một học viên của khoá học, mỗi cột của bảng tương ứng với mỗi bài giảng của khoá học. Mỗi ô trong miển dữ liệu của bảng tương ứng với việc học viên đã hoàn thành bài giảng hay chưa.
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Đã hoàn thành bài giảng? | Checkbox input | Không | Chọn hoặc không chọn | Chọn |

## UC010.12
### Tên UC
Xem danh sách điểm của học viên thuộc khoá học
## Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết của khoá học", click vào "Danh sách điểm"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xem danh sách điểm của học viên tham gia khoá học |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách điểm học viên của khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có học viên |
### Hậu điều kiện
Điểm số của tất cả các học viên tham gia khoá học được liệt kê vào danh sách điểm

## UC010.13
### Tên UC
Cập nhật danh sách điểm của học viên thuộc khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách điểm của học viên trong khoá học", click vào "Chỉnh sửa"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Cập nhật danh sách điểm của học viên của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Cập nhật danh sách điểm của học viên của khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu cập nhật |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật danh sách điểm mới |
| 6 | Hệ thống | Thông báo "Đã cập nhật dánh sách điểm mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật danh sách điểm" nếu hệ thống không thành công cập nhật danh sách điểm mới của học viên của khoá học |
### Hậu điều kiện
Danh sách điểm mới của khoá học được lưu vào dữ liệu của hệ thống
### Dữ liệu đầu vào
Dữ liệu đầu vào là một bảng, mỗi hàng tương ứng với một học viên tham gia khoá học và mang các trường dữ liệu sau
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Điểm quá trình | Input number field | Không | Trong khoảng từ 0 đến 10, làm tròn đến 2 chữ số thập phân sau dấu phẩy | 5 |
| 2 | Điểm giữa kỳ | Input number field | Không | Trong khoảng từ 0 đến 10, làm tròn đến 2 chữ số thập phân sau dấu phẩy | 8 |
| 3 | Điểm cuối kỳ | Input number field | Không | Trong khoảng từ 0 đến 10, làm tròn đến 2 chữ số thập phân sau dấu phẩy | 7 |

## UC010.14
### Tên UC
Xem danh sách tin tức của khoá học
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết của khoá học", click vào "Danh sách tin tức"
### Luồng sự kiện chính 
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách tin tức của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách tin tức của khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có tin tức nào |
### Hậu điều kiện
Tất cả tin tức của khoá học được hiển thị trong danh sách

## UC010.15
### Tên UC
Xem thông tin chi tiết của tin tức thuộc khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách tin tức của khoá học", click vào record của tin tức bất kỳ
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem thông tin chi tiết tin tức của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin chi tiết tin tức của khoá học" |
### Hậu điều kiện
Thông tin chi tiết của tin tức được hiển thị lên giao diện

## UC010.16
### Tên UC
Thêm tin túc về khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách tin tức của khoá học", click vào "Thêm tin tức mới"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Thêm tin tức mới về khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thêm tin tức mới về khoá học" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm tin tức mới |
| 6 | Hệ thống | Thông báo "Đã thêm tin tức mới cho khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn các điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm tin tức mới" nếu hệ thống không thành công thêm mới tin tức vào danh sách tin tức của khoá học |
### Hậu điều kiện
Thông tin tin tức mới của khoá học được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tiêu đề | Input text field | Có | Dài tối đa 255 kí tự, không được chứa các kí tự "' | 30/03: Lớp nghỉ |
| 2 | Nội dung | Input text field | Không | Dài tối đa 255 kí tự, không được chứa các kí tự "' | Giảng viên họp đột xuất, lịch học bù sẽ được thông báo sau |

## UC010.16
### Tên UC
Chỉnh sửa thông tin của tin tức thuộc khoá học
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết tin tức của khoá học", click vào "Chỉnh sửa"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Chỉnh sửa tin tức của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Chỉnh sửa tin tức" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu chỉnh sửa |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới của tin tức |
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới cho tin tức" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn các điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật thông tin mới cho tin tức" nếu hệ thống không thành công chỉnh sửa thông tin của tin tức |
### Hậu điều kiện
Thông tin mới của tin tức được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tiêu đề | Input text field | Có | Dài tối đa 255 kí tự, không chứa các kí tự sau "' | 31/03: Lớp đi học bù tiết 6 - 8 |
| 2 | Nội dung | Input text field | Không | Dài tối đa 255 kí tự, không chứa các kí tự sau "' | Phòng E305 |

-----
# UC011
## Tên UC
Quản lý tin tức
## Tác nhân
Quản trị viên
## Mô tả
Tác nhân muốn thực hiện các chức năng để quản lý hệ thống tin tức/thông báo
## Tiền điều kiện
Tác nhân đăng nhập thành công vào hệ thống

## UC011.1
### Tên UC
Xem danh sách tin tức của hệ thống
### Sự kiện kích hoạt
Trên giao diện website, click vào "Danh sách tin tức"
### Luồng sự kiện chính 
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách tin tức" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách tin tức" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học không có tin tức nào |
### Hậu điều kiện
Tất cả tin tức của khoá học được hiển thị trong danh sách

## UC011.2
### Tên UC
Xem thông tin chi tiết về tin tức
### Sự kiện kích hoạt
Trên giao diện "Danh sách tin tức", click vào record của tin tức bất kỳ
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem thông tin chi tiết tin tức" |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin chi tiết tin tức" |
### Hậu điều kiện
Thông tin chi tiết của tin tức được hiển thị lên giao diện

## UC011.3
### Tên UC
Tìm kiếm tin tức

## UC011.4
### Tên UC
Thêm tin tức mới
### Sự kiện kích hoạt
Trên giao diện "Danh sách tin tức", click vào "Thêm tin tức mới"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Thêm tin tức mới" |
| 2 | Hệ thống | Hiển thị giao diện "Thêm tin tức" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm tin tức mới |
| 6 | Hệ thống | Thông báo "Đã thêm tin tức mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn các điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm tin tức mới" nếu hệ thống không thành công thêm mới tin tức |
### Hậu điều kiện
Thông tin tin tức mới được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tiêu đề | Input text field | Có | Dài tối đa 255 kí tự, không được chứa các kí tự "' | 30/03: Lớp nghỉ |
| 2 | Nội dung | Input text field | Không | Dài tối đa 255 kí tự, không được chứa các kí tự "' | Giảng viên họp đột xuất, lịch học bù sẽ được thông báo sau |
| 3 | Thông báo đến khoá học? | Check box | Không | Chọn hoặc không chọn | Không chọn |
| 4 | Mã khoá học | Input text field | Có nếu trường "Thông báo đến khoá học?" được chọn | 6 - 20 kí tự, chỉ chứa kí tự số và dấu chấm | 1234.56.789 hoặc để trống |

## UC011.5
### Tên UC
Chỉnh sửa thông tin của tin tức
### Sự kiện kích hoạt
Trên giao diện "Thông tin chi tiết tin tức", click vào "Chỉnh sửa"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Chỉnh sửa tin tức" |
| 2 | Hệ thống | Hiển thị giao diện "Chỉnh sửa tin tức" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu chỉnh sửa |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Cập nhật thông tin mới của tin tức |
| 6 | Hệ thống | Thông báo "Đã cập nhật thông tin mới cho tin tức" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn các điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể cập nhật thông tin mới cho tin tức" nếu hệ thống không thành công chỉnh sửa thông tin của tin tức |
### Hậu điều kiện
Thông tin mới của tin tức được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Tiêu đề | Input text field | Có | Dài tối đa 255 kí tự, không chứa các kí tự sau "' | 31/03: Lớp đi học bù tiết 6 - 8 |
| 2 | Nội dung | Input text field | Không | Dài tối đa 255 kí tự, không chứa các kí tự sau "' | Phòng E305 |
| 3 | Thông báo đến khoá học? | Check box | Không | Chọn hoặc không chọn | Không chọn |
| 4 | Mã khoá học | Input text field | Có nếu trường "Thông báo đến khoá học?" được chọn | 6 - 20 kí tự, chỉ chứa kí tự số và dấu chấm | 1234.56.789 hoặc để trống |

## UC011.6
### Tên UC
Xoá tin tức khỏi danh sách tin tức của hệ thống
### Sự kiện kích hoạt
Click vào nút "Xoá tin tức" trên giao diện "Thông tin chi tiết tin tức" hoặc trên record của một tin tức trong giao diện "Danh sách tin tức"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xoá tin tức |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận xoá tin tức |
| 3 | Tác nhân | Xác nhận xoá tin tức |
| 4 | Hệ thống | Xoá tin tức |
| 5 | Hệ thống | Thông báo "Đã xoá tin tức" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 3a | Tác nhân | Xác nhận không xoá tin tức |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá tin tức |
| 5a | Hệ thống | Thông báo lỗi "Không thể xoá tin tức" nếu hệ thống không thành công xoá tin tức |
### Hậu điều kiện
Tin tức bị xoá bỏ khỏi danh sách tin tức

-----
# UC012
## Tên UC
Học viên sử dụng chức năng hệ thống
## Tác nhân
Học viên
## Tiền điều kiện
Tác nhân đã đăng nhập thành công vào hệ thống
## Mô tả
Tác nhân muốn sử dụng các chức năng do hệ thống cung cấp

## UC012.1
### Tên UC
Xem danh sách điểm học tập cá nhân
### Sự kiện kích hoạt
Trên giao diện website, click vào "Kết quả học tập"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách điểm học tập cá nhân" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách điểm học tập cá nhân" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu học viên chưa tham gia vào khoá học nào | 
### Hậu điều kiện
Điểm của tất cả các khoá học mà học viên tham gia được thể hiện trên danh sách

## UC012.2
### Tên UC
Đặt mục tiêu điểm số cho một khoá học
### Sự kiện kích hoạt
Click vào "Đặt mục tiêu" trên record của một khoá học trong giao diện "Danh sách điểm học tập cá nhân"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Đặt mục tiêu điểm học tập" |
| 2 | Hệ thống | Hiển thị giao diện chức năng "Đặt mục tiêu điểm học tập" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm mục tiêu |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm mục tiêu mới |
| 6 | Hệ thống | Thông báo "Đã thêm mục tiêu mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể thêm mục tiêu" nếu hệ thống không thành công thêm mục tiêu mới |
### Hậu điều kiện
Mục tiêu điểm học tập mới được lưu vào dữ liệu hệ thống
### Dữ liệu đầu vào
| STT | Trường dữ liệu | Mô tả | Bắt buộc? | Điều kiện hợp lệ | Ví dụ |
|-|-|-|-|-|-|
| 1 | Loại mục tiêu | Select box | Có | Chọn một trong các giá trị "Điểm quá trình", "Điểm giữa kỳ", "Điểm cuối kỳ" và "Điểm trung bình khoá học" | Chọn "Điểm quá trình |
| 2 | Giá trị mục tiêu | Input number box | Có | Số thập phân trong khoảng 0 đến 10, tối đa 2 chữ số thập phân sau dấu phẩy | 5 |

## UC012.3
### Tên UC
Xem danh sách mục tiêu điểm học tập của cá nhân
### Sự kiện kích hoạt
Trên giao diện "Danh sách điểm học tập cá nhân", click vào "Danh sách mục tiêu"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách mục tiêu điểm cá nhân" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách mục tiêu điểm cá nhân" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu không có mục tiêu nào đã được thiết đặt |
### Hậu điều kiện
Tất cả các mục tiêu cá nhân đã đặt ra được hiển thị trên danh sách

## UC012.4
### Tên UC
Xoá mục tiêu điểm học tập cá nhân
### Sự kiện kích hoạt
Click vào "Xoá mục tiêu" trên record của mục tiêu cần xoá trong "Danh sách mục tiêu điểm cá nhân"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xoá mục tiêu |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận xoá mục tiêu |
| 3 | Tác nhân | Xác nhận xoá mục tiêu |
| 4 | Hệ thống | Xoá mục tiêu |
| 5 | Hệ thống | Thông báo "Đã xoá mục tiêu" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 3a | Tác nhân | Xác nhận không xoá mục tiêu |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá mục tiêu |
| 5a | Hệ thống | Thông báo lỗi "Không thể xoá mục tiêu" nếu hệ thống không thành công xoá mục tiêu |
### Hậu điều kiện
Mục tiêu bị xoá bỏ khỏi danh sách mục tiêu điểm cá nhân trong dữ liệu của hệ thống

## UC012.5
### Tên UC
Xem danh sách tiến độ học tập các khoá học
### Sự kiện kích hoạt
Trên giao diện website, click vào "Danh sách tiến độ học tập"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách tiến độ học tập cá nhân" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách tiến độ học tập cá nhân" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu học viên chưa tham gia vào khoá học nào
### Hậu điều kiện
Tiến độ học tập của tất cả các khoá học đã tham gia được hiển thị lên danh sách

## UC012.6
### Tên UC
Đặt mục tiêu hoàn thành tiến độ học tập của một khoá học
### Sự kiện kích hoạt
Click vào "Đặt mục tiêu tiến độ" trên record của một khoá học trong "Danh sách tiến độ học tập cá nhân"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Đặt mục tiêu tiến độ học tập cá nhân" |
| 2 | Hệ thống | Hiển thị giao diện "Đặt mục tiêu tiến độ học tập cá nhân" |
| 3 | Tác nhân | Nhập thông tin, yêu cầu thêm mục tiêu |
| 4 | Hệ thống | Kiểm tra thông tin nhập liệu của tác nhân |
| 5 | Hệ thống | Thêm mục tiêu mới |
| 6 | Hệ thống | Thông báo "Đã đặt mục tiêu mới" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 5a | Hệ thống | Thông báo lỗi "Thông tin không hợp lệ" nếu thông tin do tác nhân cung cấp không thoả mãn điều kiện hợp lệ |
| 6a | Hệ thống | Thông báo lỗi "Không thể đặt mục tiêu mới" nếu hệ thống không thành công thêm mục tiêu mới |
### Hậu điều kiện
Mục tiêu tiến độ học tập mới được lưu vào dữ liệu hệ thống

## UC012.7
### Tên UC
Xem danh sách mục tiêu tiến độ học tập cá nhân
### Sự kiện kích hoạt
Trên giao diện "Danh sách tiến độ học tập", click vào "Danh sách mục tiêu"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách mục tiêu tiến độ học tập cá nhân" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách mục tiêu tiến độ học tập cá nhân" |
### Luồng sự kiện thay thế 
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu tác nhân chưa thiết đặt mục tiêu tiến độ học tập nào |
### Hậu điều kiện
Tất cả các mục tiêu tiến độ học tập của tác nhân được hiển thị lên danh sách

## UC012.8
### Tên UC
Xoá mục tiêu tiến độ học tập cá nhân
### Sự kiện kích hoạt
Click vào "Xoá mục tiêu" trên record của mục tiêu cần xoá trong "Danh sách mục tiêu tiến độ học tập cá nhân"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Yêu cầu xoá mục tiêu |
| 2 | Hệ thống | Hiển thị thông báo yêu cầu xác nhận xoá mục tiêu |
| 3 | Tác nhân | Xác nhận xoá mục tiêu |
| 4 | Hệ thống | Xoá mục tiêu |
| 5 | Hệ thống | Thông báo "Đã xoá mục tiêu" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 3a | Tác nhân | Xác nhận không xoá mục tiêu |
| 3a.1 | Hệ thống | Đóng thông báo yêu cầu xác nhận xoá mục tiêu |
| 5a | Hệ thống | Thông báo lỗi "Không thể xoá mục tiêu" nếu hệ thống không thành công xoá mục tiêu |
### Hậu điều kiện
Mục tiêu bị xoá bỏ khỏi danh sách mục tiêu tiến độ học tập cá nhân trong dữ liệu của hệ thống

## UC012.7
### Tên UC
Xem danh sách khoá học
### Sự kiện kích hoạt
Trên giao diện website, click vào "Danh sách khoá học cá nhân"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách khoá học của cá nhân" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách khoá học của cá nhân" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu tác nhân chưa tham gia vào khoá học nào |
### Hậu điều kiện
Tất cả các khoá học mà tác nhân tham gia được hiển thị lên danh sách

## UC012.7
### Tên UC
Xem thông tin chi tiết khoá học
### Sự kiện kích hoạt
Trên giao diện "Danh sách khoá học của cá nhân", click vào record của một khoá học bất kỳ
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem thông tin chi tiết khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin chi tiết khoá học" |
### Hậu điều kiện
Thông tin chi tiết của khoá học đã chọn được hiển thị lên giao diện

## UC012.8
### Tên UC
Xem danh sách học viên của khoá học
### Sự kiện kích hoạt
Click vào "Danh sách học viên" trong giao diện "Thông tin chi tiết khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách học viên của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách học viên của khoá học" |
### Luồng sự kiện thay thế
| 2a | Hệ thống | Hiển thị lỗi "Không thể tải danh sách" nếu hệ thống không thành công lấy dữ liệu về danh sách học viên của khoá học |
### Hậu điều kiện
Tất cả các học viên tham gia khoá học được hiển thị lên danh sách

## UC012.9
### Tên UC
Xem danh sách điểm của khoá học
### Sự kiện kích hoạt
Click vào "Danh sách điểm của học viên khoá học" trong giao diện "Thông tin chi tiết khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách điểm của học viên khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách điểm của học viên khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Thông báo lỗi "Không thể tải danh sách" nếu hệ thống không thành công lấy dữ liệu về danh sách điểm của học viên khoá học |
### Hậu điều kiện
Thông tin về điểm của tất cả các học viên tham gia khoá học được hiển thị lên danh sách

## UC012.10
### Tên UC
Xem danh sách tiến độ học tập của học viên của khoá học
### Sự kiện kích hoạt
Click vào "Danh sách tiến độ học tập của học viên khoá học" trong giao diện "Thông tin chi tiết khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách tiến độ học tập của học viên khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách tiến độ học tập của học viên khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Thông báo lỗi "Không thể tải danh sách" nếu hệ thống không thành công lấy dữ liệu về danh sách tiến độ học tập của học viên khoá học |
### Hậu điều kiện
Thông tin về tiến độ học tập của tất cả các học viên tham gia khoá học được hiển thị lên danh sách

## UC012.11
### Tên UC
Xem danh sách tin tức của khoá học
### Sự kiện kích hoạt
Click vào "Danh sách tin tức của khoá học" trong giao diện "Thông tin chi tiết khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách tin tức của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách tin tức của khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học chưa có tin tức nào |
### Hậu điều kiện
Tất cả tin tức của khoá học được hiển thị lên danh sách

## UC012.12
### Tên UC
Xem danh sách bài giảng của khoá học
### Sự kiện kích hoạt
Click vào "Danh sách bài giảng của khoá học" trong giao diện "Thông tin chi tiết khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem danh sách bài giảng của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Danh sách bài giảng của khoá học" |
### Luồng sự kiện thay thế
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 2a | Hệ thống | Hiển thị danh sách trống nếu khoá học chưa có bài giảng nào |
### Hậu điều kiện
Tất cả bài giảng của khoá học được hiển thị lên danh sách

## UC012.13
### Tên UC
Xem thông tin chi tiết bài giảng của khoá học
### Sự kiện kích hoạt
Click vào record của một bài giảng bất kỳ trong "Danh sách bài giảng của khoá học"
### Luồng sự kiện chính
| STT | Thực hiện bởi | Hành động |
|-|-|-|
| 1 | Tác nhân | Chọn chức năng "Xem thông tin chi tiết bài giảng của khoá học" |
| 2 | Hệ thống | Hiển thị giao diện "Thông tin chi tiết bài giảng của khoá học" |
### Hậu điều kiện
Thông tin chi tiết của bài giảng đã chọn được hiển thị lên giao diện hệ thống