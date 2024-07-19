<?php
if (isset($_SESSION['user'])) 
    extract($_SESSION['user']);
?>
<form action="index.php?act=dangnhap" method="post">
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">Đăng Nhập</h2>
                    <div class="auth-external-container">
                        <div class="auth-external-list">
                            <span>chưa có tài khoản? bấm vào đăng ký</span>
                        </div>
                    </div>
                    <div class="login-form">
                        <input type="text" class="auth-form-input" placeholder="Tên Đăng Nhập" name="username" required>
                        <div class="input-icon">
                            <input type="password" class="auth-form-input" placeholder="Mật Khẩu" name="password" required>
                            <i class="fa fa-eye show-password"></i>
                        </div>
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i> 
                            <span> Ghi nhớ tài khoản.</span>
                        </label>
                        <div class="footer-action">
                            <input type="submit" value="Đăng Nhập" class="auth-submit" name ="dangnhap">
                            <a href="index.php?act=dangky" class="auth-btn-direct">Đăng Ký</a>
                        </div>
                    </div>
                    <div class="auth-forgot-password">
                        <a href="#">Quên Mật Khẩu</a>
                    </div>
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
    
</form>
