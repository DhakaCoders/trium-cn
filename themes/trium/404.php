<?php 
  get_header(); 
  $desc = get_field('page_404', 'options');
?>
<section class="bedankt-breadcrumb-sec">
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
<section class="page-404-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-404-inner">
          <div class="page-404-rgt-img">
            <div class="page-404-img">
              <?php if( !empty($desc['afbeelding']) ) echo cbv_get_image_tag($desc['afbeelding']); ?>
            </div>
          </div>
          
          <div class="page-404-lft-des">
            <div class="page-404-des-inner">
              <h1 class="fl-h1-144">404!</h1>
              <div class="page-404-des">
                <?php 
                  if( !empty($desc['titel']) ) printf('<h2 class="fl-h1 sub-heading-404">%s</h2>', $desc['titel']); 
                  if( !empty($desc['beschrijving']) ) echo wpautop($desc['beschrijving']); 
                ?>
                <div class="page-404-btn">
                  <a class="fl-blue-btn" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( 'HOME', 'trium'  ); ?></a>
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