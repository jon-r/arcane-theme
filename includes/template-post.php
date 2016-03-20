<article  <?php post_class('post-frame'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" >
  <?php if (has_post_thumbnail()) : ?>
    <div class="post-thumb">
    <?php the_post_thumbnail( [270,180] ); ?>
    </div>
  <?php endif ?>
  <div class="post-content">
    <h3 class="title is-3">
      <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
      </a>
    </h3>
    <h5 class="subtitle is-5" ><?php the_time('F j, Y') ?></h5>

    <a class="is-pulled-right" href="<?php the_permalink() ?>" rel="bookmark">
      Read More &raquo;
    </a>

  </div>

</article>
