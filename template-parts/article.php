<article class="article-grid">
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('article-grid', ['class' => 'article-grid__img']); ?>
  </a>
  <?php else : ?>
    <a href="<?php the_permalink(); ?>">
    <img 
      src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/no-image.png'); ?>" 
      class="article-grid__img" 
      alt="<?php esc_attr_e(get_the_title()); ?>"
    >
  </a>
  <?php endif; ?>
  <h2 class="article-grid__title"><?php the_title(); ?></h2>
  
</article>