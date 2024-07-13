        <?php
        session_start();

        include "model/pdo.php";
        include "model/danhmuc.php";
        include "model/sanpham.php";
        include "view/header.php";
        include "model/taikhoan.php";
        
        $listdm = loadall_danhmuc();
        $spnew = loadAll_sanpham();


        if (isset($_GET['act']) && $_GET['act'] != "") {
            $act = $_GET['act'];
            switch ($act) {
                case 'spct':
                    if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                        $id = $_GET['idsp'];
                        $onesp = loadone_sanpham($id);
                        if ($onesp) {
                            $iddm = $onesp['iddm'];
                            include "trangsp/spct.php";
                        } 
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
                        } else {
                            $dssp = loadall_sanpham();
                        }
                        
                        include "trangsp/sanpham.php";
                        break;
                        
                    case 'dmsp':
                    if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                        $iddm = $_GET['iddm'];
                    $dssp = loadAll_sanpham($iddm);
                    include "trangsp/dmsp.php";

                    } else {
                        include "view/home";
                            }
                    break;

                        
                        

                case 'home':
                    include "view/home.php";
                    break;

                    case 'dangky':
                        if (isset($_POST['dangky'])) {
                            $username = isset($_POST['username']) ? $_POST['username'] : '';
                            $password = isset($_POST['password']) ? $_POST['password'] : '';
                            $email = isset($_POST['email']) ? $_POST['email'] : '';
                            $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
                    
                            if (empty($username) || empty($password) || empty($email) || empty($tel)) {
                                $thongbao = "Vui lòng điền đầy đủ thông tin";
                            } elseif (strlen($password) < 8) {
                                $thongbao = "Mật khẩu phải ít nhất 8 ký tự";
                            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $thongbao = "Email không hợp lệ";
                            } else {
                                $thongbao = "Đăng ký thành công";
                            }
                        }
                        include "taikhoan/dangky.php";
                        break;
                    

                    case 'dangnhap':
                        if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                            if (isset($_POST['username']) && isset($_POST['password'])) {
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                $checkuser = checkuser($username, $password); 
                                if (is_array($checkuser)) {
                                    $_SESSION['user'] = $checkuser;
                                    header('Location: index.php');
                                    exit();
                                } else {
                                    $thongbao = "Tài khoản không tồn tại, vui lòng kiểm tra lại hoặc đăng ký";
                                }
                            } else {
                                $thongbao = "Vui lòng điền đầy đủ thông tin đăng nhập";
                            }
                        }
                        include "taikhoan/dangnhap.php";
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
