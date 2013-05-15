<?php
define('WP_USE_THEMES', false);
require('/blog/wp-blog-header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php bloginfo('text_direction'); ?>" xml:lang="<?php bloginfo('language'); ?>">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title>
            <?php
                global $page, $paged;
                wp_title('|', true, 'right');
                bloginfo('name');
                $site_description = get_bloginfo('description', 'display');
                if ( $site_description && ( is_home() || is_front_page()))
                    echo " | $site_description";
                if ($paged >= 2 || $page >= 2)
                    echo ' | ' . sprintf( __('Page %s'), max($paged, $page));
            ?>
        </title>
        <meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <!-- ----
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favico.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/logo_16x20.png" type="image/x-icon" />
         -->
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/logo_16x16.jpg" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/pagenavi-css.css" />
        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/ie.css" /><![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>"/>
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <?php
			wp_enqueue_script('jquery');
			wp_enqueue_script('lazyload', get_template_directory_uri() . '/js/jquery.lazyload.mini.js', 'jquery', false);
            wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', false);
		?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="/blog/wp-content/plugins/slideshow-gallery/js/gallery.js"></script>
	</head>
	<body>
		<?php if (function_exists('slideshow')) { slideshow(true, "1", false, array()); } ?>
	</body>
</html>
