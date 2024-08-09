    <!-- Start main wrapper -->
    <main class="main-wrapper">
      <div class="main-content">
        <!-- start breadcrumb -->
        <div class="page-breadcrumb">
          <div class="breadcrumb-title">Thêm mới loại hàng</div>
        </div>
        <!-- end breadcrumb -->
        <div class="filter">
          <div class="col-auto">
            <div class="btn-ds">
              <a href="index.php?act=listdm">
                <button class="btn-primary">
                  Danh sách loại hàng
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <form action="index.php?act=adddm" method="post">
              <div class="mb-4">
                <h5 class="mb-3">Mã loại hàng</h5>
                <input type="text" name="" id="" class="form-control" disabled >
              </div>
              <div class="mb-4 dm">
                <h5 class="mb-3">Danh mục loại hàng</h5>
                <input type="text" name="name" id="" class="form-control" placeholder="Nhập tên danh mục..." required >
              </div>
              <div class="mb-4">
                <input type="submit" value="Lưu lại" name="luulai" class="success">
                <input type="reset" value="Hủy bỏ" class="danger">
              </div>
              <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
              ?>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!-- End main wrapper -->