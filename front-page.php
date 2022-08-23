<?php get_header(); ?> 
<section class="site__main flex-column">
      <h1 class="align-center">Cours</h1>
  <div class="flex-row">
      <?php
      if (have_posts()):
          while(have_posts()) : the_post(); ?>
          
              <div class="card"><h2 class="align-center"><a href="<?= get_permalink() ?>"> <?php the_field('titre'); ?></a></h2>
              <?php $image = get_field('image'); if( !empty( $image ) ): ?>
                  <img height="400" width="250" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>    
              <h3><?php the_field('sous_titre'); ?></h3>
              <p><?php the_field('resume'); ?></p>
              <a href="<?= get_permalink() ?>" class='bouton'>Voir plus</a></div>  
         
          <?php endwhile; ?>
      <?php endif; ?>  
  </div>  
  <?php wp_nav_menu(array(
        'menu' => 'menu accueil',
        'container' => 'nav'
 
    ));
    ?>
</section>
<?php get_footer(); ?>

