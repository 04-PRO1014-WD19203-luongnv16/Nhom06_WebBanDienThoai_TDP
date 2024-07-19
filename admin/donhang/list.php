<?php


function get_payment_method_name($pttt_code) {
    $payment_methods = [
        1 => 'Chuyển khoản',
        2 => 'Thanh toán khi nhận hàng',
        3 => 'Thẻ tín dụng'
    ];
    return isset($payment_methods[$pttt_code]) ? $payment_methods[$pttt_code] : 'Không xác định';
}
?>
    <main class="main-wrapper">
        <div class="main-content">
            <div class="page-breadcrumb">
                <div class="breadcrumb-title" style="text-align: center">DANH SÁCH ĐƠN HÀNG</div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="product-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID Đơn Hàng</th>
                                        <th>ID User</th>
                                        <th>Tên Người Nhận</th>
                                        <th>Địa Chỉ</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Email</th>
                                        <th>Phương Thức Thanh Toán</th>
                                        <th>Total</th>
                                        <th>Ngày Đặt Hàng</th>
                                        <th>Chức Năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($orders as $order) {
                                        $pttt_name = get_payment_method_name($order['pttt']);
                                        echo "<tr>
                                            <td>{$order['id']}</td>
                                            <td>{$order['iduser']}</td>
                                            <td>{$order['hoten']}</td>
                                            <td>{$order['diachi']}</td>
                                            <td>{$order['sdt']}</td>
                                            <td>{$order['email']}</td>
                                            <td>{$pttt_name}</td>
                                            <td>" . number_format($order['total']) . "đ</td>
                                            <td>{$order['ngaydathang']}</td>
                                            <td>
                                                <a href='index.php?act=updatedh&id={$order['id']}' class='sua'>
                                                    <i class='bi bi-pencil-square'></i>
                                                </a>
                                            </td>
                                        </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
