<?php
if (isset($_POST['dangky'])) {
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['tel'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $tel = $_POST['tel'];
        $hoten = $_POST['hoten'];
        if (empty($username) || empty($password) || empty($email) || empty($tel)|| empty($hoten)) {
            $thongbao = "Vui lòng điền đầy đủ thông tin";
        } else if (strlen($password) < 8) {
            $thongbao = "Mật khẩu phải ít nhất 8 ký tự";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $thongbao = "Email không hợp lệ";
        } else {
            insert_taikhoan($username, $password, $email, $tel,$hoten);
            $thongbao = "Đăng ký thành công!";
        }
    } else {
        $thongbao = "Vui lòng điền đầy đủ thông tin đăng ký";
    }
}
?>

<div class="auth-wrapper">
    <div class="auth-container">
        <div class="auth-action-left">
            <div class="auth-form-outer">
                <h2 class="auth-form-title">Đăng Ký Tài Khoản</h2>
                <form class="login-form" onsubmit="return validateForm()" action="index.php?act=dangky" method="post">
                    <input type="text" class="auth-form-input" placeholder="Tên Tài Khoản" name="username">
                    <input type="password" class="auth-form-input" placeholder="Mật Khẩu" name="password">
                    <div class="input-icon">
                        <input type="email" class="auth-form-input" placeholder="Email" name="email">
                    </div>
                    <input type="tel" class="auth-form-input" placeholder="Số Điện Thoại" name="tel" id="tel">
                    <input type="text"class="auth-form-input" placeholder="Họ và Tên" name ="hoten" id = "hoten" >
                    <div class="footer-action">
                        <input type="submit" value="Đăng Ký" class="auth-submit" name="dangky">
                        <a href="index.php?act=dangnhap" class="auth-btn-direct">Đăng Nhập</a>
                    </div>
                </form>
                <?php
                if (isset($thongbao) && !empty($thongbao)) {
                    echo "<span>" . $thongbao . "</span>";
                }
                ?>
            </div>
        </div>
        <div class="auth-action-right">
            <div class="auth-image">
                <img src="taikhoan/assets/vector.jpg" alt="login">
            </div>
        </div>
    </div>
</div>

<script src="taikhoan/js/common.js"></script>
