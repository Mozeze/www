<div class="sidebar">
	
	<div class="widget">
            <h3>About Soleekiss</h3>
            <div class="widget_body">
                <img alt="Who is Autorun?" width="225px;" src="<?php bloginfo('template_url'); ?>/images/sidebar/about_new.png">
            </div>
            <div class="blgInfo">
				<div style="font-size: 13px;">白姑娘袖里的那条青蛇有五百年了</div>
				<div>可以叫我白爷，老夏、阿白</div>
				<div>弥白清欢 茉泽如夏</div>
				<div>摄影师/插画师: soleekiss</div>
				<div>e-Mail: soleekiss@gmail.com</div>
				<div><a href="http://www.x-woods.com/service/book/x.aspx?id=203659" target="_brank">袖子</a></div>
			</div>
    </div>
    
    <?php if ( !dynamic_sidebar('Sidebar') ) : ?>
    
        <div class="widget">
            <h3>About Blogum</h3>
            <div class="widget_body">
                <p>Blogum is a simple, grid based blog free Wordpress theme, designed in a modern &amp; minimalist style. The theme has a heavy focus on your content and very clean feel. Theme supports all Wordpress 3.0 features and gives you extra flexibility.</p>
            </div>
        </div>

        <div class="widget">
            <h3>Recent entries</h3>
            <div class="widget_body">
                <ul>
                <?php
                    query_posts(array('posts_per_page' => 5));
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><span class="date"><?php the_time(__('d-m-Y')) ?></span></li>

                    <?php endwhile; endif; wp_reset_query();
                ?>
                </ul>
            </div>
        </div>
        
        <div class="widget">
            <h3>Categories</h3>
            <div class="widget_body">
                <ul>
                    <?php wp_list_categories('title_li='); ?>
                </ul>
            </div>
        </div>

        <div class="widget">
            <h3>Recent comments</h3>
            <div class="widget_body">
                <ul>
                <?php
                    $comms = get_comments('number=5');
                    foreach($comms as $comm) :
                        $post = get_post($comm->comment_post_ID); ?>
                        <li class="recentcomments"><a href="<?php echo $comm->comment_author_url; ?>" class="url"><?php echo $comm->comment_author; ?></a> on <a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a><span class="date"><?php get_comment_date_formatted($comm->comment_date); ?></span></li>
                    <?php endforeach;
                    //print_r($comms);
                    wp_reset_query();
                ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if (function_exists('get_most_viewed')): ?>
    <div class="widget">
    	<h3>Random article</h3>
    	<div class="widget_body">
		   <ul>
		      <?php get_most_viewed(); ?>
		   </ul>
		</div>
	</div>
	<?php endif; ?>
	
</div>
