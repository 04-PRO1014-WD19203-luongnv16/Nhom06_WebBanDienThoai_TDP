
    <!-- Start main wrapper -->
    <main class="main-wrapper">
      <div class="main-content">
        <!-- start breadcrumb -->
        <div class="page-breadcrumb">
          <div class="breadcrumb-title">Sản phẩm</div>
        </div>
        <!-- end breadcrumb -->
        <div class="filter">
          <div class="col-auto">
            <div class="search">
              <input
                type="search"
                class="form-control"
                placeholder="Nhập sản phẩm cần tìm..."
              />
              <span><i class="bi bi-search"></i></span>
            </div>
          </div>
          <div class="col-auto">
            <select name="" id="">
              <option value="0" selected>Tất cả</option>
              <option value="1">iphone</option>
              <option value="2">Sam Sung</option>
              <option value="3">huawei</option>
              <option value="4">xiaomi</option>
            </select>
          </div>
          <div class="col-auto">
            <div class="btn">
              <a href="index.php?act=addsp">
                <button class="btn-primary">
                  <i class="bi bi-plus-lg"></i>
                  Thêm sản phẩm
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
                      <th>Tên sản phẩm</th>
                      <th>Ảnh</th>
                      <th>Giá </th>
                      <th>Tồn kho</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($listsanpham as $sp){
                        extract($sp);
                        $suasp="index.php?act=suasp&id=".$id;
                        $xoasp="index.php?act=xoasp&id=".$id;

                      echo '
                     <td> '.$name.'</td>              
                    <td><img src="../view/images/'.$img.'" style="width:200px;height:auto;"></td>
                      <td>'.$price.'<u>đ</u></td>
                      <td>'.$stock.'</td>
                      <td>
                        <a href="'.$suasp.'" class="sua">
                          <i class="bi bi-pencil-square"></i>
                        </a>
                        <a onclick="return confirm(\'Bạn có muốn xoá không?\')" href="'.$xoasp.'" class="xoa">
                          <i class="bi bi-trash"></i>
                        </a>
                      </td>
                    </tr>
                      ';
                    }
                    ?>
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
