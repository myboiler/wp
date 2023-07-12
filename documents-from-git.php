				<!-- GH MD code, 12/07/23, JK-->
				<?php 
				$slug = get_post_field( 'post_name');
				echo '<div class="github" style="padding-top:100px">';
				echo do_shortcode('[git-github-markdown url="https://github.com/myboiler/wp/blob/main/content/'.$slug.'.md" cache_ttl="60" cache_strategy=static]');
				echo '</div>';
				?>
				<!-- end of GH MD code -->
