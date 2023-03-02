<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<div id="preloader" class="preloader">
  <div class="ytp-spinner" data-layer="4">
    <div>
      <div class="ytp-spinner-container">
        <div class="ytp-spinner-rotator">
          <div class="ytp-spinner-left">
            <div class="ytp-spinner-circle"></div>
          </div>
          <div class="ytp-spinner-right">
            <div class="ytp-spinner-circle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="ytp-spinner-message" style="display: none">
      로딩이 정상적이지 않을 경우, 새로고침을 부탁드립니다
    </div>
  </div>
</div>

<!-- 상단 시작 { -->
<header class="header d-flex flex-row align-items-center">
  <a class="logo" href="/"></a>
  <button class="nav-trigger__main" data-name="nav-trigger__main"></button>
</header>

<div class="nav-container__main" data-name="nav-container__main">
  <div class="nav__main-header">
    <a href="/" class="logo">
      <img src="<?php echo G5_ASSETS_PATH; ?>/img/GONGSTAR-color=Default.svg" alt="LOGO" />
    </a>
    <button class="nav-close-btn__main" data-name="nav-close-btn__main"></button>
  </div>
  <nav class="nav__main" data-name="nav-main-wrapper">
    <a href="/intro" data-name="nav-main-item">
      <span class="menu-title__english">Company</span>
      <span class="menu-title__korean">회사소개</span>
    </a>
    <a href="/portfolio" data-name="nav-main-item">
      <span class="menu-title__english">Portfolio</span>
      <span class="menu-title__korean">포트폴리오</span>
    </a>
    <!-- <a href="/bbs/board.php?bo_table=customer" data-name="nav-main-item">
      <span class="menu-title__english">Customers</span>
      <span class="menu-title__korean">고객 리스트</span>
    </a> -->
    <a href="/request" data-name="nav-main-item">
      <span class="menu-title__english">Project Request</span>
      <span class="menu-title__korean">프로젝트 의뢰</span>
    </a>
    <a href="/contact" data-name="nav-main-item">
      <span class="menu-title__english">Contact Us</span>
      <span class="menu-title__korean">연락처</span>
    </a>
  </nav>
  <div class="nav__project-request-button"  data-name="global-nav__project-request">
    <img src="<?php echo G5_ASSETS_PATH; ?>/img/img-request-button.svg" alt="">
  </div>
  <div class="nav__social">
    <div class="social-info">
      <button class="icon-button__download"></button>
      <button class="icon-button__instagram"></button>
      <button class="icon-button__kakao"></button>
      <div class="phone-number">
        <span class="key">T</span>                
        <span class="value">010 4351 3412</span>                
      </div>
    </div>
  </div>
  <div class="nav__main-copyright">
    <img src="<?php echo G5_ASSETS_PATH; ?>/img/copyright.svg" alt="">
  </div>
</div>
<!-- } 상단 끝 -->


<!-- 콘텐츠 시작 { -->
