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

          <article id="post-<?php the_ID(); ?>" <?php post_class( ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <div class="container">

              <section class="entry-content" itemprop="articleBody">
                <?php the_content(); ?>
              </section>

            </div>


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

          <?php endif;

          //menu tabs
          include(locate_template('includes/template-menu.php'));
          //location + contact form
          include(locate_template('includes/template-location.php'));
          //blog section
          include(locate_template('includes/template-blog.php'));



          ?>




        </main>


      </div>

    </div>


    <?php get_footer(); ?>
