
<?php
  /*
   * This is the default post format.
   *
  */
?>

<?php if (has_post_thumbnail()) the_post_thumbnail( [630,420] ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">



  <header class="article-header">

    <h1 class="title is-1" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

  </header> <?php // end article header ?>

  <section class="article-content" itemprop="articleBody">
    <?php
      // the content (pretty self explanatory huh)
      the_content();
    ?>
  </section> <?php // end article section ?>

</article> <?php // end article ?>
