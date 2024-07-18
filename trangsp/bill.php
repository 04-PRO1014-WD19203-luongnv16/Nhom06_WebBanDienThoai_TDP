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
            <label for="name">Họ và tên:</label>
            <input type="text" id="hoten" name="hoten" required>

            <label for="address">Địa chỉ:</label>
            <input type="text" id="diachi" name="diachi" required>

            <label for="phone">Số điện thoại:</label>
            <input type="text" id="sdt" name="sdt" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="email">Phương thức thanh toán:</label>
            <table>
                <?php 
                $payment_methods = [
                    1 => 'Thanh toán trực tiếp',
                    2 => 'Chuyển khoản',
                    3 => 'Thanh toán online'
                ];
                ?>
                <?php foreach ($payment_methods as $key => $method): ?>
                <tr>
                    <td><input type="radio" name="pttt" value="<?= $key ?>"><?= $method ?></td>
                </tr>
                <?php endforeach; ?>
            </table>

            <label for="date">Ngày Đặt Hàng:</label>
            <input type="date" id="ngaydathang" name="ngaydathang" value="<?= date('Y-m-d') ?>" required>

            <button type="submit" class="button-color">Xác nhận thông tin</button>
        </form>
    </div>
</body>
</html>
