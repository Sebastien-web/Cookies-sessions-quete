<?php session_start();?>
<?php if (!isset($_SESSION['logname'])) header('Location: login.php');?>
<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php 
            foreach ($catalog as $id => $cookie) 
            { 
                $cookieName=$id;
                //var_dump($cookieName);
                if(!isset($_COOKIE[$cookieName])) 
                {
                    echo "No cookie named '" . $cookie['name'] . "' in your card !<br/>";
                } else 
                {
                    echo "You have " .$_COOKIE[$cookieName] . " '" . $cookie['name'] . "' in your card !<br>";
                }
            }
            ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>