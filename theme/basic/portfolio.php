<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<script>
  document.querySelector('body').classList = 'page__portfolio';
</script>
<div class="nav-container__main" data-name="nav-container__main">
  <div class="nav__main-header">
    <a href="/views/pages/page__landing.html" class="logo">
      <img src="<?php echo G5_ASSETS_PATH; ?>/img/GONGSTAR-color=Default.svg" alt="LOGO" />
    </a>
    <button class="nav-close-btn__main" data-name="nav-close-btn__main"></button>
  </div>
  <nav class="nav__main" data-name="nav-main-wrapper">
    <a href="/views/pages/page__company-intro.html" data-name="nav-main-item">
      <span class="menu-title__english">Company</span>
      <span class="menu-title__korean">회사소개</span>
    </a>
    <a href="/views/pages/page__portfolio.html" data-name="nav-main-item">
      <span class="menu-title__english">Portfolio</span>
      <span class="menu-title__korean">포트폴리오</span>
    </a>
    <a href="/views/pages/page__customers.html" data-name="nav-main-item">
      <span class="menu-title__english">Customers</span>
      <span class="menu-title__korean">고객 리스트</span>
    </a>
    <a href="/views/pages/page__project-request.html" data-name="nav-main-item">
      <span class="menu-title__english">Project Request</span>
      <span class="menu-title__korean">프로젝트 의뢰</span>
    </a>
    <a href="/views/pages/page__contact-us.html" data-name="nav-main-item">
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


<div class="container__page">
  <main class="main__content main__content--border">
    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section class="section__breadcrumb">
      <span class="current-page-title__eng">Portfolio</span>
      <span class="current-page-title__kor">작품소개</span>
    </section>

    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section class="section__page-summary">
      <h1>공스타가 제시한 디자인 솔루션입니다.</h1>
    </section>
    <hr class="section-divider" />
    <section class="section__page-sub-title">
      <h4>
        클라이언트의 디자인 문제를 해결할 수 있도록 최적의 솔루션을 제공합니다.
      </h4>
    </section>
    <section class="section__gallery">
      <nav class="button-group__filter">
        <button class="filter-btn active">
          <span>홍보마케팅(포스터)</span>
        </button>
        <button class="filter-btn">
          <span>브랜드(로고)</span>
        </button>
      </nav>
      <div class="gallery-card-list gallery-card-list__rect-grid">
        <!-- ----------------------------------------------------------------------- -->
        <div class="gallery-card">
          <a href="#">
            <img
              class="img-fluid"
              src="<?php echo G5_ASSETS_PATH; ?>/img/image__dummy/gallery-card-img-01.jpg"
              alt=""
            />
            <div class="gallery-card-text">
              <span class="gallery-card-title">포스터 디자인 시안 A</span>
              <p>지역사회 홍보 디자인 시안 구성</p>
            </div>
          </a>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <div class="gallery-card">
          <a href="#">
            <img
              class="img-fluid"
              src="<?php echo G5_ASSETS_PATH; ?>/img/image__dummy/gallery-card-img-02.jpg"
              alt=""
            />
            <div class="gallery-card-text">
              <span class="gallery-card-title">포스터 디자인 시안 A</span>
              <p>지역사회 홍보 디자인 시안 구성</p>
            </div>
          </a>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <div class="gallery-card">
          <a href="#">
            <img
              class="img-fluid"
              src="<?php echo G5_ASSETS_PATH; ?>/img/image__dummy/gallery-card-img-03.jpg"
              alt=""
            />
            <div class="gallery-card-text">
              <span class="gallery-card-title">포스터 디자인 시안 A</span>
              <p>지역사회 홍보 디자인 시안 구성</p>
            </div>
          </a>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <div class="gallery-card">
          <a href="#">
            <img
              class="img-fluid"
              src="<?php echo G5_ASSETS_PATH; ?>/img/image__dummy/gallery-card-img-04.jpg"
              alt=""
            />
            <div class="gallery-card-text">
              <span class="gallery-card-title">포스터 디자인 시안 A</span>
              <p>지역사회 홍보 디자인 시안 구성</p>
            </div>
          </a>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <div class="gallery-card">
          <a href="#">
            <img
              class="img-fluid"
              src="<?php echo G5_ASSETS_PATH; ?>/img/image__dummy/gallery-card-img-05.jpg"
              alt=""
            />
            <div class="gallery-card-text">
              <span class="gallery-card-title">포스터 디자인 시안 A</span>
              <p>지역사회 홍보 디자인 시안 구성</p>
            </div>
          </a>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <div class="gallery-card">
          <a href="#">
            <img
              class="img-fluid"
              src="<?php echo G5_ASSETS_PATH; ?>/img/image__dummy/gallery-card-img-06.jpg"
              alt=""
            />
            <div class="gallery-card-text">
              <span class="gallery-card-title">포스터 디자인 시안 A</span>
              <p>지역사회 홍보 디자인 시안 구성</p>
            </div>
          </a>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <div class="gallery-card">
          <a href="#">
            <img
              class="img-fluid"
              src="<?php echo G5_ASSETS_PATH; ?>/img/image__dummy/gallery-card-img-07.jpg"
              alt=""
            />
            <div class="gallery-card-text">
              <span class="gallery-card-title">포스터 디자인 시안 A</span>
              <p>지역사회 홍보 디자인 시안 구성</p>
            </div>
          </a>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <div class="gallery-card">
          <a href="#">
            <img
              class="img-fluid"
              src="<?php echo G5_ASSETS_PATH; ?>/img/image__dummy/gallery-card-img-08.jpg"
              alt=""
            />
            <div class="gallery-card-text">
              <span class="gallery-card-title">포스터 디자인 시안 A</span>
              <p>지역사회 홍보 디자인 시안 구성</p>
            </div>
          </a>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <div class="gallery-card">
          <a href="#">
            <img
              class="img-fluid"
              src="<?php echo G5_ASSETS_PATH; ?>/img/image__dummy/gallery-card-img-09.jpg"
              alt=""
            />
            <div class="gallery-card-text">
              <span class="gallery-card-title">포스터 디자인 시안 A</span>
              <p>지역사회 홍보 디자인 시안 구성</p>
            </div>
          </a>
        </div>
      </div>
    </section>
    <footer>
      <!-- ANCHOR SECTION - COPYRIGHT FOR CONTENT -------------------------------- -->
      <section class="section__copyright-for-content">
        <img src="<?php echo G5_ASSETS_PATH; ?>/img/copyright--black.svg" alt="" />
      </section>

      <!-- ANCHOR SECTION - SOCIAL FOR CONTENT ----------------------------------- -->
      <section class="section__social-for-content ml-0 ml-md-auto">
        <div class="social-info">
          <button class="icon-button__download"></button>
          <button class="icon-button__instagram"></button>
          <button class="icon-button__kakao"></button>
          <div class="phone-number">
            <span class="key">T</span>
            <span class="value">010 4351 3412</span>
          </div>
        </div>
      </section>
    </footer>
  </main>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');