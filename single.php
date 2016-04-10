
<?php get_header(); ?>

<div class="article-inner is-single">

<div class="container" >


  <div class="columns has-frame">

<main id="main" class="inner-content column" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php include(locate_template('includes/template-single.php')); ?>

      <?php endwhile; ?>

        <?php else : ?>

          <article id="post-not-found" class="hentry cf">
            <header class="article-header">
              <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
            </header>
            <section class="entry-content">
              <p>
                <?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
              </p>
            </section>
            <footer class="article-footer">
              <p>
                <?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?>
              </p>
            </footer>
          </article>

          <?php endif; ?>

</main>

<?php get_sidebar(); ?>

  </div>

  </div></div>
  <?php get_footer(); ?>
