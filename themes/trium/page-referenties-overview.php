<?php 
/*
	Template Name: Referenties
*/
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
<section class="page-entry-hdr-cntlr">
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
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query = new WP_Query(array(
  'post_type' => 'referenties',
  'posts_per_page'=> 6,
  'orderby' => 'date',
  'order'=> 'desc',
  'paged'=>$paged

));
if( $query->have_posts() ):
?>    
<section class="blog-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
                
        <div class="blog-grids-cntrl">
          <div class="blog-grid-items">
            <ul class="clearfix reset-list">
              <?php 
                $i = 1;
                while($query->have_posts()): $query->the_post(); 
                global $post;
                $imgID = get_post_thumbnail_id(get_the_ID());
                $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): '';
              ?>  
              <?php 
              if($i == 4): 
                  $cta = get_field('cta', 'options'); 
                  if($cta):
              ?>
               <li class="blog-grid-cta">
                <div class="cta-module-sec">
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
              </li>
              <?php endif; ?>
              <?php endif; ?>
              <li>                
                <div class="blog-grid-item">                
                  <div class="blog-grid-img">                    
                    <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                    <div class="bgi-img inline-bg" style="background-image: url('<?php echo $imgsrc; ?>');"></div>
                  </div>  
                  <div class="blog-grid-des mHc">
                    <div class="blog-grid-des-inner">                                     
                      <h2 class="fl-h3 bgi-title mHc1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>                      
                      <div class="bgi-des mHc2">
                        <?php the_excerpt(); ?>
                      </div>    
                      <div class="fl-pro-grd-btn fl-btn-absolute">
                        <a class="fl-read-more-btn" href="<?php the_permalink(); ?>">meer info</a>
                      </div>
                    </div>   
                  </div>    
                </div>  
              </li>
              <?php $i++; endwhile; ?>            
            </ul>    
          </div>
          <?php if( $query->max_num_pages > 1 ): ?>
          <div class="fl-pagination-blog-cntrl">
            <div class="fl-pagination-ctlr">
              <?php
                $big = 999999999; // need an unlikely integer
                $query->query_vars['paged'] > 1 ? $current = $query->query_vars['paged'] : $current = 1;

                echo paginate_links( array(
                  'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'type'      => 'list',
                  'prev_next' => true,
                  'prev_text' => __('<i><svg class="pagi-left-arrow" width="18" height="30" viewBox="0 0 18 30" fill="#1A7ABE">
                    <use xlink:href="#pagi-left-arrow"></use></svg></i>'),
                  'next_text' => __('<i><svg class="pagi-right-arrow" width="18" height="30" viewBox="0 0 18 30" fill="#1A7ABE">
                    <use xlink:href="#pagi-right-arrow"></use></svg></i>'),
                  'format'    => '?paged=%#%',
                  'current'   => $current,
                  'total'     => $query->max_num_pages
                ) );
              ?>
            </div>
          </div>  
          <?php endif; ?>
          <?php else: ?>
            <div class="col-md-12">
              <?php $no_results = get_field('no_results', 'options'); ?>
              <div class="notfound"><?php echo !empty($no_results)? $no_results: __('Geen resultaat', 'trium'); ?></div>
            </div>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>  
    </div>
  </div>
</section>
<?php get_footer(); ?>