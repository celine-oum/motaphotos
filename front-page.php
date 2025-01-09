<?php get_header(); ?>
<div class="image-container">
  <?php
        $random_image = new WP_Query([
            'post_type' => 'photo',
            'tax_query' => [
                [
                    'taxonomy' => 'format',
                    'field' => 'slug',
                    'terms' => 'paysage',
                ],
            ],
            'orderby' => 'rand',
            'posts_per_page' => '1', ]);
        if ($random_image->have_posts()) {
            while ($random_image->have_posts()) {
                $random_image->the_post();
                echo '<img class="responsive-image" src="';
                echo the_post_thumbnail_url();
                echo '" />';
                echo '<img class="TITLE_image" src="';
                echo get_template_directory_uri().'/assets/images/Titre header.png';
                echo '" />';
            }
        }
        wp_reset_postdata();
    ?>
</div>
<div class="container">
        <div class="header">
            <div class="dropdown-container">
                <div class="dropdown">
                    <button class="dropdown-btn" onclick="toggleDropdown(this)">CATÉGORIES</button>
                    <div class="dropdown-content">
                      <?php displayTaxonomies('categorie'); ?>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-btn" onclick="toggleDropdown(this)">FORMATS</button>
                    <div class="dropdown-content">
                      <?php displayTaxonomies('format'); ?>
                    </div>
                </div>
            </div>
            <div class="dropdown trier-par">
                <button class="dropdown-btn" onclick="toggleDropdown(this)">TRIER PAR</button>
                <div class="dropdown-content">
                    <div class="dropdown-item">Nouveautés</div>
                    <div class="dropdown-item">Les plus anciens</div>
                </div>
            </div>
        </div>
        <div class="grid">
        <?php
            $galerie = new WP_Query([
                'post_type' => 'photo',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 8,
                'paged' => 1, ]
            );
            if ($galerie->have_posts()) {
                while ($galerie->have_posts()) {
                    include 'templates-parts/photo_block.php';
                }
            } else {
                echo '';
            }
          wp_reset_postdata();
        ?>
            <!-- Grid Item 1 -->
        </div>
        <div class="galerie__btn" id="galerie__btn">
          <input type=" button" style="text-align: center;" value="Charger plus">
          <img id="btn-load-more" src="<?php echo get_template_directory_uri(); ?>/assets/images/camera_icon.png"
            alt="Icône d'appareil photo" />
        </div>
</div>
<?php get_footer(); ?>