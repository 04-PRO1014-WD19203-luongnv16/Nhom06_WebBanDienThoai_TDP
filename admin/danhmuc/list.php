    <!-- Start main wrapper -->
    <main class="main-wrapper">
      <div class="main-content">
        <!-- start breadcrumb -->
        <div class="page-breadcrumb">
          <div class="breadcrumb-title">Danh sách loại sản phẩm</div>
        </div>
        <!-- end breadcrumb -->
          <div class="col-auto">
            <div class="btn-ds">
              <a href="index.php?act=adddm">
                <button class="btn-primary">
                  <i class="bi bi-plus-lg"></i>
                  Thêm loại hàng
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="product-table">
              <form action="" method="post">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Chức năng</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($listdanhmuc as $dm) { 
                        extract($dm);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                      echo '
                          <tr>
                        <td>
                          <input type="checkbox" class="form-check-input" />
                        </td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>
                          <a href="'.$suadm.'" class="sua">
                            <i class="bi bi-pencil-square"></i>
                          </a>
                          <a onclick="return confirm(\'Bạn có muốn xóa?\')" href="'.$xoadm.'" class="xoa">
                            <i class="bi bi-trash"></i>
                          </a>
                        </td>
                      </tr>
                      ';
                      
                    }?>
                    </tbody>
                  </table>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- End main wrapper -->