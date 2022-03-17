<div class="small-hero">
    <h2 class="main-title">Shop</h2>
</div>

<section class="product">
    <div class="container">
        <div class="product__control">
            <div class="product__control-choose">
                <i class="fas fa-bars"></i>
                <p>Showing 1–9 of 14 results</p>
            </div>
            <div class="product__control-sort">
                <div class="sel sel--black-panther">
                    <select name="select-profession" id="select-profession">
                        <option value="">Sort Product</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="number">1-9</option>
                        <option value="character">A-Z</option>
                    </select>
                </div>
            </div>
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
                <a href="#">Load More Products</a>
            </h3>
        </div>
    </div>
</section>