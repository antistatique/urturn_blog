<div class="clearfix">
    <div class="pull-left">
        <p><time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><i class="icon-calendar"></i> <?php echo get_the_date(); ?></time></p>
    </div>
    <div class="tags-list pull-right">
      <?php the_tags('<span class="tag">','</span><span class="tag">','</span>'); ?>
    </div>
</div>

