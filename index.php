<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "view/header.php";
include "model/taikhoan.php";



if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'spct':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                $iddm = $onesp['iddm'];
                $spkhac = load_sanpham_cungloai($id, $iddm);
                include "view/spct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['keyword']) && $_POST['keyword'] != "") {
                $keyword = $_POST['keyword'];
            } else {
                $keyword = "";
            }

            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
                $dssp = loadall_sanpham($iddm);
                include "view/sanpham.php";
            } else {
                include "view/home.php";
            }
            break;

        case 'home':
            include "view/home.php";
            break;

        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                insert_taikhoan($username, $password, $email);
                $thongbao = "Đăng ký thành công";
            }
            include "taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                    exit();
                } else {
                    $thongbao = "Tài khoản không tồn tại, vui lòng kiểm tra lại hoặc đăng ký";
                }
            }
            include "taikhoan/dangky.php";
            break;

            
        case 'thoat':
            session_unset();
            header('location: index.php');
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>
