<?php

if (!isset($_SESSION['user']) || !isset($_SESSION['bill'])) {
    header('Location: index.php');
    exit();
}

$iduser = $_SESSION['user']['id'];
$cartItems = load_cart_by_user($iduser);
$tt = $_SESSION['bill'];
$orderID = strtoupper(uniqid());

$paymentMethods = [
    1 => 'Thanh toán khi nhận hàng',
    2 => 'Chuyển khoản ngân hàng',
    3 => 'Thanh toán qua thẻ tín dụng'
];

$pttt = $paymentMethods[$tt['pttt']] ?? 'Không xác định';

$statusLabels = [
    0 => 'Đơn hàng mới',
    1 => 'Đang xử lý',
    2 => 'Đang giao hàng',
    3 => 'Đã giao hàng'
];

$status = $statusLabels[$tt['trangthai']] ?? 'Không xác định';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận đơn hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="trangsp/sp.css"> 
</head>
<body>
    <div class="container">
        <h2 style="color:black">Xác nhận đơn hàng</h2>
        <p style="color:black">Cảm ơn bạn đã mua hàng!</p>
        <p style="color:black">Mã đơn hàng của bạn là: <strong><?= $orderID ?></strong></p>
        <h3 style="color:black">Thông tin khách hàng:</h3>
        <p style="color:black">Họ và tên: <?= $tt['hoten'] ?></p>
        <p style="color:black">Email: <?= $tt['email'] ?></p>
        <p style="color:black">Số điện thoại: <?= $tt['sdt'] ?></p>
        <p style="color:black">Địa Chỉ: <?= $tt['diachi'] ?></p>
        <p style="color:black">Trạng Thái: <?= $status ?></p>
        <p style="color:black">Phương thức thanh toán: <?= $pttt ?></p>

        <h3 style="color:black">Chi tiết đơn hàng:</h3>
        <table style="color:black">
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
            </tr>
            <?php
            $grandTotal = 0;
            foreach ($cartItems as $item) {
                $price = is_numeric($item['price']) ? $item['price'] : 0;
                $soluong = is_numeric($item['soluong']) ? $item['soluong'] : 0;
                $total = $price * $soluong;
                $grandTotal += $total;

                echo "<tr>
                    <td><img src='view/images/{$item['img']}' width='100' alt='{$item['name']}'></td>
                    <td>{$item['name']}</td>
                    <td>" . number_format($price) . " ₫</td>
                    <td>{$soluong}</td>
                    <td>" . number_format($total) . " ₫</td>
                </tr>";
            }
            ?>
            <tr>
                <td colspan="4" class="text-right"><strong>Tổng cộng:</strong></td>
                <td><strong><?= number_format($grandTotal) ?> ₫</strong></td>
            </tr>
        </table>
    </div>
</body>
</html>
