<?php 
get_header(); 
$thisID = get_the_ID();
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



<section class="innerpage-con-wrap">
  <article class="default-page-con" id="referenties-details"> 
    <div class="block">
      <div class="dfp-back-btn-module">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block-850">
                <div class="back-btn">
                  <a href="javascript:history.go(-1)">
                    Terug naar overzicht
                    <i>
                      <svg class="back-btn-svg" width="11" height="18" viewBox="0 0 11 18" fill="#1A7ABE">
                        <use xlink:href="#back-btn-svg"></use> 
                      </svg>
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if( have_rows('inhoud_ref') ){ ?>
    <?php while ( have_rows('inhoud_ref') ) : the_row();  ?>
      <?php if( get_row_layout() == 'koptekst' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $fc_tekst = get_sub_field('fc_tekst');
      ?>
      <div class="block">
        <div class="dfp-promo-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-850">
                  <div class="dfp-promo-module-des">
                    <?php 
                      if( !empty($fc_titel) ) printf('<strong class="dfp-promo-module-title fl-h1">%s</strong>', $fc_titel ); 
                      if( !empty($fc_tekst) ) echo wpautop($fc_tekst); 
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'afbeeldingen' ){ 
      $afbeeldingen = get_sub_field('afbeeldingen');
      ?>
      <div class="block">
        <div class="dfp-promo-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="dfp-plate-one-img-bx">
                  <?php echo !empty($afbeeldingen)? cbv_get_image_tag($afbeeldingen):''; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'teksteditor' ){ 
      $beschrijving = get_sub_field('fc_teksteditor');
      ?>
      <div class="block">
        <div class="dfp-text-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-850">
                  <?php if( !empty( $beschrijving ) ) echo wpautop($beschrijving); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'diensten' ){ 
          $dieobj = get_sub_field('selecteer_diensten');
          if( empty($dieobj) ){
              $dieobj = get_posts( array(
                'post_type' => 'diensten',
                'posts_per_page'=> 2,
                'orderby' => 'date',
                'order'=> 'desc',

              ) );  
          }
      ?>
      <?php if($dieobj): ?>
      <div class="block">
        <div class="dfp-service-module title-show">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-850">
                  <div class="dfp-service-module-inr">
                    <div class="dfp-grd-entry-hdr">
                      <h2 class="fl-h2">
                        <?php echo !empty($clientsec['titel'])? $clientsec['titel']:__('Diensten', 'trium'); ?>
                      </h2>
                      <p class="show-sm">In purus donec porttitor aliquam. Fusce a rutrum pellentesque ut. Duis auctor scelerisque aenean tortor.</p>
                    </div>
                    <div class="dfp-service-grds clearfix">
                      <?php 
                        foreach( $dieobj as $dis ) {
                        global $post;
                        $imgID = get_post_thumbnail_id($dis->ID);
                        $imgknop = !empty($imgID)? cbv_get_image_src($imgID): referenties_placeholder(); 
                      ?>
                      <div class="dfp-service-grd-item">
                        <div class="dnsten-service-sec-grid-item">
                          <a href="<?php echo get_permalink($dis->ID); ?>" class="overlay-link"></a>
                          <div class="dnsten-service-sec-grid-item-inner">
                            <div class="dnsten-service-sec-grid-item-img inline-bg" style="background:url(<?php echo $imgknop; ?>);"></div>
                          </div>
                            <h3 class="dnsten-service-sec-grid-item-title fl-h3"><?php echo $dis->post_title; ?></h3>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'cta' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $fc_tekst = get_sub_field('fc_tekst');
        $fc_knop = get_sub_field('fc_knop');
      ?>
      <div class="block">
        <div class="dfp-cta-module-cntlr">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="cta-module">
                  <?php 
                    if( !empty($fc_titel) ) printf('<h3 class="cta-module-title fl-h3">%s</h3>', $fc_titel);
                    if( !empty($fc_tekst) ) echo wpautop( $fc_tekst );

                    if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
                      printf('<div class="cta-module-btn"><a class="fl-transparent-btn" href="%s" target="%s">%s</a></div>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'poster' ){     
      $fcposter = get_sub_field('afbeeldingen');
      $fc_video_url = get_sub_field('fc_video_url');
      $postersrc = !empty($fcposter)? cbv_get_image_src($fcposter): '';
      ?> 
      <div class="block">
        <div class="dfp-fancy-module">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block-850">
                  <div class="fl-fancy-module" >
                    <div class="fl-fancy-img inline-bg" style="background-image: url(<?php echo $postersrc; ?>);"></div>
                    <?php if( !empty($fc_video_url) ): ?>
                    <a class="overlay-link" data-fancybox href="<?php echo $fc_video_url; ?>"></a>
                    <div class="fancy-border"></div>
                    <span class="fl-video-play-cntlr">
                      <i>
                        <svg class="play-icon-svg" width="64" height="64" viewBox="0 0 64 64" fill="#fff">
                          <use xlink:href="#play-icon-svg"></use> 
                        </svg>
                      </i>
                    </span>
                  <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif( get_row_layout() == 'gap' ){
      $fc_gap = get_sub_field('fc_gap');
      ?>
      <div class="block-850">
        <div style="height:<?php echo $fc_gap; ?>px"></div>
      </div>
      <?php }elseif( get_row_layout() == 'horizontal_line' ){ ?>
      <div class="block-850">
        <hr>
      </div>
      <?php } ?>
    <?php endwhile; ?>
    <?php } ?>
    <div class="block">
    <?php get_template_part('templates/cta'); ?>
    </div>
  </article>
</section>


<section class="referenties-detials-related-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="referenties-detials-related-sec-inr">
          <div class="fl-sec-entry-hdr">
            <h2 class="fl-h2">Referentie (h2)</h2>
          </div>
          <div class="referenties-detials-related-grds rdrSlider clearfix">
            <div class="referenties-detials-related-grd-item">
              <div class="blog-grid-item">                
                <div class="blog-grid-img">                    
                  <a href="#" class="overlay-link"></a>
                  <div class="bgi-img inline-bg" style="background-image: url('assets/images/grid-img-1.jpg');">                  
                  </div>
                </div>  
                <div class="blog-grid-des mHc">
                  <div class="blog-grid-des-inner">                                     
                    <h2 class="fl-h3 bgi-title mHc1"><a href="#">Project titel (h2)</a></h2>                      
                    <div class="bgi-des mHc2">
                      <p>Eu at lacus, lorem facilisi at. Ultricies maecenas mollis morbi porttitor aliquam condimentum euismod sagittis.</p>
                    </div>    
                    <div class="fl-pro-grd-btn fl-btn-absolute">
                      <a class="fl-read-more-btn" href="#">meer info</a>
                    </div>
                  </div>   
                </div>    
              </div>
            </div>
            <div class="referenties-detials-related-grd-item">
              <div class="blog-grid-item">                
                <div class="blog-grid-img">                    
                  <a href="#" class="overlay-link"></a>
                  <div class="bgi-img inline-bg" style="background-image: url('assets/images/grid-img-1.jpg');">                  
                  </div>
                </div>  
                <div class="blog-grid-des mHc">
                  <div class="blog-grid-des-inner">                                     
                    <h2 class="fl-h3 bgi-title mHc1"><a href="#">Project titel (h2)</a></h2>                      
                    <div class="bgi-des mHc2">
                      <p>Eu at lacus, lorem facilisi at. Ultricies maecenas mollis morbi porttitor aliquam condimentum euismod sagittis.</p>
                    </div>    
                    <div class="fl-pro-grd-btn fl-btn-absolute">
                      <a class="fl-read-more-btn" href="#">meer info</a>
                    </div>
                  </div>   
                </div>    
              </div>
            </div>
            <div class="referenties-detials-related-grd-item">
              <div class="blog-grid-item">                
                <div class="blog-grid-img">                    
                  <a href="#" class="overlay-link"></a>
                  <div class="bgi-img inline-bg" style="background-image: url('assets/images/grid-img-1.jpg');">                  
                  </div>
                </div>  
                <div class="blog-grid-des mHc">
                  <div class="blog-grid-des-inner">                                     
                    <h2 class="fl-h3 bgi-title mHc1"><a href="#">Project titel (h2)</a></h2>                      
                    <div class="bgi-des mHc2">
                      <p>Eu at lacus, lorem facilisi at. Ultricies maecenas mollis morbi porttitor aliquam condimentum euismod sagittis.</p>
                    </div>    
                    <div class="fl-pro-grd-btn fl-btn-absolute">
                      <a class="fl-read-more-btn" href="#">meer info</a>
                    </div>
                  </div>   
                </div>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>