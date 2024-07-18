<?php

if (!isset($_SESSION['user'])) {
    header('Location: index.php?act=dangnhap');
    exit();
}

$total = isset($_GET['total']) ? $_GET['total'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="stylesheet" href="trangsp/sp.css"> 
    <link rel="stylesheet" href="trangsp/bill.css">

</head>
<body>
    <div class="container">
        <h2>Thông tin đặt hàng</h2>
        <form action="index.php?act=bill" method="post">
            <label for="hoten">Họ và tên:</label>
            <input type="text" id="hoten" name="hoten" required>

            <label for="diachi">Địa chỉ:</label>
            <input type="text" id="diachi" name="diachi" required>

            <label for="sdt">Số điện thoại:</label>
            <input type="text" id="sdt" name="sdt" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="total">Tổng đơn hàng</label>
            <input type="text" id="total" name="total" value="<?= $total ?>đ" readonly>

            <label for="ngaydathang">Ngày Đặt Hàng:</label>
            <input type="date" id="ngaydathang" name="ngaydathang" value="<?= date('Y-m-d') ?>" required>

            <label for="pttt">Phương thức thanh toán:</label>
            <table>
                <?php 
                $payment_methods = [
                    1 => 'Thanh toán trực tiếp',
                    2 => 'Chuyển khoản',
                    3 => 'Thanh toán online'
                ];
                foreach ($payment_methods as $key => $method): ?>
                <tr>
                    <td><input type="radio" id ="pttt" name="pttt" value="<?= $key ?>" required><?= $method ?></td>
                </tr>
                <?php endforeach; ?>
            </table>

            <button type="submit" name="xacnhan" class="button-color">Xác nhận thông tin</button>
        </form>
    </div>
</body>
</html>
