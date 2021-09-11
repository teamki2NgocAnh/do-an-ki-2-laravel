
@extends('client.layout.master')

@section('title','home')

@section('body')

    <div class="page-wrapper">

        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img src="../../../public/frontend/img/contacts-hero.jpg" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title section-hero__top_padding">About Us</h1>
                </div>
            </div>
            <div class="section-about">
                <div class="uk-section-large uk-container">
                    <div class="uk-grid uk-child-width-1-2@m" data-uk-grid>
                        <div>
                            <div class="section-about__media _anim">
                                <div class="img-animate _anim _anim-no-repeat"><img src="../../../public/frontend/img/img-about.jpg" alt=""></div>
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
            <div class="section-slider">
                <div class="slider-first-screen">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="section-slider-item"><img src="../../../public/frontend/img/slider-slide-1.jpg" alt="slider-slide"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="section-slider-item"><img src="../../../public/frontend/img/slider-slide-2.jpg" alt="slider-slide"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="section-slider-item"> <img src="../../../public/frontend/img/slider-slide-3.jpg" alt="slider-slide"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="section-slider-item"> <img src="../../../public/frontend/img/slider-slide-4.jpg" alt="slider-slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-plus">
                <div class="uk-section uk-container">
                    <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-divider" data-uk-grid data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 300">
                        <div>
                            <div class="plus-item"><img class="plus-item__icon" src="../../../public/frontend/img/plus-item-1.png" alt="plus-item">
                                <div class="plus-item__numb">50+</div>
                                <div class="plus-item__title">Store Products</div>
                            </div>
                        </div>
                        <div>
                            <div class="plus-item"><img class="plus-item__icon" src="../../../public/frontend/img/plus-item-2.png" alt="plus-item">
                                <div class="plus-item__numb">27k+</div>
                                <div class="plus-item__title">Positive reviews</div>
                            </div>
                        </div>
                        <div>
                            <div class="plus-item"><img class="plus-item__icon" src="../../../public/frontend/img/plus-item-3.png" alt="plus-item">
                                <div class="plus-item__numb">30k</div>
                                <div class="plus-item__title">Satisfied Customers</div>
                            </div>
                        </div>
                        <div>
                            <div class="plus-item"><img class="plus-item__icon" src="../../../public/frontend/img/plus-item-4.png" alt="plus-item">
                                <div class="plus-item__numb">156+</div>
                                <div class="plus-item__title">orders in queue</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-team">
                <div class="uk-background-muted">
                    <div class="uk-section-large uk-container">
                        <div class="section-title"> <span>Best suiting & clothing</span>
                            <h3>Meet Our Team</h3>
                        </div>
                        <div class="section-content">
                            <div class="uk-position-relative" tabindex="-1">
                                <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                                    <li>
                                        <div class="team-item">
                                            <div class="team-item__media"> <img src="../../../public/frontend/img/team-item-1.jpg" alt="team-item">
                                                <ul class="social">
                                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="http://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                                    <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-item__desc">
                                                <div class="team-item__name">Kam Willianson</div>
                                                <div class="team-item__position">Shop Director</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team-item">
                                            <div class="team-item__media"> <img src="../../../public/frontend/img/team-item-2.jpg" alt="team-item">
                                                <ul class="social">
                                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="http://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                                    <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-item__desc">
                                                <div class="team-item__name">Celia Anderson</div>
                                                <div class="team-item__position">Makeup Artist</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team-item">
                                            <div class="team-item__media"> <img src="../../../public/frontend/img/team-item-3.jpg" alt="team-item">
                                                <ul class="social">
                                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="http://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                                    <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-item__desc">
                                                <div class="team-item__name">John Snowery</div>
                                                <div class="team-item__position">Product Manager</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-video">
                <div class="section-video__bg" data-uk-lightbox><a class="section-video__link" href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="YouTube"> <img src="../../../public/frontend/img/home-video.jpg" alt="video">
                        <div class="cursor"> </div>
                    </a></div>
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
        </main>

    </div>
@endsection
