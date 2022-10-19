<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tâm Trường Hưng</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('./homepage/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('./homepage/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{ route('home') }}"><img src="{{ asset('./homepage/img/logo00.jpg')}}" alt=""></a>
        </div>
        @auth
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="{{ route('home.mycart') }}"><i  class="fa fa-cart-plus"></i> <span style="background-color:rgb(17 76 120);" >0</span></a></li>
                <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}"><i class="fa fa-shopping-bag"></i> <span style="background-color:rgb(17 76 120);">{{$amount}}</span></a></li>
            </ul>
            <div class="header__cart__price">Tổng tiền: <span>{{$total}} vnĐ</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="{{ route('home.logout') }}"><i class="fa fa-user"></i> Đăng xuất</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a href="{{ route('home') }}">Sản Phẩm</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{ route('home') }}">Trái Cây</a></li>
                        <li><a href="./blog.html">Thịt Tươi</a></li>
                        <li><a href="./blog.html">Cá Tươi</a></li>
                        <li><a href="./blog.html">Đông Lạnh</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home.thit') }}">Suất ăn công nghiệp</a></li>
                <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}">Giỏ</a></li>
            </ul>
        </nav>
        @else
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="{{ route('home.register') }}"><i class="fa-cart-plus"></i> <span style="background-color:rgb(17 76 120);"> 0</span></a></li>
                <li><a href="{{ route('home.register') }}"><i class="fa fa-shopping-bag"></i> <span style="background-color:rgb(17 76 120);">0</span></a></li>
            </ul>
            <div class="header__cart__price">Tổng tiền: <span>0 vnĐ</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="{{ route('home.login') }}"><i class="fa fa-user"></i> Đăng nhập</a>
            </div>
        </div>
        
        
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a href="{{ route('home') }}">Sản Phẩm</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{ route('home') }}">Trái Cây</a></li>
                        <li><a href="{{ route('home.thit') }}">Thịt Tươi</a></li>
                        <li><a href="{{ route('home.haisan') }}">Hải Sản</a></li>
                        <li><a href="{{ route('home.donglanh') }}">Đông Lạnh</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home.thit') }}">Suất ăn công nghiệp</a></li>
                <li><a href="{{ route('home.register') }}">Giỏ</a></li>
            </ul>
        </nav>
        @endauth
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="{{ route('home') }}"><i class="fa fa-facebook"></i></a>
            <a href="{{ route('home') }}"><i class="fa fa-twitter"></i></a>
            <a href="{{ route('home') }}"><i class="fa fa-linkedin"></i></a>
            <a href="{{ route('home') }}"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> tamtruonghung@gmail.com</li>
                <li>Cảm ơn quý khách đã mua hàng của chúng tôi</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="header__top__left">
                            <ul>
                                <li><i style="background-color:rgb(17 76 120);" class="fa fa-envelope"></i> 0913387399 | 0915315678 | Số nhà 9, ngõ 4, đường Trần Hưng Đạo, Ba Đình, Bỉm Sơn, Thanh Hóa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="{{ route('home') }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ route('home') }}"><i class="fa fa-twitter"></i></a>
                                <a href="{{ route('home') }}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{ route('home') }}"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            @auth
                            <div class="header__top__right__auth">
                                <a href="{{ route('home.logout') }}"> Đăng xuất</a>
                            </div>

                            @else  
                            <div class="header__top__right__auth">
                                <a href="{{ route('home.login') }}"><i class="fa fa-user"></i> Đăng nhập</a>
                            </div>
                            @endauth
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a style="height='80%'; width='80%';" href="{{ route('home') }}"><img src="{{ asset('./homepage/img/logo00.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                            <!-- <li><a href="{{ route('home') }}">Sản phẩm</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ route('home') }}">Trái Cây</a></li>
                                    <li><a href="{{ route('home.thit') }}">Thịt</a></li>
                                    <li><a href="{{ route('home.haisan') }}">Hải sản</a></li>
                                    <li><a href="{{ route('home.donglanh') }}">Đông Lạnh</a></li>
                                </ul>
                            </li> -->
                            <li><a href="{{ route('home') }}">Giấy ăn</a></li>
                            @auth
                            <li><a href="{{ route('home.thit') }}">Giấy Vệ sinh</a></li>
                            <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}">Giỏ</a></li>
                            @else
                            <li><a href="{{ route('home.register') }}">Giấy Vệ sinh</a></li>
                            <li><a href="{{ route('home.register') }}">Giỏ</a></li>
                            @endauth
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    @auth
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{ route('home.mycart') }}"><i class="fa fa-cart-plus"></i> <span style="background-color:rgb(17 76 120);">0</span></a></li>
                            <li><a href="{{ route('home.cartUser', [Auth::user()->id]) }}"><i class="fa fa-shopping-bag"></i> <span style="background-color:rgb(17 76 120);">{{$amount}}</span></a></li>
                        </ul>
                        <div class="header__cart__price">Tổng tiền: <span>{{$total}} vnĐ</span></div>
                    </div>
                    @else
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{ route('home.register') }}"><i class="fa fa-cart-plus"></i> <span style="background-color:rgb(17 76 120);">0</span></a></li>
                            <li><a href="{{ route('home.register') }}"><i class="fa fa-shopping-bag"></i> <span style="background-color:rgb(17 76 120);">0</span></a></li>
                        </ul>
                        <div class="header__cart__price">Tổng tiền: <span>0 vnĐ</span></div>
                    </div>
                    @endauth
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="">
                                <div class="hero__search__categories">
                                    Tìm theo tên sản phẩm
                                </div>
                                <input type="text" name="search" placeholder="Bạn cần mua gì?">
                                <button type="submit" class="site-btn">Tìm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i style="color:rgb(17 76 120);" class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0913 387 399</h5>

                                <h5>0915 315 678</h5>
                                <span>Hổ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('./homepage/img/hero/banner1.jpg') }}">
                        <div class="hero__text">
                            <span>Tâm Trường Hưng</span>
                            <h2>Hàng gia công  <br />100% chất lượng</h2>
                            <p>Chất lượng đảm bảo nhận và giao hàng nhanh chóng chất lượng.</p>
                            <a href="{{ route('home') }}" class="primary-btn">Đặt hàng ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')
    <div style="margin-bottom: 50px;" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('./homepage/img/hero/giay1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src=" {{ asset('./homepage/img/hero/giay2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{ asset('./homepage/img/logo00.jpg')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ   : Số nhà 9, ngõ 4, đường Trần Hưng Đạo, Ba Đình, Bỉm Sơn, Thanh Hóa</li>
                            <li>Điện thoại : 0913 387 399 | 0915 315 678</li>
                            <li>Email     : tamtruonghung@gmail.com</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12">
                    <div class="footer__widget">
                        <h6>Tham gia bản tin của chúng tôi ngay bây giờ</h6>
                        <p>Nhận thông tin cập nhật qua E-mail về cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt.</p>
                        <form action="">
                            <input type="text" placeholder="Nhập email">
                            <button type="submit" class="site-btn">Đăng Ký</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="{{ route('home') }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ route('home') }}"><i class="fa fa-instagram"></i></a>
                            <a href="{{ route('home') }}"><i class="fa fa-twitter"></i></a>
                            <a href="{{ route('home') }}"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
đoạn nào việt hóa thành sđt ý
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('./homepage/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('./homepage//jquery.slicknav.js')}}"></script>
    <script src="{{ asset('./homepage//mixitup.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('./homepage/js/main.js')}}"></script>
    <script src="{{ asset('/viewAdmin/js/action.js')}}"></script>
</body>

</html>