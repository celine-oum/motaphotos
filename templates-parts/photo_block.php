<?php $galerie->the_post(); ?>
<div class="grid-item">
    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Image 1">
    <div class="overlay">
        <div class="eye-icon">
            <img href="<?php echo get_post_permalink(); ?>" src="<?php echo get_template_directory_uri(); ?>/assets/images/eye_icon.png" alt="">
        </div>
        <div class="fullscreen-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullscreen.png" alt="">
        </div>
        <div class="overlay-text">
            <span><?php the_title(); ?></span>
            <span><?php echo strip_tags(get_the_term_list($galerie->ID, 'categorie')); ?></span>
        </div>
    </div>
</div>