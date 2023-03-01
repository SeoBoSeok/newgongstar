<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->
<script>
  document.querySelector('body').classList = 'page__content-read-page page__customers';
</script>
<div class="container__page">
  <main class="main__content main__content--border">
    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section class="section__breadcrumb">
      <span class="current-page-title__eng">Customers</span>
      <span class="current-page-title__kor">고객목록</span>
    </section>

    <!-- ANCHOR SECTION - PAGE SUMMARY ----------------------------------------- -->
    <section class="section__page-summary">
      <h1>공스타와 함께한 클라이언트 목록입니다.</h1>
    </section>
    <hr class="section-divider" />
    <section class="section__page-sub-title">
      <h4>클라이언트와 함께 상생할 수 있는 관계를 추구합니다.</h4>
    </section>
    <!-- ANCHOR SECTION - CONTNET READ PAGE ---------------------------------------------- -->
    <section class="section__content-read-page">
      <article class="content-read-page-wrapper">
        <div class="content-read-page-title">
          <h2><?php
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?></h2>
          <small> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?> </small>
        </div>
        <div class="content-read-page-body">
        <?php echo get_view_thumbnail($view['content']); ?>
        </div>
        <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
               	<i class="fa fa-folder-open" aria-hidden="true"></i>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong> <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <br>
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

      </article>
      <div class="content-navigation mt-6 mt-md-10">
        <?php if ($prev_href || $next_href) { ?>
            <?php if ($prev_href) { ?>
                <a href="<?php echo $prev_href ?>">
                <button class="content-nav-button --prev">
                <i class="icon-arrow-line-prev"></i>
                <span>
                    <?php echo $prev_wr_subject;?>
                </span>
                </button>
                </a>
            <?php } ?>
        <?php } ?>
        <a href="<?php echo $list_href ?>"><button class="button-rect">
            <span>
                목록
            </span>
            </button>
        </a>
        <?php if ($prev_href || $next_href) { ?>        
            <?php if ($next_href) { ?>
                <a href="<?php echo $next_href ?>">
                <button class="content-nav-button --prev">
                <i class="icon-arrow-line-prev"></i>
                <span>
                    <?php echo $next_wr_subject;?>
                </span>
                </button>
                </a>
            <?php } ?>
        <?php } ?>
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

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->