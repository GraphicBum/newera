<?php
/*
* Custom testimonal script
**/
$testimonals = new Pod('testimonal');
          $testimonals->findRecords('id ASC', 6);       
          $total_testimonals = $testimonals->getTotalRows();
        ?>

        <?php if( $total_testimonals>0 ) : ?> 
        <div class="testimonal-wrapper slideshow">
          <?php while ( $testimonals->fetchRecord() ) : ?>

            <?php
              // set our variables
              $author       = $testimonals->get_field('testimonal_author_name');
              $testimonal      = $testimonals->get_field('testimonal');
              $city  = $testimonals->get_field('city');
              $state     = $testimonals->get_field('state');
            ?>
           
                <section class="testimonal slide">
                  <blockquote><?php echo $testimonal; ?>
                  <cite><?php echo $author;
                 if ($city){
                   echo '<small class="location"> (&nbsp;'.$city;
                     if ($state) echo ','.$state;
                   echo '&nbsp;)</small>';
                 }?>
                  </cite></blockquote>
                </section>
           
            <!-- /member -->

          <?php endwhile ?> 
        </div>
        <?php endif ?> </div>