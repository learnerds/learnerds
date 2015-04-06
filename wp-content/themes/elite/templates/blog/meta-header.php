<?php global $md_theme_options; ?>

<div class="post-header">
	<?php if (is_single()): ?>
	<span class="meta-date">
		<i class="icon-calendar"></i> <?php echo get_the_date(); ?>
	</span>
	<?php endif; ?>

	<span class="meta-date hidden-md hidden-lg">
		<i class="icon-calendar"></i> <?php echo get_the_date(); ?>
	</span>

	<span class="meta-author"><i class="icon-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" title="<?php echo __('View all posts by', MD_THEME_NAME); ?> <?php the_author(); ?>"><?php the_author(); ?></a></span>

	<?php if(get_the_category()){ ?>
	<span class="meta-category"><i class="icon-tag"></i> <?php the_category(', '); ?></span>
	<?php } ?>

	<?php if(get_the_tags()){ ?>
	<span class="meta-tags"><i class="icon-tags"></i> <?php the_tags(); ?></span>
	<?php } ?>
	
	<?php if(comments_open()){ ?>
	<span class="meta-comment"><i class="icon-comments"></i>  <?php comments_popup_link(__('0 Comments', MD_THEME_NAME), __('1 Comment', MD_THEME_NAME), __('% Comments', MD_THEME_NAME)); ?></span>
	<?php } ?>
</div>

