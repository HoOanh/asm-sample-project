<section class="related-product">
    <div class="container">
        <div class="product__head">
            <h1 class="main-title">Related products</h1>
        </div>

        <div class="product__main">
            <div class="row">
                <?php foreach ($productList as $item) { ?>
                    <div class="product__item">
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
                                    <a href="../details/?idProduct=<?= $item['idProduct'] ?>"><i class="fas fa-search"></i></a>
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
        </div>
    </div>
</section>