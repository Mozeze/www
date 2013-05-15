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

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/common/css/index.css" />
	</head>
	<body>
        <div class="index_wrapper">
            <div class="index_header clear">
            	<div class="transbox"></div>
            	<img alt="Moze" title="Moze" src="<?php bloginfo('template_url'); ?>/common/images/index/logo.png" class="index_logo">
                
                <div class="index_headerName">
					<h1>WWW.SOLEEKISS.COM</h1>
				</div>
                
            </div>
        </div>
        
        <div class="index_footer">
        	<div class="index_middle_left"></div>
       		<div class="middleOne1"></div>
       		<img alt="XiuLiQinShe" src="<?php bloginfo('template_url'); ?>/common/images/index/XiuLiQinShe.png" class="xiuliqinshe">
       		<div class="middleOne">
       		</div>
       		<div class="middleOneImg">
				<img alt="Haku" title="Haku" src="<?php bloginfo('template_url'); ?>/common/images/index/Haku.png" onclick="bodyBackImage(0)">
				<a href="/blog"><img alt="Blog" title="Blog" src="<?php bloginfo('template_url'); ?>/common/images/index/Blog.png"></a>
				<img alt="Draw" title="Draw" src="<?php bloginfo('template_url'); ?>/common/images/index/Draw.png" onclick="bodyBackImage(1)">
				<img alt="Moze" title="Moze" src="<?php bloginfo('template_url'); ?>/common/images/index/Moze.png" onclick="bodyBackImage(2)">
				<a href="http://hi.baidu.com/mooojoy"><img alt="Fish" title="Fish" src="<?php bloginfo('template_url'); ?>/common/images/index/Fish.png"></a>
       		</div>
			<div id="middleTwo" class="middleTwo">
				<div class="middleTwoCenter"></div>
	       		<div class="middleTwoImg">
					<a href="http://www.flickr.com/photos/soleekiss/" target="_brank"><img alt="Flicker" title="Flicker" src="<?php bloginfo('template_url'); ?>/common/images/index/flicker.png"></a>
					<a href="http://www.douban.com/people/omoze/" target="_brank"><img alt="豆瓣" title="豆瓣" src="<?php bloginfo('template_url'); ?>/common/images/index/douban.png"></a>
					<a href="javascript:;"><img alt="WeiXin" title="WeiXin" src="<?php bloginfo('template_url'); ?>/common/images/index/weixin.png"></a>
					<a href="javascript:;"><img alt="MeiKong" title="Meikong" src="<?php bloginfo('template_url'); ?>/common/images/index/meikong.png"></a>
					<a href="http://weibo.com/soleekiss" target="_brank"><img alt="WeiBo" title="围脖" src="<?php bloginfo('template_url'); ?>/common/images/index/weibo.png"></a>
	       		</div>
				<div class="middleTwoText">
					<span class="middleText" style="width:294px;">Fish</span>
					<span class="middleText" style="width:150px;">Moze</span>
					<span class="middleText">Draw</span>
					<span class="middleText">Blog</span>
					<span class="middleText">Haku</span>
				</div>
			</div>
        </div>
	</body>
</html>