<?php 
/*
	Template Name: Diensten
*/
get_header(); 
$thisID = get_the_ID(); 
$intro = get_field('intro', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="page-entry-hdr-cntlr diensten-overview-entry-hdr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block-850">
          <div class="page-entry-hdr">
            <h1 class="fl-h2"><?php echo $page_title; ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <?php if($intro): ?>
  <section class="diensten-overview-text-module">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block-850">
            <div class="dfp-text-module  clearfix">
              <?php echo !empty($intro['beschrijving'])? wpautop($intro['beschrijving']):''; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php 
$disobj = get_field('selectdiensten', $thisID);
if( empty($disobj) ){
  $disobj = get_posts( array(
      'post_type' => 'diensten',
      'posts_per_page'=> 4,
      'orderby' => 'date',
      'order'=> 'desc',

    ) );
}
if($disobj){
?>
<section class="service-sec">
  <div class="service-sec-cntlr">
    <ul class="reset-list ulc">
      <?php 
        foreach( $disobj as $dis ) {
        global $post;
        $imgID = get_post_thumbnail_id($dis->ID);
        $imgknop = !empty($imgID)? cbv_get_image_src($imgID): diesten_placeholder(); 
      ?>
      <li>
        <div class="service-sec-grid-item">
          <a href="<?php echo get_permalink($dis->ID); ?>" class="overlay-link"></a>
          <div class="service-sec-grid-item-img inline-bg" style="background:url(<?php echo $imgknop; ?>);">
            <h2 class="service-sec-grid-item-title fl-h2"><a href="<?php echo get_permalink($dis->ID); ?>"><?php echo $dis->post_title; ?></a></h2>
          </div>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
</section>
<?php } ?>
<?php 
$showhidetekst_cta = get_field('showhidetekst_cta', $thisID);
if($showhidetekst_cta){
$cta = get_field('ctasec', $thisID);
if($cta){
?>
  <section class="cta-module-sec dnsten-cta-module-sec">
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
$showhidetekst_tekst = get_field('showhidetekst_tekst', $thisID);
if($showhidetekst_tekst){
$blok1 = get_field('tekst_blok1', $thisID);
$blok2 = get_field('tekst_blok2', $thisID);
?>
  <section class="diensten-overview-text-module">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if($blok1){ ?>
          <div class="block-850">
            <div class="dfp-text-module clearfix">
                <?php echo !empty($blok1['beschrijving'])? wpautop($blok1['beschrijving']):''; ?>
              </div>
          </div>
          <hr>
          <?php } ?>
          <?php if($blok2){ ?>
          <div class="block-850">
              <div class="dfp-text-module dnst-text-module clearfix">
                <?php 
                  if( !empty($blok2['titel']) ) printf('<h2>%s</h2>', $blok2['titel']);
                  echo !empty($blok2['beschrijving'])? wpautop($blok2['beschrijving']):''; 
                ?>
              </div>
            </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
<?php get_footer(); ?>