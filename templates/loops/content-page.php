<?php while (have_posts()) : the_post(); ?>
  <div class="entry-content <?php do_action('entry_content_class'); ?>">
    <?php the_content(); ?>
  </div>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
