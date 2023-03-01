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
  document.querySelector('body').classList = 'page__contact-us';
</script>
<div class="container__page">
  <main class="main__content main__content--border">
    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section class="section__breadcrumb">
      <span class="current-page-title__eng">Contact us</span>
      <span class="current-page-title__kor">연락처</span>
    </section>

    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section class="section__page-summary">
      <h1>공스타는 언제나 열려 있습니다.</h1>
    </section>

    <hr class="section-divider" />

    <section class="section__contact-list">
      <h3>
        <span>찾아 오시는 길</span>
      </h3>
      <div class="contact-list">
        <div class="contact-list-item">
          <span class="key">주소 : </span>
          <span class="value">공주시 공주대학로 56 공주대학교 산학연구관 </span>
        </div>
        <div class="contact-list-item">
          <span class="key">전화 : </span>
          <span class="value">010-3314-4124</span>
        </div>
        <div class="contact-list-item">
          <span class="key">이메일 : </span>
          <span class="value">gongstar@gmail.com</span>
        </div>
      </div>
    </section>

    <div class="section__map">
      <!-- <div class="map-item"></div> -->
      <div id="map" style="width: 100%; height: 400px"></div>
    </div>

    <script
      type="text/javascript"
      src="//dapi.kakao.com/v2/maps/sdk.js?appkey=4e05d6b07012b14d47242e9048b9d17b"
    ></script>
    <script>
      var container = document.getElementById("map"); //지도를 담을 영역의 DOM 레퍼런스
      var options = {
        //지도를 생성할 때 필요한 기본 옵션
        // Lat: 36.4711 Lon: 127.1412
        center: new kakao.maps.LatLng(36.4711, 127.1412), //지도의 중심좌표.
        level: 3, //지도의 레벨(확대, 축소 정도)
      };

      var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴

      // 마커가 표시될 위치입니다
      var markerPosition = new kakao.maps.LatLng(36.4711, 127.1412);

      // 마커를 생성합니다
      var marker = new kakao.maps.Marker({
        position: markerPosition,
      });

      // 마커가 지도 위에 표시되도록 설정합니다
      marker.setMap(map);
    </script>

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