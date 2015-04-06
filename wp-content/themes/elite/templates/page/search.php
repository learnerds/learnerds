<div id="search-list">
<?php
while ( $wp_query->have_posts() ) : $wp_query->the_post();
	
	echo '<div class="item">';
	echo '<div class="item-title"><a href="'.get_permalink($post->ID).'">'.get_the_title().'</a></div>';
	if(has_excerpt()) the_excerpt();
	echo '</div>';

endwhile;
?>
</div>
<?php md_pagination();  ?>
