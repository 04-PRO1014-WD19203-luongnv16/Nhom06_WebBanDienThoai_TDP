<?php


if (!isset($_SESSION['user']) || !isset($_SESSION['bill'])) {
    header('Location: index.php');
    exit();
}

$iduser = $_SESSION['user']['id'];
$tt = $_SESSION['bill'];
$orderID = strtoupper(uniqid());

$lastBill = load_bill_by_user($iduser)[0] ?? [];
$billDetails = load_bill_detail_by_id($lastBill['id'] ?? 0);

// Các phương thức thanh toán
$paymentMethods = [
    1 => 'Thanh toán khi nhận hàng',
    2 => 'Chuyển khoản ngân hàng',
    3 => 'Thanh toán qua thẻ tín dụng'
];

// Phương thức thanh toán
$pttt = $paymentMethods[$tt['pttt']] ?? 'Không xác định';

// Các trạng thái đơn hàng
$statusLabels = [
    0 => 'Đơn hàng mới',
    1 => 'Đang xử lý',
    2 => 'Đang giao hàng',
    3 => 'Đã giao hàng'
];

// Trạng thái đơn hàng
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
        <h2 style="color:black">Thanh Toán Thành Công</h2>
        <p style="color:black">Cảm ơn bạn đã mua hàng!</p>
        <p style="color:black">Mã đơn hàng của bạn là: <strong><?= htmlspecialchars($lastBill['id']) ?></strong></p>
        <p style="color:black">Ngày đặt hàng: <?= htmlspecialchars($lastBill['ngaydathang']) ?></p>
        <h3 style="color:black">Thông tin khách hàng:</h3>
        <p style="color:black">Họ và tên: <?= htmlspecialchars($lastBill['hoten']) ?></p>
        <p style="color:black">Email: <?= htmlspecialchars($lastBill['email']) ?></p>
        <p style="color:black">Số điện thoại: <?= htmlspecialchars($lastBill['sdt']) ?></p>
        <p style="color:black">Địa Chỉ: <?= htmlspecialchars($lastBill['diachi']) ?></p>
        <p style="color:black">Trạng Thái: <?= htmlspecialchars($status) ?></p>
        <p style="color:black">Phương thức thanh toán: <?= htmlspecialchars($pttt) ?></p>

        <h3 style="color:black">Chi tiết đơn hàng:</h3>
        <table style="color:black; width: 100%; border-collapse: collapse;">
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
            </tr>
            <?php
            $grandTotal = 0;
            foreach ($billDetails as $detail) {
                $price = is_numeric($detail['price']) ? $detail['price'] : 0;
                $soluong = is_numeric($detail['soluong']) ? $detail['soluong'] : 0;
                $thanhtien = $price * $soluong;
                $grandTotal += $thanhtien;
                echo "<tr>
                    <td><img src='view/images/" . htmlspecialchars($detail['img']) . "' width='100' alt='" . htmlspecialchars($detail['name']) . "'></td>
                    <td>" . htmlspecialchars($detail['name']) . "</td>
                    <td>" . number_format($price, 0, ',', '.') . " đ</td>
                    <td>" . htmlspecialchars($soluong) . "</td>
                    <td>" . number_format($thanhtien, 0, ',', '.') . " đ</td>
                </tr>";
            }
            ?>
            <tr>
                <td colspan="4" style="text-align: right;"><strong>Tổng cộng:</strong></td>
                <td><strong><?= number_format($grandTotal, 0, ',', '.') ?> đ</strong></td>
            </tr>
        </table>
    </div>
</body>
</html>
