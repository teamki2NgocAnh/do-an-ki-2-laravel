
@extends('front.layout.master')

@section('title','productDefault')

@section('body')

    <div class="page-wrapper">

        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img src="public/frontend/img/product-hero.jpg" alt="home-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="section-hero__title">V-Beauty Pack</h1>
                </div>
            </div>
            <div class="section-product-info section-product-info--2">
                <div class="uk-section uk-container">
                    <div class="uk-grid uk-grid-collapse uk-child-width-1-2@l" data-uk-grid>
                        <div>
                            <div data-uk-slider>
                                <div class="uk-position-relative" tabindex="-1">
                                    <ul class="uk-slider-items uk-child-width-1-1">
                                        <li><img src="public/frontend/img/img-product-full.png" alt="img-product-full"></li>
                                        <li><img src="public/frontend/img/img-product-full.png" alt="img-product-full"></li>
                                        <li><img src="public/frontend/img/img-product-full.png" alt="img-product-full"></li>
                                    </ul><a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="section-product-info__box">
                                <div class="section-product-info__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                                    <div class="section-title section-product-info__title"><span>All-In-One Beauty pack</span>
                                        <h3>V-Beauty Pack</h3>
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
            </div>
            <div class="section-product-desc section-product-desc--2">
                <div class="uk-section uk-container">
                    <div class="section-product-desc__title section-product-desc__title_left">
                        <ul class="uk-margin-medium-bottom" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; connect: .uk-switcher">
                            <li> <a href="#">
                                    <div class="uk-h3">Description</div>
                                </a></li>
                            <li> <a href="#">
                                    <div class="uk-h3">Reviews</div>
                                </a></li>
                        </ul>
                    </div>
                    <div class="section-product-desc__content">
                        <ul class="uk-switcher">
                            <li>
                                <div class="uk-text-left">Auis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium remque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. sed quia consequuntur magni dolores.</div>
                            </li>
                            <li>
                                <div class="comment-item">
                                    <div class="comment-item__user"> <img src="public/frontend/img/avatar-comment-1.jpg" alt="avatar-comment"></div>
                                    <div class="comment-item__desc">
                                        <div class="comment-item__head">
                                            <div>
                                                <div class="comment-item__user-name">Benny Willow</div>
                                                <div class="comment-item__date">February 10, 2021 at 11:30 pm</div>
                                            </div>
                                            <div>
                                                <div class="comment-item__btn"><a class="uk-button uk-button-link" href="#!">Reply</a></div>
                                            </div>
                                        </div>
                                        <div class="comment-item__body">
                                            <p>Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magnid.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item">
                                    <div class="comment-item__user"> <img src="public/frontend/img/avatar-comment-2.jpg" alt="avatar-comment"></div>
                                    <div class="comment-item__desc">
                                        <div class="comment-item__head">
                                            <div>
                                                <div class="comment-item__user-name">Maria Sandy</div>
                                                <div class="comment-item__date">February 10, 2021 at 11:30 pm</div>
                                            </div>
                                            <div>
                                                <div class="comment-item__btn"><a class="uk-button uk-button-link" href="#!">Reply</a></div>
                                            </div>
                                        </div>
                                        <div class="comment-item__body">
                                            <p>Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magnid.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-h2">Add a Review</div>
                                <div class="section-content">
                                    <div class="uk-flex uk-flex-middle uk-margin-medium-bottom"><span>Your Rating*</span>
                                        <ul class="uk-nav uk-flex uk-margin-small-left">
                                            <li><span data-uk-icon="star"> </span></li>
                                            <li><span data-uk-icon="star"> </span></li>
                                            <li><span data-uk-icon="star"> </span></li>
                                            <li><span data-uk-icon="star"> </span></li>
                                            <li><span data-uk-icon="star"> </span></li>
                                        </ul>
                                    </div>
                                    <form action="#!">
                                        <!-- Hidden Required Fields -->
                                        <input type="hidden" name="project_name" value="Viasun">
                                        <input type="hidden" name="admin_email" value="test@gmail.com">
                                        <input type="hidden" name="form_subject" value="Comment">
                                        <!-- END Hidden Required Fields -->
                                        <div class="uk-grid uk-grid-small" data-uk-grid>
                                            <div class="uk-width-2-3@m"><textarea class="uk-textarea" name="Message" placeholder="Message"></textarea></div>
                                            <div class="uk-width-1-3@m">
                                                <div class="uk-margin-small"> <input class="uk-input uk-form-large" type="text" name="Name" placeholder="Name"></div>
                                                <div class="uk-margin-small"><input class="uk-input uk-form-large" type="text" name="Email" placeholder="Email"></div>
                                                <div class="uk-margin-small"><input class="uk-input uk-form-large" type="text" name="Website" placeholder="Website"></div>
                                            </div>
                                            <div><button class="uk-button uk-button-danger uk-button-large" type="submit">Add my review</button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-new-arrivals">
                <div class="uk-background-muted">
                    <div class="uk-section-large uk-container">
                        <div class="section-title" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500"><span>Best suiting & clothing</span>
                            <h3>Related Products</h3>
                        </div>
                        <div class="section-content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-medium">
                            <div class="slider-outline" data-uk-slider>
                                <div class="uk-position-relative" tabindex="-1">
                                    <ul class="uk-slider-items uk-grid uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l">
                                        <li>
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
                                        </li>
                                        <li>
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
                                        </li>
                                        <li>
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
                                        </li>
                                    </ul>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

@endsection

