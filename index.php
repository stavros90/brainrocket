<?php get_header();?>

<main>
  <section class="intro">
    <div class="container intro-container">
      <h1 class="intro__title">
        <div class="header-title header-title__1">The fastest–</div>
        <div class="header-title header-title__2">growing</div>
        <div class="header-title header-title__3">IT Company</div>
        <div class="header-title header-title__4">in Cyprus</div>
      </h1>
      <p class="intro__desc">
      BrainRocket is an international software development and digital solutions company. Young, ambitious, and unstoppable, we've already taken Cyprus, Malta, and Portugal by storm. Our BROteam consists of 1,300 bright minds creating innovative ideas and products. Together, we're pushing boundaries every day.
      </p>
    </div>
  </section>

  <section class="blog">
    <div class="container section__heading">
      <h2 class="section-title">Our<br>Blog</h2>
      <p class="section-subtitle">Insights & Innovations: Exploring the Future of Software Development. This is a sample subtitle created as <u>part of my test</u> for the BrainRocket interview process.</p>
    </div>
    <div class="container" id="posts-container">

      <?php
        $homeArticles = new WP_Query(
          [
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => 5,
          'paged'          => 1,
          ]
        );

      if($homeArticles->have_posts()) : while($homeArticles->have_posts()) : $homeArticles->the_post(); ?>

        <?php get_template_part('template-parts/article'); ?>
  
      <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
    <div class="container">
      <button id="load-more">Load More</button>
    </div>
  </section>

</main>

<?php get_footer();?>