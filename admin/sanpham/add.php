<!-- Start main wrapper -->
<main class="main-wrapper">
  <div class="main-content">
    <!-- start breadcrumb -->
    <div class="page-breadcrumb">
      <div class="breadcrumb-title">Thêm mới sản phẩm</div>
    </div>
    <!-- end breadcrumb -->
    <div class="filter">
      <div class="col-auto">
        <div class="btn-ds">
          <a href="index.php?act=listsp">
            <button class="btn-primary">Danh sách sản phẩm</button>
          </a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
          <div class="mb-4 dm">
            <h5 class="mb-3">Danh mục sản phẩm</h5>
            <select name="iddm" id="" required>
              <option value="" selected disabled>Chọn danh mục</option>
              <?php 
                foreach ($listdanhmuc as $danhmuc) {
                  extract($danhmuc);
                  echo '<option value="' . $id . '">' . $name . '</option>';
                }
              ?>
            </select>
          </div>
          <div class="mb-4">
            <h5 class="mb-3">Tên sản phẩm</h5>
            <input
              type="text"
              name="name"
              id=""
              class="form-control"
              placeholder="Nhập tên sản phẩm ở đây..."
              required
            />
          </div>
          <div class="mb-4">
            <h5 class="mb-3">Mô tả</h5>
            <textarea
              class="form-control"
              cols="4"
              rows="6"
              name="mota"
              placeholder="Nhập mô tả ở đây..."
              style="height: 149px"
              required
            ></textarea>
          </div>
          <div class="mb-4">
            <h5 class="mb-3">Ảnh</h5>
            <input
              type="file"
              name="img"
              id=""
              class="form-control"
              accept="image/*"
              required
            />
          </div>
          <div class="mb-4">
            <h5 class="mb-3">Giá</h5>
            <input
              type="number"
              name="price"
              id=""
              class="form-control"
              placeholder="Nhập giá sản phẩm ở đây..."
              min="0"
              step="0.01"
              required
            />
          </div>
          <div class="mb-4">
            <h5 class="mb-3">Tồn kho</h5>
            <input
              type="number"
              name="stock"
              id=""
              class="form-control"
              placeholder="Nhập tồn kho sản phẩm ở đây..."
              min="0"
              step="1"
              required
            />
          </div>
          <div class="mb-4">
            <input type="submit" value="Lưu lại" name="luulai" class="success">
            <input type="reset" value="Hủy bỏ" class="danger">
          </div>
          <?php
            if (isset($thongbao) && $thongbao != "") echo $thongbao;
          ?>
        </form>
      </div>
    </div>
  </div>
</main>
<!-- End main wrapper -->
