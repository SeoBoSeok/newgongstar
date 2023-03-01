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
  document.querySelector('body').classList = 'page__company-intro';
</script>
<div class="nav-container__main" data-name="nav-container__main">
  <div class="nav__main-header">
    <a href="/views/pages/page__landing.html" class="logo">
      <img src="../../assets/img/GONGSTAR-color=Default.svg" alt="LOGO" />
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
    <img src="../../assets/img/img-request-button.svg" alt="">
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
    <img src="../../assets/img/copyright.svg" alt="">
  </div>
</div>

<div class="container__page">
  <main class="main__content main__content--border">
    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section class="section__breadcrumb">
      <span class="current-page-title__eng">Company</span>
      <span class="current-page-title__kor">회사소개</span>
    </section>

    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section
      class="section__page-summary"
    >
      <h1>공스타는 클라이이언트의 만족을 최우선으로 합니다.</h1>
    </section>

    <hr class="section-divider" />

    <!-- ANCHOR SECIONT - PROBLEM SOLVING -------------------------------------- -->
    <section
      class="section__problem-solving"]
    >
      <h2 >
        지역사회와 함께하는 디자인 스튜디오,<br />공스타에서 당면한 디자인
        문제를 함께 해결해 보세요
      </h2>
      <p >
        공스타는 공주 지역을 중심으로 하는 디자인 스튜디오입니다. 지역사회에
        대한 이해를 바탕으로 클라이언트와 지역사회 모두에 발전을 줄 수 있는
        디자인을 추구합니다. 브랜드 디자인에서부터 패키지, 홍보, 마케팅, 디지털
        프로모션까지 시각이 닿는 접점에 최선의 디자인 솔루션을 제시합니다
      </p>
      <div class="problem-inquiry">
        <div class="problem-inquiry-text mb-4">
          <img src="../../assets/img/icon/ri_question-fill.svg" alt="" />
          <span>해결이 필요한 디자인 문제가 있으신가요?</span>
        </div>
        <button class="tonal-button --right-arrow" data-name="global-nav__project-request">
          <span>프로젝트 의뢰하기</span>
        </button>
      </div>
      <div class="section-background-image"></div>
    </section>

    <!-- ANCHOR SECTION - STRENGTH --------------------------------------------- -->
    <section class="section__strengths d-grid grid-col-4 grid-col-md-4">
      <div class="gstar-card">
        <span class="gstar-card-title">홍보/마케팅 디자인</span>
        <img
          src="../../assets/img/icon-illust/icon-trossemoji__lighting.svg"
          alt="홍보/마케팅 디자인"
        />
        <p>
          타겟 고객과 상황, 그리고 비즈니스 전략에 최적화된 디자인 솔루션을
          제공합니다
        </p>
      </div>
      <div class="gstar-card">
        <span class="gstar-card-title">브랜드 디자인</span>
        <img
          src="../../assets/img/icon-illust/icon-tossemoji__picture.svg"
          alt="브랜드 디자인"
        />
        <p>
          비즈니스의 특성을 함축적으로 담아낼 수 있는 상징화 과정을 통해
          전달력을 최대화합니다
        </p>
      </div>
      <div class="gstar-card">
        <span class="gstar-card-title">지역사회 최적화</span>
        <img
          src="../../assets/img/icon-illust/icon-tossemoji__festival.svg"
          alt="지역사회 최적화"
        />
        <p>
          지역사회에 밀접한 관계와 이해도를 바탕으로 최적화된 제시안을 구성해
          사업의 효과를 극대화합니다
        </p>
      </div>
      <div class="gstar-card">
        <span class="gstar-card-title">클라이언트 만족 최우선</span>
        <img
          src="../../assets/img/icon-illust/icon-tossemoji__golf-field.svg"
          alt="클라이언트 만족 최우선"
        />
        <p>
          클라이언트 입장에서 먼저 사고하며 이해관계가 상충하는 사안에 대해서
          고객의 문제 해결을 최우선합니다
        </p>
      </div>
    </section>

    <hr class="section-divider" />

    <!-- ANCHOR SECTION - KEYWORDS --------------------------------------------- -->
    <section class="section__keywords">
      <div class="section-title">
        <h3>공스타 특장점</h3>
      </div>
      <div
        class="gstar-keyword-group justify-content-center d-grid grid-col-3 grid-col-md-3"
      >
        <div class="gstar-keyword">
          <img
            src="../../assets/img/icon-illust/keyword01--outline.svg"
            alt="고품질 디자인"
          />
          <span class="gstar-keyword-title">고품질 디자인</span>
          <p>최고의 디자인 품질을 약속 드립니다</p>
        </div>
        <div class="gstar-keyword">
          <img
            src="../../assets/img/icon-illust/keyword02--outline.svg"
            alt="빠른 피드백"
          />
          <span class="gstar-keyword-title">빠른 피드백</span>
          <p>빠른 수정반영을 통해 정답을 찾아 갑니다</p>
        </div>
        <div class="gstar-keyword">
          <img
            src="../../assets/img/icon-illust/keyword03--outline.svg"
            alt="원활한 소통"
          />
          <span class="gstar-keyword-title">원활한 소통</span>
          <p>소통을 최적화해 문제 해결의 실마리를 찾습니다</p>
        </div>
        <div class="gstar-keyword">
          <img
            src="../../assets/img/icon-illust/keyword04--outline.svg"
            alt="문제해결 집중"
          />
          <span class="gstar-keyword-title">문제해결 집중</span>
          <p>소통을 최적화해 문제 해결의 실마리를 찾습니다</p>
        </div>
        <div class="gstar-keyword">
          <img
            src="../../assets/img/icon-illust/keyword05--outline.svg"
            alt="사후관리"
          />
          <span class="gstar-keyword-title">사후관리</span>
          <p>작업 이후 발생 가능한 이슈에 지속 대응합니다</p>
        </div>
        <div class="gstar-keyword">
          <img
            src="../../assets/img/icon-illust/keyword06--outline.svg"
            alt="지속가능성"
          />
          <span class="gstar-keyword-title">지속가능성</span>
          <p>일회성이 아닌 지속해서 활용할 수 있도록 합니다</p>
        </div>
      </div>
    </section>

    <hr class="section-divider" />

    <!-- ANCHOR SECTION - PARTNERS --------------------------------------------- -->
    <section class="section__partners">
      <div class="section-title">
        <h3>공스타와 함께 해 주신 분들</h3>
      </div>
      <div class="logo-gallery d-grid grid-col-5 text-center" data-aos-custom-delay-group>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
        <div class="logo-gallery-item">
          <img class="img-fluid" src="../../assets/img/image__logo/gongju-ci.svg" alt="공주시" data-aos-custom-target >
        </div>
      </div>
    </section>

    <hr class="section-divider" />

    <!-- ANCHOR SECTION - CULTURE ---------------------------------------------- -->
    <section class="section__culture">
      <div class="section-title">
        <h3>공스타 연혁</h3>
        <small>"공스타는 클라이이언트의 만족을 최우선으로 합니다."</small>
      </div>
      <div class="d-grid image-card-group mb-md-6 mb-5">
        <div class="image-card-bg__office">
          <span class="image-card-title">업무 전문화</span>
          <p>전문 업무역량을 바탕으로 합니다</p>
        </div>
        <div class="image-card-bg__meeting">
          <span class="image-card-title">창의적 조직 환경</span>
          <p>구성원 간 창의적 시너지를 최우선합니다</p>
        </div>
        <div class="image-card-bg__pot">
          <span class="image-card-title">삶과 일의 균형</span>
          <p>더 나은 퍼포먼스와 창의성을 위해 균형된 삶을 지향합니다</p>
        </div>
        <div class="image-card-bg__hand">
          <span class="image-card-title">옳은 일에 대한 믿음</span>
          <p>구성원 간 창의적 시너지를 최우선합니다</p>
        </div>
        <div class="image-card-bg__tree">
          <span class="image-card-title">선한 영향력</span>
          <p>올바른 철학과 일을 통해 선한 영향력을 전합니다</p>
        </div>
      </div>
    </section>

    <footer>
    <!-- ANCHOR SECTION - COPYRIGHT FOR CONTENT -------------------------------- -->
    <section class="section__copyright-for-content">
      <img src="../../assets/img/copyright--black.svg" alt="" />
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