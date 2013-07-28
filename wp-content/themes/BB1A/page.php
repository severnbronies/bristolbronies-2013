<?php get_template_part('parts/global/header'); ?>

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
        <header class="post-header">
          <h1 class="post-title">
            <?php the_title(); ?>
          </h1>
        </header>
        <div class="post-body">
          <?php the_content(); ?>
        </div>
        <?php /* <aside class="post-aside post-neighbours">
          <?php 
            wp_list_pages(array(
              'child_of' => $post->post_parent,
              'exclude' => $post->ID,
              'depth' => 1
            ));
          ?>
        </aside>*/ ?>
      </article>

  </main>

<?php endwhile; ?>

<?php get_template_part('parts/global/footer'); ?>