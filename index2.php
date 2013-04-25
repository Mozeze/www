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
			background: url(/images/index/body_background_201304.jpg) no-repeat center center fixed; 
		 	-webkit-background-size: cover;
		  	-moz-background-size: cover;
		  	-o-background-size: cover;
		  	background-size: cover;
		}
		
		.index_wrapper {margin: 0 auto; position: relative; height: 62%;min-width: 1200px; min-height:500px;}
		
		.index_header {padding: 0px 0 0px 0;}
		
		.index_footer {margin: 0 auto; position: relative; min-width: 1200px;}
		
		.index_headerName {
			color: gray;
			float: right;
			margin-right: 40%;
			font-size: 25px;
			margin-top: 20px;
		}
		
		.transbox
		  {
		  	  margin-top:-20px;
			  /*
			  width:245px;
			  */
			  width:15%;
			  height:100%;
			  margin-left:10%;
			  background-color:#000000;
			  /* 针对IE */
			  filter:alpha(opacity=60);
			  /* CSS3标准 */
			  opacity:0.3;
			  z-index:-1;
			  position:absolute;
		  }
		  
		  .index_middle_left {
		  	width:10%;
		  	float: left;
		  	height:68px;
		   	background-color:#FFFFFF;
			  /* 针对IE */
			  filter:alpha(opacity=60);
			  /* CSS3标准 */
			  opacity:0.4;
			  z-index:-2;
			  float: left;
			   position:relative;
		  }
		  
		  .middleOne {
		  	  width:75%;
		  	  height:68px;
		  	  background-color:#FFFFFF;
			  /* 针对IE */
			  filter:alpha(opacity=60);
			  /* CSS3标准 */
			  opacity:0.4;
			  z-index:-2;
			  float: right;
			  position:relative;
		  }
		  
		  .middleOne1 {
		  	/*
		  	  width:245px;
		  	  */
		  	  width:15%;
		  	  height:108px;
		  	  margin-top:-20px;
		  	  background-color:#FFFFFF;
			  /* 针对IE */
			  filter:alpha(opacity=20);
			  /* CSS3标准 */
			  opacity:0.05;
			  z-index:3;
		  	  float:left;
		  }
		  
		  .middleTwoCenter {
			  width:15%;
			  margin-left:10%;
			  height:48px;
			  color:white;
			  text-align:center;
			  font-size:20px;
			  background-color:#000000;
			  /* 针对IE */
			  filter:alpha(opacity=60);
			  /* CSS3标准 */
			  opacity:0.3;
			  z-index:-1;
			  position:absolute;
		  }
		  
		  .middleTwo {
		  	  width:100%;
		  	  height:38px;
		  	  float:right;
		   }
		   
		   .middleOneImg {
				float: right;
				z-index: 2;
				height: 68px;
				margin-top: -68px;
			}
			
			.middleOneImg img{
				margin-right: 15px;
			}
		  
		  .index_logo {
		  	  margin-top: 200px;
		  	  margin-left:11.5%;
		  	  width: 12%;
		  }
		  
		  .xiuliqinshe {
		  	 width: 10%;
		  	 margin-left: -12.5%;
		  }
		  
		  .middleText {
			font-size:25px;
			height:68px;
			width:120px;
			color:white;
			float: right;
			text-align:center;
		}
		
		.middleTwoText {
		 float:right;z-index:999;width:954px;
		}
		
		.middleTwoText span {
			margin-right: 15px;
		}
		
		</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
		var images = ['/images/index/body_background_201304.jpg', '/images/index/body_background_201304_1.jpg',
		      		'/images/index/body_background_201304_2.jpg'];
		var i = 0;
		/*setInterval(function(){
		    $('body').css('background-image', function() {
		        if (i >= images.length) {
		            i=0;
		        }
		        return 'url(' + images[i++] + ')'; 
		    });
		}, 5000);*/

		function bodyBackImage(index) {
			$('body').css('background-image', 'url(' + images[index] + ')');
		}
		</script>
	</head>
	<body>
        <div class="index_wrapper">
            <div class="index_header clear">
            	<div class="transbox"></div>
            	<img alt="Moze" title="Moze" src="/images/index/logo.png" class="index_logo">
                
                <div class="index_headerName">
					<h1>WWW.SOLEEKISS.COM</h1>
				</div>
                
            </div>
        </div>
        
        <div class="index_footer">
        	<div class="index_middle_left"></div>
       		<div class="middleOne1"></div>
       		<img alt="XiuLiQinShe" src="/images/index/XiuLiQinShe.png" class="xiuliqinshe">
       		<div class="middleOne">
       		</div>
       		<div class="middleOneImg">
				<img alt="Haku" title="Haku" src="/images/index/Haku.png" onclick="bodyBackImage(0)">
				<img alt="Blog" title="Blog" src="/images/index/Blog.png">
				<img alt="Draw" title="Draw" src="/images/index/Draw.png" onclick="bodyBackImage(1)">
				<img alt="Moze" title="Moze" src="/images/index/Moze.png" onclick="bodyBackImage(2)">
				<a href="http://hi.baidu.com/mooojoy"><img alt="Fish" title="Fish" src="/images/index/Fish.png"></a>
				<!-- 
				
				 -->
       		</div>
			<div id="middleTwo" class="middleTwo">
				<div class="middleTwoCenter">[Share Image]</div>
				<div class="middleTwoText" style="">
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