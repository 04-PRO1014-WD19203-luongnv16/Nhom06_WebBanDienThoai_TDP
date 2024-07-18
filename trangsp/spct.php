<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="trangsp/sp.css"> 
</head>
<body>
    <div class="container">
        <header>
            <div class="breadcrumbs">
                <a href="index.php?act=home"><h6>Trang Chủ /</h6></a>
                <span>/</span>
                <a href="index.php?act=sanpham">Điện Thoại</a>
            </div>
        </header>
        <h2 style="color: black">Chi tiết sản phẩm</h2>
        <hr>
        <main>
            <div class="product-detail1">
                <div class="spct">
                    <img src="view/images/<?= $onesp['img'] ?>" alt="">
                </div>
                <div class="chitiet">
                    <span><?= $onesp['name'] ?></span>
                    <div class="stars">
                        <form action="" style="float:left">
                            <input class="star star-5" id="star-5" type="radio" name="star"/>
                            <label class="star star-5" for="star-5"></label>
                            <input class="star star-4" id="star-4" type="radio" name="star"/>
                            <label class="star star-4" for="star-4"></label>
                            <input class="star star-3" id="star-3" type="radio" name="star"/>
                            <label class="star star-3" for="star-3"></label>
                            <input class="star star-2" id="star-2" type="radio" name="star"/>
                            <label class="star star-2" for="star-2"></label>
                            <input class="star star-1" id="star-1" type="radio" name="star"/>
                            <label class="star star-1" for="star-1"></label>
                        </form>
                        <a href="" style="padding-left:10px">Đánh giá sản phẩm</a>
                    </div>
                    <hr>
                    <span style="color:#0066CC"><?= number_format($onesp['price'], 0, ',', '.') ?>đ</span>
                    <br>
                    <div class="dangky">
                        <h6>Đăng ký tư vấn</h6>
                        <span>Nhập thông tin để nhận được tư vấn mua hàng</span>
                        <br>
                        <input type="text" placeholder="Họ và Tên">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Số điện thoại">
                        <input type="button" value="Đăng ký tư vấn">
                    </div>
                    <br>
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="<?= $onesp['id'] ?>">
                        <input type="hidden" name="name" value="<?= $onesp['name'] ?>">
                        <input type="hidden" name="price" value="<?= $onesp['price'] ?>">
                        <input type="hidden" name="img" value="<?= $onesp['img'] ?>">
                        <label for="soluong" style = "color :red">Số Lượng</label>
                        <input type="number" name="soluong" value="1" min="1" max="10">
                        <button type="submit" class="mua">Thêm Vào Giỏ Hàng</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
