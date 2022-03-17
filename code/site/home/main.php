<?php require '../base/banner.php' ?>

<div class="benefit">
    <div class="container">
        <div class="gird">
            <div class="row">
                <div class="benefit__item col-l-3 col-c-4">
                    <div class="benefit__item-icon">
                        <img src="<?= $ASSETS_URL ?>/images/benefit/xbenefit-1.webp" alt="" />
                    </div>
                    <div class="benefit__item-content">
                        <h2 class="small-title">100% Freshness</h2>
                        <p>Most people are unaware of the less common flower</p>
                    </div>
                </div>
                <div class="benefit__item col-l-3 col-c-4">
                    <div class="benefit__item-icon">
                        <img src="<?= $ASSETS_URL ?>/images/benefit/xbenefit-2.webp" alt="" />
                    </div>
                    <div class="benefit__item-content">
                        <h2 class="small-title">Made by artist</h2>
                        <p>Most people are unaware of the less common flower</p>
                    </div>
                </div>
                <div class="benefit__item col-l-3 col-c-4">
                    <div class="benefit__item-icon">
                        <img src="<?= $ASSETS_URL ?>/images/benefit/xbenefit-3.webp" alt="" />
                    </div>
                    <div class="benefit__item-content">
                        <h2 class="small-title">Own courier</h2>
                        <p>Most people are unaware of the less common flower</p>
                    </div>
                </div>
                <div class="benefit__item col-l-3 col-c-4">
                    <div class="benefit__item-icon">
                        <img src="<?= $ASSETS_URL ?>/images/benefit/xbenefit-4.webp" alt="" />
                    </div>
                    <div class="benefit__item-content">
                        <h2 class="small-title">100% Freshness</h2>
                        <p>Most people are unaware of the less common flower</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="category">
    <div class="grid container">
        <div class="row">
            <?php foreach ($showCategory as $item) { ?>

                <div class="category__item col-l-3 col-c-4">
                    <div class="category__item-img">
                        <img src="<?= $ASSETS_URL ?>/images/<?= $item['imgUrl'] ?>" alt="" />
                    </div>
                    <div class="category__item-content">
                        <h2 class="small-title"><?= $item['nameCategory'] ?></h2>
                        <p>(25 item)</p>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>

<section class="about">
    <div class="container">
        <div class="about__head">
            <div class="about__head-title">
                <h3 class="sub-title">About Us</h3>
                <h1 class="main-title">
                    We provide all kinds of fresh flower services
                </h1>
            </div>
            <div class="about__head-content">
                <p>
                    For Heather Henson, of Boreal Blooms in Cold Lake, Alberta,
                    Canada, growing flowers that can be dried and incorporated
                    into late fall and winter floral arrangements has been a
                    game-changer. During her growing season, this farmer-florist
                    relies on a vivid palette of annuals, perennials and
                    ornamental grasses to supply her studio.
                </p>
            </div>
        </div>

        <div class="about__body">
            <div class="grid">
                <div class="row">
                    <div class="about__body-review col-l-7 col-c-4">
                        <img src="<?= $ASSETS_URL ?>/images/about-video.webp" alt="" />
                        <a class="play-btn" href="#"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="about__body-content col-l-6 col-c-4">
                        <h3 class="sub-title">Slow Flowers’ Floral Insights</h3>
                        <h1 class="main-title">
                            Dried flowers are having a renaissance
                        </h1>
                        <p>
                            This awareness has been stimulated by sustainable sourcing
                            practices and the desire on the part of North American
                            flower growers to “extend the season” beyond the last
                            frost.
                        </p>
                        <div class="btn pink-btn">
                            <a href="<?= $SITE_URL ?>/home?contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product">
    <div class="container">
        <div class="product__head">
            <h3 class="sub-title">Our flower</h3>
            <h1 class="main-title">New Arrivals</h1>

            <nav class="filter">
                <ul class="filter__list">
                    <li class="filter__link active"><a href="#">All</a></li>
                    <li class="filter__link"><a href="#">Bouquet </a></li>
                    <li class="filter__link"><a href="#">Flower box</a></li>
                    <li class="filter__link"><a href="#">Flower shelf</a></li>
                    <li class="filter__link"><a href="#">Basket of flower</a></li>
                    <li class="filter__link"><a href="#">Gift combos</a></li>
                </ul>
            </nav>
        </div>

        <div class="product__main">
            <div class="row">

                <?php foreach ($productList as $item) { ?>
                    <div class="product__item">
                        <div class="label">New</div>
                        <div class="product__item-img">
                            <img src="<?= $ASSETS_URL ?>/images/<?= $item['imgUrl'] ?>" alt="" />
                        </div>
                        <div class="product__item-content">
                            <h4 class="small-title"><?= $item['nameProduct'] ?></h4>
                            <div class="price"><?= $item['price'] ?></div>
                            <a href="#" class="cart-btn">Add to cart</a>
                        </div>
                        <div class="product__item-controls">
                            <ul>
                                <li>
                                    <a href="../details/?idProduct=<?= $item['idProduct']; ?>"><i class="fas fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="far fa-clipboard"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="far fa-heart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                <?php } ?>

            </div>

            <h3 class="view-all sub-title">
                <a href="?viewAll">View all products</a>
            </h3>
        </div>
    </div>
</section>

<section class="custom">
    <div class="container">
        <div class="custom__title">
            <h3 class="sub-title">Custom Flower</h3>
            <h2 class="special-title">
                Let our flowers make your party more perfect.
            </h2>
            <div class="btn pink-btn"><a href="#">Order Now</a></div>
            <div class="btn white-btn"><a href="#">Contact Us</a></div>
        </div>
    </div>
</section>
