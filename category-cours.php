
<?php get_header(); ?> 
<section class="padding">
    <h1>category-cours.php</h1>
    <div class="padding">
        <?php
        if (have_posts()):
            while(have_posts()) : the_post(); ?>
                <div class="cours"><h2><?php the_title(); ?></h2>
                <?php $lien = " ... <br><br><br><a class='bouton' href='" 
                        . get_permalink()  
                        . "'>"
                        . substr(get_the_title(),0,8) 
                        ."</a>"; 

        ?>

        <p><?= wp_trim_words(get_the_content(), 20, $lien) ?></p></div>


            <?php endwhile; ?>
        <?php endif; ?>    
    </div>
</section>
</section>
<?php get_footer(); ?>
