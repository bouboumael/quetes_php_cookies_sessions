<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                        <?php if (isset($_SESSION['cart']) && $_SESSION['cart'][$id] !== 0): ?>
                            <a href="?remove_to_cart=<?= $id; ?>" class="btn btn-danger">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> remove to cart
                            </a>
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"> <?= $_SESSION['cart'][$id] ?? '' ?></span>
                        <?php endif ?>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>