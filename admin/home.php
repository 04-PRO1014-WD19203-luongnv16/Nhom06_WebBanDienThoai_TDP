<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <title>Admin - The Brew House</title>
  </head>
  <body>
    <!-- Start Header -->
    <header class="top-header">
      <nav class="navbar gap-4 navbar-expand">
        <ul class="nav-right-links">
          <li class="nav-item dropdown">
            <a href="">
              <img src="./images/01.png" alt="" width="45" height="45" />
            </a>
            <!-- <div class="dropdown-menu dropdown-user">
              <a href="#" class="dropdown-item">
                <div>
                  <img src="./images/01.png" alt="" width="90" height="90" />
                  <h5 class="user-name">Hello, Admin</h5>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <i class="bi bi-person"></i>
                Profile
              </a>
              <a href="#" class="dropdown-item">
                <i class="bi bi-gear"></i>
                Setting
              </a>
              <a href="#" class="dropdown-item">
                <i class="bi bi-power"></i>
                Logout
              </a>
            </div> -->
          </li>
        </ul>
      </nav>
    </header>
    <!-- End Header -->
    <!-- Start sidebar -->
    <aside class="sidebar-wrapper">
      <div class="simplebar-wrapper">
        <div class="simplebar-mask">
          <div class="simplebar-offset">
            <div class="simplebar-content-wrapper">
              <div class="simplebar-content" style="padding: 0px">
                <div class="sidebar-header">
                  <div class="logo-icon">
                    <img src="./images/logo.png" alt="" />
                  </div>
                </div>
                <div class="sidebar-nav">
                  <!-- Start navigation -->
                  <ul class="metismenu">
                    <li>
                      <a href="index.php?act" class="has-arrow">
                        <div class="parent-icon">
                          <i class="bi bi-house"></i>
                        </div>
                        <div class="menu-title">Trang chủ</div>
                      </a>
                    </li>
                    <li class="menu-label">Quản lý</li>
                    <li>
                      <a href="#" class="has-arrow">
                        <div class="child-icon">
                          <i class="bi bi-caret-right"></i>
                        </div>
                        <div class="menu-title">Danh mục</div>
                      </a>
                    </li>
                    <li>
                      <a href="sanpham.html" class="has-arrow">
                        <div class="child-icon">
                          <i class="bi bi-caret-right"></i>
                        </div>
                        <div class="menu-title">Sản phẩm</div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="has-arrow">
                        <div class="child-icon">
                          <i class="bi bi-caret-right"></i>
                        </div>
                        <div class="menu-title">Giỏ hàng</div>
                      </a>
                    </li>
                    <li>
                      <a href="sanpham.html" class="has-arrow">
                        <div class="child-icon">
                          <i class="bi bi-caret-right"></i>
                        </div>
                        <div class="menu-title">danh sách đơn hàng</div>
                      </a>
                    </li>
                    <li class="menu-label">PAGES</li>
                    <li>
                      <a href="#" class="has-arrow">
                        <div class="child-icon">
                          <i class="bi bi-caret-right"></i>
                        </div>
                        <div class="menu-title">thông tin khách hàng</div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="has-arrow">
                        <div class="child-icon">
                          <i class="bi bi-caret-right"></i>
                        </div>
                        <div class="menu-title">binh luận </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="has-arrow">
                        <div class="child-icon">
                          <i class="bi bi-caret-right"></i>
                        </div>
                        <div class="menu-title">thống kê</div>
                      </a>
                    </li>
                  </ul>
                  <!-- End navigation -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <!-- End sidebar -->
    <!-- Start main wrapper -->
    <main class="main-wrapper">
      <div class="main-content">
        <!-- start breadcrumb -->
        <div class="page-breadcrumb">
          <div class="breadcrumb-title">Trang chủ</div>
        </div>
        <!-- end breadcrumb -->
      </div>
    </main>
    <!-- End main wrapper -->
    <!-- Start footer -->
    <footer></footer>
    <!-- End footer -->
  </body>
</html>