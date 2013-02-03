<div class="sidebar">
	
	<div class="widget">
            <h3>&#x6D6E;&#x5728;&#x7A7A;&#x4E2D;&#x7684;&#x9C7C;&#x7FA4;</h3>
            <div class="widget_body">
                <img alt="Who is Autorun?" src="http://img.bulaoge.net/usrd/201104/034/813/files/user_photo.jpg?timestamp=1302503474">
            </div>
            <table id="blgInfo" cellspacing="0">
			<tbody>
			<tr>
			<td valign="top" style="padding-left: 10px;"><a href="/?toosummer"><span class="bulaoge-title">浮在空中的鱼群</span></a> <br>回忆若可下酒，<br>
			往事便可做一场宿醉。<br>
			<br>
			鱼群主窝  <br>
			 <a href="http://hi.baidu.com/夏小茉" target="_blank">[浮在空中的鱼群]</a> <br>
			照相本子偏站<br>
			  <a href="http://moze.poco.cn" target="_blank">[夏茉的光泽]</a> 也许轻浮<br>
			    也许沉没<br>
			<br>
			找茉崽：toosummer@126.com<br>
			</td>
			</tr>
			</tbody></table>
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
