<?php
/**
 *
 * The index.php file serves as the fall back template and default homepage for our theme.
 *
 * @since 1.0
 * @package WeFoster Framework
 */
 ?>

<?php get_template_part('header'); ?>

<div class="main <?php do_action('class_main'); ?>" role="main">

    <?php get_template_part('templates/parts/page', 'header'); ?>
    <?php do_action('before_loop'); ?>
    <?php get_template_part('templates/parts/archive-intro'); ?>

    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">

        <?php _e('Sorry, no results were found.', 'wefoster'); ?>

      </div>

      <?php get_search_form(); ?>

    <?php endif; ?>

    <?php while (have_posts()) : the_post(); ?>

      <?php do_action('before_content'); ?>
      <?php get_template_part('templates/loops/content', get_post_format()); ?>
      <?php do_action('after_content'); ?>

    <?php endwhile; ?>

    <?php if ($wp_query->max_num_pages > 1) : ?>
      <nav class="post-nav">

        <ul class="pager">
          <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'wefoster')); ?></li>
          <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'wefoster')); ?></li>
        </ul>

      </nav>
    <?php endif; ?>

    <?php do_action('after_loop'); ?>

</div><!-- /.main -->

<?php get_template_part('sidebar'); ?>
<?php get_template_part('footer'); ?>