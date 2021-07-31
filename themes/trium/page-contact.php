<?php 
/*
  Template Name: Contact
*/
get_header(); 
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title($thisID);
$mapcode = get_field('mapcode', $thisID);
?>
<section class="breadcrumb-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-cntlr">
          <ul class="reset-list clearfix">
            <li class="home">
              <a href="#">
                <span class="item">Home</span>
              </a>
            </li>
            <li>
              <a href="#"><span>Binnenpagina</span></a>
            </li>
            <li class="active">
              <span>Binnenpagina</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-form-sec-wrp">
 <div class="container">
  <div class="row">
    <div class="col-md-12">
 
      <div class="contact-form-block clearfix">
        <div class="contact-form-lft">
          <div class="contact-form-dsc-wrp">
            <div class="page-entry-header">
              <?php if( !empty($page_title) ) printf( '<h1 class="fl-h1">%s</h1>', $page_title); ?>
            </div>
          </div>
          <div class="contact-form-wrp clearfix">
            <div class="wpforms-container">
              <?php if( !empty($intro['shortcode']) ) echo do_shortcode($intro['shortcode']); ?>
            </div>
          </div>
        </div>
        <?php 
          $adres = get_field('adres', 'options');
          $url = get_field('url', 'options');
          $gmaplink = !empty($url)?$url: 'javascript:void()';
          $telefoon = get_field('telefoon', 'options');
          $fax = get_field('fax', 'options');
          $btw = get_field('btw', 'options');
          $email = get_field('emailadres', 'options');
          $continfo = get_field('contactinfo', $thisID);
        ?>
          <div class="contact-form-rgt">
            <div class="contact-form-info-cntlr">
              <div class="contact-form-info">
              <?php if( !empty($continfo['titel']) ) printf( '<h6 class="fl-h6 contact-form-info-title">%s</h6>', $continfo['titel']); ?>
                <ul class="reset-list clearfix">
                <?php 
                  if( !empty($continfo['adres']) ) {
                    $contmaplink = !empty($continfo['url'])?$continfo['url']: 'javascript:void()';
                    printf('<li><a href="%s" target="_blank">%s</a></li>', $contmaplink, $continfo['adres']);
                  }
                  else{
                    if( !empty($adres) ) printf('<li><a href="%s" target="_blank">%s</a></li>', $gmaplink, $adres);
                  }
                  if(!empty($continfo['telefoon'])){
                    printf('<li><span>Phone: <a href="tel:%s">%s</a></span></li>', phone_preg($continfo['telefoon']),  $continfo['telefoon']);
                  }else{
                    if( !empty($telefoon) ) printf('<li><span>Phone: <a href="tel:%s">%s</a></span></li>', phone_preg($telefoon),  $telefoon);
                  } 
                  if(!empty($continfo['fax'])){
                    printf('<li><span>Fax: <a href="tel:%s">%s</a></span></li>', phone_preg($continfo['fax']),  $continfo['fax']);
                  }else{
                    if( !empty($fax) ) printf('<li><span>Fax: <a href="tel:%s">%s</a></span></li>', phone_preg($fax),  $fax);
                  } 
                  if(!empty($continfo['emailadres'])){
                    printf('<li><span>E-mail: <a href="mailto:%s">%s</a></span></li>', $continfo['emailadres'], $continfo['emailadres']);
                  }else{
                    if( !empty($email) ) printf('<li><span><a href="mailto:%s">%s</a></span></li>', $email, $email);
                  }
                  if( !empty($btw) ) printf('<li><span>%s</span></li>', $btw);
              ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php if( $mapcode ): ?>
<section class="contact-google-map-sec-wrp">
        <div class="contact-google-map-wrp">
          <div class="contact-google-map">
            <?php echo $mapcode; ?>
          </div> 
        </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>