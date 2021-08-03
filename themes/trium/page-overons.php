<?php 
/*Template Name: Overons*/

get_header();
$thisID = get_the_ID();
$smedias = get_field('social_media', 'options'); 
$custom_titel = get_field('custom_titel', $thisID);
$page_title = !empty($custom_titel) ? $custom_titel : get_the_title();


?>
<section class="breadcrumb-sec hide-sm">
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



<section class="page-entry-hdr-cntlr over-ons-page-entry-hdr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-entry-hdr">
          <h1 class="fl-h1"><?php echo $page_title; ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
$showhideblok = get_field('showhideblok', $thisID);
if($showhideblok){
$blokintro = get_field('blokintro', $thisID);
if($blokintro){
?>
<section class="over-ons-grds-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="over-ons-grds-sec-inr">
          <?php foreach( $blokintro as $int_blok ): ?>
          <div class="over-ons-grds-row">
            <div class="over-ons-grds-row-inr">
              <div class="over-ons-grds-lft">
                <div class="over-ons-grds-lft-img-cntlr">
                  <div class="over-ons-grds-lft-img inline-bg" style="background: url('<?php echo !empty($int_blok['afbeelding'])? cbv_get_image_src($int_blok['afbeelding']):''; ?>');">
                    <?php echo !empty($int_blok['afbeelding'])? cbv_get_image_tag($int_blok['afbeelding']):''; ?>
                  </div>
                </div>
              </div>
              <div class="over-ons-grds-rgt">
                <div class="over-ons-grds-rgt-des">
                  <?php 
                    if( !empty($int_blok['titel']) ) printf( '<h2 class="fl-h2">%s</h2>', $int_blok['titel']); 
                    if( !empty($int_blok['beschrijving']) ) echo wpautop($int_blok['beschrijving']); 
                  ?>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php } ?>
<?php 
$showhideclient = get_field('showhideclient', $thisID);
if($showhideclient){
  $clientlogos = get_field('clientlogos', 'options'); 
?>
<section class="client-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="client-sec-inr">
          <?php if($clientlogos): ?>
          <div class="client-grds cleientSlider">
            <?php foreach($clientlogos as $clientl): ?>
            <div class="client-grd-item">
              <div class="client-logo-cntlr">
                <?php 
                  echo !empty($clientl['knop'])? '<a class="overlay-link" href="'.$clientl['knop'].'"></a>':'';
                  echo !empty($clientl['logo'])? cbv_get_image_tag($clientl['logo']):'';
                ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php 
$showhidetekst_tekst = get_field('showhidetekst_tekst', $thisID);
if($showhidetekst_tekst){
$tekst_blok1 = get_field('tekst_blok1', $thisID);
$tekst_blok2 = get_field('tekst_blok2', $thisID);
?>
<section class="two-grd-des-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="two-grd-des-sec-inr clearfix">
          <?php if($tekst_blok1): ?>
          <div class="two-grd-des-col">
           <?php if( !empty($tekst_blok1['beschrijving']) ) echo wpautop($tekst_blok1['beschrijving']); ?>
          </div>
          <?php endif; ?>
          <?php if($tekst_blok2): ?>
          <div class="two-grd-des-col">
            <?php if( !empty($tekst_blok2['beschrijving']) ) echo wpautop($tekst_blok2['beschrijving']); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php 
$showhidelookout = get_field('showhidelookout', $thisID);
if($showhidelookout){
$lookout = get_field('lookout_sec', $thisID);
if($lookout){
?>
<section class="over-ons-lookout-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="over-ons-lookout-sec-inr">
          <div class="over-ons-lookout-logo">
            <div class="over-ons-lookout-logo-img-cntlr">
              <div class="over-ons-lookout-logo-img">
                <?php echo !empty($lookout['logo'])? cbv_get_image_tag($lookout['logo']):'';?>
              </div>
            </div>
          </div>
          <div class="over-ons-lookout-des">
            <?php 
              if( !empty($lookout['titel']) ) printf('<h2 class="fl-h3">%s</h2>', $lookout['titel']); 
              if( !empty($lookout['beschrijving']) ) echo wpautop($lookout['beschrijving']); 
            ?>
            <?php if( !empty($lookout['titel']) ) printf('<h3 class="fl-h6">%s</h3>', $lookout['titel']); ?>
              <?php 
                $url = $lookout['url'];
                $contmaplink = !empty($url)?$url: 'javascript:void()';
                if( !empty($lookout['adres']) ) printf('<div class="ood-location"><a href="%s" target="_blank">%s</a></div>', $contmaplink, $lookout['adres']);
                if(!empty($lookout['telefoon'])) printf('<div class="ood-tel"><span>Phone: <a href="tel:%s" target="_blank">%s</a></span></div>', phone_preg($lookout['telefoon']),  $lookout['telefoon']);
                
                if(!empty($lookout['fax'])) printf('<div class="ood-fax"><span>Fax: <a href="tel:%s" target="_blank">%s</a></span></div>', phone_preg($lookout['fax']),  $lookout['fax']);

                if( !empty($lookout['btw']) ) printf('<div class="ood-vat"><span>BTW : %s</span></div>', $lookout['btw']);
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php } ?>

<?php get_template_part('templates/cta'); ?>
<?php get_footer();?>
