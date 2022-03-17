<div class="small-hero">
    <h2 class="main-title">Product details</h2>
</div>

<section class="product-details">
    <div class="product-details__content">
        <div class="container">
            <div class="row">
                <div class="col-l-6 product-details__img">
                    <img src="<?= $ASSETS_URL ?>/images/<?= $imgUrl ?>" alt="" />
                </div>

                <div class="col-l-6 product-details__text">
                    <div class="product-details__text-title">
                        <h4 class="sub-title"><?= $nameType ?></h4>
                        <h2 class="small-title"><?= $nameProduct ?></h2>
                        <ul>
                            <li>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </li>
                            <li>03 reviews</li>
                            <li>Write a review</li>
                        </ul>
                    </div>

                    <div class="product-details__text-price"><?= $price ?></div>

                    <ul class="product-details__text-widget">
                        <li>Categories: <span><?= $nameType ?></span></li>
                        <li>Product code: <span>PM <?= $idProduct ?></span></li>
                        <li>Reward points: <span>30</span></li>
                        <li>Availability: <span>In Stock</span></li>
                    </ul>

                    <div class="product-details__btns">
                        <div class="quantity">
                            <div class="pro-qty">
                                <span class="dec qtybtn">-</span>
                                <input type="text" value="1" />
                                <span class="inc qtybtn">+</span>
                            </div>
                        </div>
                        <a href="#" class="add_btn">
                            Add To Cart
                            <span>
                                <img src="<?= $ASSETS_URL ?>/images/bag-little.webp" alt="" />
                            </span>
                        </a>
                        <a href="#" class="heart_btn">
                            <img src="<?= $ASSETS_URL ?>/images/like.webp" alt="" />
                        </a>
                    </div>

                    <div class="product-details__desc">
                        <ul class="nav-tab">
                            <li class="nav-item">
                                <a class="nav-link small-title active" href="">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link small-title" href="">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link small-title" href="">Reviews ( 03 )</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                    maecenas accumsan lacus vel facilisis.
                                </p>
                            </div>
                            <div class="tab-pane">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex,
                                    animi!
                                </p>
                            </div>
                            <div class="tab-pane">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex,
                                    animi!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- =============================== -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php require "./related_products.php" ?>