<?php 
/*
	Template Name: Referenties
*/
get_header(); 
$thisID = get_the_ID(); 
$intro = get_field('intro', $thisID);
$page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
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
          <h1 class="fl-h1">Referenties (h1)</h1>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="blog-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
                
        <div class="blog-grids-cntrl">
          <div class="blog-grid-items">
            <ul class="clearfix reset-list">
              <li>                
                <div class="blog-grid-item">                
                  <div class="blog-grid-img">                    
                    <a href="#" class="overlay-link"></a>
                    <div class="bgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-img-1.jpg');"></div>
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
              </li>
              <li>                
                <div class="blog-grid-item">                
                  <div class="blog-grid-img">                    
                    <a href="#" class="overlay-link"></a>
                    <div class="bgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-img-1.jpg');"></div>
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
              </li>
              <li>                
                <div class="blog-grid-item">                
                  <div class="blog-grid-img">                    
                    <a href="#" class="overlay-link"></a>
                    <div class="bgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-img-1.jpg');"></div>
                  </div>  
                  <div class="blog-grid-des mHc">
                    <div class="blog-grid-des-inner">                                     
                      <h2 class="fl-h3 bgi-title mHc1"><a href="#">Project titel</a></h2>                      
                      <div class="bgi-des mHc2">
                        <p>Eu at lacus, lorem facilisi at. Ultricies maecenas mollis morbi porttitor aliquam condimentum euismod sagittis.</p>
                      </div>    
                      <div class="fl-pro-grd-btn fl-btn-absolute">
                        <a class="fl-read-more-btn" href="#">meer info</a>
                      </div>
                    </div>   
                  </div>    
                </div>  
              </li>
              <li class="blog-grid-cta">
                <div class="cta-module-sec">
                  <div class="cta-module">
                    <h3 class="cta-module-title fl-h3">Vraag vrijblijvend een offerte aan.</h3>
                    <p>Wij komen gratis langs om een risicoanalyse te maken.</p>
                    <div class="cta-module-btn">
                      <a class="fl-transparent-btn" href="#">Vraag uw offerte!</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>                
                <div class="blog-grid-item">                
                  <div class="blog-grid-img">                    
                    <a href="#" class="overlay-link"></a>
                    <div class="bgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-img-1.jpg');"></div>
                  </div>  
                  <div class="blog-grid-des mHc">
                    <div class="blog-grid-des-inner">                                     
                      <h2 class="fl-h3 bgi-title mHc1"><a href="#">Project titel</a></h2>                      
                      <div class="bgi-des mHc2">
                        <p>Eu at lacus, lorem facilisi at. Ultricies maecenas mollis morbi porttitor aliquam condimentum euismod sagittis.</p>
                      </div>    
                      <div class="fl-pro-grd-btn fl-btn-absolute">
                        <a class="fl-read-more-btn" href="#">meer info</a>
                      </div>
                    </div>   
                  </div>    
                </div>  
              </li>
              <li>                
                <div class="blog-grid-item">                
                  <div class="blog-grid-img">                    
                    <a href="#" class="overlay-link"></a>
                    <div class="bgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-img-1.jpg');"></div>
                  </div>  
                  <div class="blog-grid-des mHc">
                    <div class="blog-grid-des-inner">                                     
                      <h2 class="fl-h3 bgi-title mHc1"><a href="#">Project titel</a></h2>                      
                      <div class="bgi-des mHc2">
                        <p>Eu at lacus, lorem facilisi at. Ultricies maecenas mollis morbi porttitor aliquam condimentum euismod sagittis.</p>
                      </div>    
                      <div class="fl-pro-grd-btn fl-btn-absolute">
                        <a class="fl-read-more-btn" href="#">meer info</a>
                      </div>
                    </div>   
                  </div>    
                </div>  
              </li>
              <li>                
                <div class="blog-grid-item">                
                  <div class="blog-grid-img">                    
                    <a href="#" class="overlay-link"></a>
                    <div class="bgi-img inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-img-1.jpg');"></div>
                  </div>  
                  <div class="blog-grid-des mHc">
                    <div class="blog-grid-des-inner">                                     
                      <h2 class="fl-h3 bgi-title mHc1"><a href="#">Project titel</a></h2>                      
                      <div class="bgi-des mHc2">
                        <p>Eu at lacus, lorem facilisi at. Ultricies maecenas mollis morbi porttitor aliquam condimentum euismod sagittis.</p>
                      </div>    
                      <div class="fl-pro-grd-btn fl-btn-absolute">
                        <a class="fl-read-more-btn" href="#">meer info</a>
                      </div>
                    </div>   
                  </div>    
                </div>  
              </li>              
            </ul>    
          </div>
          <div class="fl-pagination-blog-cntrl">
            <div class="fl-pagination-ctlr">
              <ul class="page-numbers">
                <li class="prev page-numbers">
                  <a href="#">
                    <i><svg class="pagi-left-arrow" width="18" height="30" viewBox="0 0 18 30" fill="#1A7ABE">
                    <use xlink:href="#pagi-left-arrow"></use></svg></i>
                  </a>
                </li>
                <li><span aria-current="page" class="page-numbers current">1</span></li>
                <li><a class="page-numbers" href="#">2</a></li>
                <li><a class="page-numbers" href="#">3</a></li>
                <li><span aria-current="page" class="page-numbers current">...</span></li>
                <li><a class="page-numbers" href="#">11</a></li>
                <li class="next page-numbers">
                  <a href="#">
                    <i><svg class="pagi-right-arrow" width="18" height="30" viewBox="0 0 18 30" fill="#1A7ABE">
                    <use xlink:href="#pagi-right-arrow"></use></svg></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>  
        </div>
      </div>  
    </div>
  </div>
</section>
<?php get_footer(); ?>