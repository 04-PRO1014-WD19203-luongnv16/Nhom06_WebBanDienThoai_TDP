<?php

if (!isset($_SESSION['user'])) {
    header('Location: index.php?act=dangnhap');
    exit();
}

$tongTien = load_cart_total($_SESSION['user']['id']);
$total = isset($tongTien['total']) ? $tongTien['total'] : 0;

function formatCurrency($amount) {
    return number_format($amount, 0, '.') . " ₫";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="trangsp/sp.css"> 
    <link rel="stylesheet" href="trangsp/cart.css">
    
</head>
<body>
    <div class="container">
        <h2>Giỏ hàng của bạn</h2>
        <table class="cart-table">
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
                <th>Hành động</th>
            </tr>
            <?php
     if ($tongTien && isset($tongTien['total'])) {
    foreach ($gioHang as $sp) {
        $price = is_numeric($sp['price']) ? $sp['price'] : 0;
        $soluong = is_numeric($sp['soluong']) ? $sp['soluong'] : 0;
        $total = $price * $soluong;
        echo "<tr>
            <td><img src='view/images/{$sp['img']}' width='100' alt='{$sp['name']}'></td>
            <td>{$sp['name']}</td>
            <td class='cart-price'>" . formatCurrency($price) . "</td>
            <td>$soluong</td>
            <td class='cart-total'>" . formatCurrency($total) . "</td>
            <td><a href='index.php?act=removefromcart&id={$sp['id']}'>Xóa</a></td>
        </tr>";
    }
    echo "<tr>
        <td colspan='4'><strong>Tổng giỏ hàng:</strong></td>
        <td class='cart-total'>" . formatCurrency($tongTien['total']) . "</td>
        <td></td>
    </tr>";
    echo "<tr>
        <td colspan='6' class='text-right'>
            <a href='index.php?act=bill&total=" . $tongTien['total'] .   "' class='button-color'>Xác nhận</a>
        </td>
    </tr>";
} else {
    echo "<tr><td colspan='6'>Giỏ hàng của bạn trống.</td></tr>";
}
?>
        </table>
    </div>
</body>
</html>
