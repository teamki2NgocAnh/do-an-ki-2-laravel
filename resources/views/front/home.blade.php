<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Home page</title>
    <meta content="Templines" name="author">
    <meta content="Viasun" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="public/frontend/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="public/frontend/css/libs.min.css">
    <link rel="stylesheet" href="public/frontend/css/main.css">
</head>

<body class="page-home">
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->
    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__inner">
                <div class="page-header__logo"><a class="logo" href="index.html"><img src="public/frontend/img/logo.png" alt="Viasun"></a></div>
                <div class="page-header__menu">
                    <nav class="page-nav" data-uk-navbar="">
                        <ul class="uk-navbar-nav">
                            <li><a href="home.blade.php">Home</a></li>
                            <li><a href="02_shop.html">Shop</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="02_shop.html">Creative Shop Style</a></li>
                                        <li> <a href="07_shop-default.html">Shop Sidebar Style</a></li>
                                        <li><a href="13_shop-grid.html">Shop Wide Style</a></li>
                                        <li><a href="08_product-default.html">Default Product Page</a></li>
                                        <li><a href="03_product.html">Creative Product Page</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="12_about.html">About</a></li>
                            <li><a href="03_product.html">Pages</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="09_login.html">Login Page</a></li>
                                        <li><a href="10_reset-password.html">Reset password</a></li>
                                        <li><a href="page-typography.html">Typography Page</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="04_blog-main.html">Blog</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li> <a href="04_blog-main.html">Blog main</a></li>
                                        <li><a href="05_blog-post.html">Blog post 1</a></li>
                                        <li><a href="11_blog-post-new.html">Blog post 2</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="06_contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="page-header__btn"> <a class="menu-btn" href="#offcanvas" data-uk-toggle> <img src="public/frontend/img/icon_menu-btn.svg" alt="menu-btn"></a></div>
            </div>
        </header>
        <main class="page-main">
            <div class="section-hero section-home">
                <div class="section-hero__bg"><img src="public/frontend/img/home-hero.jpg" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title">Look & Feel Modern</h1>
                    <p class="section-hero__subtitle">Cosmetics By Viasun</p>
                </div>
            </div>
            <div class="section-slider">
                <div class="slider-first-screen">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="section-slider-item"><img src="public/frontend/img/slider-slide-1.jpg" alt="slider-slide"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="section-slider-item"><img src="public/frontend/img/slider-slide-2.jpg" alt="slider-slide"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="section-slider-item"> <img src="public/frontend/img/slider-slide-3.jpg" alt="slider-slide"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="section-slider-item"> <img src="public/frontend/img/slider-slide-4.jpg" alt="slider-slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-about">
                <div class="uk-section-large uk-container">
                    <div class="uk-grid uk-child-width-1-2@m" data-uk-grid>
                        <div>
                            <div class="section-about__media _anim">
                                <div class="img-animate _anim _anim-no-repeat"><img src="public/frontend/img/img-about.jpg" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="section-about__desc" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                                <div class="section-title"><span>viasun cosmetics</span>
                                    <h3>Making Every Face Perfect</h3>
                                </div>
                                <div class="section-content">
                                    <p>Enim venia quis nostrud exrcit ulamco laboris nst aliquip com conseq reprehen derit fugiat nula pariatur excpteur sint ipsum occaecat. Lorem ipsum dolor sit amet, consect etur adipisicing elit sed do eiusmod tempor.</p><a class="uk-button uk-button-danger uk-button-large" href="02_shop.html">view collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-shop-categories">
                <div class="uk-section uk-container">

                    <div class="section-content">
                        <div class="uk-grid uk-child-width-1-5@m uk-child-width-1-2 uk-flex-center" data-uk-grid data-uk-scrollspy="target: &gt; div; cls: uk-animation-slide-bottom-small; delay: 300">
                            <div>
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="public/frontend/img/shop-categories-1.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Skin Care</span></a></div>
                            </div>
                            <div>
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="public/frontend/img/shop-categories-2.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Eye Brows</span></a></div>
                            </div>
                            <div>
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="public/frontend/img/shop-categories-3.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Face</span></a></div>
                            </div>
                            <div>
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="public/frontend/img/shop-categories-4.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Hair Care</span></a></div>
                            </div>
                            <div>
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="public/frontend/img/shop-categories-5.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Makeup</span></a></div>
                            </div>
                        </div>
                        <div class="section-shop-categories__desc" data-uk-scrollspy="target: &gt; div; cls: uk-animation-slide-bottom-small; delay: 300">
                            <div class="section-shop-categories__title">Discover the best illuminating Eye Brows cosmetics</div>
                            <div class="section-shop-categories__text">Nostrud exercitation ullamco laboris nist aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor fugiat nulla pariatur. Excepteur we care for you sint cupidatat non ipsum sed dolor proident.</div>
                            <div class="section-shop-categories__btn"><a class="uk-button uk-button-danger uk-button-large" href="02_shop.html">Start shopping</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-new-arrivals">
                <div class="uk-background-muted">
                    <div class="uk-section-large uk-container">
                        <div class="section-title" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300"><span>Best suiting & clothing</span>
                            <h3>Shop New Arrivals</h3>
                        </div>
                        <div class="section-content">
                            <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid data-uk-scrollspy="target: &gt; div; cls: uk-animation-slide-bottom-small; delay: 300">
                                <div>
                                    <div class="product-card">
                                        <div class="product-card__box">
                                            <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-1.jpg" alt="V-Beauty Pack" />
                                                <div class="product-card__btns">
                                                    <ul>
                                                        <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                        <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                        <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__title"> <a href="03_product.html">V-Beauty Pack</a><span>Face Lotion</span></div>
                                                <div class="product-card__price">$25.65</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-card">
                                        <div class="product-card__box">
                                            <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-2.jpg" alt="Anti-Aging Cream" />
                                                <div class="product-card__badge new">new</div>
                                                <div class="product-card__btns">
                                                    <ul>
                                                        <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                        <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                        <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__title"> <a href="03_product.html">Anti-Aging Cream</a><span>Makeup</span></div>
                                                <div class="product-card__price">$349.50</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-card">
                                        <div class="product-card__box">
                                            <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-3.jpg" alt="Hair Style Gel" />
                                                <div class="product-card__btns">
                                                    <ul>
                                                        <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                        <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                        <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__title"> <a href="03_product.html">Hair Style Gel</a><span>Hair Care</span></div>
                                                <div class="product-card__price">$90.25</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-card">
                                        <div class="product-card__box">
                                            <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-4.jpg" alt="V-Bath Saltish" />
                                                <div class="product-card__btns">
                                                    <ul>
                                                        <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                        <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                        <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__title"> <a href="03_product.html">V-Bath Saltish</a><span>Healthy Bath</span></div>
                                                <div class="product-card__price">$129.50</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-card">
                                        <div class="product-card__box">
                                            <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-5.jpg" alt="Beauty Glow Serum" />
                                                <div class="product-card__btns">
                                                    <ul>
                                                        <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                        <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                        <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__title"> <a href="03_product.html">Beauty Glow Serum</a><span>Makeup</span></div>
                                                <div class="product-card__price">$64.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-card">
                                        <div class="product-card__box">
                                            <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-6.jpg" alt="Skinny Lotion" />
                                                <div class="product-card__btns">
                                                    <ul>
                                                        <li><a href="#"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                        <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                        <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__title"> <a href="03_product.html">Skinny Lotion</a><span>Skin Care</span></div>
                                                <div class="product-card__price">$49.50</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-video">
                <div class="section-video__bg" data-uk-lightbox><a class="section-video__link" href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="YouTube"> <img src="public/frontend/img/home-video.jpg" alt="video">
                        <div class="cursor"> </div>
                    </a></div>
            </div>
            <div class="section-info">
                <div class="uk-section-large uk-container uk-container-large">
                    <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                        <div>
                            <div class="section-info__desc" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                                <div class="section-title"><span>makeup spotlights</span>
                                    <h3>Our Special Care<br> Cosmetic Products</h3>
                                </div>
                                <div class="section-content">
                                    <p>Enim venia quis nostrud exrcit ulamco laboris nst aliquip conseq reprehen derit fugiat nula pariatur excpteur sint ipsum occaecat. Lorem ipsum dolor sit amet sed consectetur.</p><a class="uk-button uk-button-danger uk-button-large" href="02_shop.html">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="section-info__slider">
                                <div class="slider-info">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="public/frontend/img/slider-info-1.jpg" alt="slider-info"></div>
                                            <div class="swiper-slide"><img src="public/frontend/img/slider-info-2.jpg" alt="slider-info"></div>
                                            <div class="swiper-slide"><img src="public/frontend/img/slider-info-1.jpg" alt="slider-info"></div>
                                            <div class="swiper-slide"><img src="public/frontend/img/slider-info-2.jpg" alt="slider-info"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-newsletter">
                <div class="uk-grid uk-grid-collapse uk-child-width-1-2@l" data-uk-grid>
                    <div>
                        <div class="section-newsletter__form" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                            <div class="section-newsletter__title"><span>Best suiting & clothing</span>
                                <h3>Get Viasun Newsletter<br> & Stay Updated With Us</h3>
                            </div>
                            <form action="#!">
                                <!-- Hidden Required Fields -->
                                <input type="hidden" name="project_name" value="Viasun">
                                <input type="hidden" name="admin_email" value="test@gmail.com">
                                <input type="hidden" name="form_subject" value="Newsletter">
                                <!-- END Hidden Required Fields --><input type="text" placeholder="youremail@example.com"><input class="uk-button uk-button-danger" type="submit" value="Subscribe now">
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="section-newsletter__img"> <img src="public/frontend/img/img-newsletter.jpg" alt="img-newsletter"></div>
                    </div>
                </div>
            </div>
            <div class="section-instagram">
                <div class="uk-section uk-container uk-container-large">
                    <div class="section-title" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300"><span>Follw our gallery</span>
                        <h3>Instagram<span data-uk-icon="instagram"></span></h3>
                    </div>
                    <div class="section-content">
                        <div class="uk-grid uk-grid-small uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-4@m uk-width-1-2">
                                <div class="instagram-item instagram-item-1" data-uk-scrollspy="cls:uk-animation-slide-left-small"><img src="public/frontend/img/instagram-1.jpg" alt="instagram"></div>
                                <div class="instagram-item instagram-item-2" data-uk-scrollspy="cls:uk-animation-slide-left-small; delay: 200"><img src="public/frontend/img/instagram-2.jpg" alt="instagram"></div>
                            </div>
                            <div class="uk-width-1-4@m uk-width-1-2 uk-flex-last@m">
                                <div class="instagram-item instagram-item-4" data-uk-scrollspy="cls:uk-animation-slide-right-small; delay: 600"><img src="public/frontend/img/instagram-4.jpg" alt="instagram"></div>
                                <div class="instagram-item instagram-item-5" data-uk-scrollspy="cls:uk-animation-slide-right-small; delay: 800"><img src="public/frontend/img/instagram-5.jpg" alt="instagram"></div>
                            </div>
                            <div class="uk-width-expand@m">
                                <div class="instagram-item instagram-item-3" data-uk-scrollspy="cls:uk-animation-fade; delay: 400"><img src="public/frontend/img/instagram-3.jpg" alt="instagram"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-reviews">
                <div class="uk-section-large uk-container">
                    <div data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                        <div class="section-reviews__title">What Customers Saying</div>
                        <div class="uk-position-relative" tabindex="-1" data-uk-slider>
                            <ul class="uk-slider-items uk-grid uk-child-width-1-1">
                                <li>
                                    <blockquote>
                                        <p data-uk-slideshow-parallax="x: 300,-300">“The right place to buy cosmetic products with luxury & stylish, - The unbeaten price & uncompromising quality.“</p><cite data-uk-slideshow-parallax="x: 200,-200">Sadia O’Conner, USA</cite>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p data-uk-slideshow-parallax="x: 300,-300">“The right place to buy cosmetic products with luxury & stylish, - The unbeaten price & uncompromising quality.“</p><cite data-uk-slideshow-parallax="x: 200,-200">Sadia O’Conner, USA</cite>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p data-uk-slideshow-parallax="x: 300,-300">“The right place to buy cosmetic products with luxury & stylish, - The unbeaten price & uncompromising quality.“</p><cite data-uk-slideshow-parallax="x: 200,-200">Sadia O’Conner, USA</cite>
                                    </blockquote>
                                </li>
                            </ul>
                            <div class="uk-visible@m"><a class="uk-position-center-left" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-center-right" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a></div>
                            <div class="uk-hidden@m">
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-new-arrivals section-news-and-posts">
                <div class="uk-background-muted">
                    <div class="uk-section-large uk-container">
                        <div class="section-title" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300"><span>viasun Latest happenings</span>
                            <h3>Articles From Blog</h3>
                        </div>
                        <div class="section-content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                            <div data-uk-slider>
                                <div class="uk-position-relative" tabindex="-1">
                                    <ul class="uk-slider-items uk-grid uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                        <li>
                                            <div class="news-card">
                                                <div class="news-card__media"> <a href="05_blog-post.html"><img src="public/frontend/img/news-card-1.jpg" alt="15 Tips For a Perfect Makup" /></a></div>
                                                <div class="news-card__body">
                                                    <div class="news-card__info"> <span class="news-card__category"> makeup </span><span class="news-card__date"> 16 jan 2021</span></div>
                                                    <div class="news-card__title"> <a href="05_blog-post.html">15 Tips For a Perfect Makup </a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-card">
                                                <div class="news-card__media"> <a href="05_blog-post.html"><img src="public/frontend/img/news-card-2.jpg" alt="How to Maintain a Slim Body" /></a></div>
                                                <div class="news-card__body">
                                                    <div class="news-card__info"> <span class="news-card__category"> Fitness </span><span class="news-card__date"> 31 jan 2021</span></div>
                                                    <div class="news-card__title"> <a href="05_blog-post.html">How to Maintain a Slim Body </a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-card">
                                                <div class="news-card__media"> <a href="05_blog-post.html"><img src="public/frontend/img/news-card-3.jpg" alt="Attend Any Event With Full Spirit" /></a></div>
                                                <div class="news-card__body">
                                                    <div class="news-card__info"> <span class="news-card__category"> health </span><span class="news-card__date"> 25 Feb 2021</span></div>
                                                    <div class="news-card__title"> <a href="05_blog-post.html">Attend Any Event With Full Spirit </a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-card">
                                                <div class="news-card__media"> <a href="05_blog-post.html"><img src="public/frontend/img/news-card-4.jpg" alt="Top 10 Spa And Hotels to Visit" /></a></div>
                                                <div class="news-card__body">
                                                    <div class="news-card__info"> <span class="news-card__category"> makeup </span><span class="news-card__date"> 16 jan 2021</span></div>
                                                    <div class="news-card__title"> <a href="05_blog-post.html">Top 10 Spa And Hotels to Visit </a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"> </ul>
                            </div>
                            <div class="uk-margin-medium-top uk-text-center"><a class="uk-button uk-button-default uk-button-large" href="04_blog-main.html">Read full blog </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer">
            <div class="page-footer__inner">
                <div data-uk-grid>
                    <div class="uk-width-2-5@m">
                        <div class="page-footer__logo"><a class="logo" href="home.blade.php"><img src="public/frontend/img/logo-big.png" alt="Viasun"></a></div>
                        <div class="page-footer__menus">
                            <div class="uk-child-width-1-2" data-uk-grid>
                                <div>
                                    <div class="uk-h4">Quick Links</div>
                                    <ul class="uk-nav">
                                        <li> <a href="home.blade.php"> Homepage</a></li>
                                        <li> <a href="/page-typography.html"> About Viasun</a></li>
                                        <li> <a href="/03_product.html"> Our Products</a></li>
                                        <li> <a href="/06_contact.html"> Contact us</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="uk-h4">Get Support</div>
                                    <ul class="uk-nav">
                                        <li> <a href="/page-typography.html">My Account</a></li>
                                        <li> <a href="/page-typography.html">Order History</a></li>
                                        <li> <a href="/page-typography.html">Shipping Policy</a></li>
                                        <li> <a href="/page-typography.html">Promotions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-3-5@m">
                        <div class="page-footer__text">
                            <p>Enim venia quis nostrud exrcit ulamco laboris nst aliquipas conseqa reprehen derit eu fugiat nula pariatur. Lorem ipsum dolor sitya amet consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="page-footer__social">
                            <div class="uk-h3">Follow Us</div>
                            <ul class="social">
                                <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="http://www.vimeo.com" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
                                <li><a href="http://www.google-plus.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="page-footer__bottom">
                            <div class="copy">(c) 2021 — All rights reserved.</div>
                            <div class="payments"> <img src="public/frontend/img/payment-1.png" alt="payment"><img src="public/frontend/img/payment-2.png" alt="payment"><img src="public/frontend/img/payment-3.png" alt="payment"><img src="public/frontend/img/payment-4.png" alt="payment"><img src="public/frontend/img/payment-5.png" alt="payment"><img src="public/frontend/img/payment-6.png" alt="payment"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="offcanvas" data-uk-offcanvas="overlay: true; mode: slide; flip: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
                    <div>
                        <div class="uk-margin uk-margin-remove-top"><a class="logo" href="home.blade.php"><img src="public/frontend/img/logo.png" alt="Viasun"></a></div>
                    </div>
                    <div>
                        <div class="uk-margin">
                            <ul class="uk-nav uk-nav-default">
                                <li><a href="home.blade.php">Home</a></li>
                                <li><a href="02_shop.html">Shop</a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li> <a href="07_shop-default.html">Default Shop Style</a></li>
                                            <li><a href="02_shop.html">Creative Shop Style</a></li>
                                            <li><a href="13_shop-grid.html">All Products</a></li>
                                            <li><a href="03_product.html">Default Product Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="03_product.html">Collections</a></li>
                                <li><a href="12_about.html">About</a></li>
                                <li><a href="04_blog-main.html">Blog</a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li> <a href="04_blog-main.html">Blog main</a></li>
                                            <li><a href="05_blog-post.html">Blog post</a></li>
                                            <li><a href="11_blog-post-new.html">Blog post new</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="06_contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="social-block">
                        <p>Tempor incididunt ut labore sed low dolore magna aliqua uet enim ad tempor veniam anety.</p>
                        <ul class="social">
                            <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://www.vimeo.com" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="http://www.google-plus.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-modal-full uk-modal" id="modal-search" data-uk-modal>
                <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport><button class="uk-modal-close-full" type="button" data-uk-close></button>
                    <form class="uk-search uk-search-large"><input class="uk-search-input uk-text-center" type="search" placeholder="Search" autofocus></form>
                </div>
            </div>
        </footer>
    </div>

    <script src="public/frontend/js/libs.js"></script>
    <script src="public/frontend/js/main.js"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(82984270, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });

    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/82984270" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

</body>

</html>
