<?php 
get_header();
?>
<?php  
  $hbanner = get_field('home_banner', HOMEID);
  if($hbanner):
    $banner = !empty($hbanner['afbeelding'])? cbv_get_image_src( $hbanner['afbeelding'] ): '';
?>
<section class="hm-banner">
  <div class="hm-banner-bg inline-bg" style="background-image: url('<?php echo $banner; ?>');">
  </div>
  <span class="hm-bnr-shape downAnimate scrollto" data-to="#lftimg-rgtdesc-sec"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-banner-cntlr">
          <div class="hm-bnr-desc">
            <?php 
	            if( !empty($hbanner['titel']) ) printf( '<h3 class="hm-bnr-sub-title fl-h3">%s</h3>', $hbanner['titel'] ); 
	            if( !empty($hbanner['subtitel']) ) printf( '<h1 class="hm-bnr-title fl-h1">%s</h1>', $hbanner['subtitel'] ); 
	            if( !empty($hbanner['starttijd']) ) printf( '<h4 class="hm-bnr-xs-title fl-h3">%s</h4>', $hbanner['starttijd'] ); 
	            if( !empty($hbanner['beschrijving']) ) echo wpautop($hbanner['beschrijving']);
				$hknop = $hbanner['knop'];
	            if( is_array( $hknop ) &&  !empty( $hknop['url'] ) ){
	                printf('<div class="hm-bnr-btn"><a  class="fl-blue-btn" href="%s" target="%s">%s</a></div>', $hknop['url'], $hknop['target'], $hknop['title']); 
	            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>
<?php 
$showhideintro = get_field('showhideintro', HOMEID);
if($showhideintro){
$intro = get_field('intro_text', HOMEID);
if($intro){
?>
<section class="lftimg-rgtdesc-module-sec" id="lftimg-rgtdesc-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lftimg-rgtdesc-mudl">
          <?php if( !empty($intro['titel']) ) printf( '<h2 class="lftimg-rgtdesc-mudl-title fl-h2 show-sm">%s</h2>', $intro['titel']); ?>
          <div class="lftimg-rgtdesc-lft inline-bg" style="background-image: url('<?php echo !empty($intro['afbeelding'])? cbv_get_image_src($intro['afbeelding']):''; ?>');">
            <?php echo !empty($intro['afbeelding'])? cbv_get_image_tag($intro['afbeelding']):''; ?>
          </div>
          <div class="lftimg-rgtdesc-rgt">
	          <?php 
	            if( !empty($intro['titel']) ) printf( '<h2 class="lftimg-rgtdesc-mudl-title hide-sm fl-h2">%s</h2>', $intro['titel']); 
	            if( !empty($intro['beschrijving']) ) echo wpautop($intro['beschrijving']); 
				$intro_knop = $intro['knop'];
                if( is_array( $intro_knop ) &&  !empty( $intro_knop['url'] ) ){
                    printf('<div class="lftimg-rgtdesc-btn"><a  class="fl-transparent-btn" href="%s" target="%s">%s</a></div>', $intro_knop['url'], $intro_knop['target'], $intro_knop['title']); 
                }
	          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php } ?>
<?php 
$showhide_diensten = get_field('showhide_diensten', HOMEID);
if($showhide_diensten){
$dienst = get_field('dienstensec', HOMEID);
if($dienst){
$dieobj = $dienst['select_diensten'];
if( empty($dieobj) ){
  $dieobj = get_posts( array(
      'post_type' => 'diensten',
      'posts_per_page'=> 4,
      'orderby' => 'date',
      'order'=> 'desc'
    ) );
}
if($dieobj){
?>
<section class="service-sec">
  <div class="service-sec-cntlr">
    <ul class="reset-list ulc">
      <?php 
        foreach( $dieobj as $dis ) {
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
<?php } ?>
<?php } ?>
<?php 
$showhide_referenties = get_field('showhide_referenties', HOMEID);
if($showhide_referenties){
$hrefer = get_field('hreferenties', HOMEID);
if($hrefer){
$refobj = $hrefer['select_referenties'];
if( empty($refobj) ){
  $refobj = get_posts( array(
      'post_type' => 'referenties',
      'posts_per_page'=> 3,
      'orderby' => 'date',
      'order'=> 'desc'
    ) );
}
?>
<section class="referenties-detials-related-sec diensten-detials-related-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="referenties-detials-related-sec-inr">
          <div class="fl-sec-entry-hdr">
            <?php if( !empty($hrefer['titel']) ) printf( '<h2 class="fl-h2">%s</h2>', $hrefer['titel']); ?>
          </div>
          <?php if($refobj){ ?>
          <div class="referenties-detials-related-grds clearfix hmRdrSlider">
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
<?php 
$clientlogos = get_field('clientlogos', 'options'); 
if($clientlogos){
?>
<section class="client-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="client-sec-inr">
          <div class="client-grds cleientSlider">
            <?php foreach($clientlogos as $clientl): ?>
            <div class="client-grd-item">
              <div class="client-logo-cntlr">
                <?php 
                  echo !empty($clientl['knop'])? '<a class="overlay-link" target="_blank" href="'.$clientl['knop'].'"></a>':'';
                  echo !empty($clientl['logo'])? cbv_get_image_tag($clientl['logo']):'';
                ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php get_template_part('templates/cta'); ?>

<?php
get_footer();
?>