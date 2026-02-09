<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class('example'); ?>>
	<!-- allows plugins to load content at the top/beginning of document -->
	<?php wp_body_open(); ?>
	<p>Hello World!</p>
	<!-- allows plugins to load content at the bottom of document -->
	<?php wp_footer(); ?>
</body>
</html>