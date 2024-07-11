<div class="header_container">
        <div class="header_menu1">
            <ul>
                <li><a href="index.php?act=view/home"><h4>Trang Chủ</h4></a></li>
                <li><a href=""><h4>Giới Thiệu</h4></a></li>
                <li><a href=""><h4>Chi Nhánh</h4></a>
                </li>
            </ul>
        </div>
        <div class="header_logo">
            <a href="#"><img class="logo_header" src="img/logo slider.png"></a>
        </div>
        <div class="header_menu2">
            <ul>
                <li><a href=""><h4>Liên Hệ</h4></a></li>
                <li><a href=""><h4>Tuyển Dụng</h4></a></li>
                <li><a href="index.php?act=dangky"><h4>Đăng Ký</h4></a></li>
            </ul>
        </div>
    </div>

<br>
<br>

<div class="row">
            <div class="boxtitle">Tài Khoản</div>
            <div class="boxcontent formdangnhap">
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    ?>
                    <div class="row">
                    <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                        </li>
                        <?php if ($role == 1){?>
                        <li>
                            <a href="admin/index.php">Đăng nhập admin</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="index.php?act=thoat">Thoát</a>
                        </li>
                    </div>
                    <?php
                } else {
                    ?>
                    <form action="index.php?act=dangnhap" method="post" class = "dangnhap">
                        <div class="row">
                            <label for="username" class = "ten">Tên Đăng Nhập</label><Br>
                            <input type="text" id="username" name="username"><Br>
                        </div>
                        <div class="row">
                            <label for="password" class ="mk">Mật Khẩu</label><Br>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="row">
                            <input type="checkbox" id="remember" name="remember">
                            Ghi Nhớ Tài Khoản
                        </div>
                        <div class="row">
                            <input type="submit" value="Đăng Nhập" name="dangnhap">
                            <li>
                                <a href="">Quên Mật Khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=dangky">Đăng Ký Thành Viên</a>
                            </li>
                        </div>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>  
