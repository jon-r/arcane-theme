<?php

$args = [
  'post_type' => 'food_menus',
  'post_status' => 'publish',
  'posts_per_page' => -1
];
$menus = new WP_Query($args);

$countA = $countB = 0;



  ?>


<article id="menu" class="menu-article"  >

<header class="article-header index-title">
    <h3 class="title is-3">Menu</h3>
</header>

  <div class="article-inner is-menu">

    <div id="js_menu" class="container menu-frame">
      <div class="tabs is-fullwidth has-frame" >
        <ul class="menu-tabs">
        <?php if( $menus->have_posts() ) : while ($menus->have_posts()) :  $menus->the_post(); ?>

          <li onclick="goTab(<?php echo $countA ?>)" class="tab-food-menu <?php echo ($countA == 0) ? 'is-active' : '' ?>" ><a><?php the_title() ?></a></li>

        <?php $countA++; endwhile; endif; ?>
        </ul>
      </div>

      <div class="columns content" >
        <?php if( $menus->have_posts() ) : while ($menus->have_posts()) : $menus->the_post(); ?>

        <?php $pg2Left = get_field('page_left_2') ; $pg2Right = get_field('page_right_2') ; ?>

          <section class="column section-food-menu <?php echo ($countB == 0) ? 'is-active' : '' ?>">
            <article class="paginated is-active" >
              <div class="columns is-desktop">
                <div class="column menu-page">
                  <?php echo get_field('page_left') ?>
                </div>
                <div class="column menu-page">
                  <?php echo get_field('page_right') ?>
                </div>
              </div>
              <?php if ($pg2Left || $pg2Right) : ?>
              <span onclick="pgMe(this)" class="btn-next">Next &rarr;</span>
              <?php endif ?>
            </article>

            <?php if ($pg2Left || $pg2Right) : //second optional page ?>

            <article class="paginated" >
              <div  class="columns is-desktop">
                <div class="column menu-page">
                  <?php echo $pg2Left ?>
                </div>
                <div class="column menu-page">
                  <?php echo $pg2Right ?>
                </div>
              </div>
              <span onclick="pgMe(this)" class="btn-prev">&larr; Prev</span>
            </article>

            <?php endif; ?>
          </section>

        <?php $countB++; endwhile; endif; ?>
      </div>
    </div>

  </div>

</article>
