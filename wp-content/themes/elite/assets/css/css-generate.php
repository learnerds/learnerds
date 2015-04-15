<?php 
header("Content-type: text/css; charset=utf-8"); 

$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];
require_once( $path_to_wp . '/wp-load.php' );
?>

.accent-color{
	color: <?php echo $md_theme_options['accent-color']; ?> !important;
}

.accent-bgcolor{
	background-color: <?php echo $md_theme_options['accent-color']; ?> !important;
}

.accent-bordercolor{
	border-color: <?php echo $md_theme_options['accent-color']; ?> !important;
}

body{
	color: <?php echo $md_theme_options['font-body']['color']; ?>;
	font-family: <?php echo $md_theme_options['font-body']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['font-body']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['font-body']['font-weight']; ?>;
	line-height: <?php echo $md_theme_options['font-body']['line-height']; ?>;
	<?php if(isset($md_theme_options['font-body']['font-style']) && ($md_theme_options['font-body']['font-style'])): ?>
	font-style: <?php echo $md_theme_options['font-body']['font-style']; ?>;
	<?php endif; ?>	
	background-color: <?php echo $md_theme_options['body-bgcolor']; ?>;
	<?php if($md_theme_options['body-bgimage']['url']): ?>
	background-image: url(<?php echo $md_theme_options['body-bgimage']['url']; ?>);
	background-attachment: fixed;
	<?php endif; ?>	
}

a{
	color: <?php echo $md_theme_options['accent-color']; ?>;
}

a:hover{
	color: <?php echo $md_theme_options['font-body']['color']; ?>;
}


::selection{
	color: #fff;
	background: <?php echo $md_theme_options['accent-color']; ?>;
}
::-moz-selection{
	color: #fff;
	background: <?php echo $md_theme_options['accent-color']; ?>;
}

.special-font{
	font-family: <?php echo $md_theme_options['font-special']['font-family']; ?>;
}

h1{
	color: <?php echo $md_theme_options['font-h1']['color']; ?>;
	font-family: <?php echo $md_theme_options['font-h1']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['font-h1']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['font-h1']['font-weight']; ?>;
	line-height: <?php echo $md_theme_options['font-h1']['line-height']; ?>;
	<?php if(isset($md_theme_options['font-h1']['font-style']) && ($md_theme_options['font-h1']['font-style'])): ?>
	font-style: <?php echo $md_theme_options['font-h1']['font-style']; ?>;
	<?php endif; ?>	
}

h2{
	color: <?php echo $md_theme_options['font-h2']['color']; ?>;
	font-family: <?php echo $md_theme_options['font-h2']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['font-h2']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['font-h2']['font-weight']; ?>;
	line-height: <?php echo $md_theme_options['font-h2']['line-height']; ?>;
	<?php if(isset($md_theme_options['font-h2']['font-style']) && ($md_theme_options['font-h2']['font-style'])): ?>
	font-style: <?php echo $md_theme_options['font-h2']['font-style']; ?>;
	<?php endif; ?>	
}

h3{
	color: <?php echo $md_theme_options['font-h3']['color']; ?>;
	font-family: <?php echo $md_theme_options['font-h3']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['font-h3']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['font-h3']['font-weight']; ?>;
	line-height: <?php echo $md_theme_options['font-h3']['line-height']; ?>;
	<?php if(isset($md_theme_options['font-h3']['font-style']) && ($md_theme_options['font-h3']['font-style'])): ?>
	font-style: <?php echo $md_theme_options['font-h3']['font-style']; ?>;
	<?php endif; ?>	
}

h4{
	color: <?php echo $md_theme_options['font-h4']['color']; ?>;
	font-family: <?php echo $md_theme_options['font-h4']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['font-h4']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['font-h4']['font-weight']; ?>;
	line-height: <?php echo $md_theme_options['font-h4']['line-height']; ?>;
	<?php if(isset($md_theme_options['font-h4']['font-style']) && ($md_theme_options['font-h4']['font-style'])): ?>
	font-style: <?php echo $md_theme_options['font-h4']['font-style']; ?>;
	<?php endif; ?>	
}

h5{
	color: <?php echo $md_theme_options['font-h5']['color']; ?>;
	font-family: <?php echo $md_theme_options['font-h5']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['font-h5']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['font-h5']['font-weight']; ?>;
	line-height: <?php echo $md_theme_options['font-h5']['line-height']; ?>;
	<?php if(isset($md_theme_options['font-h5']['font-style']) && ($md_theme_options['font-h5']['font-style'])): ?>
	font-style: <?php echo $md_theme_options['font-h5']['font-style']; ?>;
	<?php endif; ?>	
}

h6{
	color: <?php echo $md_theme_options['font-h6']['color']; ?>;
	font-family: <?php echo $md_theme_options['font-h6']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['font-h6']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['font-h6']['font-weight']; ?>;
	line-height: <?php echo $md_theme_options['font-h6']['line-height']; ?>;
	<?php if(isset($md_theme_options['font-h6']['font-style']) && ($md_theme_options['font-h6']['font-style'])): ?>
	font-style: <?php echo $md_theme_options['font-h6']['font-style']; ?>;
	<?php endif; ?>	
}

.md-special-heading{
	font-family: <?php echo $md_theme_options['font-h1']['font-family']; ?>;
}

#header,
#header-content{
	background: <?php echo $md_theme_options['header-bgcolor']; ?>;
}

#header-top{
	background:<?php echo $md_theme_options['header-top-bgcolor']; ?>;
	color: <?php echo $md_theme_options['header-top-font']['color']; ?>;
	font-family: <?php echo $md_theme_options['header-top-font']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['header-top-font']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['header-top-font']['font-weight']; ?>;
	<?php if(isset($md_theme_options['header-top-font']['font-style']) && ($md_theme_options['header-top-font']['font-style'])): ?>
	font-style: <?php echo $md_theme_options['header-top-font']['font-style']; ?>;
	<?php endif; ?>	
}

#header-slogan{
	background:<?php echo $md_theme_options['header-top-bgcolor']; ?>;
}

#header-top a,
#header-top-menu li a,
#header-social a,
#search-button a{
	color: <?php echo $md_theme_options['header-top-font']['color']; ?>;
}


#header-menu ul.menu li,
#header-menu ul.menu li a{
	color: <?php echo $md_theme_options['menu-font']['color']; ?>;
	font-family: <?php echo $md_theme_options['menu-font']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['menu-font']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['menu-font']['font-weight']; ?>;
}

#search-open{
	color: <?php echo $md_theme_options['menu-font']['color']; ?>;
}


#header-slogan a:hover,
#header-top-menu li a:hover,
#header-menu ul.menu > li:hover > a,
#header-menu ul.menu > li.megamenu > ul > li:hover > a,
#header-menu ul.menu > li.current_page_item > a,
#header-menu ul.menu > li.simple > ul > li a:hover,
#header-menu ul.menu > li.megamenu > ul > li > ul > li > a:hover,
#header.alternative.dark #header-content #header-menu ul.menu > li > a:hover,
#header.alternative.dark #header-content #header-menu ul.menu > li.current_page_item > a,
#header-top #shop-button:hover,
#header-mobile .menu li a:hover,
#header-mobile .menu li a.open,
.onepage .transparent #header-menu ul.menu li a:hover,
.onepage .transparent #header-menu ul.menu li a.current,
.onepage #header-menu ul.menu li a.current{
	color: <?php echo $md_theme_options['accent-color']; ?> !important;
}


#page-header h2{
	color: <?php echo $md_theme_options['page-header-title']['color']; ?>;
	font-family: <?php echo $md_theme_options['page-header-title']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['page-header-title']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['page-header-title']['font-weight']; ?>;
	line-height: <?php echo $md_theme_options['page-header-title']['line-height']; ?>;
}

#page-header h3{
	color: <?php echo $md_theme_options['page-header-subtitle']['color']; ?>;
	font-family: <?php echo $md_theme_options['page-header-subtitle']['font-family']; ?>;
	font-size: <?php echo $md_theme_options['page-header-subtitle']['font-size']; ?>;
	font-weight: <?php echo $md_theme_options['page-header-subtitle']['font-weight']; ?>;
	line-height: <?php echo $md_theme_options['page-header-subtitle']['line-height']; ?>;
}

footer,
footer .chosen-results li{
	background: <?php echo $md_theme_options['footer-bgcolor']; ?>;
}

#copyright{
	background: <?php echo $md_theme_options['copyright-bgcolor']; ?>;
}


.widget_md_widget_twitter ul li{
	color: <?php echo $md_theme_options['font-body']['color']; ?>;
}






a:hover,
.md-blog .post .post-header a:hover,
.md-blog .post .post-author .author-info h4 a:hover,
#comments .commentlist li .comment-cont .comment-meta a:hover,
#comments .commentlist li .comment-cont .comment-author a:hover,
#search-list .item .item-title a:hover,
.md-team .md-member .member-info span.member-role,
.md-rotator .rotator span,
.md-testimonials-minimal .md-testimonial .testimonial-info .testimonial-author,
.widget_calendar table #today a,
.widget_calendar table a:hover,
.widget > ul > li a:hover,
.widget .tagcloud a:hover,
footer .widget_calendar table #today a,
footer .widget_calendar table a:hover,
footer .widget ul li a:hover,
footer .widget .tagcloud a:hover,
#copyright-menu li a:hover,
.search-title span,
.md-button.style-2.standard,
.md-recent-posts .item h2 a:hover,
.woocommerce-pagination ul li a:hover,
.woocommerce-pagination ul li span,
.woocommerce .products .product:hover h3 a,
.woocommerce-tabs .comment-form-rating .stars a:hover,
.woocommerce-tabs .comment-form-rating .stars a.active,
.widget_shopping_cart .cart_list > li a:hover,
.widget_products .product_list_widget > li a:hover,
.widget_recently_viewed_products .product_list_widget > li a:hover,
.widget_recent_reviews .product_list_widget > li a:hover,
.widget_top_rated_products .product_list_widget > li a:hover{
	color: <?php echo $md_theme_options['accent-color']; ?>;
}


input[type="submit"]:hover,
button:hover,
a.button:hover,
.md-revslider .tp-button,
header .header-cart span,
section.bg-accent-color,
.widget_price_filter .ui-slider .ui-slider-handle,
.md-button.style-1.standard,
.md-button.style-2.standard:hover,
.wpcf7 .wpcf7-submit,
.mejs-overlay:hover .mejs-overlay-button,
.mejs-controls .mejs-time-rail .mejs-time-current,
.mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-current,
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
.md-blog .post-side .meta-date,
.md-portfolio-filter a.active,
.md-accordions.theme-color .panel .panel-heading a,
.md-tabs.theme-color .nav.nav-tabs li.active a,
.md-pricing-table.highlighted .table-title,
.md-pricing-table.highlighted .price,
.md-pricing-table.highlighted .table-btn a,
.md-pagination li.active,
.md-pagination li:hover,
.md-pagination.pagination-page span,
.md-pagination.pagination-page a span:hover,
.md-special-heading span:before,
.widget_md_widget_social_profiles a:hover,
.widget-title:after,
.woocommerce .products .product .button,
.woocommerce .onsale,
.woocommerce .woocommerce-message,
.woocommerce .woocommerce-info,
.woocommerce .cart-empty,
.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,
.woocommerce.widget_price_filter .ui-slider .ui-slider-range{
	background-color: <?php echo $md_theme_options['accent-color']; ?>;
}

.md-revslider .tp-button,
.md-revslider .title-middle span,
.md-revslider .title-middle.align-right span,
.md-portfolio-filter .current,
.md-tooltip,
.md-clients .list .md-client:hover,
.md-testimonials .md-testimonial .testimonial-image,
.md-button.style-1.standard,
.md-button.style-2.standard,
.widget_md_widget_dribbble ul li:hover,
.widget_md_widget_pinterest ul li:hover,
.widget_md_widget_flickr .flickr_badge_image:hover,
.woocommerce .products .product .added_to_cart,
.woocommerce .products .product:hover .button{
	border-color: <?php echo $md_theme_options['accent-color']; ?>;
}


.md-portfolio.default .mask{
	background-color: <?php echo hex2rgb($md_theme_options['accent-color'], '0.85') ?>;
}

#header-menu ul.menu > li.simple ul,
#header-menu ul.menu > li.megamenu > ul{
	border-top-color: <?php echo $md_theme_options['accent-color']; ?>;
}

.widget a,
.md-accordions .panel .panel-heading a.collapsed,
.md-accordions.md-faqs .panel .panel-heading a,
.md-tabs .nav.nav-tabs li a,
.md-blog .post-title a,
.md-blog .post-header a,
.md-blog .read-more a:hover,
.md-portfolio.default .work-title a,
.md-portfolio.default .work-info a,
.md-team .md-member .member-info span.member-name a{
	color: <?php echo $md_theme_options['font-body']['color']; ?>;
}

.md-accordions .panel .panel-heading aa{
	background-color: <?php echo $md_theme_options['font-body']['color']; ?>;
}

.md-revslider div,
.md-revslider a{
	font-family: <?php echo $md_theme_options['font-body']['font-family']; ?> !important;
}


.page-section.bg-default.arrow-down .section-arrow-left,
.page-section.bg-default.arrow-down .section-arrow-right{
	border-top-color: <?php echo $md_theme_options['body-bgcolor']; ?>;
	border-bottom-color: <?php echo $md_theme_options['body-bgcolor']; ?>;
}

.page-section.bg-default.arrow-down .section-arrow-left,
.page-section.bg-default.arrow-up .section-arrow-right{
	border-left-color: <?php echo $md_theme_options['body-bgcolor']; ?>;
}

.page-section.bg-default.arrow-down .section-arrow-right,
.page-section.bg-default.arrow-up .section-arrow-left{
	border-right-color: <?php echo $md_theme_options['body-bgcolor']; ?>;
}

/* CUSTOM CSS STARTS HERE */
<?php if(isset($md_theme_options['custom-css'])) echo $md_theme_options['custom-css']; ?>
