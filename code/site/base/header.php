<header class="header">
    <div class="header__logo">
        <a href="<?= $SITE_URL ?>/home"><img src="<?= $ASSETS_URL ?>/images/logo.webp" alt="" /></a>
    </div>

    <div class="icon-bars">
        <i class="fas fa-bars"></i>
    </div>

    <nav class="navbar">
        <ul class="navbar__list">
            <li class="navbar__link"><a href="<?= $SITE_URL ?>/home">Home</a></li>
            <li class="navbar__link"><a href="<?= $SITE_URL ?>/home?about">About</a></li>
            <li class="navbar__link"><a href="<?= $SITE_URL ?>/home?services">Services</a></li>
            <li class="navbar__link"><a href="<?= $SITE_URL ?>/home?shop">Shop</a></li>
            <li class="navbar__link"><a href="<?= $SITE_URL ?>/home?blog">Blog+</a></li>
            <li class="navbar__link"><a href="<?= $SITE_URL ?>/home?contact">Contact</a></li>
        </ul>

        <div class="navbar__control">
            <div class="navbar__control-search">
                <a href="#"><img src="<?= $ASSETS_URL ?>/images/search.webp" alt="" /></a>
            </div>

            <div class="navbar__control-interact">
                <a href="#"><img src="<?= $ASSETS_URL ?>/images/like.webp" alt="" /></a>
                <span>(02)</span>
            </div>

            <div class="navbar__control-interact">
                <a href="#"><img src="<?= $ASSETS_URL ?>/images/cart.webp" alt="" /></a>
                <span>(12)</span>
            </div>

            <?php require "../home/login.php" ?>
        </div>

        <div class="navbar__mark"></div>
    </nav>
</header>