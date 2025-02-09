<p align="center">
    <img src="https://gp247.net/logo.png" width="150">
</p>
<p align="center">Mã nguồn CMS miễn phí được xây dựng bằng Laravel cho hệ thống website của bạn<br>
    <code><b>composer create-project gp247/cms</b></code></p>


<p align="center">
<a href="https://packagist.org/packages/gp247/cms"><img src="https://poser.pugx.org/gp247/cms/d/total.svg" alt="Tổng số lượt tải"></a>
<a href="https://packagist.org/packages/gp247/cms"><img src="https://poser.pugx.org/gp247/cms/v/stable.svg" alt="Phiên bản ổn định mới nhất"></a>
<a href="https://packagist.org/packages/gp247/cms"><img src="https://poser.pugx.org/gp247/cms/license.svg" alt="Giấy phép"></a>
</p>

## Giới thiệu về GP247 CMS
- GP247 CMS giúp bạn dễ dàng xây dựng website cho doanh nghiệp của mình.
- GP247 CMS là một hệ thống hoàn chỉnh, kết hợp `GP247/front` và `GP247/core`.

**GP247 có thể làm gì?**

- Cung cấp giải pháp quản lý phân quyền mạnh mẽ và linh hoạt.
- Cung cấp API xác thực đồng bộ, tăng cường bảo mật API với các lớp bổ sung.
- Xây dựng và quản lý các Plugin/Template hoạt động trong hệ thống
- Hệ thống giám sát nhật ký truy cập toàn diện.
- Cập nhật liên tục các lỗ hổng bảo mật.
- Hỗ trợ đa ngôn ngữ, dễ dàng quản lý.
- GP247 là MIỄN PHÍ

**Và nhiều hơn nữa:**

- GP247 xây dựng một hệ sinh thái mở (plugin, template), giúp người dùng nhanh chóng xây dựng CMS, PMO, thương mại điện tử, v.v., theo nhu cầu của bạn.

<p align="center">
    <img src="https://static.gp247.net/page/gp247-screen.jpg" width="100%">
</p>

## Core Laravel:

GP247 1.x

> Core Laravel framework 11.x 


## Cấu trúc website sử dụng GP247

    Website-folder/
    |
    ├── app
    │     └── GP247
    │           ├── Core(+) //Tùy chỉnh controller của Core
    │           ├── Helpers(+) //Tự động tải Helpers/*.php
    │           ├── Plugins(+) //Sử dụng `php artisan gp247:make-plugin --name=TenPlugin`
    │           ├── Front(+) //Tùy chỉnh controller của Front 
    │           └── Templates(+) //Sử dụng `php artisan gp247:make-template --name=TenTemplate`
    ├── public
    │     └── GP247
    │           ├── Core(+)
    │           ├── Plugins(+)
    │           └── Templates(+)
    ├── resources
    │            └── views/vendor
    │                           |── gp247-core(+) //Tùy chỉnh view core
    │                           └── gp247-front(+) //Tùy chỉnh view front
    ├── vendor
    │     ├── gp247/core
    │     └── gp247/front
    ├── .env
    │     └── GP247_ACTIVE=1 //BẬT|TẮT gp247
    └──...



## Hướng dẫn cài đặt nhanh
- **Bước 1**: 

  Thực hiện lệnh: 
  >`composer create-project gp247/cms website-folder`

- **Bước 2**: Kiểm tra cấu hình trong file .env

  Đảm bảo thông tin cấu hình database và APP_KEY trong file .env đã đầy đủ.

  Nếu APP_KEY chưa được thiết lập, sử dụng lệnh sau để tạo: 
  >`php artisan key:generate`

- **Bước 3**: Cấu hình database
  
Mặc định, GP247 sử dụng mysql. Cấu hình sẽ được lưu trong file .env như sau:
```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=gp247
  DB_USERNAME=root
  DB_PASSWORD=
```

  Nếu bạn muốn sử dụng sqlite để kiểm tra nhanh, vui lòng thay đổi connection trong file .env thành sqlite, và comment các dòng DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD.
  
```
    DB_CONNECTION=sqlite
    #DB_HOST=127.0.0.1
    #DB_PORT=3306
    #DB_DATABASE=gp247
    #DB_USERNAME=root
    #DB_PASSWORD=
```

- **Bước 4**: Cài đặt gp247

  Chạy lệnh: 
  >`php artisan gp247:install`

Lưu ý: Khi chạy lệnh `php artisan gp247:install` sẽ tự động gọi `php artisan gp247:front-install`.

## Thông tin hữu ích:

**Xem phiên bản GP247**

>`php artisan gp247:info`

**Cập nhật gp247**

Cập nhật package bằng lệnh: 
>`composer update gp247/core`
>`composer update gp247/front`

Sau đó chạy lệnh: 

>`php artisan gp247:update`

**Tạo plugin:**

>`php artisan gp247:make-plugin  --name=TenPlugin`

Để tạo file zip plugin:

>`php artisan gp247:make-plugin  --name=TenPlugin --download=1`

**Tạo template:**

>`php artisan gp247:make-template  --name=TenTemplate`

Để tạo file zip template:

>`php artisan gp247:make-template  --name=TenTemplate --download=1`

## Tùy chỉnh

**Tùy chỉnh gp247-config và functions**

>`php artisan gp247:customize config`

**Tùy chỉnh view admin**

>`php artisan gp247:customize view`

**Ghi đè các hàm helper gp247_***

>Bước 1: Sử dụng lệnh `php artisan gp247:customize config` để copy file `app/config/gp247_functions_except.php`

>Bước 2: Thêm danh sách các hàm muốn ghi đè vào `gp247_functions_except.php`

>Bước 3: Tạo hàm mới trong thư mục `app/GP247/Helpers`

**Ghi đè các file controller của gp247**

>Bước 1: Copy các file controller muốn ghi đè trong vendor/gp247/core/src/Core/Controllers -> app/GP247/Core/Admin/Controllers

>Bước 2: Đổi `namespace GP247\Core\Admin\Controllers` thành `namespace App\GP247\Core\Admin\Controllers`

**Ghi đè các file controller API của gp247**

>Bước 1: Copy các file controller muốn ghi đè trong vendor/gp247/core/src/Api/Controllers -> app/GP247/Core/Api/Controllers

>Bước 2: Đổi `namespace GP247\Core\Api\Controllers` thành `namespace App\GP247\Core\Api\Controllers`

## Thêm route

Sử dụng các hằng số prefix và middleware `GP247_ADMIN_PREFIX`, `GP247_ADMIN_MIDDLEWARE` trong khai báo route.

Tham khảo: https://github.com/gp247net/core/blob/master/src/Admin/routes.php



## Các biến môi trường trong file .env

**Nhanh chóng tắt GP247 và plugins**
> `GP247_ACTIVE=1` // Để tắt, đặt giá trị 0

**Tắt APIs**
> `GP247_API_MODE=1` // Để tắt, đặt giá trị 0

**Tiền tố bảng dữ liệu**
> `GP247_DB_PREFIX=gp247_` //Không thể thay đổi sau khi đã cài đặt gp247

**Tiền tố đường dẫn đến admin**
> `GP247_ADMIN_PREFIX=gp247_admin` 