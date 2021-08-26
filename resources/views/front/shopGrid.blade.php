@extends('front.layout.master')

@section('title','home')

@section('body')

    <div class="page-wrapper">

        <main class="page-main">
            <div class="page-content">
                <div class="uk-section uk-margin-large-bottom uk-container">
                    <div class="filter-head">
                        <div>SHOWING 1–6 OF 7 RESULTS</div>
                        <div> <select class="js-select right">
                                <option value="Sort By Popularity">Sort By Popularity</option>
                                <option value="Sort By Average Rating">Sort By Average Rating</option>
                                <option value="Sort By Latest">Sort By Latest</option>
                                <option value="Sort By Price: Low to High">Sort By Price: Low to High</option>
                                <option value="Sort By Price: High to Low">Sort By Price: High to Low</option>
                            </select></div>
                    </div>
                    <div class="uk-grid uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s" data-uk-grid data-uk-scrollspy="target: &gt; div; cls: uk-animation-slide-bottom-small; delay: 300">
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-7.png" alt="V-Beauty Pack" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-8.png" alt="Anti-Aging Cream" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-9.png" alt="Hair Style Gel" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-10.png" alt="V-Bath Saltish" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-11.png" alt="Beauty Glow Serum" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-12.png" alt="Skinny Lotion" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-7.png" alt="V-Beauty Pack" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-8.png" alt="Anti-Aging Cream" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-9.png" alt="Hair Style Gel" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-10.png" alt="V-Bath Saltish" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-11.png" alt="Beauty Glow Serum" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-card product-card--2">
                                <div class="product-card__box">
                                    <div class="product-card__media"> <img class="product-card__img" src="public/frontend/img/img-product-12.png" alt="Skinny Lotion" />
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
                                        <div class="product-card__stars">
                                            <ul>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="fas fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                                <li><i class="far fa-star"> </i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="uk-pagination uk-flex-center uk-margin-large-top">
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </main>

    </div>

@endsection
