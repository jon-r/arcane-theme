<?php
/*
 Template Name: Home Page
 *
*/
?>

<?php get_header(); ?>

<div class="">
  <main id="main" class="inner-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <?php  if (have_posts()) : while (have_posts()) : the_post();

      //include(locate_template('includes/template-intro.php'));

    //menu tabs
    include(locate_template('includes/template-menu.php'));
    //location + contact form
    include(locate_template('includes/template-location.php'));
    //blog section
    include(locate_template('includes/template-blog.php'));

    endwhile; endif; ?>


  </main>
</div>



<?php get_footer(); ?>
