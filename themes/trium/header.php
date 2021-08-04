<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#1A7ABE">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <svg style="display: none;">
    <!-- <svg class="id-name" width="16" height="16" viewBox="0 0 16 16" fill="#FF5C26">
      <use xlink:href="#id-name"></use> </svg> -->

    <!-- start of Rannojit -->


    <!-- start of Noyon -->
    <symbol id="linkdin-icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M14.1867 10.2947C13.1596 10.2947 12.7009 10.8592 12.4442 11.2556V10.432H10.5098C10.5349 10.9772 10.5098 16.2521 10.5098 16.2521H12.4442V13.0006C12.4442 12.827 12.4553 12.6525 12.5075 12.5283C12.6477 12.1803 12.9657 11.8202 13.5003 11.8202C14.2003 11.8202 14.4801 12.3538 14.4801 13.1369V16.2507H16.4145H16.415V12.9131C16.4141 11.1265 15.4594 10.2947 14.1867 10.2947ZM12.4427 11.2759H12.4307C12.4345 11.2691 12.4403 11.2629 12.4427 11.2561V11.2759Z"/>
      <path d="M7.5033 10.4318H9.43772V16.252H7.5033V10.4318Z"/>
      <path d="M12 0C5.38323 0 0 5.38323 0 12C0 18.6163 5.38323 24 12 24C18.6163 24 24 18.6163 24 12C24 5.38323 18.6173 0 12 0ZM18.3635 17.4277C18.3635 17.9381 17.9401 18.3509 17.4166 18.3509H6.50173C5.9797 18.3509 5.55579 17.9381 5.55579 17.4277V6.38572C5.55579 5.87577 5.9797 5.4625 6.50173 5.4625H17.4166C17.9396 5.4625 18.3635 5.87626 18.3635 6.38572V17.4277Z"/>
      <path d="M8.4835 7.62604C7.82226 7.62604 7.38916 8.0601 7.38916 8.63144C7.38916 9.18972 7.8092 9.63683 8.45788 9.63683H8.47045C9.14522 9.63683 9.56527 9.18972 9.56527 8.63144C9.55222 8.06058 9.14571 7.62604 8.4835 7.62604Z"/>
    </symbol>
    <symbol id="facebook-icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 0C5.38323 0 0 5.38323 0 12C0 18.6163 5.38323 24 12 24C18.6163 24 24 18.6163 24 12C24 5.38323 18.6173 0 12 0ZM14.9843 12.4225H13.032V19.381H10.139C10.139 19.381 10.139 15.5788 10.139 12.4225H8.76388V9.9631H10.139V8.37235C10.139 7.23306 10.6804 5.45283 13.0586 5.45283L15.2023 5.46105V7.84838C15.2023 7.84838 13.8996 7.84838 13.6463 7.84838C13.3931 7.84838 13.0329 7.97503 13.0329 8.51833V9.96359H15.2371L14.9843 12.4225Z"/>
    </symbol>

    <!-- start of Sabbir -->
    <symbol id="pagi-right-arrow" width="18" height="30" viewBox="0 0 18 30" xmlns="http://www.w3.org/2000/svg">
      <path d="M17.3337 13.8294L3.98332 0.479264C3.67454 0.170243 3.26235 0 2.82284 0C2.38334 0 1.97114 0.170243 1.66237 0.479264L0.679203 1.46218C0.0394526 2.10267 0.0394526 3.14363 0.679203 3.78314L11.8898 14.9938L0.666764 26.2169C0.357986 26.5259 0.1875 26.9378 0.1875 27.3771C0.1875 27.8168 0.357986 28.2288 0.666764 28.5381L1.64993 29.5207C1.95895 29.8298 2.3709 30 2.81041 30C3.24991 30 3.66211 29.8298 3.97088 29.5207L17.3337 16.1584C17.6432 15.8484 17.8132 15.4345 17.8122 14.9945C17.8132 14.5528 17.6432 14.1392 17.3337 13.8294Z"/>
    </symbol>

    <symbol id="pagi-left-arrow" width="18" height="30" viewBox="0 0 18 30" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.666298 13.8294L14.0167 0.479264C14.3255 0.170243 14.7376 0 15.1772 0C15.6167 0 16.0289 0.170243 16.3376 0.479264L17.3208 1.46218C17.9605 2.10267 17.9605 3.14363 17.3208 3.78314L6.11016 14.9938L17.3332 26.2169C17.642 26.5259 17.8125 26.9378 17.8125 27.3771C17.8125 27.8168 17.642 28.2288 17.3332 28.5381L16.3501 29.5207C16.0411 29.8298 15.6291 30 15.1896 30C14.7501 30 14.3379 29.8298 14.0291 29.5207L0.666298 16.1584C0.356789 15.8484 0.18679 15.4345 0.187767 14.9945C0.18679 14.5528 0.356789 14.1392 0.666298 13.8294Z"/>
    </symbol>

    <!-- start of Kashob -->
    <symbol id="bedankt-massage-icon-svg" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <path d="M88.5123 92.1265C88.79 92.3577 89.1264 92.4706 89.4614 92.4706C89.8871 92.4706 90.3097 92.2882 90.6035 91.935C91.1284 91.3048 91.0429 90.3687 90.412 89.8438L66.7341 70.1294C66.104 69.6045 65.1678 69.6899 64.6422 70.3209C64.118 70.9511 64.2035 71.8872 64.8337 72.4121L88.5123 92.1265Z" fill="#1A7ABE"/>
      <path d="M10.5282 92.4698C10.8632 92.4698 11.2004 92.3576 11.4781 92.1265L35.1567 72.4114C35.7869 71.8872 35.8723 70.9503 35.3474 70.3201C34.8225 69.6899 33.8864 69.6045 33.2562 70.1294L9.57837 89.8438C8.94742 90.3687 8.86197 91.3048 9.38687 91.935C9.67984 92.2882 10.1033 92.4698 10.5282 92.4698Z" fill="#1A7ABE"/>
      <path d="M28.2159 44.1078H59.4995C60.3196 44.1078 60.9842 43.4425 60.9842 42.6224C60.9842 41.8022 60.3196 41.1377 59.4995 41.1377H28.2159C27.3958 41.1377 26.7305 41.8022 26.7305 42.6224C26.7305 43.4425 27.3958 44.1078 28.2159 44.1078Z" fill="#1A7ABE"/>
      <path d="M71.7744 49.762H28.2159C27.3958 49.762 26.7305 50.4272 26.7305 51.2474C26.7305 52.0676 27.3958 52.7321 28.2159 52.7321H71.7744C72.5953 52.7321 73.2599 52.0676 73.2599 51.2474C73.2599 50.4272 72.5946 49.762 71.7744 49.762Z" fill="#1A7ABE"/>
      <path d="M28.2159 26.8585H49.9955C50.8157 26.8585 51.4802 26.1932 51.4802 25.3731C51.4802 24.5537 50.8157 23.8884 49.9955 23.8884H28.2159C27.3958 23.8884 26.7305 24.5537 26.7305 25.3731C26.7305 26.1932 27.3958 26.8585 28.2159 26.8585Z" fill="#1A7ABE"/>
      <path d="M41.332 33.9981C41.332 34.8183 41.9973 35.4828 42.8175 35.4828H53.5597C54.3798 35.4828 55.0443 34.8183 55.0443 33.9981C55.0443 33.1779 54.3798 32.5127 53.5597 32.5127H42.8175C41.9973 32.5127 41.332 33.1779 41.332 33.9981Z" fill="#1A7ABE"/>
      <path d="M28.2159 35.4828H37.8663C38.6865 35.4828 39.3518 34.8183 39.3518 33.9981C39.3518 33.1779 38.6865 32.5127 37.8663 32.5127H28.2159C27.3958 32.5127 26.7305 33.1779 26.7305 33.9981C26.7305 34.8183 27.3958 35.4828 28.2159 35.4828Z" fill="#1A7ABE"/>
      <path d="M83.2797 12.146L75.3207 30.7175L68.2605 22.3099C67.7333 21.682 66.7972 21.6003 66.1685 22.1275C65.5406 22.6555 65.459 23.5924 65.9869 24.2203L74.5982 34.4749C74.8828 34.8137 75.3001 35.0052 75.735 35.0052C75.8067 35.0052 75.8792 34.9999 75.9524 34.9892C76.4621 34.9136 76.897 34.5795 77.0999 34.1049L86.0095 13.3156C86.333 12.5618 85.9836 11.689 85.2298 11.3655C84.476 11.0428 83.6032 11.3922 83.2797 12.146Z" fill="#1A7ABE"/>
      <path d="M98.7114 34.8358L95.6223 32.264C97.1512 29.2412 98.0087 25.84 98.0087 22.2763C98.0087 18.2465 96.9162 14.2998 94.8509 10.8643C94.4275 10.1609 93.515 9.93426 92.8123 10.3569C92.1097 10.7796 91.8823 11.6921 92.305 12.3947C94.0933 15.3679 95.0386 18.7851 95.0386 22.2756C95.0386 31.4339 88.5284 39.3601 79.5578 41.1209C78.3379 41.3613 77.0844 41.4833 75.8331 41.4833C65.2428 41.4833 56.6269 32.8667 56.6269 22.2756C56.6269 11.686 65.2428 3.07009 75.8331 3.07009C77.0844 3.07009 78.3371 3.19216 79.5578 3.43249C83.0345 4.11532 86.2541 5.75411 88.8695 8.17339C89.4714 8.72958 90.4114 8.69296 90.9683 8.091C91.5253 7.48904 91.4879 6.5491 90.8859 5.99215C87.8662 3.19979 84.1469 1.30694 80.1315 0.518059C78.7224 0.241112 77.2766 0.0999679 75.8331 0.0999679C70.7985 0.0999679 66.1522 1.78759 62.4252 4.62496L62.162 4.40524C55.1125 -1.46711 44.8776 -1.46711 37.8258 4.40524L37.1582 4.96218H23.2498C16.4909 4.96218 10.9917 10.4599 10.9917 17.218V26.8479L0.944519 35.2127C0.914764 35.2249 0.88501 35.2371 0.855255 35.2516C0.333404 35.4958 0.000762939 36.0199 0.000762939 36.5959V77.4384C0.000762939 78.2585 0.665283 78.9231 1.48544 78.9231C2.3056 78.9231 2.97089 78.2585 2.97089 77.4384V39.7652L37.8265 68.7874C41.3521 71.7232 45.6734 73.1919 49.9947 73.1911C54.3159 73.1911 58.6372 71.7232 62.1613 68.7874L97.0184 39.7652V89.2014C97.0184 93.5189 93.5066 97.0307 89.1891 97.0307H10.7994C6.48193 97.0307 2.97012 93.5189 2.97012 89.2014V83.3786C2.97012 82.5585 2.30484 81.8939 1.48468 81.8939C0.665283 81.8939 0 82.5585 0 83.3786V89.2014C0 95.1561 4.84467 100.001 10.7994 100.001H89.1891C95.1439 100.001 99.9886 95.1561 99.9886 89.2014V36.6364C99.9886 36.6356 99.9886 36.6348 99.9886 36.6341C100.007 35.9146 99.7841 35.7292 98.7114 34.8358ZM57.7309 4.96218H42.2577C47.0665 2.31097 52.9236 2.31097 57.7309 4.96218ZM10.9917 30.7122V42.5789L3.86581 36.6455L10.9917 30.7122ZM60.2608 66.5055C54.3129 71.46 45.6772 71.46 39.727 66.5047L13.9618 45.0516V17.218C13.9618 12.0972 18.1282 7.93154 23.2498 7.93154H37.7007H37.706H58.9355C55.6458 11.8012 53.6575 16.8106 53.6575 22.2763C53.6575 34.5047 63.6055 44.4535 75.8331 44.4535C77.2766 44.4535 78.7231 44.3131 80.1308 44.0354C82.2266 43.6241 84.2041 42.9169 86.0283 41.9693V45.0508L60.2608 66.5055ZM88.9984 42.5781V40.1169C90.9775 38.6521 92.6979 36.8698 94.0887 34.8519C94.738 35.392 95.5238 36.0466 96.1838 36.5959L88.9984 42.5781Z" fill="#1A7ABE"/>
      </g>
      <defs>
      <clipPath id="clip0">
      <rect width="100" height="100" fill="white"/>
      </clipPath>
      </defs>
      </symbol>

    <!-- start of Niaz -->


    <!-- start of Shariful -->
    <symbol id="play-icon-svg" width="64" height="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
      <path d="M63.9832 30.9556C63.4463 14.1433 49.8563 0.553688 33.0444 0.01679C23.8965 -0.273449 15.338 3.20852 9.01297 9.73891C2.93232 16.0168 -0.262559 24.2931 0.0168969 33.0443C0.553345 49.8562 14.1434 63.4462 30.9552 63.9826C31.3052 63.9939 31.6521 63.9993 31.9998 63.9993C40.7402 63.9993 48.9038 60.5407 54.9867 54.2605C61.0673 47.9831 64.2626 39.7063 63.9832 30.9556ZM50.1461 49.5722C45.3441 54.5301 38.8995 57.2604 31.9998 57.2604C31.724 57.2604 31.4481 57.2559 31.17 57.2474C17.9017 56.8237 7.17628 46.0983 6.75215 32.8295C6.53155 25.9186 9.0534 19.3833 13.8536 14.4277C18.6556 9.46978 25.1001 6.73947 31.9998 6.73947C32.2757 6.73947 32.5515 6.74396 32.8297 6.7525C46.098 7.17617 56.8234 17.9015 57.2475 31.1703C57.4681 38.0813 54.9458 44.6166 50.1461 49.5722Z" fill="white"/>
      <path d="M42.4956 30.1401L28.3054 19.9656C26.7917 18.8801 24.6846 19.962 24.6846 21.8247V42.1743C24.6846 44.037 26.7917 45.1189 28.3054 44.0334L42.4952 33.8584C43.7685 32.9459 43.7685 31.0531 42.4956 30.1401Z" fill="white"/>
    </symbol>
    <symbol id="back-btn-svg" width="11" height="18" viewBox="0 0 11 18" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.287475 8.29764L8.2977 0.287559C8.48297 0.102146 8.73028 0 8.99399 0C9.25769 0 9.50501 0.102146 9.69028 0.287559L10.2802 0.87731C10.664 1.2616 10.664 1.88618 10.2802 2.26988L3.55379 8.99627L10.2876 15.7301C10.4729 15.9155 10.5752 16.1627 10.5752 16.4263C10.5752 16.6901 10.4729 16.9373 10.2876 17.1228L9.69774 17.7124C9.51233 17.8979 9.26516 18 9.00145 18C8.73775 18 8.49043 17.8979 8.30517 17.7124L0.287475 9.69504C0.101768 9.50904 -0.000230789 9.26071 0.000354767 8.99671C-0.000230789 8.73169 0.101768 8.48349 0.287475 8.29764Z"/>
    </symbol>

  </svg>

<?php 
  $topbartekst = get_field('topbartekst', 'options');
  $usps = get_field('usps', 'options');
  $telefoon = get_field('telefoon', 'options');
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $smedias = get_field('social_media', 'options');
?>  
<?php if( is_front_page() && $topbartekst ): ?>
<section class="home-messege">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="home-messege-inr">
        <?php if( !empty($topbartekst) ) echo wpautop( $topbartekst  ); ?>
      </div>
    </div>
  </div>
</div>
</section>
<?php endif; ?>
<div class="bdoverlay"></div>
<div class="page-body-cntlr">
  <header class="header-wrap">
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header-inr clearfix">
              <div class="hdr-lft">
              <?php if( !empty($logo_tag) ): ?>
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
              </div>
              <div class="hdr-rgt">
                <div class="hdr-topbar">
                  <div class="hdr-top-menu hide-md">
                    <?php 
                      $menuOptions = array( 
                          'theme_location' => 'cbv_top_menu', 
                          'menu_class' => 'clearfix reset-list',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $menuOptions ); 
                    ?>
                  </div>
                  <div class="hdr-lang hide-md">
                    <ul class="reset-list">
                      <li class="active"><a href="#">nl</a></li>
                      <li><a href="#">fr</a></li>
                    </ul>
                  </div>
                  <div class="hdr-socials hide-md">
                    <ul class="reset-list">
                      <?php if( !empty($smedias['facebook_url']) ): ?>
                      <li>
                        <a target="_blank" href="<?php echo $smedias['facebook_url']; ?>">
                          <i><svg class="facebook-icon" width="24" height="24" viewBox="0 0 24 24" fill="#899EAC">
                            <use xlink:href="#facebook-icon"></use> </svg>
                          </i>
                        </a>
                      </li>
                      <?php endif; ?>
                      <?php if( !empty($smedias['linkedin_url']) ): ?>
                      <li>
                        <a target="_blank" href="<?php echo $smedias['instagram_url']; ?>">
                          <i><svg class="linkdin-icon" width="24" height="24" viewBox="0 0 24 24" fill="#899EAC">
                            <use xlink:href="#linkdin-icon"></use> </svg>
                          </i>
                        </a>
                      </li>
                      <?php endif; ?>
                    </ul>
                  </div>
                  <?php if( !empty($telefoon) ) printf('<div class="hdr-tel"><a href="tel:%s">%s: %s</a></div>', phone_preg($telefoon), __('Tel', 'trium'),  $telefoon); ?>
                </div>
                <div class="hdr-menu">
                  <nav class="main-nav hide-md">
                    <?php 
                      $menuOptions = array( 
                          'theme_location' => 'cbv_main_menu', 
                          'menu_class' => 'clearfix reset-list',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $menuOptions ); 
                    ?>
                  </nav>

                  <div class="hambergar-cntlr show-md">
                    <div class="hambergar-icon">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if($usps): ?>
    <div class="usp-bar">
      <div class="usp-bar-cntlr uspBarSlider">
        <?php foreach( $usps as $usp ): ?>
        <div class="usp-bar-item-cntlr">
          <?php if( !empty($usp['titel']) ) printf('<span class="usp-bar-item">%s</span>', $usp['titel']); ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
  </header>

  <div class="xs-mobile-menu">
    <div class="xs-mbl-hdr">
      <?php if( !empty($telefoon) ) printf('<div class="hdr-tel"><a href="tel:%s">%s: %s</a></div>', phone_preg($telefoon), __('Tel', 'trium'),  $telefoon); ?>
      <div class="hdr-menu">
        <div class="hambergar-cntlr">
          <div class="hambergar-icon">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>

    <div class="xs-menu">
      <nav class="main-nav">
        <?php 
          $menuOptions = array( 
              'theme_location' => 'cbv_mobile_main_menu', 
              'menu_class' => 'clearfix reset-list',
              'container' => '',
              'container_class' => ''
            );
          wp_nav_menu( $menuOptions ); 
        ?>
      </nav>
    </div>

    <div class="xs-mbl-btm">
      <div class="hdr-lang">
        <ul class="reset-list">
          <li class="active"><a href="#">nl</a></li>
          <li><a href="#">fr</a></li>
        </ul>
      </div>
      <div class="hdr-socials">
        <ul class="reset-list">
          <?php if( !empty($smedias['facebook_url']) ): ?>
          <li>
            <a target="_blank" href="<?php echo $smedias['facebook_url']; ?>">
              <i><svg class="facebook-icon" width="24" height="24" viewBox="0 0 24 24" fill="#899EAC">
                <use xlink:href="#facebook-icon"></use> </svg>
              </i>
            </a>
          </li>
          <?php endif; ?>
          <?php if( !empty($smedias['linkedin_url']) ): ?>
          <li>
            <a target="_blank" href="<?php echo $smedias['linkedin_url']; ?>">
              <i><svg class="linkdin-icon" width="24" height="24" viewBox="0 0 24 24" fill="#899EAC">
                <use xlink:href="#linkdin-icon"></use> </svg>
              </i>
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </div>

    </div>
    
  </div>