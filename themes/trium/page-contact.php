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
          $telefoon = get_field('telefoon', 'options');
          $fax = get_field('fax', 'options');
          $email = get_field('emailadres', 'options');
          $continfo = get_field('contactinfo', $thisID);
        ?>
          <div class="contact-form-rgt">
            <div class="contact-form-info-cntlr">
              <div class="contact-form-info">
              <h6 class="fl-h6 contact-form-info-title">Contact Info</h6>
                <ul class="reset-list clearfix">
                  <li>
                    <a href="#" target="_blank">Herseltsesteenweg 72,<br>B3200 Aarschot</a>
                  </li>
                  <li>
                    <span>Phone: <a href="tel:+32(0)78/15.80.85">+32(0)78/15.80.85</a></span>
                  </li>
                  <li>
                    <span>Fax:<a href="tel:+32(0)16/57.00.21">+32(0)16/57.00.21</a></span>
                  </li>
                  <li>
                    <span>E-mail: <a href="mailto:info@trium.be">info@trium.be</a></span>
                  </li>
                <?php 
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
              ?>
                  <li>
                    <span>BE 000 0000 000</span>
                  </li>
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