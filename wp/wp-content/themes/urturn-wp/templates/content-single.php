<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <section>
      <header>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
      </footer>
    </section>
    <hr/>
    <section>
      <?php comments_template('/templates/comments.php'); ?>
    </section>
  </article>
<?php endwhile; ?>
