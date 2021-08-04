<?php 
/*
	Template Name: Thanks
*/
get_header(); 
$thisID = get_the_ID(); 
$intro = get_field('introsec', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : '';
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="bedankt-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="bedankt-page-content-inner">
          <div class="bedankt-massage-icon">
            <i>
              <svg class="bedankt-massage-icon-svg" width="100" height="100" viewBox="0 0 100 100" fill="#1A7ABE">
                          <use xlink:href="#bedankt-massage-icon-svg"></use> </svg>
            </i>
          </div>
          <div class="bedankt-title">
            <h1 class="fl-h1 bedankt-heading"><?php echo $page_title; ?></h1>
          </div>
          <div class="bedankt-dec">
            <?php if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] ); ?>
          </div>
          <?php if( $intro['knops'] ){ ?>
          <div class="bedankt-links">
            <ul class="reset-list clearfix">
              <?php 
              foreach( $intro['knops'] as $knop ){ 
                $lknop = $knop['knop'];
                if( is_array( $lknop ) &&  !empty( $lknop['url'] ) ){
                    printf('<li><a href="%s" target="%s">%s</a></li>', $lknop['url'], $lknop['target'], $lknop['title']); 
                }
              }
              ?>
            </ul>
          </div>
          <?php } ?>
          <div class="bedankt-btn">
            <a class="fl-blue-btn" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( 'HOME', 'trium'  ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>