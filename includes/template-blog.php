<?php
   $args = array('post_type' => 'post','posts_per_page'=>4);
   $blogPosts = new WP_Query($args);
?>



<article id="blog" >

  <div class="article-inner is-blog">

    <div class="columns is-text-centered has-frame">

      <section class="column">

        <div class="blog-frame">
            <img class="title-image" alt="the blog"
               src="<?php echo get_template_directory_uri().'/library/images/arcanelogo2.png' ?>" />

        <?php  if($blogPosts->have_posts()) : while($blogPosts->have_posts()) :  $blogPosts->the_post();?>

          <?php include(locate_template('includes/template-post.php')); ?>

        <?php endwhile; else: ?>

        Oops, there are no posts.

        <?php endif; ?>

        </div>


        <h5 class="title is-5">Subscribe to our newsletter</h5>

        <form class="mail-subscription-form" >

          <p class="control">
            <input class="input is-medium" type="email" placeholder="Your Email Address">
          </p>
          <p class="control">
            <button class="button" >Submit</button>
          </p>

        </form>

      </section>

      <section class="column">
        <div class="contact-frame">

          <article class="contact-content">
            <h4 class="title is-4">Arcane</h4>
            <p>
              2 South King Street
              <br /> Manchester
              <br /> M2 6EX
              <br /> Tel: 0151 709 1133
            </p>
          </article>

          <article class="contact-content">
            <h4 class="title is-4">Email</h4>
            <a href="#">info@arcanebar.com</a><br />
            <a href="#">bookings@arcanebar.com</a>
          </article>

          <article class="contact-content">
            <h4 class="title is-4">Twitter</h4>
            <a href="#">@ArcaneBar</a>
          </article>

          <article class="contact-content">
            <h4 class="title is-4">Instagram</h4>
            <a href="#">@ArcaneBar</a>
          </article>

          <article class="contact-content">
            <h4 class="title is-4">Facebook</h4>
            <a href="#">ArcaneBar</a>
          </article>

          <article class="contact-content">
            <h4 class="title is-4">OPENING TIMES</h4>
            <h6 class="subtitle is-6">Sunday to Thursday</h6>
            <span>11.00am - 1.00am</span>
            <h6 class="subtitle is-6">Friday &amp; Saturday</h6>
            <span>11.00am - 4.00am</span>
          </article>
        </div>

      </section>

    </div>

  </div>

</article>
