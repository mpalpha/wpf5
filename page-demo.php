<?php
/*
Template Name: Grid Demo Page Example
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="xlarge-12 large-12 medium-12 columns first clearfix" role="main">

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
								  <div class="columns">
									  <p>
										$small-range: (0em, 40em); /* 0, 480px-640px */<br />
										$medium-range: (40.063em, 64em); /* 641px, 1024px */<br />
										$large-range: (64.063em, 90em); /* 1025px, 1440px */<br />
										$xlarge-range: (90.063em, 120em); /* 1441px, 1920px */<br />
										$xxlarge-range: (120.063em); /* 1921px */<br />
									  </p>
									</div>
								</div>
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
								<span class="demogrid">
								<div class="row display">
								  <div class="small-11 columns"></div>
								  <div class="small-1 columns">1</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-2 small-offset-10 columns">2</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-3 small-offset-9 columns">3</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-4 small-offset-8 columns">4</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-5 small-offset-7 columns">5</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-6 small-offset-6 columns">6</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-7 small-offset-5 columns">7</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-8 small-offset-4 columns">8</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-9 small-offset-3 columns">9</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-10 small-offset-2 columns">10</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-11 small-offset-1 columns">11</div>
								</div>
								<div class="row display">
								  <div class=""></div>
								  <div class="small-12 columns">12</div>
								</div>
								<div class="row display">
								  <div class="small-12 columns"></div>
								</div>
								<div class="row display demofull">
								  <div class="small-1 columns">1</div>
								  <div class="small-1 columns">2</div>
								  <div class="small-1 columns">3</div>
								  <div class="small-1 columns">4</div>
								  <div class="small-1 columns">5</div>
								  <div class="small-1 columns">6</div>
								  <div class="small-1 columns">7</div>
								  <div class="small-1 columns">8</div>
								  <div class="small-1 columns">9</div>
								  <div class="small-1 columns">10</div>
								  <div class="small-1 columns">11</div>
								  <div class="small-1 columns">12</div>
								</div>
								</span>
								<script>
									$(window).on('resize', function(){$('.demogrid').css({opacity:0.8}).find('.columns').each(function(idx){$(this).html((idx)?$(this).width()+'px':'gutter '+$(this).css('paddingLeft'));});});
								</script>
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
