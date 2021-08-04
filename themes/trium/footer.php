<?php 
$logoObj = get_field('ftlogo', 'options');
if( is_array($logoObj) ){
  $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
}else{
  $logo_tag = '';
}
$logoObj2 = get_field('ftlogo2', 'options');
if( is_array($logoObj2) ){
  $logo_tag2 = '<img src="'.$logoObj2['url'].'" alt="'.$logoObj2['alt'].'" title="'.$logoObj2['title'].'">';
}else{
  $logo_tag2 = '';
}
$adres = get_field('adres', 'options');
$url = get_field('url', 'options');
$gmaplink = !empty($url)?$url: 'javascript:void()';
$telefoon = get_field('telefoon', 'options');
$fax = get_field('fax', 'options');
$btw = get_field('btw', 'options');
$email = get_field('emailadres', 'options');
$copyright_text = get_field('copyright_text', 'options');
?>
<footer class="footer-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-cntlr">
          <div class="ftr-top clearfix">
            <div class="ftr-col ftr-col-01">
              <div class="ftr-logo">
                <div class="ftr-lg-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
                </div>
                <div class="ftr-sm-logo">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag2; ?>
                </a>
                </div>
              </div>
            </div>
            <div class="ftr-col ftr-col-02">
              <div class="ftr-col-menu">
                <?php 
                  $menuOptions = array( 
                      'theme_location' => 'cbv_fta_menu', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $menuOptions ); 
                  $menuOptions2 = array( 
                      'theme_location' => 'cbv_ftb_menu', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $menuOptions2 ); 
                ?>

              </div>

              <div class="ftr-xs-col-menu show-sm">
                <?php 
                  $menuOptions3 = array( 
                      'theme_location' => 'cbv_ftmobile_menu', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $menuOptions3); 
                ?>
              </div>
            </div>
            <div class="ftr-col ftr-col-03 hide-sm">
              <div class="ftr-col-desc">
                  <?php 
                    if( !empty($adres) ) printf('<div class="ftr-addr"><a href="%s" target="_blank">%s</a></div>', $gmaplink, $adres);
                    if( !empty($telefoon) ) printf('<div class="ftr-tel"><span>'.__('Phone', 'trium').': <a href="tel:%s">%s</a></span></div>', phone_preg($telefoon),  $telefoon); 
                    if( !empty($fax) ) printf('<div class="ftr-fax"><span>'.__('Fax', 'trium').': <a href="tel:%s">%s</a></span></div>', phone_preg($fax),  $fax); 
                    if( !empty($email) ) printf('<div class="ftr-mail"><a href="mailto:%s">%s</a></div> ', $email, $email); 
                    if( !empty($btw) ) printf('<div class="ftr-be-code"><span>%s</span></div> ', $btw);  
 
                  ?>
              </div>
            </div>
          </div>
          <div class="ftr-btm">
            <div class="ftr-copyright">
              <?php if( !empty( $copyright_text ) ) printf( '<p>%s</p>', $copyright_text); ?> 
            </div>

            <div class="ftr-btm-menu">
              <?php 
                $copyrightmenu = array( 
                    'theme_location' => 'cbv_copyright_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $copyrightmenu );
              ?> 
            </div>

            <div class="ftr-developed-by">
              <p>Website ontwerp door <a target="_blank" href="https://www.conversal.be/">conversal</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>