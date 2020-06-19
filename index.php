<?php 
if ( have_posts() ) :
    while( have_posts()) : the_post(): ?>
    <h3><?php the_title() ?></h3>
    <div><?php the_title() ?></div>

    <?php endwhile;
    else: ?>
    <p>Geen berichten gevonden</p>
<?php
endif
?>