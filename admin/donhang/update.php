<?php
function get_payment_method_name($pttt_code) {
    $payment_methods = [
        1 => 'Chuyển khoản',
        2 => 'Thanh toán khi nhận hàng',
        3 => 'Thẻ tín dụng'
    ];
    return isset($payment_methods[$pttt_code]) ? $payment_methods[$pttt_code] : 'Không xác định';
}

function get_order_status_name($status_code) {
    $status_labels = [
        0 => 'Đơn hàng mới',
        1 => 'Đang xử lý',
        2 => 'Đang giao hàng',
        3 => 'Đã giao hàng'
    ];
    return isset($status_labels[$status_code]) ? $status_labels[$status_code] : 'Không xác định';
}
?>

<!-- Start main wrapper -->
<main class="main-wrapper">
  <div class="main-content">
    <!-- start breadcrumb -->
    <div class="page-breadcrumb">
      <div class="breadcrumb-title" style="text-align: center">CHI TIẾT ĐƠN HÀNG</div>
    </div>
    <!-- end breadcrumb -->
    <div class="card">
      <div class="card-body">
        <h3>#1.Thông Tin Đơn Hàng</h3>
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
                  <th>Tổng cộng</th>
                  <th>Ngày Đặt Hàng</th>
                  <th>Trạng Thái</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($suabill): ?>
                  <tr>
                    <td><?= $suabill['id'] ?></td>
                    <td><?= $suabill['iduser'] ?></td>
                    <td><?= $suabill['hoten'] ?></td>
                    <td><?= $suabill['diachi'] ?></td>
                    <td><?= $suabill['sdt'] ?></td>
                    <td><?= $suabill['email'] ?></td>
                    <td><?= get_payment_method_name($suabill['pttt']) ?></td>
                    <td><?= number_format($suabill['total']) ?>đ</td>
                    <td><?= $suabill['ngaydathang'] ?></td>
                    <td><?= get_order_status_name($suabill['trangthai']) ?></td>
                  </tr>
                <?php else: ?>
                  <tr>
                    <td colspan="10">Không tìm thấy đơn hàng.</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="mb-4">
          <form method="post" action="">
            <select name="trangthai" class="tinh_trang">
              <option value="0" <?= $suabill['trangthai'] == 0 ? 'selected' : '' ?>>Đơn Hàng Mới</option>
              <option value="1" <?= $suabill['trangthai'] == 1 ? 'selected' : '' ?>>Đang xử lý</option>
              <option value="2" <?= $suabill['trangthai'] == 2 ? 'selected' : '' ?>>Đang giao hàng</option>
              <option value="3" <?= $suabill['trangthai'] == 3 ? 'selected' : '' ?>>Đã giao hàng</option>
            </select>
            <button type="submit" class="success">Xác nhận đơn hàng</button>
          </form><br>
          <a href="index.php?act=listdh" class="danger">Trở về</a>
        </div>
        <div class="product-table mt-4">
          <h3>#2. Thông tin sản phẩm</h3>
          <div class="table-responsive">
            <table class="table">
              <thead class="table-light">
                <tr>
                  <th>ID Sản Phẩm</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Hình Ảnh</th>
                  <th>Số Lượng</th>
                  <th>Giá</th>
                  <th>Thành Tiền</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $grandTotal = 0; 
                  $bill_details = load_bill_detail_by_id($suabill['id']); 
                  if ($bill_details): 
                    foreach ($bill_details as $detail): 
                      $detail['thanhtien'] = $detail['price'] * $detail['soluong'];
                      $grandTotal += $detail['thanhtien'];
                ?>
                  <tr>
                    <td><?= $detail['idpro'] ?></td>
                    <td><?= $detail['name'] ?></td>
                    <td>
                      <img src="../view/images/<?= $detail['img'] ?>" alt="<?= $detail['name'] ?>" style="width: 50px; height: 50px;">
                    </td>
                    <td><?= $detail['soluong'] ?></td>
                    <td><?= number_format($detail['price']) ?>đ</td>
                    <td><?= number_format($detail['thanhtien']) ?>đ</td>
                  </tr>
                <?php 
                    endforeach; 
                ?>
                  <tr>
                    <td colspan="5" class="text-right"><strong>Tổng cộng:</strong></td>
                    <td><strong><?= number_format($grandTotal, 0, ',', '.') ?> đ</strong></td>
                  </tr>
                <?php else: ?>
                  <tr>
                    <td colspan="6">Không tìm thấy chi tiết sản phẩm cho đơn hàng này.</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
