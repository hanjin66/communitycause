<?php
/*
Template Name: Front
*/
get_header(); ?>

<header role="banner">
	<div class="marketing">
		<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
		  <ul class="orbit-container">
		    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
		    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
		    <li class="is-active orbit-slide">
		      <img class="orbit-image" src="http://placehold.it/1920x600" alt="Space">
		    </li>
		    <li class="orbit-slide">
		      <img class="orbit-image" src="http://placehold.it/1920x600" alt="Space">
		    </li>
		    <li class="orbit-slide">
		      <img class="orbit-image" src="http://placehold.it/1920x600" alt="Space">
		    </li>
		    <li class="orbit-slide">
		      <img class="orbit-image" src="http://placehold.it/1920x600" alt="Space">
		    </li>
		  </ul>
	 	</div>
	</div>
	<row>
		<div class="large expanded button-group">
		  <a class="button warning">Donate</a>
		  <a class="button success">Volunteer</a>
		  <a class="button secondary">Events</a>
		</div>
	</row>
</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
				
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>



<section class="benefits">
	<div class="row">
		<div class="columns">
			<h1>HOW WE CAN HELP YOU</h1>
		</div>
	</div>
	<div class="row">
		<?php if ( have_posts() ) : ?>
	    <?php while ( have_posts() ) : the_post(); ?>
	  	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );?>			
			
			<div class="small-12 large-3 columns">
				<div class="card" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover;">
			        <div class="title">
			        	<h5 class="text-left">
			        	    <a href="#"><?php the_title(); ?></a>
			        	</h5>
			        </div>
			        <div class="expanded button-group">
						<a class="primary button">View</a>
					</div>  
		        </div>
        </div>
		<?php endwhile; ?>
	 	<?php endif; ?>
	
	
	
	
        	
		<div class="small-12 large-3 columns">
			<div class="card" style="background: url('http://placehold.it/350x350') no-repeat; background-size: cover;">
				
				<h3><?php the_title(); ?></h3>
				<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
				<div class="button-group">
				  <a class="secondary button">View</a>
				</div>	
			</div>
		</div>
		<div class="small-12 large-3 columns">
			<div class="card" style="background: url('http://placehold.it/350x350') no-repeat; background-size: cover;">
				
				
				<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
				<div class="button-group">
				  <a class="secondary button">View</a>
				</div>	
			</div>
		</div>
		<div class="small-12 large-3 columns">
			<div class="card" style="background: url('http://placehold.it/350x350') no-repeat; background-size: cover;">
				
				<h3><?php the_title(); ?></h3>
				<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
				<div class="button-group">
				  <a class="secondary button">View</a>
				</div>	
			</div>
		</div>
	</div>

</section>



<?php get_footer();