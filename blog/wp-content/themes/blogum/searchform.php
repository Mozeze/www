<div class="search">
	<div class="rss">
		<img alt="RSS" src="<?php bloginfo('template_url'); ?>/images/rss.png">
	</div>
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
        <fieldset>
            <input name="s" type="text" onfocus="if(this.value=='search') this.value='';" onblur="if(this.value=='') this.value='search';" value="search" />
            <button type="submit" title="Run Search"></button>
        </fieldset>
    </form>
</div>

