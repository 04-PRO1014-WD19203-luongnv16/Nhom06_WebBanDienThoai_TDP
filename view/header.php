<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Brew House</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box_container">
        <div class="header_container">
            <div class="header_menu">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                    <li><a href="">Tuyển Dụng</a>
                    </li>
                </ul>
            </div>
            <div class="header_logo">
                <img class="logo_header" src="img/logo slider.png" alt="">
            </div>
            <div class="header_menu">
                <ul>
                    <li><a href="">Liên Hệ</a></li>
                    <li><a href="">Chi Nhánh</a></li>
                    <li><a href="">Đăng Kí</a></li>
                </ul>
            </div>
        </div>

        <div class="main_container">
            <!-- Danh mục Slideshow Tài khoản -->
            <div class="main_danhmuc_slideshow_taikhoan">

                <!-- Danh mục -->
                <div class="main_danhmuc">
                    <div class="boxtitle">Danh Mục</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li>
                                <a href="#">Iphone</a>
                            </li>
                            <li>
                                <a href="#">Sam Sung</a>
                            </li>
                            <li>
                                <a href="#">OPPO</a>
                            </li>
                            <li>
                                <a href="#">XIAOMI</a>
                            </li>  
                            <li>
                                <a href="#">VIVO</a>
                            </li>
                            <li>
                                <a href="#">ASUS</a>
                            </li> 
                        </ul>
                    </div>
                </div>

                <!-- Slideshow -->
                <div class="main_slideshow">
                    <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/slideshow1.webp" style=" height:280px; border-radius: 20px;"> <!-- Thay đổi chiều cao tại đây -->
        
      </div>
      
  
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/slideshow2.webp" style=" height:280px; border-radius: 20px;"> <!-- Thay đổi chiều cao tại đây -->
        
      </div>
      
  
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/slideshow3.webp" style=" height:280px; border-radius: 20px;"> <!-- Thay đổi chiều cao tại đây -->
        
      </div>
      
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
                </div>
                
                <!-- Tài khoản -->
                <div class="main_taikhoan">
                    <div class="boxtitle">Tài Khoản</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post">
                            Tên Đăng Nhập<br>
                            <input type="text" name="user"><br>
                            Mật Khẩu<br>
                            <input type="password" name="pass"><br>
                            <input type="checkbox"> Ghi nhớ tài khoản?<br>
                            <input type="submit" value="ĐĂNG NHẬP">
                        </form>
                        <ul class="formtaikhoan">
                            <li>
                                <a href="#">Quên Mật Khẩu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="gioithieu">
                <img class="anh_gioithieu" src="img/anhgioithieu.png" alt="">
            </div>