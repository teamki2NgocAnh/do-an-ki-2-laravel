@extends('client.layout.master')

@section('title','blogPost')

@section('body')

    <div class="page-wrapper">

        <main class="page-main">
            <div class="section-hero">
                <div class="section-hero__bg"><img src="../../../public/frontend/img/post-hero.jpg" alt="post-hero"></div>
                <div class="section-hero__content" data-uk-scrollspy="target: &gt; *; cls: uk-animation-slide-bottom-small; delay: 500">
                    <h1 class="article-full__title section-hero__top_padding">15 Tips For a Perfect Makeup</h1>
                    <div class="article-full__info">
                        <div class="article-full__author"><img src="../../../public/frontend/img/img-blog-author.png" alt="blog-author"><span>Rebicca h. clark</span></div>
                        <div class="article-full__date"><i class="icon_calendar"></i><span>31 jan 2021</span></div>
                        <div class="article-full__category"><i class="icon_ribbon_alt"></i><span>Makeup</span></div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-section-large uk-container">
                    <article class="article-full">
                        <div class="article-full__content">
                            <p>Enim venia quis nostrud exrcit ulamco laboris niust aliquip conse reprehen derity fugiat nulla pariatur excpteur sint ipsum occaecat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laud antium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                            <div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-margin-medium" data-uk-grid data-uk-lightbox>
                                <div><a href="../../../public/frontend/img/img-article-gallery-1.jpg"><img class="uk-width-1-1" src="../../../public/frontend/img/img-article-gallery-1.jpg" alt="gallery"></a></div>
                                <div><a href="../../../public/frontend/img/img-article-gallery-2.jpg"><img class="uk-width-1-1" src="../../../public/frontend/img/img-article-gallery-2.jpg" alt="gallery"></a></div>
                            </div>
                            <p>Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, quia non numquam eius modi tempora incidunt magnam aliquam quaerat voluptatem.</p><img class="uk-margin-medium uk-width-1-1" src="../../../public/frontend/img/img-article-gallery-3.jpg" alt="gallery">
                            <ul class="uk-margin-medium list-dots">
                                <li>Enim venia quis nostrud exrcit ulamco laboris nst aliquip</li>
                                <li>Conseq reprehen derit fugiat nula pariatur excpteur</li>
                                <li>Sint ipsum occaecat. Lorem ipsum dolor sit amet ipsum konsect</li>
                                <li>Etur adipisicing elit sed do eiusmod tempor.</li>
                            </ul>
                            <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est antium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                        </div>
                        <div class="article-full__bottom" id="article-bottom">
                            <div class="widjet widjet-tags">
                                <h4 class="widjet__title">Tags</h4>
                                <ul class="tags-list">
                                    <li><a href="#!">Skincare</a></li>
                                    <li> <a href="#!">Cosmetics</a></li>
                                    <li><a href="#!">Makeup</a></li>
                                </ul>
                            </div>
                            <div class="widjet widjet-social">
                                <h4 class="widjet__title">Share</h4>
                                <ul class="social">
                                    <li><a href="#!"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="section-article-navigation">
                            <div class="article-navigation-item article-navigation-item--prev">
                                <div class="article-navigation-item__media"> <a href="05_blog-post.html"> <img src="../../../public/frontend/img/news-card-1.jpg" alt="news-card"></a></div>
                                <div class="article-navigation-item__desc">
                                    <div class="article-navigation-item__label">Prev Article</div>
                                    <div class="article-navigation-item__title"> <a href="05_blog-post.html">Top 10 Hotels And Spa to Visit</a></div>
                                </div>
                            </div>
                            <div class="article-navigation-item article-navigation-item--next">
                                <div class="article-navigation-item__media"> <a href="05_blog-post.html"> <img src="../../../public/frontend/img/news-card-2.jpg" alt="news-card"></a></div>
                                <div class="article-navigation-item__desc">
                                    <div class="article-navigation-item__label">Next Article</div>
                                    <div class="article-navigation-item__title"> <a href="05_blog-post.html">How to Maintain a Slim Body</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="section-article-reviews" id="article-reviews">
                            <div class="section-article-reviews__box">
                                <div class="uk-h2">Comments (2)</div>
                                <div class="comment-item">
                                    <div class="comment-item__user"> <img src="../../../public/frontend/img/avatar-comment-1.jpg" alt="avatar-comment"></div>
                                    <div class="comment-item__desc">
                                        <div class="comment-item__head">
                                            <div class="comment-item__user-name">Benny Willow</div>
                                            <div class="comment-item__date">February 10, 2021 at 11:30 pm</div>
                                        </div>
                                        <div class="comment-item__body">
                                            <p>Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magnid.</p>
                                        </div>
                                        <div class="comment-item__btn"><a class="uk-button uk-button-link" href="#!">Reply</a></div>
                                    </div>
                                </div>
                                <div class="comment-item">
                                    <div class="comment-item__user"> <img src="../../../public/frontend/img/avatar-comment-2.jpg" alt="avatar-comment"></div>
                                    <div class="comment-item__desc">
                                        <div class="comment-item__head">
                                            <div class="comment-item__user-name">Maria Sandy</div>
                                            <div class="comment-item__date">February 10, 2021 at 11:30 pm</div>
                                        </div>
                                        <div class="comment-item__body">
                                            <p>Et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magnid.</p>
                                        </div>
                                        <div class="comment-item__btn"><a class="uk-button uk-button-link" href="#!">Reply</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-article-reviews__form">
                                <div class="uk-h2">Leave a Reply</div>
                                <div class="section-content">
                                    <form action="#!">
                                        <!-- Hidden Required Fields -->
                                        <input type="hidden" name="project_name" value="Viasun">
                                        <input type="hidden" name="admin_email" value="test@gmail.com">
                                        <input type="hidden" name="form_subject" value="Comment">
                                        <!-- END Hidden Required Fields -->
                                        <div class="uk-grid uk-grid-small uk-child-width-1-3@s" data-uk-grid>
                                            <div><input class="uk-input uk-form-large" type="text" name="Name" placeholder="Name"></div>
                                            <div><input class="uk-input uk-form-large" type="text" name="Email" placeholder="Email"></div>
                                            <div><input class="uk-input uk-form-large" type="text" name="Website" placeholder="Website"></div>
                                            <div class="uk-width-1-1"><textarea class="uk-textarea" name="Message" placeholder="Message"></textarea></div>
                                            <div><button class="uk-button uk-button-danger uk-button-large" type="submit">Post comment</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </main>

    </div>


@endsection
