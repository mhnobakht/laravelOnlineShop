<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('frontend/image/favicon.png')}}" rel="icon" />
    <title>مارکت شاپ </title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/js/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/js/bootstrap/css/bootstrap-rtl.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/stylesheet.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.transitions.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/stylesheet-rtl.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive-rtl.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/stylesheet-skin2.css')}}" />

    @yield('app-styles')


    <!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img alt="" src="{{asset('frontend/image/banner/cms-block.jpg')}}"></td>
                                                        <td><img alt="" src="{{asset('frontend/image/banner/responsive.jpg')}}"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>بلاک های محتوا</h4></td>
                                                        <td><h4>قالب واکنش گرا</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="{{asset('frontend/image/flags/gb.png')}}" alt="انگلیسی" title="انگلیسی">انگلیسی <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="{{asset('frontend/image/flags/gb.png')}}" alt="انگلیسی" title="انگلیسی" /> انگلیسی</button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="{{asset('frontend/image/flags/ar.png')}}" alt="عربی" title="عربی" /> عربی</button>
                                </li>
                            </ul>
                        </div>
                        <div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> تومان <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ USD</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            @if (\Illuminate\Support\Facades\Auth::check())
                                <li><a href="{{route('frontend.profile')}}">حساب کاربری</a></li>
                                @if (\Illuminate\Support\Facades\Auth::user()->isAdmin() )
                                    <li><a href="{{route('administrator.mainPage')}}">پنل ادمین</a></li>
                                @endif
                                <li><a href="#" onclick="logoutFormSubmit(event)">خروج</a></li>
                                <form id="logout-form" style="visibility: hidden" action="{{route('logout')}}" method="post">
                                    @csrf
                                    <input type="submit" value="خروج">
                                </form>

                            @else
                                <li><a href="{{route('login')}}">ورود</a></li>
                                <li><a href="{{route('register')}}">ثبت نام</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="index.html"><img class="img-responsive" src="{{asset('frontend/image/logo.png')}}" title="MarketShop" alt="MarketShop" /></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="بارگذاری ..." class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>
                                <span id="cart-total">{{Session::has('cart') ? Session::get('cart')->totalQty . ' آیتم' : ''}} {{Session::has('cart') ? Session::get('cart')->totalPrice . ' تومان' : ''}}</span></button>
                            <ul class="dropdown-menu">
                                @if(Session::has('cart'))
                                    <li>
                                        <table class="table">
                                            @foreach(Session::get('cart')->items as $product)
                                                <tbody>
                                                <tr>
                                                    <td class="text-center" width="18%"><img class="img-thumbnail"src="{{$product['item']->photos[0]->path}}"></td>
                                                    <td class="text-left">{{$product['item']->title}}</td>
                                                    <td class="text-right">x {{$product['qty']}}</td>
                                                    <td class="text-right">{{$product['price']}} تومان</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-danger btn-xs remove" title="حذف" onclick="event.preventDefault();
                                                            document.getElementById('remove-cart-item_{{$product['item']->id}}').submit();" type="button"><i class="fa fa-times"></i></button>
                                                    </td>
                                                    <form id="remove-cart-item_{{$product['item']->id}}" action="{{ route('cart.remove', ['id' => $product['item']->id]) }}" method="post" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </tr>

                                                </tbody>
                                            @endforeach
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td class="text-right"><strong>جمع کل</strong></td>
                                                    <td class="text-right">{{Session::get('cart')->totalPurePrice}} تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>تخفیف</strong></td>
                                                    <td class="text-right">{{Session::get('cart')->totalDiscountPrice}} تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>قابل پرداخت</strong></td>
                                                    <td class="text-right">{{Session::get('cart')->totalPrice}} تومان</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p class="checkout"><a href="{{route('cart.cart')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;</p>

                                        </div>
                                    </li>

                                @else
                                    <p>سبد خرید شما خالی است.</p>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->

        <nav id="menu" class="navbar">
            <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
            <div class="container">
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="خانه" href="index.html">خانه</a></li>
                        @foreach ($categories_app as $category)
                            <li class="dropdown"><a href="{{route('frontend.category.products', $category->id)}}">{{$category->name}}</a>
                                @if (count($category->childrenRecursive) > 0)
                                    @include('frontend.partials.categoryChild', ['categories' => $category->childrenRecursive])
                                @endif
                            </li>
                        @endforeach

{{--                        <li class="dropdown"> <a href="category.html">الکترونیکی</a>--}}
{{--                            <div class="dropdown-menu">--}}
{{--                                <ul>--}}
{{--                                    <li> <a href="category.html">لپ تاپ <span>&rsaquo;</span></a>--}}
{{--                                        <div class="dropdown-menu">--}}
{{--                                            <ul>--}}
{{--                                                <li> <a href="category.html">زیردسته های جدید </a> </li>--}}
{{--                                                <li> <a href="category.html">زیردسته های جدید </a> </li>--}}
{{--                                                <li> <a href="category.html">زیردسته جدید </a> </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li> <a href="category.html">رومیزی <span>&rsaquo;</span></a>--}}
{{--                                        <div class="dropdown-menu">--}}
{{--                                            <ul>--}}
{{--                                                <li> <a href="category.html">زیردسته های جدید </a> </li>--}}
{{--                                                <li> <a href="category.html">زیردسته جدید </a> </li>--}}
{{--                                                <li> <a href="category.html">زیردسته جدید </a> </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li> <a href="category.html">دوربین <span>&rsaquo;</span></a>--}}
{{--                                        <div class="dropdown-menu">--}}
{{--                                            <ul>--}}
{{--                                                <li> <a href="category.html">زیردسته های جدید</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="category.html">موبایل و تبلت <span>&rsaquo;</span></a>--}}
{{--                                        <div class="dropdown-menu">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="category.html">زیردسته های جدید</a></li>--}}
{{--                                                <li><a href="category.html">زیردسته های جدید</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="category.html">صوتی و تصویری <span>&rsaquo;</span></a>--}}
{{--                                        <div class="dropdown-menu">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="category.html">زیردسته های جدید </a> </li>--}}
{{--                                                <li><a href="category.html">زیردسته جدید </a> </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="category.html">لوازم خانگی</a> </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li class="menu_brands dropdown"><a href="#">برند ها</a>
                            <div class="dropdown-menu">
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/apple_logo-60x60.jpg')}}" title="اپل" alt="اپل" /></a><a href="#">اپل</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/canon_logo-60x60.jpg')}}" title="کنون" alt="کنون" /></a><a href="#">کنون</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"> <a href="#"><img src="{{asset('frontend/image/product/hp_logo-60x60.jpg')}}" title="اچ پی" alt="اچ پی" /></a><a href="#">اچ پی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/htc_logo-60x60.jpg')}}" title="اچ تی سی" alt="اچ تی سی" /></a><a href="#">اچ تی سی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/palm_logo-60x60.jpg')}}" title="پالم" alt="پالم" /></a><a href="#">پالم</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/sony_logo-60x60.jpg')}}" title="سونی" alt="سونی" /></a><a href="#">سونی</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/canon_logo-60x60.jpg')}}" title="test" alt="test" /></a><a href="#">تست</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/apple_logo-60x60.jpg')}}" title="test 3" alt="test 3" /></a><a href="#">تست 3</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/canon_logo-60x60.jpg')}}" title="test 5" alt="test 5" /></a><a href="#">تست 5</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/canon_logo-60x60.jpg')}}" title="test 6" alt="test 6" /></a><a href="#">تست 6</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="{{asset('frontend/image/product/apple_logo-60x60.jpg')}}" title="test 7" alt="test 7" /></a><a href="#">تست 7</a> </div>


                            </div>
                        </li>
                        <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
                            <div class="dropdown-menu custom_block">
                                <ul>
                                    <li>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td><img alt="" src="{{asset('frontend/image/banner/cms-block.jpg')}}"></td>
                                                <td><img alt="" src="{{asset('frontend/image/banner/responsive.jpg')}}"></td>
                                                <td><img alt="" src="{{asset('frontend/image/banner/cms-block.jpg')}}"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>بلاک های محتوا</h4></td>
                                                <td><h4>قالب واکنش گرا</h4></td>
                                                <td><h4>پشتیبانی ویژه</h4></td>
                                            </tr>
                                            <tr>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                            </tr>
                                            <tr>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown information-link"><a>برگه ها</a>
                            <div class="dropdown-menu">
                                <ul>
                                    @if (\Illuminate\Support\Facades\Auth::check())
                                        <li><a href="{{route('frontend.profile')}}">حساب کاربری</a></li>
                                        <li><a href="{{route('logout')}}">خروج</a></li>
                                    @else
                                        <li><a href="{{route('login')}}">ورود</a></li>
                                        <li><a href="{{route('register')}}">ثبت نام</a></li>
                                    @endif
                                    <li><a href="category.html">دسته بندی (شبکه/لیست)</a></li>
                                    <li><a href="product.html">محصولات</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="checkout.html">تسویه حساب</a></li>
                                    <li><a href="compare.html">مقایسه</a></li>
                                    <li><a href="wishlist.html">لیست آرزو</a></li>
                                    <li><a href="search.html">جستجو</a></li>
                                </ul>
                                <ul>
                                    <li><a href="about-us.html">درباره ما</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="elements.html">عناصر</a></li>
                                    <li><a href="faq.html">سوالات متداول</a></li>
                                    <li><a href="sitemap.html">نقشه سایت</a></li>
                                    <li><a href="contact-us.html">تماس با ما</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main آقایانu End-->
    </div>
    <div id="container">

        <div class="container" >
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Feature Box Start-->
    <div class="container">
        <div class="custom-feature-box row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_1">
                    <div class="title">ارسال رایگان</div>
                    <p>برای خرید های بیش از 100 هزار تومان</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_2">
                    <div class="title">پس فرستادن رایگان</div>
                    <p>بازگشت کالا تا 24 ساعت پس از خرید</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_3">
                    <div class="title">کارت هدیه</div>
                    <p>بهترین هدیه برای عزیزان شما</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_4">
                    <div class="title">امتیازات خرید</div>
                    <p>از هر خرید امتیاز کسب کرده و از آن بهره بگیرید</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Box End-->
    <!--Footer Start-->
    <footer id="footer">
        <div class="fpart-first">
            <div class="container">
                <div class="row">
                    <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>درباره مارکت شاپ</h5>
                        <p>قالب HTML فروشگاهی مارکت شاپ. این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</p>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>اطلاعات</h5>
                        <ul>
                            <li><a href="about-us.html">درباره ما</a></li>
                            <li><a href="about-us.html">اطلاعات 0 تومان</a></li>
                            <li><a href="about-us.html">حریم خصوصی</a></li>
                            <li><a href="about-us.html">شرایط و قوانین</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>خدمات مشتریان</h5>
                        <ul>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="#">بازگشت</a></li>
                            <li><a href="sitemap.html">نقشه سایت</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>امکانات جانبی</h5>
                        <ul>
                            <li><a href="#">برند ها</a></li>
                            <li><a href="#">کارت هدیه</a></li>
                            <li><a href="#">بازاریابی</a></li>
                            <li><a href="#">ویژه ها</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>حساب من</h5>
                        <ul>
                            <li><a href="#">حساب کاربری</a></li>
                            <li><a href="#">تاریخچه سفارشات</a></li>
                            <li><a href="#">لیست علاقه مندی</a></li>
                            <li><a href="#">خبرنامه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fpart-second">
            <div class="container">
                <div id="powered" class="clearfix">
                    <div class="powered_text pull-left flip">
                        <p>کپی رایت © 2016 فروشگاه شما | پارسی سازی و ویرایش توسط <a href="https://www.roxo.ir" target="_blank">روکسو</a></p>
                    </div>
                    <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/socialicons/facebook.png')}}" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/payment/payment_paypal.png')}}" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/socialicons/google_plus.png')}}" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/socialicons/pinterest.png')}}" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/socialicons/rss.png')}}" alt="RSS" title="RSS"> </a> </div>
                </div>
                <div class="bottom-row">
                    <div class="custom-text text-center">
                        <p>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.<br> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                    <div class="payments_types"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/payment/payment_paypal.png')}}" alt="paypal" title="PayPal"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/payment/payment_american.png')}}" alt="american-express" title="American Express"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/payment/payment_2checkout.png')}}" alt="2checkout" title="2checkout"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/payment/payment_maestro.png')}}" alt="maestro" title="Maestro"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/payment/payment_discover.png')}}" alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="{{asset('frontend/image/payment/payment_mastercard.png')}}" alt="mastercard" title="MasterCard"></a> </div>
                </div>
            </div>
        </div>
        <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
    </footer>
    <!--Footer End-->

</div>

<!-- JS Part Start-->
<script type="text/javascript" src="{{asset('frontend/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.easing-1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.dcjqaccordion.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>
<script !src="">
    function logoutFormSubmit(event) {
        event.preventDefault();
        document.querySelector("form#logout-form").submit();
    }
</script>
<!-- JS Part End-->
@yield('app-scripts')
</body>
</html>
