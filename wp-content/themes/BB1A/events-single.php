<?php
/*
  Template Name: Events Single
*/
?><?php get_template_part('parts/global/header'); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php
    if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
  ?>
    <div class="feature-image" style="background-image: url('<?php echo $large_image_url[0]; ?>')">
    </div>
  <?php } ?>

  <main class="container" id="main" role="main">
    <article class="post">

      <?php the_content(); ?>

    </article>

  </main>

<?php endwhile; ?>

<?php get_template_part('parts/global/footer'); ?>