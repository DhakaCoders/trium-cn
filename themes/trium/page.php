<?php 
	get_header();
?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="innerpage-con-wrap">
  <article class="default-page-con"> 
	<?php while ( have_rows('inhoud') ) : the_row();  ?>
		<?php 
			if( get_row_layout() == 'introductietekst' ){ 
			$fctitle = get_sub_field('titel');
		?>
	    <div class="block">
	      <div class="dfp-promo-module">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-12">
	              <div class="block-850">
	                <div class="dfp-promo-module-des">
	                  <?php if( !empty($fctitle) ) printf('<strong class="dfp-promo-module-title fl-h1">%s</strong>', $fctitle); ?>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
		<?php 
			}elseif( get_row_layout() == 'afbeelding' ){ 
			$afbeelding = get_sub_field('fc_afbeelding');
		?>
	    <div class="block">
	      <div class="dfp-promo-module">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-12">
	              <div class="dfp-plate-one-img-bx">
	                <?php echo !empty($afbeelding)? cbv_get_image_tag($afbeelding): ''; ?>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
      <?php 
      }elseif( get_row_layout() == 'teksteditor' ){ 
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
	     <?php }elseif( get_row_layout() == 'galerij' ){ 
	        $galleries = get_sub_field('fc_afbeeldingen');
	        $inline_image = get_sub_field('show_inline_afbeelding');
	        $lightbox = get_sub_field('lightbox');
	        $kolom = get_sub_field('kolom'); 
	        $hasinline_class = ($inline_image)?'has-inline-bg ':'';
	        if($galleries):
	    ?>
	    <div class="block">
	      <div class="dfp-gallery-module">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-12">
			        <div class="<?php echo $hasinline_class; ?>gallery-wrap clearfix">
			            <div class="gallery gallery-columns-2">
			              <?php foreach( $galleries as $image ): ?>
			              <figure class="gallery-item">
			                <div class="gallery-icon portrait">
			                <?php 
			                  if( $lightbox ){
			                    echo "<a data-fancybox='gallery' href='{$image['url']}'>";
			                    echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image, 'dfpageg1' ).');"></div>';
			                    echo cbv_get_image_tag( $image, 'dfpageg1' );
			                    echo "</a>";
			                  }else{
			                    echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image, 'dfpageg1' ).');"></div>';
			                    echo cbv_get_image_tag( $image, 'dfpageg1' );
			                  }
			                ?>
			                </div>
			              </figure>
			              <?php endforeach; ?>
			            </div>
			        </div>
	        	</div>
	      	</div>
	    </div>
	    </div>
	    </div>
	    <?php endif; ?>
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
		<?php }elseif( get_row_layout() == 'referentie' ){ 
		  $titel = get_sub_field('fc_titel');
		  $refobj = get_sub_field('fc_referentie');
		  if( empty($refobj) ){
		      $refobj = get_posts( array(
		        'post_type' => 'referenties',
		        'posts_per_page'=> 3,
		        'orderby' => 'date',
		        'order'=> 'desc',

		      ) );  
		  }
		?>
		<?php if($refobj): ?>
		<div class="block">
			<div class="dfp-grd-module">
			<div class="container">
		  		<div class="row">
		    	<div class="col-md-12">
		      	<div class="dfp-grd-module-inr">
		        <div class="dfp-grd-entry-hdr">
		          <h2 class="fl-h2 hide-sm"><?php echo !empty($titel)? $titel:__('Realisaties', 'trium'); ?></h2>
		        </div>
		        <div class="dfp-grd-items dfpGrdSlider clearfix">
				<?php 
				  foreach( $refobj as $ref ) :
				  $imgID = get_post_thumbnail_id($ref->ID);
				  $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): referenties_placeholder(); 
				?>
		          <div class="dfp-grd-item">
		            <div class="blog-grid-item">                
		              <div class="blog-grid-img">                    
		                <a href="<?php echo get_permalink($ref->ID); ?>" class="overlay-link"></a>
		                <div class="bgi-img inline-bg" style="background-image: url('<?php echo $imgknop; ?>');">                  
		                </div>
		              </div>  
		              <div class="blog-grid-des mHc">
		                <div class="blog-grid-des-inner">                                     
		                  <h3 class="fl-h3 bgi-title mHc1"><a href="<?php echo get_permalink($ref->ID); ?>"><?php echo $ref->post_title; ?></a></h3>                      
		                  <div class="bgi-des mHc2">
		                    <?php echo wpautop($ref->post_excerpt); ?>
		                  </div>    
		                  <div class="fl-pro-grd-btn fl-btn-absolute">
		                    <a class="fl-read-more-btn" href="<?php echo get_permalink($ref->ID); ?>"><?php _e( 'meer info', 'trium' ); ?></a>
		                  </div>
		                </div>   
		              </div>    
		            </div>
		          </div>
				<?php endforeach; ?> 
		    </div>
		  </div>
		</div>
		</div>
		</div>
		</div>
		</div>
		<?php endif; ?>
		<?php }elseif( get_row_layout() == 'diensten' ){ 
		  $disobj = get_sub_field('fc_diensten');
		  if( empty($disobj) ){
		      $disobj = get_posts( array(
		        'post_type' => 'diensten',
		        'posts_per_page'=> 3,
		        'orderby' => 'date',
		        'order'=> 'desc',

		      ) );  
		  }
		?>
		<?php if($disobj): ?>
		<div class="block">
		  <div class="dfp-category-module">
		    <div class="dfp-category-module-inr">
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
		    </div>
		  </div>
		</div>
		<?php endif; ?>
        <?php }elseif( get_row_layout() == 'table' ){
        $fc_table = get_sub_field('fc_tafel');
        $fc_titel = !empty(get_sub_field('fc_titel'))?get_sub_field('fc_titel'):'';
        ?>
	    <div class="block">
	      <div class="dfp-table-module">
	        <div class="container">
	          <div class="row">
	            <div class="col-md-12">
			        <?php
			        echo '<div class="block-850">';
			        cbv_table($fc_table, $fc_titel);
			        echo '</div>';
			        ?>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
        <?php }elseif( get_row_layout() == 'gap' ){
        $fc_gap = get_sub_field('fc_gap');
        $hidexs = get_sub_field('hide_mobile');
        $hideclass = $hidexs?' class="hide-sm"':'';
        ?>
        <div class="block">
	        <div class="block-850">
	          <div style="height:<?php echo $fc_gap; ?>px"<?php echo $hideclass; ?>></div>
	        </div>
	        </div>
        <?php }elseif( get_row_layout() == 'horizontal_line' ){ ?>
        <div class="block">
	        <div class="block-850">
	          <hr>
	        </div>
        </div>
    	<?php } ?>
    <?php endwhile; ?>
  </article>
</section>
<?php get_footer(); ?>