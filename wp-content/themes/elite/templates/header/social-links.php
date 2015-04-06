<?php global $md_theme_options; ?>
<div id="header-social" class="social-links">

<?php if(isset($md_theme_options['social-rss']) && $md_theme_options['social-rss']): ?>
	<a class="rss" href="<?php echo $md_theme_options['social-rss']; ?>" title="rss" target="_blank" ><i class="icon-rss"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-facebook']) && $md_theme_options['social-facebook']): ?>
	<a class="facebook" href="<?php echo $md_theme_options['social-facebook']; ?>" title="facebook" target="_blank" ><i class="icon-facebook"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-twitter']) && $md_theme_options['social-twitter']): ?>
	<a class="twitter" href="<?php echo $md_theme_options['social-twitter']; ?>" title="twitter" target="_blank" ><i class="icon-twitter"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-google-plus']) && $md_theme_options['social-google-plus']): ?>
	<a class="google" href="<?php echo $md_theme_options['social-google-plus']; ?>" title="google" target="_blank" ><i class="icon-google-plus"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-youtube']) && $md_theme_options['social-youtube']): ?>
	<a class="youtube" href="<?php echo $md_theme_options['social-youtube']; ?>" title="youtube" target="_blank" ><i class="icon-youtube"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-linkedin']) && $md_theme_options['social-linkedin']): ?>
	<a class="linkedin" href="<?php echo $md_theme_options['social-linkedin']; ?>" title="linkedin" target="_blank" ><i class="icon-linkedin"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-pinterest']) && $md_theme_options['social-pinterest']): ?>
	<a class="pinterest" href="<?php echo $md_theme_options['social-pinterest']; ?>" title="pinterest" target="_blank" ><i class="icon-pinterest"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-flickr']) && $md_theme_options['social-flickr']): ?>
	<a class="flickr" href="<?php echo $md_theme_options['social-flickr']; ?>" title="flickr" target="_blank" ><i class="icon-flickr"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-instagram']) && $md_theme_options['social-instagram']): ?>
	<a class="instagram" href="<?php echo $md_theme_options['social-instagram']; ?>" title="instagram" target="_blank" ><i class="icon-instagram"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-apple']) && $md_theme_options['social-apple']): ?>
	<a class="apple" href="<?php echo $md_theme_options['social-apple']; ?>" title="apple" target="_blank" ><i class="icon-apple"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-tumblr']) && $md_theme_options['social-tumblr']): ?>
	<a class="tumblr" href="<?php echo $md_theme_options['social-tumblr']; ?>" title="tumblr" target="_blank" ><i class="icon-tumblr"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-dribbble']) && $md_theme_options['social-dribbble']): ?>
	<a class="dribbble" href="<?php echo $md_theme_options['social-dribbble']; ?>" title="dribbble" target="_blank" ><i class="icon-dribbble"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-android']) && $md_theme_options['social-android']): ?>
	<a class="android" href="<?php echo $md_theme_options['social-android']; ?>" title="android" target="_blank" ><i class="icon-android"></i></a>
<?php endif; ?>

<?php if(isset($md_theme_options['social-email']) && $md_theme_options['social-email']): ?>
	<a class="email" href="mailto:<?php echo $md_theme_options['social-email']; ?>" title="email" target="_self" ><i class="icon-envelope"></i></a>
<?php endif; ?>

</div>