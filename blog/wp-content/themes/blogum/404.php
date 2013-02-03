<?php get_header(); ?>

<div id="content">
    <div class="error404 clear">
        <div class="error404_meta">404</div>
        <div class="error404_text">
            <p>
            这个页面<?php echo $_SERVER['REQUEST_URI']; ?>, 我们没有找到。 建议使用我们的导航栏回到首页或者猛点以下链接<a href="<?php bloginfo('home'); ?>" class="error404_back">回首页呗</a>。
            如果还是一直出现，请与我们联系。谢啦！
            </p>
            
        </div>
    </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
