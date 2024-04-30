<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/view/css/style.css" />
    <link rel="stylesheet" href="assets/view/font/fontawesome-free-6.2.1-web/css/all.min.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/view/image/logo_pigi.png" />
    <title>Pigi</title>
</head>

<body>
    <div class="page-wapper">
        <header class="page-header">
            <div class="logo-header">
                <a class="logo" href="index.php" title="Logo Jollibee" aria-label="store logo">
                    <img src="assets/view/image/logo_pigi.png" title="Logo Jollibee" alt="Logo Jollibee" width="100" height="100" />
                </a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a class="menu-item" href="index.php" <?php if (!isset($_GET['act'])) {
                                                                    echo 'style="color: #e31837; background-color: #f4d2d6"';
                                                                } ?>>Trang chủ</a>
                    </li>
                    <li><a class="menu-item" href="index.php?act=gioithieu" <?php if (isset($_GET['act']) && $_GET['act'] == "gioithieu") {
                                                                                echo 'style="color: #e31837; background-color: #f4d2d6"';
                                                                            } ?>>Về Pigi</a></li>
                    <li><a class="menu-item" href="index.php?act=thucdon" <?php if (isset($_GET['act']) && $_GET['act'] == "thucdon") {
                                                                                echo 'style="color: #e31837; background-color: #f4d2d6"';
                                                                            } ?>>Thực đơn</a></li>
                    <li><a class="menu-item" href="index.php?act=dichvu" <?php if (isset($_GET['act']) && $_GET['act'] == "dichvu") {
                                                                                echo 'style="color: #e31837; background-color: #f4d2d6"';
                                                                            } ?>>Dịch vụ</a></li>
                    <li><a class="menu-item" href="index.php?act=tintuc" <?php if (isset($_GET['act']) && $_GET['act'] == "tintuc") {
                                                                                echo 'style="color: #e31837; background-color: #f4d2d6"';
                                                                            } ?>>Tin tức</a></li>
                    <li><a class="menu-item" href="index.php?act=lienhe" <?php if (isset($_GET['act']) && $_GET['act'] == "lienhe") {
                                                                                echo 'style="color: #e31837; background-color: #f4d2d6"';
                                                                            } ?>>Liên hệ</a></li>
                </ul>
            </nav>
            <div class="header-login-pickup">
                <div class="header__cart">
                    <div class="header__car-warp">
                        <i class="header__cart-icon fa-solid fa-cart-shopping"></i>
                        <span class="header__car-notice">3</span>
                        <!-- No cart: header__cart-list--no-cart -->
                        <div class="header__cart-list">
                            <img src="assets/view/image/no-cart.png" alt="" class="header__cart-list--no-cart-img" />
                            <span class="header__cart-list-no-cart-msg">Chưa có sản phẩm</span>
                            <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                            <ul class="header__cart-list-item">
                                <!-- Cart item -->
                                <li class="header__cart-item">
                                    <img src="https://static.myphamyenphuong.com/hinh_sanpham/web-1619657701.jpg" alt="" class="header__cart-img" />
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT LỚN</h5>
                                            <div class="header__cart-item-price-warp">
                                                <span class="header__cart-item-price">91.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__cart-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="header__cart-item">
                                    <img src="https://static.myphamyenphuong.com/hinh_sanpham/web-1619657701.jpg" alt="" class="header__cart-img" />
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">
                                                PEPSI KHÔNG CALO VỪA
                                            </h5>
                                            <div class="header__cart-item-price-warp">
                                                <span class="header__cart-item-price">17.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__cart-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="header__cart-item">
                                    <img src="https://static.myphamyenphuong.com/hinh_sanpham/web-1619657701.jpg" alt="" class="header__cart-img" />
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">
                                                2 MIẾNG GÀ GIÒN
                                            </h5>
                                            <div class="header__cart-item-price-warp">
                                                <span class="header__cart-item-price">66.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__cart-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                                <a href="index.php?act=giohang" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                    <div class="box_user">
                        <img src="upload/<?= $image != "" ? $image : "logo_user.jpg" ?>" alt="Ảnh user" class="box_user-img">
                        <div class="box_user-name">Xin chào,<?= $hoten ?><i class="fa-solid fa-caret-down icon_dropdown"></i></div>
                        <div class="box_user_dropdown">
                            <ul class="box_user_dropdown_list">
                                <li class="box_user_dropdown-item">
                                    <a class="box_user_dropdown-item-link" href="#">Tài khoản của tôi</a>
                                </li>
                                <?php
                                if ($id_role == 2) {
                                    $_SESSION['user_login'] = $_SESSION['user'];
                                ?>
                                    <li class="box_user_dropdown-item">
                                        <a class="box_user_dropdown-item-link" href="admin/index.php">Vào trang quản lý</a>
                                    </li>
                                <?php
                                }
                                ?>
                                <li class="box_user_dropdown-item">
                                    <a class="box_user_dropdown-item-link" href="index.php?act=logout">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="pickup-wrapper">
                        <a class="action-login" href="index.php?act=login">Đăng nhập</a>
                    </div>
                    <div class="pickup-wrapper">
                        <a class="action-logup" href="index.php?act=signup">Đăng ký</a>
                    </div>
                <?php
                }
                ?>


            </div>
        </header>