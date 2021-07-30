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
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="bdoverlay"></div>
  <div class="page-body-cntlr">
    <header class="header-wrap">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="header-inr clearfix">
                <div class="hdr-lft">
                  <div class="logo">
                    <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/logo.png"></a>
                  </div>
                </div>
                <div class="hdr-rgt">
                  <div class="hdr-topbar">
                    <div class="hdr-top-menu hide-md">
                      <ul class="clearfix reset-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Over ons</a></li>
                        <li><a href="#">Contact</a></li>
                      </ul>
                    </div>
                    <div class="hdr-lang hide-md">
                      <ul class="reset-list">
                        <li class="active"><a href="#">nl</a></li>
                        <li><a href="#">fr</a></li>
                      </ul>
                    </div>
                    <div class="hdr-socials hide-md">
                      <ul class="reset-list">
                        <li>
                          <a target="_blank" href="#">
                            <i><svg class="facebook-icon" width="24" height="24" viewBox="0 0 24 24" fill="#899EAC">
                              <use xlink:href="#facebook-icon"></use> </svg>
                            </i>
                          </a>
                        </li>
                        <li>
                          <a target="_blank" href="#">
                            <i><svg class="linkdin-icon" width="24" height="24" viewBox="0 0 24 24" fill="#899EAC">
                              <use xlink:href="#linkdin-icon"></use> </svg>
                            </i>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="hdr-tel">
                      <a href="tel: +32(0)78/15.80.85">Tel: +32(0)78/15.80.85</a>
                    </div>
                  </div>
                  <div class="hdr-menu">
                    <nav class="main-nav hide-md">
                      <ul class="clearfix reset-list">
                        <li class="current-menu-item"><a href="#">Inbraakbeveiliging</a></li>
                        <li class="menu-item-has-children">
                          <a href="#">Brandbeveiliging</a>
                          <ul class="sub-menu" style="">
                            <li><a href="#">submenu 1</a></li>
                            <li><a href="#">submenu 2</a></li>
                            <li><a href="#">submenu 3</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Toegangscontrole</a></li>
                        <li><a href="#">Camerabewaking</a></li>
                        <li><a href="#">Referentie</a></li>
                      </ul>
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
      <div class="usp-bar">
        <div class="usp-bar-cntlr uspBarSlider">
          <div class="usp-bar-item-cntlr">
            <span class="usp-bar-item">Gratis risicoanalyse</span>
          </div>
          <div class="usp-bar-item-cntlr">
            <span class="usp-bar-item">Offerte op maat</span>
          </div>
          <div class="usp-bar-item-cntlr">
            <span class="usp-bar-item">Professionele uitvoering</span>
          </div>
          <div class="usp-bar-item-cntlr">
            <span class="usp-bar-item">24u/24u Technische bijstand</span>
          </div>
        </div>
      </div>
    </header>

    <div class="xs-mobile-menu">
      <div class="xs-mbl-hdr">
        <div class="hdr-tel">
          <a href="tel: +32(0)78/15.80.85">Tel: +32(0)78/15.80.85</a>
        </div>
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
        <nav class="main-nav hide-md">
          <ul class="clearfix reset-list">
            <li class="current-menu-item"><a href="#">Home</a></li>
            <li class="menu-item-has-children">
              <a href="#">Over ons</a>
              <ul class="sub-menu" style="">
                <li><a href="#">submenu 1</a></li>
                <li><a href="#">submenu 2</a></li>
                <li><a href="#">submenu 3</a></li>
              </ul>
            </li>
            <li><a href="#">Inbraakbeveiliging</a></li>
            <li><a href="#">Brandbeveiliging</a></li>
            <li><a href="#">Toegangscontrole</a></li>
            <li><a href="#">Camerabewaking</a></li>
            <li><a href="#">Referentie</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
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
            <li>
              <a target="_blank" href="#">
                <i><svg class="facebook-icon" width="24" height="24" viewBox="0 0 24 24" fill="#899EAC">
                  <use xlink:href="#facebook-icon"></use> </svg>
                </i>
              </a>
            </li>
            <li>
              <a target="_blank" href="#">
                <i><svg class="linkdin-icon" width="24" height="24" viewBox="0 0 24 24" fill="#899EAC">
                  <use xlink:href="#linkdin-icon"></use> </svg>
                </i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      
    </div>