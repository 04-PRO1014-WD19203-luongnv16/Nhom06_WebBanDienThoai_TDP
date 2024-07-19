<?php
if (!isset($_SESSION['user'])) {
    header('Location: index.php?act=dangnhap');
    exit();
}

$total = isset($_GET['total']) ? $_GET['total'] : 0;
?>
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
                <input type="text" id="email" name="email" required>


            <label for="total">Tổng đơn hàng:</label>
            <input type="text" id="total" name="total" value="<?= $total ?>đ" readonly>

            <label for="ngaydathang">Ngày Đặt Hàng:</label>
            <input type="date" id="ngaydathang" name="ngaydathang" value="<?= date('Y-m-d') ?>" required>

            <label for="pttt1">Phương thức thanh toán:</label>
            <table>
                <tr>
                    <td><input type="radio" id ="pttt1" name="pttt" value="1" required> Thanh toán trực tiếp</td>
                </tr>
                <tr>
                    <td><input type="radio" id ="pttt2" name="pttt" value="2" required> Chuyển khoản</td>
                </tr>
                <tr>
                    <td><input type="radio" id ="pttt3" name="pttt" value="3" required> Thanh toán online</td>
                </tr>
            </table>

            <button type="submit" name="xacnhan" class="button-color">Xác nhận thông tin</button>
        </form>
    </div>
</body>
</html>
