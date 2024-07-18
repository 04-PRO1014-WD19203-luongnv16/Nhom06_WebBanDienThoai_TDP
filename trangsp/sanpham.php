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
                        <form method="GET" action="index.php">
                            <input type="hidden" name="act" value="dmsp">
                            <ul>
                                <?php foreach ($listdm as $dm): ?>
                                    <?php extract($dm); ?>
                                    <li><a href="index.php?act=dmsp&iddm=<?= $id; ?>"><?= $name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </form>
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
                        <p style="color: black"><?= number_format($sp['price'], 0, ',', '.') ?>đ</p>
                        </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
    </div>
<br>