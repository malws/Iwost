<div class="blog-post col-sm-12" id="<?php get_post()->ID ?>">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( has_post_thumbnail() ) {?>
	<div class="">
		
		<div class="row">
			<?php	the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="row blogpost">
			<?php the_content();?>
		</div>
	</div>
	<?php } else { ?>
	<div class="blogpost">
	<?php 
the_content(); ?>
	</div>
	<?php } ?>
</div><!-- /.blog-post -->