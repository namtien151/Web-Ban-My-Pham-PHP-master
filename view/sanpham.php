<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">
                        <ol class="breadcrumb justify-content-center justify-content-md-start">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">Products</li>
                        </ol>
                        <h2 class="page-header-title"><?= $tendm ?></h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-end">Showing 09 Results</h5>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row justify-content-between flex-xl-row-reverse">
                <div class="col-xl-9">
                    <div class="row g-3 g-sm-6">
                        <?php
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=" . $MaChiTietSP;
                            $hinh = $img_path . $AnhDaiDien;
                            echo '<div class="col-6 col-lg-4 col-xl-4 mb-4 mb-sm-8">
                                                                <!--== Start Product Item ==-->
                                                                <div class="product-item product-st3-item">
                                                                    <div class="product-thumb">
                                                                        <a class="d-block" href="' . $linksp . '">
                                                                            <img src="' . $hinh . '" width="370" height="450" alt="Image-HasTech">
                                                                        </a>
                                                                        <span class="flag-new">new</span>
                                                                        <div class="product-action">
                                                                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                                                <i class="fa fa-expand"></i>
                                                                            </button>
                                                                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                                                <span>Add to cart</span>
                                                                            </button>
                                                                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                                                <i class="fa fa-heart-o"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-info">
                                                                        <div class="product-rating">
                                                                            <div class="rating">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-half-o"></i>
                                                                            </div>
                                                                            <div class="reviews">150 reviews</div>
                                                                        </div>
                                                                        <h4 class="title"><a href="' . $hinh . '">' . $TenSP . '</a></h4>
                                                                        <div class="prices">
                                                                            <span class="price">$' . $GiaSP . '</span>
                                                                            <span class="price-old">300.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-action-bottom">
                                                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                                            <i class="fa fa-expand"></i>
                                                                        </button>
                                                                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                                            <i class="fa fa-heart-o"></i>
                                                                        </button>
                                                                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                                            <span>Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <!--== End prPduct Item ==-->
                                                            </div>';
                        }
                        ?>

                        <div class="col-12">
                            <ul class="pagination justify-content-center me-auto ms-auto mt-5 mb-10">
                                <li class="page-item">
                                    <a class="page-link previous" href="product.html" aria-label="Previous">
                                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="product.html">01</a></li>
                                <li class="page-item"><a class="page-link" href="product.html">02</a></li>
                                <li class="page-item"><a class="page-link" href="product.html">03</a></li>
                                <li class="page-item"><a class="page-link" href="product.html">....</a></li>
                                <li class="page-item">
                                    <a class="page-link next" href="product.html" aria-label="Next">
                                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                include "boxleft.php";
                ?>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <section>
        <div class="container">
            <!--== Start Product Category Item ==-->
            <a href="product.html" class="product-banner-item">
                <img src="view/assets/images/shop/banner/7.webp" width="1170" height="240" alt="Image-HasTech">
            </a>
            <!--== End Product Category Item ==-->
        </div>
    </section>
    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="title">Related Products</h2>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n10">
                <div class="col-12">
                    <div class="swiper related-product-slide-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide mb-8">
                                <!--== Start Product Item ==-->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a class="d-block" href="product-details.html">
                                            <img src="view/assets/images/shop/4.webp" width="370" height="450" alt="Image-HasTech">
                                        </a>
                                        <span class="flag-new">new</span>
                                        <div class="product-action">
                                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                <i class="fa fa-expand"></i>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                <span>Add to cart</span>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating">
                                            <div class="rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="reviews">150 reviews</div>
                                        </div>
                                        <h4 class="title"><a href="product-details.html">Readable content DX22</a></h4>
                                        <div class="prices">
                                            <span class="price">$210.00</span>
                                            <span class="price-old">300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!--== End prPduct Item ==-->
                            </div>
                            <div class="swiper-slide mb-8">
                                <!--== Start Product Item ==-->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a class="d-block" href="product-details.html">
                                            <img src="view/assets/images/shop/5.webp" width="370" height="450" alt="Image-HasTech">
                                        </a>
                                        <span class="flag-new">new</span>
                                        <div class="product-action">
                                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                <i class="fa fa-expand"></i>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                <span>Add to cart</span>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating">
                                            <div class="rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="reviews">150 reviews</div>
                                        </div>
                                        <h4 class="title"><a href="product-details.html">Readable content DX22</a></h4>
                                        <div class="prices">
                                            <span class="price">$210.00</span>
                                            <span class="price-old">300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!--== End prPduct Item ==-->
                            </div>
                            <div class="swiper-slide mb-8">
                                <!--== Start Product Item ==-->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a class="d-block" href="product-details.html">
                                            <img src="view/assets/images/shop/6.webp" width="370" height="450" alt="Image-HasTech">
                                        </a>
                                        <span class="flag-new">new</span>
                                        <div class="product-action">
                                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                <i class="fa fa-expand"></i>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                <span>Add to cart</span>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating">
                                            <div class="rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="reviews">150 reviews</div>
                                        </div>
                                        <h4 class="title"><a href="product-details.html">Readable content DX22</a></h4>
                                        <div class="prices">
                                            <span class="price">$210.00</span>
                                            <span class="price-old">300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!--== End prPduct Item ==-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->
</main>