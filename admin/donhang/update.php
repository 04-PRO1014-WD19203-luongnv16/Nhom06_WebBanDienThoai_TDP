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
                  <th>Trạng Thái</th>
                  <th>Chức Năng</th>
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
                    <td><?= $suabill['trangthai'] == 0 ? 'Chưa xử lý' : ($suabill['trangthai'] == 1 ? 'Đã xử lý' : ($suabill['trangthai'] == 2 ? 'Đã giao' : 'Hủy đơn')) ?></td>
                    <td>
                      <a href='index.php?act=updatedh&id=<?= $suabill['id'] ?>' class='sua'>
                        <i class='bi bi-pencil-square'></i>
                      </a>
                    </td>
                  </tr>
                <?php else: ?>
                  <tr>
                    <td colspan="11">Không tìm thấy đơn hàng.</td>
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
          <a href="index.php?act=list" class="danger">Trở về</a>
        </div>
      </div>
    </div>
  </div>
</main>
