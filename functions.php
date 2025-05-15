<?php // Functions

require_once get_template_directory() . '/includes/enqueue-scripts.php';
require_once get_template_directory() . '/includes/wp-cleanup.php';
require_once get_template_directory() . '/includes/theme-support.php';


/*********************************************************
 * 
 * Funcionality
 * Requested from BrainRocket as part of the Job Interview
 * 
 **********************************************************/

// Load More PHP logic
function load_more_posts_ajax_handler() {
  $paged = isset($_GET['page']) ? intval($_GET['page']) : 1;

  $query = new WP_Query(array(
      'post_type'      => 'post',
      'posts_per_page' => 5,
      'paged'          => $paged,
  ));

  if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
          get_template_part('template-parts/article', get_post_format());
      endwhile;
  endif;

  wp_die();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts_ajax_handler');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts_ajax_handler');


// Shortcode to display 5 articles anywhere in the website
function shortcode_recent_articles() {

    $recent_posts = new WP_Query([
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 5
    ]);

    if ($recent_posts->have_posts()) : ?>
        <div class="recent-articles">
            <h3>Recent Articles</h3>
            <ul class="recent-articles-ul">
        
                <?php while ($recent_posts->have_posts()) : $recent_posts -> the_post(); // prepare my query to get the 5 most recent articles ?>
                    <li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></li>
                <?php endwhile; ?>

            </ul>
        </div>
    <?php wp_reset_postdata(); endif; // I reset the query 

}
add_shortcode('recent_articles', 'shortcode_recent_articles');