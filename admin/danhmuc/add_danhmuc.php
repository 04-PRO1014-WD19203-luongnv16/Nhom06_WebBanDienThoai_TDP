<div class="row">

    <div class="row frmcontent">
        <h1>thêm loại hàng hóa mới </h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="POST">
            <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=lisdm"><input type="button" value="danh sách"></a>
            </div>

            <?php   
                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>