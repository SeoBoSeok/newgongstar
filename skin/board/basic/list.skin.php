<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<script>
  document.querySelector('body').classList = 'page__customers';
</script>
<!-- 게시판 목록 시작 { -->
<div class="container__page">
  <main class="main__content main__content--border">
    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section class="section__breadcrumb">
      <span class="current-page-title__eng">Customers</span>
      <span class="current-page-title__kor">클라이언트 게시판</span>
    </section>

    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section class="section__page-summary">
      <h1>공스타와 함께한 클라이언트용 게시판입니다.</h1>
    </section>
    <hr class="section-divider" />
    <section class="section__page-sub-title">
      <h4>클라이언트와 함께 상생할 수 있는 관계를 추구합니다.</h4>
    </section>
    <!-- ANCHOR SECTION - BOARD ---------------------------------------------- -->
    <section class="section__board-list">
      <div class="gstar-board-list">
        <?php
        for ($i=0; $i<count($list); $i++) {
        	if ($i%2==0) $lt_class = "even";
        	else $lt_class = "";
		?>
        <!-- ----------------------------------------------------------------------- -->
        <div class="gstar-board-list-item">
          <div class="gstar-board-list-item-date">
            <span class="day">25</span>
            <span class="month-year"><?php echo $list[$i]['datetime2'] ?></span>
          </div>
          <div class="gstar-board-list-item-title">
            <a href="<?php echo $list[$i]['href'] ?>"><?php echo $list[$i]['subject'] ?></a>
          </div>
          <div class="gstar-board-list-item-button">
            <a href="<?php echo $list[$i]['href'] ?>"><button class="icon-button__right-arrow-circle"></button></a>
          </div>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
      </div>
      <nav>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">이전</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
            <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
            <li class="page-item"><a class="page-link" href="#">다음</a></li>
        </ul>
        <!-- 페이지 -->
	    <?php echo $write_pages; ?>
	    <!-- 페이지 -->
      </nav>
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

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
