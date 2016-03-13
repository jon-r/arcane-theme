<?php
/*
 Template Name: Home Page
 *
*/
?>

  <?php get_header(); ?>

    <div id="content">

      <div id="inner-content" class="wrap cf">

        <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <header class="article-header">

              <h1 class="page-title"><?php the_title(); ?></h1>

            </header>

            <section class="entry-content cf" itemprop="articleBody">
              <?php the_content(); ?>
            </section>


            <footer class="article-footer">

              <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

            </footer>

          </article>

          <?php endwhile; else : ?>

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
                <?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?>
              </p>
            </footer>
          </article>

          <?php endif; ?>


          <article id="menu" >
            <header class="article-header">
              <h1>Menu</h1>
            </header>
          </article>

          <article id="location" >
            <header class="article-header">
              <h1>Location</h1>
            </header>
          </article>

          <article id="blog" >
            <header class="article-header">
              <h1>blog</h1>
            </header>
          </article>

        </main>

        <?php // get_sidebar(); ?>

      </div>

    </div>


    <?php get_footer(); ?>
