@extends('client.layout.master')

@section('title','product')

@section('body')

<div class="page-wrapper">
    <main class="page-main">
        <div class="section-hero">
            <div class="section-hero__bg"><img src="public/frontend/assets/contacts-hero.jpg" alt="home-hero"></div>
            <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                <h1 class="section-hero__title section-hero__top_padding">Anti-Aging Cream</h1>
                <p class="section-hero__subtitle">By Viasun</p>
            </div>
        </div>
        <div class="section-product-info">
            <div class="uk-grid uk-grid-collapse uk-child-width-1-2@l" data-uk-grid>
                <div class="uk-flex-last@l">
                    <div data-uk-slider>
                        <div class="uk-position-relative" tabindex="-1">
                            <ul class="uk-slider-items uk-child-width-1-1">
                                <li><img src="public/frontend/assets/img-product-full.jpg" alt="img-product-full"></li>
                                <li><img src="public/frontend/assets/img-product-full.jpg" alt="img-product-full"></li>
                                <li><img src="public/frontend/assets/img-product-full.jpg" alt="img-product-full"></li>
                            </ul>
                            <div class="uk-position-bottom-center uk-position-medium">
                                <ul class="uk-slider-nav uk-dotnav"></ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-flex-first@l">
                    <div class="section-product-info__box">
                        <div class="section-product-info__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                            <div class="section-title section-product-info__title"><span>Look Beautiful At Any Age</span>
                                <h3>Anti-Aging Cream</h3>
                            </div>
                            <div class="section-product-info__intro">
                                <p>Enim venia quis nostrud exrcit ulamco laboris com reprehen derit fugiat nula pariatur sint ipsum caecat. Lorem ipsum dolor am etur adipisicing elit sed tempor.</p>
                            </div>
                            <div class="section-product-info__price"> <sup>$</sup><span>135.00</span></div>
                            <div class="section-product-info__size">
                                <ul>
                                    <li><label><input type="radio" name="size"><span>75ml</span></label></li>
                                    <li><label><input type="radio" name="size" checked><span>150ml</span></label></li>
                                    <li><label><input type="radio" name="size"><span>200ml</span></label></li>
                                </ul>
                            </div>
                            <div class="section-product-info__btns">
                                <div class="jq-number input-col">
                                    <div class="jq-number__spin minus"></div>
                                    <div class="jq-number__field"><input class="input-col" type="number" value="1" min="1"></div>
                                    <div class="jq-number__spin plus"></div>
                                </div><button class="uk-button uk-button-danger uk-button-large" type="button">Add to bag </button>
                            </div>
                            <div class="section-product-info__category">Categories: Hair, Makeup, Skin Care</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-product-desc">
            <div class="uk-section-large uk-container uk-container-small">
                <div class="section-product-desc__title section-product-desc__title_center">
                    <ul>
                        <li class="ankr-active">
                            <div class="uk-h3">Description</div>
                        </li>
                        <li>
                            <div class="uk-h3"><a href="#reviews" data-uk-scroll> Reviews</a></div>
                        </li>
                    </ul>
                </div>
                <div class="uk-text-center">Auis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium remque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. sed quia consequuntur magni dolores.</div>
            </div>
        </div>
        <div class="section-new-arrivals">
            <div class="uk-background-muted">
                <div class="uk-section-large uk-container">
                    <div class="section-title" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500"><span>Best suiting & clothing</span>
                        <h3>Shop New Arrivals</h3>
                    </div>
                    <div class="section-content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-medium">
                        <div class="slider-outline" data-uk-slider>
                            <div class="uk-position-relative" tabindex="-1">
                                <ul class="uk-slider-items uk-grid uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l">
                                    <li>
                                        <div class="product-card">
                                            <div class="product-card__box">
                                                <div class="product-card__media"> <img class="product-card__img" src="public/frontend/assets/img-product-1.jpg" alt="V-Beauty Pack" />
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
                                    </li>
                                    <li>
                                        <div class="product-card">
                                            <div class="product-card__box">
                                                <div class="product-card__media"> <img class="product-card__img" src="public/frontend/assets/img-product-2.jpg" alt="Anti-Aging Cream" />
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
                                    </li>
                                    <li>
                                        <div class="product-card">
                                            <div class="product-card__box">
                                                <div class="product-card__media"> <img class="product-card__img" src="public/frontend/assets/img-product-3.jpg" alt="Hair Style Gel" />
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
                                    </li>
                                </ul>
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-reviews uk-margin-large-bottom" id="reviews">
            <div class="uk-section-large uk-container">
                <div data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
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
