<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="Templines" name="author">
    <meta content="Viasun" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/libs.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="page-login">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__inner">
                <div class="page-header__logo"><a class="logo" href="index.html"><img src="assets/img/logo.png" alt="Viasun"></a></div>
                <div class="page-header__menu">
                    <nav class="page-nav" data-uk-navbar="">
                        <ul class="uk-navbar-nav">
                            <li><a href="01_home-cosmetic.html">Home</a></li>
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
                <div class="page-header__btn"> <a class="menu-btn" href="#offcanvas" data-uk-toggle> <img src="assets/img/icon_menu-btn.svg" alt="menu-btn"></a></div>
            </div>
        </header>
        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img src="assets/img/login-hero.jpg" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title section-hero__top_padding">My Account</h1>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-section-large uk-container uk-container-small">
                    <div class="uk-h2">Reset Password</div>
                    <form class="uk-form-stacked" action="#!" autocomplete="off">
                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Viasun">
                        <input type="hidden" name="admin_email" value="test@gmail.com">
                        <input type="hidden" name="form_subject" value="Reset Password">
                        <!-- END Hidden Required Fields -->
                        <div class="uk-margin">
                            <p>Lost your password?<br> Please enter your email or username. You will receive a link to create a new password via email.</p>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-form-label">Enter Username or Email <span class="accent-text">*</span></div>
                            <div class="uk-form-controls"><input class="uk-input uk-form-large" type="email" name="Email" autocomplete="off"></div>
                        </div>
                        <div class="uk-margin"><button class="uk-button uk-button-danger uk-button-large" type="submit">Reset Password</button></div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="page-footer">
            <div class="page-footer__inner">
                <div data-uk-grid>
                    <div class="uk-width-2-5@m">
                        <div class="page-footer__logo"><a class="logo" href="01_home-cosmetic.html"><img src="assets/img/logo-big.png" alt="Viasun"></a></div>
                        <div class="page-footer__menus">
                            <div class="uk-child-width-1-2" data-uk-grid>
                                <div>
                                    <div class="uk-h4">Quick Links</div>
                                    <ul class="uk-nav">
                                        <li> <a href="01_home-cosmetic.html"> Homepage</a></li>
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
                            <div class="payments"> <img src="assets/img/payment-1.png" alt="payment"><img src="assets/img/payment-2.png" alt="payment"><img src="assets/img/payment-3.png" alt="payment"><img src="assets/img/payment-4.png" alt="payment"><img src="assets/img/payment-5.png" alt="payment"><img src="assets/img/payment-6.png" alt="payment"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="offcanvas" data-uk-offcanvas="overlay: true; mode: slide; flip: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
                    <div>
                        <div class="uk-margin uk-margin-remove-top"><a class="logo" href="01_home-cosmetic.html"><img src="assets/img/logo.png" alt="Viasun"></a></div>
                    </div>
                    <div>
                        <div class="uk-margin">
                            <ul class="uk-nav uk-nav-default">
                                <li><a href="01_home-cosmetic.html">Home</a></li>
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
    <script src="assets/js/libs.js"></script>
    <script src="assets/js/main.js"></script>

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
