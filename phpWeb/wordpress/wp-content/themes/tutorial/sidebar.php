		<div class="sidebar">
			<ul>
			<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar()): else:?>
				<li id="search">
					<?php include(TEMPLATEPATH.'/searchform.php'); ?>
				</li>
				
				<li id="calendar">
					<h2>
						<?php _e('Calendar'); ?>
					</h2>
					<?php get_calendar(); ?>
				</li>
				<?php wp_list_pages('depth=3&title_li=<h2>Pages</h2>');?>
				<li>
					<h2> <?php _e('Categories'); ?>	</h2>
					<ul>
						<?php 
							$cats = get_categories('orderby=count');
							foreach($cats as $cat)
							{
								echo '<li><a href="' . get_category_link( $cat->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $cat->name ) . '" ' . '>' . $cat->name.'</a>' . ' Post Count: '. $cat->count . '</li>';
							}
						?>
					</ul>
				</li>
				<li>
					<h2> <?php _e('Archives'); ?></h2>
					<ul> <?php wp_get_archives(); ?> </ul>
				</li>
				<li>
					<h2> <?php _e('RelatedLinks'); ?></h2>
					<ul>
						<?php 
							$bookmarks = get_bookmarks();
							foreach($bookmarks as $bookmark)
							{
								echo "<li><a href='{$bookmark->link_url}'>{$bookmark->link_name}</a></li>";
							} 
						?>
					</ul>
				</li>
				<li> 
					<h2> <?php _e('Meta'); ?> </h2>
					<ul> 
						<?php wp_register(); ?>
						<li> <?php wp_loginout(); ?> </li>
						<?php wp_meta(); ?>
					</ul>
				</li>
				
				<?php endif; ?>
			</ul>
		</div>