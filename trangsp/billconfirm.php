<?php


$iduser = $_SESSION['user']['id'];
$cartItems = load_cart_by_user($iduser);


$customer = $_SESSION['user'];

$orderID = strtoupper(uniqid());
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
        <h2 style = "color:black">Xác nhận đơn hàng</h2>
        <p style = "color:black">Cảm ơn bạn đã mua hàng!</p>
        <p style = "color:black">Mã đơn hàng của bạn là: <strong><?= $orderID ?></strong></p>
        <h3 style = "color:black">Thông tin khách hàng:</h3>
        <p style = "color:black">Họ và tên: <?= $customer['hoten'] ?></p>
        <p style = "color:black">Email: <?= $customer['email'] ?></p>
        <p style = "color:black">Số điện thoại: <?= $customer['tel'] ?></p>

        <h3 style = "color:black">Chi tiết đơn hàng:</h3>
        <table style = "color:black">
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
                    <td>{$price} ₫</td>
                    <td>{$soluong}</td>
                    <td>{$total} ₫</td>
                </tr>";
            }
            ?>
            <tr>
                <td colspan="4" class="text-right"><strong>Tổng cộng:</strong></td>
                <td><strong><?= $grandTotal ?> ₫</strong></td>
            </tr>
        </table>
    </div>
</body>
</html>
