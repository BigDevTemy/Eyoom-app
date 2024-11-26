
<?php

/**
 * theme file : /theme/THEME_NAME/head.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/style.css?ver='.G5_CSS_VER.'">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/custom.css?ver='.G5_CSS_VER.'">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/common.css');


/**
 * 로고 타입 : 'image' || 'text'
 */
$logo = 'image';

/**
 * 메뉴바 전체 메뉴 출력 : 'yes' || 'no'
 */
$is_megamenu = 'yes';
?>

<?php if (!$wmode) { ?>
<?php /*----- wrapper 시작 -----*/ ?>
<div class="wrapper">
    <h1 id="hd-h1"><?php echo $g5['title'] ?></h1>
    <div class="to-content"><a href="#container">본문 바로가기</a></div>
    <?php
    // 팝업창
    if (defined('_INDEX_') && $newwin_contents) { // index에서만 실행
        echo $newwin_contents;
    }
    ?>

    <?php /*----- header 시작 -----*/ ?>
    
    <header class="header-wrap <?php if(!defined('_INDEX_')) { ?>page-header-wrap<?php } ?>">

    

        <div class="header-title">
            
        <div class="d-flex align-items-center d-lg-none" style="margin-top:20px;margin-bottom:20px">
                    <div class="d-flex flex-row flex-me justify-content-end">
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/new-dummy.png" class="site-logo" alt="<?php echo $config['cf_title']; ?>">
                    </div>

                    <div class="d-flex flex-row flex-me justify-content-end align-items-center active mr-10">
                        P2U내역
                    </div>

                
        </div>
            <div class="d-none d-lg-flex flex-column container mt-20">
                <div class="d-none d-lg-flex flex-row justify-content-between align-items-center w-100">
                        <div style="flex:0.5">
                            <?php /* ===== 사이트 로고 시작 ===== */ ?>
                                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                                <div class="adm-edit-btn btn-edit-mode" style="top:0;left:12px;text-align:left">
                                    <div class="btn-group">
                                        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 로고 설정</a>
                                        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                                <a href="<?php echo G5_URL; ?>" class="title-logo">
                                <?php if ($logo == 'text') { ?>
                                    <h1><?php echo $config['cf_title']; ?></h1>
                                <?php } else if ($logo == 'image') { ?>
                                    <?php if (!G5_IS_MOBILE) { ?>
                                    <?php if (file_exists($top_logo) && !is_dir($top_logo)) { ?>
                                    <img src="<?php echo $logo_src['top']; ?>" class="site-logo" alt="<?php echo $config['cf_title']; ?>">
                                    <?php } else { ?>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/new-dummy.png" class="site-logo" alt="<?php echo $config['cf_title']; ?>">
                                    <?php } ?>
                                    <?php } else { ?>
                                    <?php if (file_exists($top_mobile_logo) && !is_dir($top_mobile_logo)) { ?>
                                    <img src="<?php echo $logo_src['mobile_top']; ?>" class="site-logo" alt="<?php echo $config['cf_title']; ?>">
                                    <?php } else { ?>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.svg" class="site-logo" alt="<?php echo $config['cf_title']; ?>">
                                    <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                                </a>
                            <?php /* ===== 사이트 로고 끝 ===== */ ?>
                        </div>
                       
                            
                        <div class="d-none d-lg-flex flex-row  justify-content-end align-items-center menu-bar-1" style="flex:1;">
                            <div class="flex-me text-center cursor-pointer active navFont">홍길동님 11,181,887 P2U</div>
                            <div class="flex-me text-center cursor-pointer navFont">장바구니</div>
                            <div class="flex-me text-center cursor-pointer navFont" >마이페이지</div>
                            <div class="flex-me text-center cursor-pointer navFont" >로그아웃</div>
                            <div class="flex-me text-center cursor-pointer navFont">상품명 검색 </div>
                            <div class="flex-me" style="position:relative">
                                <div class=" text-center cursor-pointer navFont dropdown-toggle" id="searchDropdown" aria-expanded="false">상품명 검색</div>
                                <div class="dropdown-menu-custom" id="dropdownMenu">
                                    <a class="dropdown-item" href="#">상품 1</a>
                                    <a class="dropdown-item" href="#">상품 2</a>
                                    <a class="dropdown-item" href="#">상품 3</a>
                                    <a class="dropdown-item" href="#">상품 4</a>
                                </div>


                            </div>
                           
                            <form class="flex-me">
                                <div class="form-group d-flex align-items-center input-group input-group-position">
                                    <input type="text" class="form-control" placeholder="">
                                    <i class="fas fa-search absolute text-secondary"></i>
                                </div>
                            </form>
                        </div>
                       
                </div>
                <div class="d-none d-lg-flex menu-bar-2" style="width:60%">
                    <div><i class="fas fa-bars"></i></div>
                    <div class="flex-me ml-5 cursor-pointer">
                            <div class="dropdown-toggle navFont" id="searchDropdownII" aria-expanded="false">
                                전체상품
                            </div>
                            <div class="dropdown-menu-custom" id="dropdownMenuII">
                                <a class="dropdown-item" href="#">상품 1</a>
                                <a class="dropdown-item" href="#">상품 2</a>
                                <a class="dropdown-item" href="#">상품 3</a>
                                <a class="dropdown-item" href="#">상품 4</a>
                            </div>

                    </div>
                    <div class="flex-me cursor-pointer navFont">P2U소개</div>
                    <div class="flex-me cursor-pointer navFont">히트상품</div>
                    <div class="flex-me ml-5 cursor-pointer navFont">전체상품 </div>
                    <div class="flex-me cursor-pointer navFont">이벤트</div>
                    <div class="flex-me cursor-pointer navFont">공모전</div>
                
               </div>

            </div>
        </div>

       
        
    </header>
    <?php /*----- header 끝 -----*/ ?>

    <?php if(!defined('_INDEX_')) { // 메인이 아닐때 ?>
    <?php /*----- page title 시작 -----*/ ?>
    <div class="page-title-wrap">
        <div class="container">
        <?php if (!defined('_EYOOM_MYPAGE_')) { ?>
            <h2>
                <?php if (!$it_id) { ?>
                <i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?>
                <?php } else { ?>
                <span class="f-s-14r"><i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?></span>
                <?php } ?>
            </h2>
            <?php if (!$it_id) { ?>
            <div class="sub-breadcrumb-wrap">
                <ul class="sub-breadcrumb hidden-xs">
                    <?php echo $subinfo['path']; ?>
                </ul>
            </div>
            <?php } ?>
        <?php } else { ?>
            <h2><i class="fas fa-arrow-alt-circle-right"></i> 마이페이지</h2>
        <?php } ?>
        </div>
    </div>
    <?php /*----- page title 끝 -----*/ ?>
    <?php } ?>

    <div class="basic-body <?php if(!defined('_INDEX_')) { ?>page-body<?php } ?>">
        <?php if(defined('_INDEX_')) { ?>
        <div class="main-slider-top">
            <?php /* EB슬라이더 - basic */ ?>
            <?php echo eb_slider('1516512257'); ?>
        </div>
        <?php } ?>
        <div class="container">
            <?php if ($side_layout['use'] == 'yes') { ?>
            <div class="main-wrap">
                <?php
                if ($side_layout['pos'] == 'left') {
                    /* 사이드영역 시작 */
                    include_once(EYOOM_THEME_PATH . '/side.html.php');
                    /* 사이드영역 끝 */
                }
                ?>
                <main class="basic-body-main <?php if ($side_layout['pos'] == 'left') { echo 'right'; } else { echo 'left'; }?>-main">
            <?php } else { ?>
            <div class="main-wrap">
                <main class="basic-body-main">
            <?php } ?>
<?php } // !$wmode ?>


<script>
        document.getElementById('searchDropdown').addEventListener('click', function() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('show'); // Toggle the dropdown visibility
        });

        document.getElementById('searchDropdownII').addEventListener('click', function() {
            const dropdownMenu = document.getElementById('dropdownMenuII');
            dropdownMenu.classList.toggle('show'); // Toggle the dropdown visibility
        });
       
        

        // Close the dropdown if clicking outside of it
        window.addEventListener('click', function(event) {
            console.log('Hello',event.target.classList)
            const dropdownMenu = document.getElementById('dropdownMenu');
            if (!event.target.closest('#searchDropdown') && !event.target.closest('#dropdownMenu')) {
                dropdownMenu.classList.remove('show');
            }
        });

        window.addEventListener('click', function(event) {
            const dropdownMenu = document.getElementById('dropdownMenuII');
            if (!event.target.closest('#searchDropdownII') && !event.target.closest('#dropdownMenu')) {
                dropdownMenu.classList.remove('show');
            }
        });
      

        document.querySelector('.menu-bar-2').addEventListener('click',function(e){
            const current = Array.prototype.indexOf.call(this.children, e.target);
            console.log('current',current)
            removeActiveLink(this.children,current);
            e.target.classList.add('active')
        })

        document.querySelector('.menu-bar-1').addEventListener('click',function(e){
            const current = Array.prototype.indexOf.call(this.children, e.target);
            console.log('current',current)
            removeActiveLink(this.children,current);
            e.target.classList.add('active')
        })

        function removeActiveLink(children,current){
            if(children?.length == 0){
                return
            }

            for(let i=0;i<children?.length;i++){
                if(i != current){
                    children[i].classList.remove('active')
                }
                
            }
        }

    </script>