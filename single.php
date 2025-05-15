<?php get_header(); ?>

<main>
  <section class="container single-post">
    <h1 class="single-post__title">
      <?php echo esc_html(get_the_title()); ?>
    </h1>
    <div class="single-post__content">
      <?php the_content(); ?>
    </div>
  </section>

  <section class="recent-articles">
    <div class="container">
    <?php echo do_shortcode( '[recent_articles]'); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>