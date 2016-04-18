<?php
   $args = array('post_type' => 'post','posts_per_page'=>10);
   $blogPosts = new WP_Query($args);
?>

<div id="sidebar1" class="sidebar column is-third" role="complementary">

  <?php  if($blogPosts->have_posts()) : while($blogPosts->have_posts()) :  $blogPosts->the_post();?>

    <?php include(locate_template('includes/template-post.php')); ?>

  <?php endwhile; endif ?>

  <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

    <?php dynamic_sidebar( 'sidebar1' ); ?>

      <?php else : ?>

        <?php
              /*
               * This content shows up if there are no widgets defined in the backend.
              */
          ?>

          <div class="no-widgets">

          </div>

          <?php endif; ?>

</div>
