<?php 
get_header(); 
$thisID = get_the_ID();
$custom_titel = get_field('custom_titel', $thisID);
$page_title = !empty($custom_titel) ? $custom_titel : get_the_title();
?>
<?php get_template_part('templates/breadcrumbs'); ?>
  <section class="page-entry-hdr-cntlr diensten-details-page-entry-hdr">
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
  <section class="over-ons-grds-sec dinst-dtls-grds-sec">
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
$showhidecta = get_field('showhidecta', $thisID);
if($showhidecta){
$cta = get_field('ctasec', $thisID);
if($cta){
?>
  <section class="dinst-cta-module-sec dnsten-cta-module-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cta-module">
          <?php 
            if( !empty($cta['titel']) ) printf('<h3 class="cta-module-title fl-h3">%s</h3>', $cta['titel']);
            if( !empty($cta['beschrijving']) ) echo wpautop( $cta['beschrijving'] );
            $knop = $cta['knop'];
            if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
              printf('<div class="cta-module-btn"><a class="fl-transparent-btn" href="%s" target="%s">%s</a></div>', $knop['url'], $knop['target'], $knop['title']); 
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
<?php } ?>
<?php 
$showhidetekst = get_field('showhidetekst', $thisID);
if($showhidetekst){
$tekstb = get_field('tekst_blok', $thisID);
if($tekstb){
?>
  <section class="dis-overview-text-module ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block-850">
            <div class="dfp-text-module clearfix">
              <?php if( !empty($tekstb['beschrijving']) ) echo wpautop( $tekstb['beschrijving'] ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
<?php } ?>
<?php 
$showhidetab = get_field('showhidetab', $thisID);
if($showhidetab){
$tabs = get_field('tabs', $thisID);
if($tabs){
?>
  <section class="diensten-details-tab-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="diensten-details-tab-sec-cntlr">

            <div class="diensten-filterbar">
              <ul class="diensten-filter reset-list">
                <?php $i = 1; foreach( $tabs as $tab ): ?>
                <li><a href="javascript:void();" data-tag="tab<?php echo $i; ?>" class="<?php echo ($i == 1)?'current':'';?>"><?php echo !empty($tab['tab_naam'])? $tab['tab_naam']:'';?></a></li>
                <?php $i++; endforeach; ?>
              </ul>
            </div>
            <div style="clear: both;"></div>
            <div class="dnsten-dtls-tab-con">
              <?php 
                $i = 1; foreach( $tabs as $tab ): 
              ?>
              <div class="dnsten-dtls-tab-item<?php echo ($i == 1)?'':' hide'; ?>" id="tab<?php echo $i; ?>">
                <div class="dnsten-dtls-tab-item-cntlr">
                  <h3 class="fl-h3"><?php echo !empty($tab['titel'])? $tab['titel']:'';?></h3>
                  <div class="dnsten-dtls-tab-des">
                    <?php echo !empty($tab['beschrijving'])? wpautop($tab['beschrijving']):'';?>
                  </div>
                </div>
              </div>
              <?php $i++; endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
<?php } ?>

<?php 
$showhidedien = get_field('showhidedien', $thisID);
if($showhidedien){
$dissec = get_field('dienstensec', $thisID);
$disobj = $dissec['selecteer_diensten'];

if( empty($disobj) ){
  $disobj = get_posts( array(
      'post_type' => 'diensten',
      'posts_per_page'=> 3,
      'orderby' => 'date',
      'order'=> 'desc',
      'post__not_in' => array($thisID),
    ) );
}
?>
<section class="dnsten-service-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dnsten-service-sec-cntlr">
          <div class="page-entry-hdr dnsten-service-sec-title">
            <h2 class="fl-h2"><?php echo !empty($dissec['titel'])? $dissec['titel']:__('Diensten', 'trium'); ?></h2>
          </div>
          <?php if($disobj){ ?>
          <ul class="reset-list ulc">
          <?php 
            foreach( $disobj as $dis ) {
            global $post;
            $imgID = get_post_thumbnail_id($dis->ID);
            $imgknop = !empty($imgID)? cbv_get_image_src($imgID): referenties_placeholder(); 
          ?>
            <li>
              <div class="dnsten-service-sec-grid-item">
                <a href="<?php echo get_permalink($dis->ID); ?>" class="overlay-link"></a>
                <div class="dnsten-service-sec-grid-item-inner">
                  <div class="dnsten-service-sec-grid-item-img inline-bg" style="background:url(<?php echo $imgknop; ?>);"></div>
                </div>
                  <h3 class="dnsten-service-sec-grid-item-title fl-h3"><?php echo $dis->post_title; ?></h3>
                </div>
            </li>
            <?php } ?>
          </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php 
$showhiderefer = get_field('showhiderefer', $thisID);
if($showhiderefer){
$refer = get_field('referenties', $thisID);
if($refer){
$refobj = $refer['selecteer_refe'];
if( empty($refobj) ){
  $refobj = get_posts( array(
      'post_type' => 'referenties',
      'posts_per_page'=> 3,
      'orderby' => 'date',
      'order'=> 'desc',

    ) );
}
?>
<section class="referenties-detials-related-sec diensten-detials-related-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="referenties-detials-related-sec-inr">
          <div class="fl-sec-entry-hdr">
            <h2 class="fl-h2"><?php echo !empty($clientsec['titel'])? $clientsec['titel']:__('Referentie', 'trium'); ?></h2>
            
          </div>
          <?php if($refobj){ ?>
          <div class="referenties-detials-related-grds clearfix">
            <?php 
              foreach( $refobj as $ref ) {
              global $post;
              $imgID = get_post_thumbnail_id($ref->ID);
              $imgknop = !empty($imgID)? cbv_get_image_src($imgID): referenties_placeholder(); 
            ?>
            <div class="referenties-detials-related-grd-item">
              <div class="blog-grid-item">                
                <div class="blog-grid-img">                    
                  <a href="<?php echo get_permalink($ref->ID); ?>" class="overlay-link"></a>
                  <div class="bgi-img inline-bg" style="background-image: url('<?php echo $imgknop; ?>');">                  
                  </div>
                </div>  
                <div class="blog-grid-des mHc" style="height: 153px;">
                  <div class="blog-grid-des-inner">                                     
                    <h2 class="fl-h3 bgi-title mHc1" style="height: 36px;"><a href="<?php echo get_permalink($ref->ID); ?>"><?php echo $ref->post_title; ?></a></h2>                      
                    <div class="bgi-des mHc2" style="height: 50px;">
                      <?php echo wpautop($ref->post_excerpt); ?>
                    </div>    
                    <div class="fl-pro-grd-btn fl-btn-absolute">
                      <a class="fl-read-more-btn" href="<?php echo get_permalink($ref->ID); ?>"><?php _e( 'meer info', 'trium' ); ?></a>
                    </div>
                  </div>   
                </div>    
              </div>
            </div>
            <?php } ?>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php } ?>
<?php get_template_part('templates/cta'); ?>
<?php get_footer(); ?>