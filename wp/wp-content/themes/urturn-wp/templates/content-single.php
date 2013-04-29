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
        <div class="tags-list pull-left">
          <?php the_tags('<span class="tag">','</span><span class="tag">','</span>'); ?>
        </div>
        <div class="share-options pull-right">
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style">
          <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
          <a class="addthis_button_tweet"></a>
          </div>
          <!-- AddThis Button END -->
        </div>
      </footer>
      <hr/>
    </section>
    <section>
      <?php comments_template('/templates/comments.php'); ?>
    </section>
  </article>
<?php endwhile; ?>
