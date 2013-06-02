	<div id="sidebar" class="grid_5">
		<ul class="nobullet">
				
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !dynamic_sidebar('Sidebar') ) : ?>


			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<?php wp_list_categories('title_li=<h2>Categories</h2>'); ?>
			
			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
		</ul>
	</div>

