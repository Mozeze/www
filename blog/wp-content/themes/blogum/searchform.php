<div class="search">
	<div class="rss">
		<img alt="RSS" title="" src="<?php bloginfo('template_url'); ?>/images/list/rss_31x23.png">
	</div>
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
        <fieldset>
            <input name="s" type="text" value="search" />
            <!-- 
             onfocus="if(this.value=='search') this.value='';" onblur="if(this.value=='') this.value='search';"
             -->
            <button type="submit" title="Run Search"></button>
        </fieldset>
    </form>
</div>

