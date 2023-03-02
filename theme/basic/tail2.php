<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>


<!-- } 콘텐츠 끝 -->


<!-- 하단 시작 { -->
<!-- <script src="<?php //echo G5_ASSETS_PATH; ?>/libs/jquery.slim.min@3.5.1/jquery-3.5.1.slim.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="<?php echo G5_ASSETS_PATH; ?>/libs/bootstrap.bundle.min.js@4.6.2/bootstrap.bundle.min.js"></script>
<script src="<?php echo G5_ASSETS_PATH; ?>/libs/swiper@8/swiper-bundle.min.js"></script>
<!-- <script src="<?php //echo G5_ASSETS_PATH; ?>/libs/aos@3.0.0-beta.6/aos.js"></script> -->
<script type="module" src="<?php echo G5_ASSETS_PATH; ?>/js/ui.app.js"></script>     
</body>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->


<?php
include_once(G5_THEME_PATH."/tail.sub.php");