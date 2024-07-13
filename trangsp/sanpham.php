<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="trangsp/sp.css">
</head>
<body>
    <div class="container">
        <header>
          </header>
        <aside>
            <div class="boxtrai">
            <div class="filters">
            <div class="breadcrumbs">
        <a href="index.php?act=view/home"><h6>Trang Chủ /</h6></a>
        <a  href="index.php?act=sanpham">Điện Thoại / </a>
    </div>  
    <div class="filter-category">
    <h3>Danh Mục</h3>
    <?php foreach ($listdm as $dm) {
        extract($dm);
        $linkdm = "index.php?act=dmsp&iddm=" .$id;
        echo '
        <label><input type = "checkbox"><a href="'.$linkdm.'">'.$name.'</a></input></label><br>
        
        ';
    }
    ?>
             </div>
                <div class="filter-sort">
                    <h3>Tìm kiếm theo:</h3>
                    <label><input type="radio" name="sort"> Giá thấp nhất</label><br>
                    <label><input type="radio" name="sort"> Giá cao nhất</label>
                </div>
            </div>
        </aside>
        </div>
        <main>
            <div class="boxphai">
        <div class="product-list">
                <?php foreach ($dssp as $sp): ?>
                    <div class="product-item">
                        <?php if (!empty($sp['img'])): ?>
                            <?php 
                            $linksp = "index.php?act=spct&idsp=" . $sp['id']; 
                            ?>
                            <a href="<?= $linksp ?>"><img src="view/images/<?= $sp['img'] ?>" alt="<?= $sp['name'] ?>"></a>
                        <?php endif; ?>
                        <h5 style="color: black"><?= $sp['name'] ?></h5>
                        <p style="color: black"><?= $sp['import_price'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
    </div>
<br>