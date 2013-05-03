<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <section>
      <header>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer class="clearfix">
        <?php get_template_part('templates/share-options'); ?>
      </footer>
      <hr/>
    </section>
    <section>
      <?php comments_template('/templates/comments.php'); ?>
    </section>
  </article>
<?php endwhile; ?>
