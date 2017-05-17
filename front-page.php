<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<header role="banner">
	
	<div class="row margin-top-80">
		<div class="columns">
		<h1 class="text-center">WE HELP PEOPLE DO GOOD</h1>
		</div>
	</div>
	
	<div class="row collapse">
		<div class="small-12 medium-6 large-6 columns flex-container flex-dir-column ">
		    <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/donate.png'; ?>">
		    <span class="btn-float">
		        <a class="success button large btn-160" href="#">Donate &gt;</a>
		  </span>
		</div>
	  
		<div class="small-12 medium-6 large-6 column b-c">
		    <div class="row">
                <div class="columns">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/volunteer.jpg'; ?>">
                    <span class="btn-float">
                        <a class="primary button large btn-160" href="#">Volunteer &gt;</a>
                    </span>
                </div>
            </div>
		 </div>
		 
		 <div class="small-12 medium-6 large-6 column b-c">
		    <div class="row">
                <div class="columns">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/photos/give.jpg'; ?>">
                    <span class="btn-float">
                        <a class="warning button large btn-160" href="#">Events &gt;</a>
                    </span>
                </div>
            </div>
		 </div>
	</div>
</header>


<section role="about">
	<div class="row margin-top-80">
		<div class="columns">
			<h2 class="text-center">WHAT WE’RE ALL ABOUT</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="columns">
			<ul class="tabs" data-tabs id="example-tabs">
			  
        <!--  Our Mission Tab title -->
                <?php 
                    query_posts('page_id=7756');
                    
                    while ( have_posts() ) : the_post()
                ?>  
    			  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><?php echo get_the_title(); ?></a></li>
    			<?php
                        endwhile; 
                        wp_reset_query();
                ?>   
                
                
        <!--  Our Beliefs Tab title -->       
    
                <?php 
                    query_posts('page_id=7764');
                    while ( have_posts() ) : the_post()
                ?>  
    			  <li class="tabs-title"><a href="#panel2" aria-selected="true"><?php echo get_the_title(); ?></a></li>
    			<?php
                        endwhile; 
                        wp_reset_query();
                ?>        
    			  
        <!--  Our Vision Tab title -->   
    			
    			<?php 
                    query_posts('page_id=7766');
                    while ( have_posts() ) : the_post()
                ?>  
    			  <li class="tabs-title"><a href="#panel3" aria-selected="true"><?php echo get_the_title(); ?></a></li>
    			<?php
                        endwhile; 
                        wp_reset_query();
                ?> 
			</ul>
			<div class="tabs-content" data-tabs-content="example-tabs">
    
        <!--  Our Mission Tab Content -->
                <?php 
                    query_posts("page_id=7756");
                    while ( have_posts() ) : the_post()
                ?>
    			
				<div class="tabs-panel is-active" id="panel1">
					<p><?php the_excerpt(); ?></p>
				</div>
            
                <?php
                    endwhile; 
                    wp_reset_query();
                ?> 
                
                
        <!--  Our Beliefs Tab Content -->          
				<?php 
                    query_posts("page_id=7764");
                    while ( have_posts() ) : the_post()
                ?>
    			
				<div class="tabs-panel is-active" id="panel2">
					<p><?php the_excerpt(); ?></p>
				</div>
            
                <?php
                    endwhile; 
                    wp_reset_query();
                ?>
                
        <!--  Our Beliefs Tab Content -->          
				<?php 
                    query_posts("page_id=7766");
                    while ( have_posts() ) : the_post()
                ?>
    			
				<div class="tabs-panel is-active" id="panel3">
					<p><?php the_excerpt(); ?></p>
				</div>
            
                <?php
                    endwhile; 
                    wp_reset_query();
                ?> 
				
				
				<?php 
                    query_posts("page_id=7766");
                    while ( have_posts() ) : the_post()
                ?>
    			
				<div class="tabs-panel is-active" id="panel2">
					<p><?php the_excerpt(); ?></p>
				</div>
            
                <?php
                    endwhile; 
                    wp_reset_query();
                ?> 

			</div>
		</div>
	</div>
	
		
</section>

<section role="events">
	<div class="row  margin-top-80">
		<div class="columns">
			<h2 class="text-center">Events</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea suscipit, amet assumenda nostrum modi excepturi, vel quos quas, eos et commodi odio culpa soluta! Repellendus temporibus illum perspiciatis! Tenetur, maxime!</p>
		</div>
	</div>
	
	<div class="row">
			<div class="small-6 medium-8 large-8 columns">
				<div class="row">
					<div class="columns">
						<div class="thumbnail">
							<img src="http://placehold.it/600x400/666">
						</div>
					</div>
					<div class="columns">
						<div class="thumbnail">
							<img src="http://placehold.it/600x400/666">
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="columns">
						<div class="thumbnail">
							<img src="http://placehold.it/600x400/666">
						</div>
					</div>
					<div class="columns">
						<div class="thumbnail">
							<img src="http://placehold.it/600x400/666">
						</div>	
					</div>
				</div>
			</div>
			
			<div class="small-12 medium-4 large-4 columns">
				<div class="row">
					<div class="small-12 columns">
						<div class="thumbnail">
							<img src="http://placehold.it/600x157/666">
						</div>
					</div>
					<div class="small-12 columns">
						<div class="thumbnail">
							<img src="http://placehold.it/600x157/666">
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="small-12 columns">
						<div class="thumbnail">
							<img src="http://placehold.it/600x157/666">
						</div>
					</div>
					<div class="small-12 columns">
						<div class="thumbnail">
							<img src="http://placehold.it/600x157/666">
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="small-12 columns">
							<a class="hollow button expanded" href="#">MORE EVENTS ></a>
					</div>
					
				</div>
			</div>
		
		
	</div>			
</section>


<?php get_footer();