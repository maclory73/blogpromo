<?php get_header(); ?>
<?php
$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC'
);
$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) :
    $wp_query->the_post(); ?>
    <h1> <?php the_title(); ?> </h1>
    <p> <?php the_excerpt(); ?> </p>
    <a href="<?php the_permalink(); ?>">Lire la suite...</a>
    <?php endwhile;
wp_reset_query();
    ?>

    <?php get_footer(); ?>