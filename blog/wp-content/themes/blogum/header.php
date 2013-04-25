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
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/logo_16x16.png" type="image/x-icon" />
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
        <?php wp_head(); ?>
	</head>
	<body>
		<div>
			<div style="width:100%;background: url('<?php bloginfo('template_url'); ?>/images/header/header_top_1x35.png');float:left;">
				<div class="wrapper_header" >
					<?php get_search_form(); ?>
					<div style="float: left;font-family: 黑体;color: white;font-size: 14px;margin-left:570px;margin-top:10px;">
						<span style="margin-right: 40px;">大象岛。</span>
						<span style="margin-right: 30px;">茉泽映画。</span>
						<span>浮在空中的鱼群。</span>
					</div>
				</div>
			</div>
            <div style="height:6px;width:100%;background: url('<?php bloginfo('template_url'); ?>/images/header/header_top_371x6.png');float:left;"></div>
        </div>
        <div class="wrapper">
            <div class="header clear">
                <a href="<?php bloginfo('home'); ?>" title="Go Home"><img src="<?php bloginfo('template_url'); ?>/images/header/logo_118x146.png" /></a>
                <a href="<?php bloginfo('home'); ?>" title="Go Home"><img src="<?php bloginfo('template_url'); ?>/images/header/soleekiss.png" /></a>
                
                <div class="headerName">
					<img src="<?php bloginfo('template_url'); ?>/images/header/blog_name_239x52_2.png" />
				</div>
                <div class="linkImg">
                	<div class="linkImgElephant">
						<img src="<?php bloginfo('template_url'); ?>/images/header/elephant.png" />
                	</div>
                	<div class="linkImgMoze">
						<img src="<?php bloginfo('template_url'); ?>/images/header/moze.png" />
					</div>
					<div class="linkImgFish">
						<img src="<?php bloginfo('template_url'); ?>/images/header/fish_3.png" />
					</div>
				</div>
                <?php wp_nav_menu(array('menu' => 'Header', 'theme_location' => 'Header', 'depth' => 1, 'container_class' => 'menu')); ?>

                <div class="share">
					<img alt="Flicker" title="Flicker" src="/images/index/flicker.png">
					<img alt="DouBan" title="DouBan" src="/images/index/douban.png">
					<img alt="WeiXin" title="WeiXin" src="/images/index/weixin.png">
					<img alt="MeiKong" title="Meikong" src="/images/index/meikong.png">
					<img alt="WeiBo" title="WeiBo" src="/images/index/weibo.png">
				</div>
                
            </div>
            <div class="middle clear">