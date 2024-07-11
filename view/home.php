<body>
    <div class="container bg-color">

        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?act=view/home">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Giỏ Hàng</a>
                    </li>
                    <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    ?>
                   <div class="nav-link">
                  <span style="color: red;">Xin chào </span> <span style="color: red;"><?=$username?></span>
               </div>

                    <?php if ($role == 1){?>
                        <li>
                            <a href="admin/index.php">Đăng nhập admin</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="index.php?act=thoat" class ="nav-link" style="color: red;">Thoát</a>
                        </li>
                    </div>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?act=dangnhap">Đăng Nhập</a>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container bg-image">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h1>Macbook Pro</h1>
                            <p>Latest version 2020 of Macbook pro with high definition of resolution, speed, system and
                                security.</p>
                            <button class="button-color">Mua Ngay →</button>
                        </div>
                        <div class="col-md-7">
                            <img src="view/images/banner-products/product-1.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h1>Speaker</h1>
                            <p>High quality Loud speaker with home theatre, bass and handsfree options.</p>
                            <button class="button-color">Buy Now →</button>
                        </div>
                        <div class="col-md-7">
                            <img src="view/images/banner-products/slider-1.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">

                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h1>Bluetooth Speaker</h1>
                            <p>High quality Bluetooth speaker with extra bass and handsfree options.</p>
                            <button class="button-color">Mua Ngay →</button>
                        </div>
                        <div class="col-md-7">
                            <img src="view/images/banner-products/slider-3.png" class="d-block w-100" alt="...">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center margin-down">
            <div class="col-md-6">
                <h3>Iphone</h3>
            </div>
            <div class="col-md-6 see-all-margin">
                <h5>See All</h5>
            </div>
        </div>
        <div class="container first">
            <div class="card-deck">
                <div class="card">
                    <img src="view/images/phone/phone-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Iphone 11 pro</h5>
                        <p class="card-text">Choose the top brands smartphone with latest version, new model, attractive
                            design, various options, battery durability and 2 years service warantee.</p>
                        <h6>$999</h6>
                        <button class="button-color">Mua Ngay →</button>
                    </div>
                </div>
                <div class="card">
                    <img src="view/images/phone/phone-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Galaxy Note10+</h5>
                        <p class="card-text">Choose the top brands smartphone with latest version, new model, attractive
                            design, various options, battery durability and 2 years service warantee.</p>
                        <h6>$999</h6>
                        <button class="button-color">Mua Ngay →</button>
                    </div>
                </div>
                <div class="card">
                    <img src="view/images/phone/phone-3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Huwai P20</h5>
                        <p class="card-text">Choose the top brands smartphone with latest version, new model, attractive
                            design, various options, battery durability and 2 years service warantee.</p>
                        <h6>$999</h6>
                        <button class="button-color">Mua Ngay →</button>
                    </div>
                </div>
            </div>

        </div>


        <div class="row align-items-center margin-down">
            <div class="col-md-6">
                <h3>Laptop</h3>
            </div>
            <div class="col-md-6 see-all-margin">
                <h5>See All</h5>
            </div>
        </div>

        <div class="container second">
            <div class="card-deck">
                <div class="card">
                    <img src="view/images/laptop/product-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Asus VivaBook</h5>
                        <p class="card-text">Choose the top brands Laptop with latest version, new model, attractive
                            design, various options, battery durability and 2 years service warantee.</p>
                        <h6>$999</h6>
                        <button class="button-color">Mua Ngay →</button>
                    </div>
                </div>
                <div class="card">
                    <img src="view/images/laptop/product-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toshiba Razer</h5>
                        <p class="card-text">Choose the top brands Laptop with latest version, new model, attractive
                            design, various options, battery durability and 2 years service warantee.</p>

                        <h6>$999</h6>
                        <button class="button-color">Mua Ngay →</button>
                    </div>
                </div>
                <div class="card">
                    <img src="view/images/laptop/product-3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Xiaomi Mi Notebook Pro</h5>
                        <p class="card-text">Choose the top brands Laptop with latest version, new model, attractive
                            design, various options, battery durability and 2 years service warantee.</p>

                        <h6>$999</h6>
                        <button class="button-color">Mua Ngay →</button>
                    </div>
                </div>
            </div>

        </div>

    </div>

   

<footer>
    <small>©touhedul haque. All rights reserved 2020. practice e-commerce site by RAZz, Zürich, Switzerland.</small>
</footer>
