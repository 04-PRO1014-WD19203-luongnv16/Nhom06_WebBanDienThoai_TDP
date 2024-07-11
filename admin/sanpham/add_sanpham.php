<div class="row">
            <div class="row frmtitle"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="POST"enctype="multipart/form-data">
                    <div class="row mb10">
                    Danh mục <br>
                    <select name="iddm">
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                        <option value=""></option>
                    </select>
                    </div>
                    <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                    Giá <br>
                    <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                    Hình <br>
                    <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=lissp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>