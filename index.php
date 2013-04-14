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
		<style type="text/css">
		body { 
			background: url(/images/index_source_2013.jpg) no-repeat center center fixed; 
		 	-webkit-background-size: cover;
		  	-moz-background-size: cover;
		  	-o-background-size: cover;
		  	background-size: cover;
		}
		
		.index_wrapper {margin: 0 auto; position: relative; height: 70%;width: 1200px;}
		
		.index_header {padding: 0px 0 0px 0;}
		
		.index_footer {margin: 0 auto; position: relative; width: 1200px;}
		
		
		
		.index_headerName {
			color: white;
			float: right;
			margin-right: 40%;
		}
		
		.transbox
		  {
			  width:245px;
			  height:100%;
			  background-color:#000000;
			  /* 针对IE */
			  filter:alpha(opacity=60);
			  /* CSS3标准 */
			  opacity:0.3;
			  z-index:-1;
			  position:absolute;
		  }
		  
		  .middleOne {
		  	  width:950px;
		  	  height:68px;
		  	  margin: 0 auto; 
		  	  background-color:#FFFFFF;
			  /* 针对IE */
			  filter:alpha(opacity=70);
			  /* CSS3标准 */
			  opacity:0.6;
			  z-index:-1;
			  float: right;
		  }
		  
		  .middleOne1 {
		  	  width:245px;
		  	  height:108px;
		  	  margin-top:-23px;
		  	  float:left;
		  	  background-color:#FFFFFF;
			  /* 针对IE */
			  filter:alpha(opacity=20);
			  /* CSS3标准 */
			  opacity:0.05;
			  z-index:-1;
		  }
		  
		  .middleTwo {
		  	  width:100%;
		  	  height:38px;
		  	  float:right;
		   }
		  
		  .index_logo {
		  	  margin-top: 200px;
		  	  margin-left: 22px;
		  }
		  
		  .xiuliqinshe {
		  	 margin-left: -246px;
		  }
		  
		  .middleText {
			font-size:25px;
			height:68px;
			width:130px;
			color:white;
			float: right;
			text-align:center;
		}
		  
		</style>
	</head>
	<body>
        <div class="index_wrapper">
            <div class="index_header clear">
            	<div class="transbox"></div>
            	<img alt="Moze" src="/images/logo.png" class="index_logo">
                
                <div class="index_headerName">
				<h1>WWW.SOLEEKISS.COM</h1>
				</div>
                
            </div>
        </div>
        
        <div class="index_footer">
       		<div class="middleOne1">
       		</div>
       		<img alt="XiuLiQinShe" src="/images/XiuLiQinShe2.png" class="xiuliqinshe">
            <div class="middleOne clear"></div>
			<div style="z-index:999;margin-top: -68px;float: right;">
				<img alt="Haku" src="/images/Haku.png">
				<img alt="Blog" src="/images/Blog.png">
				<img alt="Draw" src="/images/Draw.png">
				<img alt="Moze" src="/images/Moze.png">
				<img alt="Fish" src="/images/Fish.png">
			</div>
			<div>
			</div>
			<div id="middleTwo" class="middleTwo">
				<div style="float:right;z-index:999;width:954px;">
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