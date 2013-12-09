<?php
/*
Template Name: Grid Demo Page Example
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h1 class="page-title"><?php the_title(); ?></h1>
                  <!-- <p class="byline vcard"><?php
                    printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'jointstheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'jointstheme')), joints_get_the_author_posts_link());
                  ?></p> -->

						
						    </header> <!-- end article header -->
					
						    <section class="entry-content">
							    <?php the_content(); ?>
								<div class="row display">
								  <div class="small-2 large-4 columns"><span class="show-for-small">2</span><span class="hide-for-small">4</span></div>
								  <div class="small-4 large-4 columns">4</div>
								  <div class="small-6 large-4 columns"><span class="show-for-small">6</span><span class="hide-for-small">4</span></div>
								</div>
								<div class="row display">
								  <div class="large-3 columns"><span class="show-for-small">full</span><span class="hide-for-small">3</span></div>
								  <div class="large-6 columns"><span class="show-for-small">full</span><span class="hide-for-small">6</span></div>
								  <div class="large-3 columns"><span class="show-for-small">full</span><span class="hide-for-small">3</span></div>
								</div>
								<div class="row display">
								  <div class="small-6 large-2 columns"><span class="show-for-small">6</span><span class="hide-for-small">2</span></div>
								  <div class="small-6 large-8 columns"><span class="show-for-small">6</span><span class="hide-for-small">8</span></div>
								  <div class="small-12 large-2 columns"><span class="show-for-small">full</span><span class="hide-for-small">2</span></div>
								</div>
								<div class="row display">
								  <div class="small-3 columns">3</div>
								  <div class="small-9 columns">9</div>
								</div>
								<div class="row display">
								  <div class="large-4 columns"><span class="show-for-small">full</span><span class="hide-for-small">4</span></div>
								  <div class="large-8 columns"><span class="show-for-small">full</span><span class="hide-for-small">8</span></div>
								</div>
								<div class="row display">
								  <div class="small-6 large-5 columns"><span class="show-for-small">6</span><span class="hide-for-small">5</span></div>
								  <div class="small-6 large-7 columns"><span class="show-for-small">6</span><span class="hide-for-small">7</span></div>
								</div>
								<div class="row display">
								  <div class="large-6 columns"><span class="show-for-small">full</span><span class="hide-for-small">6</span></div>
								  <div class="large-6 columns"><span class="show-for-small">full</span><span class="hide-for-small">6</span></div>
								</div>
								
								<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-5">
								  <li><img class="th" src="http://lorempixel.com/450/200/abstract/"></li>
								  <li><img class="th" src="http://lorempixel.com/400/220/abstract/"></li>
								  <li><img class="th" src="http://lorempixel.com/400/230/abstract/"></li>
								  <li><img class="th" src="http://lorempixel.com/440/200/abstract/"></li>
								  <li><img class="th" src="http://lorempixel.com/400/220/abstract/"></li>
								  <li><img class="th" src="http://lorempixel.com/400/230/abstract/"></li>
								  <li><img class="th" src="http://lorempixel.com/440/200/abstract/"></li>
								  <li><img class="th" src="http://lorempixel.com/410/260/abstract/"></li>
								  <li><img class="th" src="http://lorempixel.com/400/250/abstract/"></li>
								</ul>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
							    <p class="clearfix"><?php the_tags('<span class="tags">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
							
						    </footer> <!-- end article footer -->
						    
						    <?php //comments_template(); ?>
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					    <?php else : ?>
					
        					<article id="post-not-found" class="hentry clearfix">
        					    <header class="article-header">
        						    <h1><?php _e("Oops, Post Not Found!", "jointstheme"); ?></h1>
        						</header>
        					    <section class="entry-content">
        						    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "jointstheme"); ?></p>
        						</section>
        						<footer class="article-footer">
        						    <p><?php _e("This is the error message in the page-custom.php template.", "jointstheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php //get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
