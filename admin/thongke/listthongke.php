<div class="row">
    <div class="row frmtitle mb">
        <h1>Thống kê</h1>
    </div>
    <div class="row mb10 frmdsloai">
    <table>

        <tr>
            <th>MÃ DM</th>
            <th>TÊN DM</th>
            <th>SỐ LƯỢNG</th>
            <th>GIÁ CAO NHẤT</th>
            <th>GIÁ THẤP NHẤT</th>
            <th>GIÁ TRUNG BÌNH</th>
        </tr>

        <?php
        foreach($listthongke as $thongke){
            extract($thongke);
            echo '<tr>
                <td>'.$madm.'</td>
                <td>'.$tendm.'</td>
                <td>'.$countsp.'</td>
                <td>'.$maxprice.'</td>
                <td>'.$minprice.'</td>
                <td>'.$avgprice.'</td>
            </tr>';
            
        }
        ?>
        </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="xem biểu đồ"></a>
        </div>
    
    </div> 
</div>  