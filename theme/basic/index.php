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

<div class="container__page">
  <main class="main__landing">
    <div class="swiper" data-name="swiper__lanidng">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="landing-bg landing-bg__study">
          </div>
          <div class="landing-headline">
            <div class="landing-headline-upper">
              <svg class="landing-headline-text __upper">
                <text x="0" y="0">
                  GONGSTAR
                </text>
              </svg>
            </div>
            <div class="landing-headline-lower">
              <svg class="landing-headline-text __lower">
                <text x="0" y="0">
                  DESIGN FOR LOCAL
                </text>
              </svg>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="landing-bg landing-bg__design"></div>
          <div class="landing-headline">
            <div class="landing-headline-upper">
              <svg class="landing-headline-text __upper">
                <text x="0" y="0">
                  VALUE OF DESIGN
                </text>
              </svg>
            </div>
            <div class="landing-headline-lower">
              <svg class="landing-headline-text __lower">
                <text x="0" y="0">
                  IN LOCAL BUSINESS
                </text>
              </svg>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="landing-bg landing-bg__work"></div>
          <div class="landing-headline">
            <div class="landing-headline-upper">
              <svg class="landing-headline-text __upper">
                <text x="0" y="0">
                  WE CARE YOUR NEEDS
                </text>
              </svg>
            </div>
            <div class="landing-headline-lower">
              <svg class="landing-headline-text __lower">
                <text x="0" y="0">
                  & MAKE THE CHANGE
                </text>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

      <div class="landing-deco">
        <div class="landing-deco-border">
          <div class="landing-deco-border-center"></div>
          <div class="landing-image-counter">
          </div>
          <div class="landing-project-request-button"  data-name="global-nav__project-request">
            <img src="../../assets/img/img-request-button.svg" alt="" />
          </div>
          <div class="landing-social">
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
          <div class="landing-copyright">
            <img src="../../assets/img/copyright.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');