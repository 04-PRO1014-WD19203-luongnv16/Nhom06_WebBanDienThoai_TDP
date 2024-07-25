<div class="bannner">
    <img src="view/images/banner-ip15.jpg" alt="">
</div>
<br>
<div class="container">
    <div class="row align-items-center margin-down">
        <div class="col-md-6">
            <h3>Iphone</h3>
        </div>
        <div class="col-md-6 see-all-margin">
            <a href="index.php?act=dmsp&iddm=7"><h5>Xem tất cả</h5></a>
        </div>
    </div>
    <div class="container first">
        <div class="card-deck">
        <?php
      $iphoneProducts = [];
         foreach ($spnew as $sp) {
        if ($sp['iddm'] == 7) {
        $iphoneProducts[] = $sp;
        if (count($iphoneProducts) == 3) {
            break;
        }
    }
          }
       foreach ($iphoneProducts as $sp) :
         $linksp = "index.php?act=spct&idsp=" . $sp['id'];
          ?>
    <div class="card">
        <a href="<?= $linksp ?>"><img src="view/images/<?= $sp['img'] ?>" class="card-img-top" alt="<?= $sp['name'] ?>"></a>
        <div class="card-body">
            <h5 class="card-title"><?= $sp['name'] ?></h5>
            <h6><?= number_format($sp['price'], 0, ',', '.') ?>đ</h6>
            <a href="<?= $linksp ?>"><button class="button-color">Mua Ngay →</button></a>
        </div>
    </div>
<?php endforeach; ?>
        </div>
    </div>

    <div class="row align-items-center margin-down">
        <div class="col-md-6">
            <h3>SamSung</h3>
        </div>
        <div class="col-md-6 see-all-margin">
        <a href="index.php?act=dmsp&iddm=6"><h5>Xem tất cả</h5></a>
        </div>
    </div>

    <div class="container second">
        <div class="card-deck">
        <?php
$iphoneProducts = [];
foreach ($spnew as $sp) {
    if ($sp['iddm'] == 6) {
        $iphoneProducts[] = $sp;
        if (count($iphoneProducts) == 3) {
            break;
        }
    }
}

foreach ($iphoneProducts as $sp) :
    $linksp = "index.php?act=spct&idsp=" . $sp['id'];
?>
    <div class="card">
        <a href="<?= $linksp ?>"><img src="view/images/<?= $sp['img'] ?>" class="card-img-top" alt="<?= $sp['name'] ?>"></a>
        <div class="card-body">
            <h5 class="card-title"><?= $sp['name'] ?></h5>
            <h6><?= number_format($sp['price'], 0, ',', '.') ?>đ</h6>
            <a href="<?= $linksp ?>"><button class="button-color">Mua Ngay →</button></a>
        </div>
    </div>
<?php endforeach; ?>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row align-items-center margin-down">
        <div class="col-md-6">
            <h3>Xiaomi</h3>
        </div>
        <div class="col-md-6 see-all-margin">
            <a href="index.php?act=dmsp&iddm=8"><h5>Xem tất cả</h5></a>
        </div>
    </div>
    <div class="container first">
        <div class="card-deck">
        <?php
      $iphoneProducts = [];
         foreach ($spnew as $sp) {
        if ($sp['iddm'] == 8) {
        $iphoneProducts[] = $sp;
        if (count($iphoneProducts) == 3) {
            break;
        }
    }
          }
       foreach ($iphoneProducts as $sp) :
         $linksp = "index.php?act=spct&idsp=" . $sp['id'];
          ?>
    <div class="card">
        <a href="<?= $linksp ?>"><img src="view/images/<?= $sp['img'] ?>" class="card-img-top" alt="<?= $sp['name'] ?>"></a>
        <div class="card-body">
            <h5 class="card-title"><?= $sp['name'] ?></h5>
            <h6><?= number_format($sp['price'], 0, ',', '.') ?>đ</h6>
            <a href="<?= $linksp ?>"><button class="button-color">Mua Ngay →</button></a>
        </div>
    </div>
<?php endforeach; ?>
        </div>
    </div>
