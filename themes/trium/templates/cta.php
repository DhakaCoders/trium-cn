<?php 
  $cta = get_field('cta', 'options'); 
  if($cta):
?>
<section class="cta-module-sec">
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
<?php endif; ?>