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
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>