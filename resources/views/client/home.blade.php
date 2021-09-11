@extends('client.layout.master')

@section('title','home')

@section('body')

    <div class="page-wrapper">
        <main class="page-main">
            <div class="section-hero section-home">
                <div class="section-hero__bg"><img src="/frontend/img/home-hero.jpg" alt="home-hero"></div>
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
                                <div class="section-slider-item"><img src="/frontend/img/slider-slide-1.jpg" alt="slider-slide"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="section-slider-item"><img src="/frontend/img/slider-slide-2.jpg" alt="slider-slide"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="section-slider-item"> <img src="/frontend/img/slider-slide-3.jpg" alt="slider-slide"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="section-slider-item"> <img src="/frontend/img/slider-slide-4.jpg" alt="slider-slide"></div>
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
                                <div class="img-animate _anim _anim-no-repeat"><img src="/frontend/img/img-about.jpg" alt=""></div>
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
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="/frontend/img/shop-categories-1.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Skin Care</span></a></div>
                            </div>
                            <div>
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="/frontend/img/shop-categories-2.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Eye Brows</span></a></div>
                            </div>
                            <div>
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="/frontend/img/shop-categories-3.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Face</span></a></div>
                            </div>
                            <div>
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="/frontend/img/shop-categories-4.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Hair Care</span></a></div>
                            </div>
                            <div>
                                <div class="shop-categories-unit"><a class="shop-categories-unit__link" href="02_shop.html"> <span class="shop-categories-unit__icon"><img src="/frontend/img/shop-categories-5.png" alt="shop-categories"></span><span class="shop-categories-unit__title">Makeup</span></a></div>
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

                                        @foreach( $cosmetics as $cosmetic)
                                    <div class="product-card">
                                        <div class="product-card__box">

                                            <div class="product-card__media">
                                                        <img class="product-card__img" src="/frontend/img/products/{{$cosmetic->path}}" alt="V-Beauty Pack"/>

                                                <div class="product-card__btns">
                                                    <ul>
                                                        <li><a href="{{url("/detail", $cosmetic->id)}}"><span>Add to cart</span><i class="fas fa-shopping-basket"></i></a></li>
                                                        <li><a href="#"><span>zoom</span><i class="fas fa-search-plus"></i></a></li>
                                                        <li><a href="#"><span>Add to wishlist</span><i class="fas fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="product-card__info">

                                                <div class="product-card__title"> <a href="03_product.html">{{$cosmetic->name}}</a><span>{{$cosmetic->tag}}</span></div>
                                                <div class="product-card__price">
                                                    @if($cosmetic->price != null)
                                                        ${{$cosmetic->price}}

                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-video">
                <div class="section-video__bg" data-uk-lightbox><a class="section-video__link" href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="YouTube"> <img src="/frontend/img/home-video.jpg" alt="video">
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
                                            <div class="swiper-slide"><img src="/frontend/img/slider-info-1.jpg" alt="slider-info"></div>
                                            <div class="swiper-slide"><img src="/frontend/img/slider-info-2.jpg" alt="slider-info"></div>
                                            <div class="swiper-slide"><img src="/frontend/img/slider-info-1.jpg" alt="slider-info"></div>
                                            <div class="swiper-slide"><img src="/frontend/img/slider-info-2.jpg" alt="slider-info"></div>
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
                        <div class="section-newsletter__img"> <img src="/frontend/img/img-newsletter.jpg" alt="img-newsletter"></div>
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
                                <div class="instagram-item instagram-item-1" data-uk-scrollspy="cls:uk-animation-slide-left-small"><img src="/frontend/img/instagram-1.jpg" alt="instagram"></div>
                                <div class="instagram-item instagram-item-2" data-uk-scrollspy="cls:uk-animation-slide-left-small; delay: 200"><img src="/frontend/img/instagram-2.jpg" alt="instagram"></div>
                            </div>
                            <div class="uk-width-1-4@m uk-width-1-2 uk-flex-last@m">
                                <div class="instagram-item instagram-item-4" data-uk-scrollspy="cls:uk-animation-slide-right-small; delay: 600"><img src="/frontend/img/instagram-4.jpg" alt="instagram"></div>
                                <div class="instagram-item instagram-item-5" data-uk-scrollspy="cls:uk-animation-slide-right-small; delay: 800"><img src="/frontend/img/instagram-5.jpg" alt="instagram"></div>
                            </div>
                            <div class="uk-width-expand@m">
                                <div class="instagram-item instagram-item-3" data-uk-scrollspy="cls:uk-animation-fade; delay: 400"><img src="/frontend/img/instagram-3.jpg" alt="instagram"></div>
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
                                        @foreach($blogs as $blog )
                                        <li>
                                            <div class="news-card">
                                                <div class="news-card__media"> <a href="05_blog-post.html"><img src="/frontend/img/{{$blog ->images}}" alt="15 Tips For a Perfect Makup" /></a></div>
                                                <div class="news-card__body">
                                                    <div class="news-card__info"> <span class="news-card__category"> {{$blog -> category}} </span><span class="news-card__date">{{date('M d, Y',strtotime($blog->created_at))}}</span></div>
                                                    <div class="news-card__title"> <a href="05_blog-post.html">{{$blog -> title}} </a></div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
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

    </div>

@endsection
