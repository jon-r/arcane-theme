<?php

$args = [
  'post_type' => 'food_menus',
  'post_status' => 'publish',
  'posts_per_page' => -1
];
$menus = new WP_Query($args);

$countA = $countB = 0;



  ?>


<article id="menu" class="arcane-menu" >
  <header class="article-header title-bar">
    <h2 class="title is-2">Menu</h2>
  </header>
  <div id="js_menuButtons" class="container">
    <div class="tabs is-fullwidth has-frame" >
      <ul>
      <?php if( $menus->have_posts() ) : while ($menus->have_posts()) :
        $menus->the_post(); ?>
        <li onclick="goTab(<?php echo $countA ?>)" class="tab-food-menu <?php echo ($countA == 0) ? 'is-active' : '' ?>" ><a><?php the_title() ?></a></li>
      <?php $countA++; endwhile; endif; ?>
      </ul>
    </div>

    <div class="columns" >
      <?php if( $menus->have_posts() ) : while ($menus->have_posts()) : $menus->the_post(); ?>
        <section class="column section-food-menu <?php echo ($countB == 0) ? 'is-active' : '' ?>">
          <?php the_content() ?>
        </section>
      <?php $countB++; endwhile; endif; ?>
    </div>
  </div>

</article>
