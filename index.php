<?php session_start(); ?>
<!-- <?php
//if (!isset($_SESSION['name'])){
//header('Location: login.php');
//exit; 
//}
?> -->
<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php if (isset($_GET["add_to_cart"]))
{
    $cookieName=$_GET['add_to_cart'];
    if (!isset($_COOKIE[$cookieName]))
    {
        //var_dump($cookieName);
        setCookie($cookieName, 1, time()+30*86400);
        //var_dump($_COOKIE[$cookieName]);
        //header ("location: index.php");
    }
    else 
    {
        $_COOKIE[$cookieName]++;
        setCookie($cookieName,$_COOKIE[$cookieName], time()+30*86400);
        //var_dump($_GET['add_to_cart']);
        //var_dump($cookieName);
        //var_dump($_COOKIE[$cookieName]);
        //header ("location: index.php");
    }
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
