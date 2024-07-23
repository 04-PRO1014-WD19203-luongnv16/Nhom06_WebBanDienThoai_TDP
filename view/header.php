<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhóm 6 - TDP</title>
    <link rel="stylesheet" href="view/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="taikhoan/css/style.css">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />    
</head>
<body>
    <div class="container bg-color">

        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=view/home">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?act=sanpham">Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=giohang">Giỏ Hàng</a>
                    </li>

                    <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    ?>
                   <div class="nav-link">
                  <span style="color: red;">Xin chào </span> <span style="color: red;"><?=$username?></span>
               </div>

                    <?php if ($role == 1){?>
                        <li>
                            <a href="admin/index.php">Đăng nhập admin</a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?act=billconfirm">Đơn Hàng</a>
                    </li>
                        <li>
                            <a href="index.php?act=thoat" class ="nav-link" style="color: red;">Thoát</a>
                        </li>
                    </div>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?act=dangnhap">Đăng Nhập</a>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </nav>
    </div>