<?php
require 'inc/head.php';
require_once 'inc/data/products.php'
?>
<?php
if (!isset($_SESSION['user'])) {
    header('location: /');
}
?>
<section class="cookies container-fluid">
    <div class="row text-center cart-list">
        <?php if (isset($_SESSION['cart'])) : ?>
            <ul>
                <?php foreach ($_SESSION['cart'] as $id => $number) : ?>
                    <li><?= $catalog[$id]['name'] ?>: <?= $number ?> cookie(s)
                        <a href="
                        <?php if ($_SESSION['cart'][$id] > 0) : ?>
                        /cart.php?remove_to_cart=<?= $id; ?>
                        <?php endif ?>
                        " class="btn btn-danger">Remove one</a>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>
<h2 class="text-center">Thank you for your correction :)</h2>
</section>
<?php require 'inc/foot.php'; ?>