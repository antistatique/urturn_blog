<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_content(); ?>
  </div>
  <footer class="clearfix">
    <div class="tags-list pull-left">
      <?php the_tags('<span class="tag">','</span><span class="tag">','</span>'); ?>
    </div>
    <div class="share-options pull-right">
      <!-- AddThis Button BEGIN -->
      <div class="addthis_toolbox addthis_default_style">
      <a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="<?php the_permalink(); ?>"
       addthis:title="<?php the_title(); ?>"></a>
      <a class="addthis_button_tweet" addthis:url="<?php the_permalink(); ?>"
       addthis:title="<?php the_title(); ?>"></a>
      </div>
      <!-- AddThis Button END -->
    </div>
  </footer>
</article>
<hr/>