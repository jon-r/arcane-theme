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


        <h4 class="title is-4">Subscribe to our newsletter</h4>
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup" class="mail-subscription-form">
          <form action="//arcanebar.us12.list-manage.com/subscribe/post?u=98339cb63bb7b0f18499a02eb&amp;id=c6f1f42a92" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">

                <p class="control">
                  <input type="email" value="" name="EMAIL" class="input is-medium" id="mce-EMAIL" placeholder="Your Email Address">
                </p>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_98339cb63bb7b0f18499a02eb_c6f1f42a92" tabindex="-1" value=""></div>
              <p class="control">
                <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button">
                </p>
              </div>
          </form>
        </div>

        <!--End mc_embed_signup-->

      </section>

      <section class="column">
        <div class="contact-frame">

          <article class="contact-content">
            <h4 class="title is-4">Arcane</h4>
            <p>
              2 South King Street
              <br /> Manchester
              <br /> M2 6EX
              <br /> Tel: 0161 834 6452
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
