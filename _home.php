<?php
    define('ROUTE', '/home/');
    $title = 'Le Parchemin - Jeweler, Jewelry Creation & Horologist Since 1966';
    require_once('includes/include_header.php');
    require_once('lang/'.$lang.'/home.php');
?>

<?php require_once('components/banner.php'); ?>
<div class="content">
    <div class="nav-box-wrapper">
        <div class="fig-wrapper">
            <figure class="nav-box">
                <a href="#"></a>
                <figcaption>
                    <h2><?= $lang_trans['nav_box_1'] ?></h2>
                </figcaption>
                <span><?= $lang_trans['view_collection'] ?></span>
                <img src="<?= LANGUAGE_IMG_PATH; ?>home/promo-area1.jpg" class="no-flicker" alt="">
            </figure>
        </div><!--
        --><div class="fig-wrapper">
            <figure class="nav-box">
                <a href="#"></a>
                <figcaption>
                    <h2><?= $lang_trans['nav_box_2'] ?></h2>
                </figcaption>
                <span><?= $lang_trans['view_collection'] ?></span>
                <img src="<?= LANGUAGE_IMG_PATH; ?>home/promo-area2.jpg" class="no-flicker" alt="">
            </figure>
        </div><!--
        --><div class="fig-wrapper">
            <figure class="nav-box">
                <a href="#"></a>
                <figcaption>
                    <h2><?= $lang_trans['nav_box_3'] ?></h2>
                </figcaption>
                <span><?= $lang_trans['view_collection'] ?></span>
                <img src="<?= LANGUAGE_IMG_PATH; ?>home/promo-area3.jpg" class="no-flicker" alt="">
            </figure>
        </div><!--
        --><div class="fig-wrapper">
            <figure class="nav-box">
                <a href="#"></a>
                <figcaption>
                    <h2><?= $lang_trans['nav_box_4'] ?></h2>
                </figcaption>
                <span><?= $lang_trans['view_collection'] ?></span>
                <img src="<?= LANGUAGE_IMG_PATH; ?>home/promo-area4.jpg" class="no-flicker" alt="">
            </figure>
        </div>
    </div>
</div>

<?php
    require_once('includes/include_footer.php');
?>